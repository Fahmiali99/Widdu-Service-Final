@extends('layouts.master')
@section('title', 'Edit')
@section('content')

<div class="container">
    <form action="{{route('authors.update', [$edit->id])}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input class="form-control" type="text" name="name" id="" value="{{$edit->name}}">
        </div>
        <div class="form-group">
            <label for="">Username</label>
            <input class="form-control" type="text" name="username" id="" value="{{$edit->username}}">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input class="form-control" type="password" name="password" id="">
            <small for="">Password tidak perlu diisi jika tidak ada perubahan</small>
        </div>
        <a href="{{route('authors.index')}}">BACK</a>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
</div>

@endsection