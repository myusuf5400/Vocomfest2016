<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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

    // public function table($user)

    // {
    //     $data  = DB::table($user)->get();
    //     $data2 = DB::table('users')->get();
    //     if ($data == 'semnas') {
    //         return view('admin.tableSemnas')->with('data',$data);
    //     }
    //     return view('admin.table')->with('data', $data)->with('data2', $data2);
    // }

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

    public function getAnggota($type, Team $team)
    {
        $anggota = $team->user;
        if ($type == 'wdc') {
            return view('admin.tableAnggota')
                ->with('data', $anggota);
        } else if ($type == 'madc') {
            return view('admin.tableAnggota')
                ->with('data', $anggota);
        }

        return redirect()
            ->back()
            ->with('status', 'Error');
    }

    public function chart()
    {
        return view('admin.chart');
    }
    // public function delete($id)
    // {
    //     if ($user == 'semnas') {
    //         $data = DB::table($user)->select('nama')->where('id', $id)->first();
    //         $sts  = 'data ' . $data->nama . ' berhasil di hapus';
    //     } else if ($user == 'teams') {
    //         $data = DB::table($user)->select('namateam')->where('id', $id)->first();
    //         $sts  = 'data ' . $data->namateam . ' berhasil di hapus';
    //     } else if ($user == 'users') {
    //         $data = DB::table($user)->select('nama')->where('id', $id)->first();
    //         $sts  = 'data ' . $data->nama . ' berhasil di hapus';
    //     }

    //     DB::table($user)->where('id', $id)->delete();

    //     return redirect('/admin/table')->with('status', $sts);
    // }

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

        $message = 'Anggota dengan nama ' . $team->nama . ' berhasil di hapus';

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

        return redirect()
            ->back()
            ->with('status', 'Data ' . $team->namateam . ' tidak berhasil di aktivasi');
    }

    public function editTeam(Team $team)
    {
        return view('admin.editTeams')
            ->with('data', $team);
    }

    public function updateTeam(Team $team)
    {
        $team->namateam       = request('namateam');
        $team->kategori       = request('kategori');
        $team->instansi       = request('instansi');
        $team->alamatinstansi = request('alamatinstansi');
        $team->ketua->level   = request('level');

        $redirect = ($team->kategori==0)?'/admin/wdc':'/admin/madc';

        if ($team->save()&&$team->ketua->save()) {  
            return redirect($redirect)
                ->with('status', 'Data berhasil di update');
        }

        return redirect($redirect)
                ->with('status', 'Data tidak berhasil di update');
    }

    // public function update($type, $id)
    // {
    //     if ($type == 'semnas') {
    //         DB::table($type)
    //             ->where('id', $id)
    //             ->update([
    //                 'nama'   => request('nama'),
    //                 'notelp' => request('notelp'),
    //                 'email'  => request('email'),
    //                 'status' => request('status'),
    //             ]);
    //     } else if ($type == 'teams') {
    //         DB::table($type)
    //             ->where('id', $id)
    //             ->update([
    //                 'namateam'       => request('namateam'),
    //                 'kategori'       => request('kategori'),
    //                 'instansi'       => request('instansi'),
    //                 'alamatinstansi' => request('alamatinstansi'),
    //                 '',
    //             ]);
    //     } else if ($type == 'teams') {
    //         DB::table($type)
    //             ->where('id', $id)
    //             ->update([
    //                 'namateam'       => request('namateam'),
    //                 'kategori'       => request('kategori'),
    //                 'instansi'       => request('instansi'),
    //                 'alamatinstansi' => request('alamatinstansi'),
    //             ]);
    //     } else if ($type == 'users') {
    //         DB::table($type)
    //             ->where('id', $id)
    //             ->update([
    //                 'nama'   => request('nama'),
    //                 'notelp' => request('notelp'),
    //                 'email'  => request('email'),
    //                 'level'  => request('ststus'),
    //             ]);
    //     }

    //     return redirect()
    //         ->back()
    //         ->with('status', 'Data berhasil di update');
    // }
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
