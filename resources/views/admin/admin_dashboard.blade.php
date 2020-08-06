@extends('layouts.adm')
@section('admin')
    <div class="mt-3">
        <form action="/admin-cari" method="POST">
        @csrf
        <div class="input-group mb-3">
            <input 
            type="text" 
            name="keyword" 
            class="form-control" 
            placeholder="Cari"
            aria-label="Recipient's username" 
            aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">cari</button>
            </div>
        </div>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Program</th>
                    <th>Masa Studi</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user_data as $index =>$data)
                <tr>
                    <th>{{$user_data->firstItem() + $index}}</th>
                    <td>{{$data->users->nama}}</td>
                    <td>{{$data->users->email}}</td>
                    <td>{{$data->users->alamat}}</td>
                    <td>{{$data->program_kursuses->nama}}</td>
                    <td>{{$data->program_kursuses->masa_studi}}</td>
                    <td>{{$data->status}}</td>
                    <td>
                    <a href="admin_detail_siswa/{{$data->id}}" class="btn btn-sm btn-info">detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            {{$user_data->links()}}
        </div>

        {{-- <nav class="mt-5">
            <ul class="pagination pagination-lg">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
        </nav> --}}
    </div>
@endsection