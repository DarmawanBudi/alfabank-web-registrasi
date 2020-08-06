@extends('layouts.adm')
@section('admin')
    <div class="mt-3">
        <ul class="nav nav-tabs mb-5">
            <li class="nav-item">
                <a class="nav-link active" href="admin_inbox">Inbox masuk
                <span class="badge badge-pill badge-danger">
                    {{$jumlah_all_inbox}}
                </span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_inbox_sudah_dibaca">Sudah dibaca</a>
            </li>
        </ul>

        @foreach ($all_inbox as $item)
            
        <div class="card">
            <div class="media p-3">
                <img class="rounded-circle" width="70" height="70" class="mr-1" src="img/ava/avatar-02-512.webp"
                    alt="Generic placeholder image">
                <div class="media-body pl-2">
                    <h5 class="my-0">{{$item->nama}}</h5>
                    <i>{{$item->email}}</i> | {{$item->created_at->diffForHumans()}}
                    <h5 class="my-0"><span class="badge badge-pill badge-info">{{$item->subjek}}</span></h5>

                    <p class="mt-2">{{$item->pesan}}</p>
                <form action="/admin_inbox_ubah_status/{{$item->id}}" method="POST">
                    @csrf
                    @method('patch')
                        <input type="submit" class="btn btn-sm btn-outline-success float-right" value="Tandai sudah dibaca "/>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection