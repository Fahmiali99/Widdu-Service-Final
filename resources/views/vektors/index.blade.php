@extends('layouts.master')
@section('title', 'Vektors')
@section('content')


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <a href="{{route('vektors.create')}}" class="btn btn-success md-0">Tambah data</a>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Vektor</a></li>
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
            <h2 class="text-bold">VEKTOR</h2>
        </div>
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Telpon / Wa</th>
            <th>Email</th>
            <th>Problem</th>
        </thead>

        @foreach($vektors as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->telp}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->problem}}</td>
            <td class="d-flex">
                <div>
                    <a href="{{route('vektors.edit', $data->id)}}" class="btn btn-warning mx-2">Edit</a>
                </div>
                <div>
                    <form method="POST" action="{{ route('vektors.destroy', [$data->id]) }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
        <tbody>

        </tbody>
    </table>
</div>

@endsection