@extends('layouts.adm')
@section('admin')
    <div class="row mt-3">
        <div class="col-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h3>Tambah</h3>
            <form action="/admin_program_kursus/create" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="nama" placeholder="nama program kursus" id="" class="form-control">
                </div>
                @error('nama')
                <div class="alert alert-danger">Nama harus diisi</div>
                @enderror
                <div class="form-group">
                    <label for="study-period">Masa studi</label>
                    <select class="form-control" id="study-period" name="masa_studi">
                        <option value="1">1 bulan</option>
                        <option value="2">2 bulan</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="number" name="harga" placeholder="harga" id="" class="form-control">
                </div>
                    @error('harga')
                        <div class="alert alert-danger">Harga harus diisi</div>
                    @enderror
                <div class="form-group">
                    <input type="number" name="kuota" placeholder="kuota siswa" id="" class="form-control">
                </div>
                    @error('kuota')
                    <div class="alert alert-danger">Kuota harus diisi</div>
                    @enderror
                <input type="submit" value="tambah" class="btn btn-block btn-danger">
            </form>
        </div>
        <div class="col">
            <h3>Daftar program kursus</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Waktu studi</th>
                        <th>Harga</th>
                        <th>Kuota</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($program_kursus as $index=>$element)
                
                <tr>
                        <th>{{$index = $index +1}}</th>
                        <td>{{$element->nama}}</td>
                        <td>{{$element->masa_studi}} bulan</td>
                        <td>Rp {{$element->harga}}.000.000,00</td>
                        <td>{{$element->kuota}}</td>
                        
                        <td>
                            <a href="{{route('programkursus.edit', $element->id)}}" class="btn btn-sm btn-info">edit</a>
                            <form action="{{route('programkursus.destroy', $element->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" name="" id="" class="btn btn-sm btn-danger" value="hapus">
                                
                            </form>
                    </td>
                    </tr>
                @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection