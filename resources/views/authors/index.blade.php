@extends('layouts.master')
@section('title', 'Authors')
@section('content')


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="{{route('authors.create')}}" class="btn btn-success md-0">Tambah data</a>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Author</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="container mt-5">
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif
</div>

<div class="container-table">
    <table class="table">
        <div class="text-center">
            <h2 class="text-bold">LIST ADMIN</h2>
        </div>
        <thead>
            <th>No</th>
            <th>Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </thead>

        <tbody>
            @foreach($admin as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->username}}</td>
                <td>{{$data->password}}</td>
                <td class="d-flex">
                    <div><a href="{{route('authors.edit', $data->id)}}" class="btn btn-warning mx-2">Edit</a></div>
                    <div>
                        <form method="POST" action="{{ route('authors.destroy', [$data->id]) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection