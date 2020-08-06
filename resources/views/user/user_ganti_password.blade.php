@extends('layouts.usr')
@section('user')
    <div class="mt-3">

        <form action="user_login" method="POST">
            <div class="form-group">
                <input type="password" name="old-password" class="form-control" id="name"
                    placeholder="old password" />
            </div>

            <div class="form-row">
                <div class="col-md-6 form-group">

                    <input type="password" name="new-password" class="form-control" id="name"
                        placeholder="new password" />
                </div>
                <div class="col-md-6 form-group">

                    <input type="password" name="confirm-new-password" class="form-control" id="name"
                        placeholder="confirm new password" />
                </div>
            </div>

            <div class="text-center">
                <button class="btn btn-danger btn-block mt-2" type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection