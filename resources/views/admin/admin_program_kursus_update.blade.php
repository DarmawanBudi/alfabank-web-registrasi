@extends('layouts.adm')
@section('admin')
    <div class="row mt-3">
        <div class="col-4">
            <h3>Tambah</h3>
            <form action="">
                <div class="form-group">
                    <input type="text" name="name" value="web design" placeholder="nama" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="study-period">Study Period</label>
                    <select class="form-control" id="study-period" name="study-period">
                        <option value="1">1 Month</option>
                        <option value="2">2 Month</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="number" name="price" placeholder="price" value="3000000" id="" class="form-control">
                </div>

                <div class="form-group">
                    <input type="number" name="quota" placeholder="quota" value="10" id="" class="form-control">
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
                        <th>#</th>
                        <th>Name</th>
                        <th>waktu studi</th>
                        <th>harga</th>
                        <th>kuota</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Web design</td>
                        <td>1 bulan</td>
                        <td>3.000.000</td>
                        <td>10</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection