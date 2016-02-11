@extends('layouts.app')
@section('title', 'Upload')
@section('content')
<div>

    {!!$transloadit!!}
    <input name="server" type="text" value="{!!$server!!}" style="display:none">
    <input name="tipe" type="text" value="{!!$tipe!!}" style="display:none">
    <input name="example_upload" type="file"/>
    <input type="submit" value="Upload"/>
</form>
</div>
@endsection
