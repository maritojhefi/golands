@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-tabs">
                <div class="card-header">
                    <div class="card-title">
                        <i class="la la-users"></i> &nbsp; Create User/Admin
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Choose the type of user</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option value='admin'>Admin</option>
                                <option value='user'>User</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for=" ">Name</label>
                            <input type="text" class="form-control" id=" " name ="name" placeholder="write name">
                        </div>
                        <div class="form-group">
                            <label for=" ">Email</label>
                            <input type="text" class="form-control" id=" " name="email" placeholder="write Email Address">
                        </div>
                        <div class="form-group">
                            <label for=" ">Phone Number</label>
                            <input type="text" class="form-control" id=" " name ="number" placeholder="write phone number">
                        </div>
                        <div class="form-group">
                            <label for=" ">Password</label>
                            <input type="text" class="form-control" id=" " name ="password" placeholder="write Password">
                        </div>
                        <div class="form-group">
                            <label for=" ">Password Confirmation</label>
                            <input type="text" class="form-control" id=" " name ="password_confirmation" placeholder="Confirm Password">
                        </div>

                        <a class="btn btn-danger text-white"><i class="la la-remove text-white" style="font-size=20px;"></i>Cancel</a>
                        <button class="btn btn-success"><i class="la la-save text-white justify-content-end" style="font-size=20px;"></i>Create</button>
                    </div>
                </div>
            </div>
        </div>




    </div>
@endsection
