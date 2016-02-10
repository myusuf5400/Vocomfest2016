@extends('layouts.app')
@section('title', 'Akun')
@section('content')
	Nama Tim : {{$user->nama}}<br/>
	Email ketua : {{$user->email}}<br/>
	Email ketua : {{$user->institusi}}<br/>
	Email ketua : {{$user->email}}<br/>
	{{$user->team}}


@endsection