@extends('admin.admin_master')
@section('admin')

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card bg-light">
                        <div class="card-body">

                            <h4 class="card-title">Change Password </h4><br><br>

                            @if (count($errors))
                                @foreach ($errors->all() as $error)
                                    <p class="alert alert-danger alert-dismissible fade show"> {{ $error }} </p>
                                @endforeach
                            @endif

                            <form method="post" action="{{ route('update.password') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="example-text-input">Old Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="oldpassword" name="oldpassword" type="password">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="example-text-input">New Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="newpassword" name="newpassword" type="password">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="example-text-input">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="confirm_password" name="confirm_password"
                                            type="password">
                                    </div>
                                </div>
                                <!-- end row -->

                                <input class="btn btn-info waves-effect waves-light" type="submit" value="Change Password">
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

        </div>
    </div>

@endsection
