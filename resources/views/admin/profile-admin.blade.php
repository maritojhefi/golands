@extends('master')
@section('content')
    <header class="page-header" style="padding: 0px 30px 0;">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h1 class="separator">My Profile</h1>
                <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="la la-user"
                                    style="font-size: 20px;"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
            <ul class="actions top-right" style="top: 0px; ">
                <li class="dropdown">
                    <a href="javascript:void(0)" class="btn btn-fab" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                    </a>
                    <div class="dropdown-menu dropdown-icon-menu dropdown-menu-right">
                        <div class="dropdown-header">
                            Quick Actions
                        </div>
                        <a href="#" class="dropdown-item">
                            <i class="icon dripicons-clockwise"></i> Refresh
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="icon dripicons-gear"></i> Manage Widgets
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="icon dripicons-cloud-download"></i> Export
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="icon dripicons-help"></i> Support
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <section class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">
                        <strong>My personal Information</strong>
                    </h5>
                    <form method="POST" action="{{ route('admin.profile.update') }}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <label for="name" class="">Name</label>
                                    <input type="text" id="name"
                                        class="form-control @error('name') is-invalid @enderror inp" name="name"
                                        value="{{ old('name', $users->name) }}" autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <input type="hidden" name="id" value="{{ $users->id }}" />
                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <label for="username" class="">Username</label>
                                    <input type="text" id="username"
                                        class="form-control @error('username') is-invalid @enderror inp" name="username"
                                        value="{{ old('username', $users->username) }}" autocomplete="username" autofocus>
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="">Email Address</label>
                                <input type="text" id="email"
                                    class="form-control @error('email') is-invalid @enderror inp" name="email"
                                    value="{{ old('email', $users->email) }}" autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="number" class=""> Phone Number</label>
                                <input type="text" id="number"
                                    class="form-control @error('number') is-invalid @enderror inp"
                                    placeholder="{{ $users->number == null ? 'Enter your phone number' : $users->number }}"
                                    name="number" value="{{ old('number', $users->number) }}" autocomplete="number"
                                    autofocus>
                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <label for="password" class="">Password</label>
                                    <input type="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror inp" name="password"
                                        value="{{ old('number', $users->password) }}" autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <label for="password" class="">Confirm Password</label>
                                    <input type="password" id="password-confirm" class="form-control"
                                        placeholder="Confirm New Password" name="password_confirmation"
                                        autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <button type="subtmit" id="save" class="btn btn-primary" disabled="true">Save
                                Change</button>
                            <button type="button" class="btn btn-secondary clear-form">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('footer')
    <script>
        $("form").on("keyup change", function(e) {
            $(this).find('#save').prop('disabled', false);
        })
    </script>
@endpush
