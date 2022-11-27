@extends('layouts.master')
@section('title', 'Create')
@section('content')

<div class="container">
    <form action="{{route('vektors.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input class="form-control" type="text" name="name" id="" required>
        </div>
        <div class="form-group">
            <label for="">Telp</label>
            <input class="form-control" type="text" name="telp" id="" required>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input class="form-control" type="text" name="email" id="" required>
        </div>
        <div class="form-group">
            <label for="">Problem</label>
            <input class="form-control" type="text" name="problem" id="" required>
        </div>
        <a class="btn btn-warning" href="{{route('vektors.index')}}">BACK</a>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
</div>

@endsection