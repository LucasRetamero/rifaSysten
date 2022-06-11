@extends('layouts.app')

@section('content')
<form action="{{ route('home.rifas.add.picture') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" id="img_Rifa" name="imgRifa[]" multiple="multiple">
    <button type="submit" class="btn btn-primary">Send pictures</button>
</form>
@endsection
