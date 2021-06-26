@extends('layouts.master')
@section('title', 'Edit')
@section('content')

<div class="container">
    <form action="{{route('vektors.update', [$edit->id])}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input class="form-control" type="text" name="name" id="" value="{{$edit->name}}">
        </div>
        <div class="form-group">
            <label for="">Telpon / Wa</label>
            <input class="form-control" type="text" name="telp" id="" value="{{$edit->telp}}">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input class="form-control" type="text" name="email" id="" value="{{$edit->email}}">
        </div>
        <div class="form-group">
            <label for="">Problem</label>
            <input class="form-control" type="text" name="problem" id="" value="{{$edit->problem}}">
        </div>

        <a href="{{route('vektors.index')}}">BACK</a>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
</div>

@endsection