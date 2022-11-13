@extends('adminlte::page')

@section('title', 'Edit Member')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Member</h1>
@stop

@section('content')
    <form action="{{route('member.update', $member->Kode_Member)}}" method="post">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputName">Nama Lengkap</label>
                            <input type="text" class="form-control @error('Nama_Lengkap') is-invalid @enderror" id="exampleInputName" placeholder="Nama Lengkap" name="Nama_Lengkap" value="{{$member->Nama_Lengkap ?? old('Nama_Lengkap')}}">
                            @error('Nama_Lengkap') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputName" placeholder="Alamat" name="Alamat" value="{{$member->Alamat ?? old('Alamat')}}">
                            @error('alamat') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">No Telepon</label>
                            <input type="text" class="form-control @error('No_Telepon') is-invalid @enderror" id="exampleInputName" placeholder="Nama Lengkap" name="No_Telepon" value="{{$member->No_Telepon ?? old('No_Telepon')}}">
                            @error('No_Telepon') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Status</label>
                            <input type="text" class="form-control @error('Status') is-invalid @enderror" id="exampleInputName" placeholder="Nama Lengkap" name="Status" value="{{$member->Status ?? old('Status')}}">
                            @error('Status') <span class="text-danger">{{$message}}</span> @enderror
                        </div>


                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{route('member.index')}}" class="btn btn-default">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
@stop
