@extends('layouts.adm')
@section('admin')
    <div class="row mt-3">
        <div class="col-4">
            <h3>Tambah</h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
            @endif
            <form action="{{route('programkursus.update',$programkursus->id)}}" method="POST">
            @csrf
            @method('put')
                <div class="form-group">
                    <input type="text" name="name" value="{{$programkursus->nama}}" placeholder="nama" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="study-period">Study Period</label>
                    <select class="form-control" id="study-period" name="study_period">
                        <option {{$programkursus->masa_studi == 1? 'selected':" "}}>1</option>
                        <option {{$programkursus->masa_studi == 2? 'selected':" "}}>2</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="number" name="price" placeholder="price" value="{{$programkursus->harga}}" id="" class="form-control">
                </div>

                <div class="form-group">
                    <input type="number" name="quota" placeholder="quota" value="{{$programkursus->kuota}}" id="" class="form-control">
                </div>

                <input type="submit" value="update" class="btn btn-block btn-info">
                <a class="btn text-white btn-block btn-warning" href="admin_program_kursus">kembali</a>
            </form>
        </div>
        <div class="col">
            <h3>List Course Program</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>waktu studi</th>
                        <th>harga</th>
                        <th>kuota</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$programkursus->nama}}</td>
                        <td>{{$programkursus->masa_studi}}</td>
                        <td>{{$programkursus->harga}}</td>
                        <td>{{$programkursus->kuota}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection