<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAnggotaRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Team;
use App\User;
use DB;
use Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team         = Team::all();
        $stat['wdc']  = $team->where('kategori', 0)->count();
        $stat['madc'] = $team->where('kategori', 1)->count();
        return view('admin.index')
            ->with('stat', $stat);
    }

    public function getMadc()
    {
        $madc = Team::all()->where('kategori', 1);
        return view('admin.madcTable')
            ->with('madc', $madc);
    }

    public function getWdc()
    {
        $wdc = Team::all()->where('kategori', 0);
        return view('admin.wdcTable')
            ->with('wdc', $wdc);
    }

    public function getDetail(Team $team)
    {
        $max = ($team->kategori == 0) ? 3 : 4;
        if ($team->user()->count() < $max) {
            $showNew = true;
        } else {
            $showNew = false;
        }

        return view('admin.tableDetail')
            ->with('anggotas', $team->user)
            ->with('files', $team->file)
            ->with('showNew', $showNew);

    }

    public function chart()
    {
        return view('admin.chart');
    }

    public function deleteTeam(Team $team)
    {

        $message = 'Data ' . $team->namateam . ' berhasil di hapus';

        $team->user()->delete();

        $team->delete();

        return redirect()
            ->back()
            ->with('status', $message);
    }

    public function deleteAnggota($id)
    {
        $anggota = User::find($id);

        if ($anggota->level == 6 || $anggota->code != null) {
            return redirect()
                ->back()
                ->with('status', 'Error');
        }

        $message = 'Anggota dengan nama ' . $anggota->nama . ' berhasil di hapus';

        $anggota->delete();

        return redirect()
            ->back()
            ->with('status', $message);
    }

    public function aktivasi(Team $team)
    {
        $message = 'Data ' . $team->namateam . ' berhasil di aktivasi';

        if ($team->ketua()->first()->update(['level' => 1])) {
            return redirect()
                ->back()
                ->with('status', $message);
        }

        return redirect::to()
            ->back()
            ->with('status', 'Data ' . $team->namateam . ' tidak berhasil di aktivasi');
    }

    public function editTeam(Team $team)
    {
        return view('admin.editTeams')
            ->with('data', $team);
    }

    public function editAnggota($id)
    {
        $anggota = User::find($id);

        if ($anggota->level == 6) {
            return redirect()
                ->back()
                ->with('status', 'Error');
        }

        return view('admin.editAnggota')
            ->with('data', $anggota);
    }

    public function updateTeam(UpdateTeamRequest $request)
    {
        $team                 = Team::find($request['id']);
        $team->namateam       = $request['namateam'];
        $team->kategori       = $request['kategori'];
        $team->instansi       = $request['instansi'];
        $team->alamatinstansi = $request['alamatinstansi'];
        $team->ketua->level   = $request['level'];

        $redirect = ($team->kategori == 0) ? '/admin/wdc' : '/admin/madc';

        if ($team->save() && $team->ketua->save()) {
            return redirect($redirect)
                ->with('status', 'Data berhasil di update');
        }

        return redirect($redirect)
            ->with('status', 'Data tidak berhasil di update');
    }

    public function updateAnggota(UpdateAnggotaRequest $request)
    {
        $anggota = User::find($request['id']);

        if ($anggota->level == 6) {
            return redirect()
                ->back()
                ->with('status', 'Error');
        }

        $anggota->nama   = $request['nama'];
        $anggota->notelp = $request['notelp'];
        $anggota->email  = $request['email'];

        if ($anggota->save()) {
            return redirect()
                ->back()
                ->with('status', 'Data berhasil di update');
        }

        return redirect()
            ->back()
            ->with('status', 'Data tidak berhasil di update');
    }

    public function getNewAnggota($team)
    {
        $team = Team::find($team);
        $max  = ($team->kategori == 0) ? 3 : 4;
        if ($team->user()->count() < $max) {
            return view('admin.newAnggota')
                ->with('id', $team->id);
        }
        return redirect()
            ->back()
            ->with('status', 'Tim sudah penuh');
    }

    public function postNewAnggota(UpdateAnggotaRequest $request)
    {
        $team = Team::find($request['id']);

        User::create([
            'nama'   => $request['nama'],
            'email'  => $request['email'],
            'notelp' => '62' . $request['notelp'],
            'idteam' => $request['id'],
        ]);
        return redirect('admin/team/anggota/' . $request['id'])
            ->with('status', 'Anggota sudah di tambah');
    }

    public function setting()
    {
        $data = DB::table('settings')->get();

        return view('admin.setting')->with('data', $data);
    }

    public function settingPost()
    {
        $id = request('id');
        DB::table('settings')
            ->where('id', $id)
            ->update([
                'keterangan' => request('keterangan'),
                'value'      => request('value'),
                'isi'        => request('isi'),
            ]);
        $nama = DB::table('settings')->select('nama')->first();
        $ket  = 'Setting ' . $nama->nama . ' berhasil di update!';

        return redirect('admin/table')->with('status', $ket);
    }
}
