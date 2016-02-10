@extends('layouts.app')
@section('title', 'Image Upload')
@section('content')
<div>
    @if (count($errors) >0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{url('user/imageUpload')}}" method="POST"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <input name="image" type="file"/>
        <input type="submit" value="Upload"/>
    </form>
</div>
@endsection
