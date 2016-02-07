@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div>

    {!!$transloadit!!}
    <h1>
        Pick an image to resize
    </h1>
    <input name="server" type="text" value="{!!$server!!}">
    <input name="example_upload" type="file"/>
    <input type="submit" value="Upload"/>
</form>
</div>
@endsection
