
@extends('layouts.adm')
@section('admin')

    <div class="mt-3 card p-3">
       
        <div class="row">
            <div class="col-4">
                <img width="300" height="300" src="/img/team/team-1.jpg" class="rounded" alt="">
            </div>
            
            <div class="col-8">
                <h1>{{$detail_data->users->nama}}</h1>
                <p>{{$detail_data->users->email}}</p>
                <h5 class="my-0"><span class="badge badge-pill badge-info">{{$detail_data->program_kursuses->nama}}</span></h5>
                <hr>

                <p>{{$detail_data->users->tanggal_lahir}}</p>
                <p>{{$detail_data->users->alamat}}</p>
                <p>{{$detail_data->users->gender}}</p>
                <p>{{$detail_data->users->agama}}</p>
                
                <hr>

                <div class="form-group">
                    <label for="religion">Status</label>
                    <select class="form-control" id="religion" name="religion">
                        <option value="belum_verifikasi">Belum diverifikasi</option>
                        <option value="masa_studi">Masa studi</option>
                    </select>
                </div>
                <a href="#" class="btn btn-block btn-outline-info">Update status</a>
            </div>
        </div>
    </div>

@endsection
