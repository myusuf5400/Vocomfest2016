<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\SemnasRequest;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     *//*
    public function __construct()
    {
        $this->middleware('admin');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }
    public function table()
    {
        $data = DB::table('semnas')->get();
        $data3 = DB::table('teams')->get();
        $data2 = DB::table('users')->get();

        return view('admin.table')->with('data',$data)->with('data2',$data2)->with('data3',$data3);
    }
    public function chart()
    {
        return view('admin.chart');
    }
    public function delete($user,$id)
    {
        if ($user == 'semnas') {
            $data = DB::table($user)->select('nama')->where('id',$id)->first();
            $sts = 'data '.$data->nama.' berhasil di hapus';
        }
        else if($user == 'teams'){
            $data = DB::table($user)->select('namateam')->where('id',$id)->first();
            $sts = 'data '.$data->namateam.' berhasil di hapus';
        }
        else if($user == 'users'){
            $data = DB::table($user)->select('nama')->where('id',$id)->first();
            $sts = 'data '.$data->nama.' berhasil di hapus';
        }
        
        DB::table($user)->where('id',$id)->delete();
        
        return redirect('/admin/table')->with('status',$sts);
    }
    public function edit($user,$id)
    {
        $data = DB::table($user)->where('id',$id)->get();
        if ($user == 'semnas') {
            return view('admin.edit')->with('data',$data);
        }
        else if ($user == 'teams') {
            return view('admin.editTeams')->with('data',$data);
        }
        else if($user == 'users'){
            return view('admin.editUsers')->with('data',$data);
        }
    }
    public function update($user,$id)
    {
        if ($user == 'semnas') {
            DB::table($user)
                ->where('id', $id)
                ->update([
                    'nama'      => request('nama'),
                    'notelp'    => request('notelp'),
                    'email'     => request('email'),
                    'status'    => request('status')
                    ]);
        }
        else if($user == 'teams'){
            DB::table($user)
                ->where('id', $id)
                ->update([
                    'namateam'  => request('namateam'),
                    'kategori'  => request('kategori'),
                    'institusi' => request('institusi')
                    ]);
        }
         else if($user == 'users'){
            DB::table($user)
                ->where('id', $id)
                ->update([
                    'nama'      => request('nama'),
                    'notelp'    => request('notelp'),
                    'email'     => request('email'),
                    'level'     => request('ststus')
                    ]);
        }
        
        return redirect('admin/table')->with('status','Data berhasil di update');
    }
    public function setting()
    {
        $data = DB::table('settings')->get();

        return view('admin.setting')->with('data',$data);
    }

    public function settingPost()
    {
        $id = request('id');
        DB::table('settings')
                ->where('id', $id)
                ->update([
                    'keterangan'    => request('keterangan'),
                    'value'         => request('value'),
                    'isi'           => request('isi')
                    ]);
        $nama = DB::table('settings')->select('nama')->first();
        $ket = 'Setting '. $nama->nama . ' berhasil di update!';

        return redirect('admin/table')->with('status',$ket);
    }
}