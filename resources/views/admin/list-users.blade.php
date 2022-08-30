@extends('master')
@section('content')
    <header class="page-header" style="padding: 0px 30px 0;">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h1 class="separator">List Users</h1>
                <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="la la-user"
                                    style="font-size: 20px;"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                        <li class="breadcrumb-item active" aria-current="page">List</li>
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
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Users</h5>
                    <div class="card-body">
                        <div id="bs4-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="bs4-table" class="table table-striped table-bordered dataTable"
                                        style="width:100%" role="grid" aria-describedby="bs4-table_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="bs4-table" rowspan="1"
                                                    colspan="1" aria-label="Name: activate to sort column ascending"
                                                    style="">ID</th>
                                                <th class="sorting_desc" tabindex="0" aria-controls="bs4-table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Position: activate to sort column ascending"
                                                    aria-sort="descending" style="">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="bs4-table" rowspan="1"
                                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                                    style="">UserName</th>
                                                <th class="sorting" tabindex="0" aria-controls="bs4-table" rowspan="1"
                                                    colspan="1" aria-label="Age: activate to sort column ascending"
                                                    style="">Email</th>
                                                <th class="sorting" tabindex="0" aria-controls="bs4-table" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Start date: activate to sort column ascending"
                                                    style="">Phone Number</th>
                                                <th class="sorting" tabindex="0" aria-controls="bs4-table" rowspan="1"
                                                    colspan="1" aria-label="Salary: activate to sort column ascending"
                                                    style="">Rol</th>
                                                <th class="sorting" tabindex="0" aria-controls="bs4-table" rowspan="1"
                                                    colspan="1" aria-label="Salary: activate to sort column ascending"
                                                    style="width: 150px;">Created</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr role="row" class="odd">
                                                    <td class="">{{ $loop->iteration }}</td>
                                                    <td class="sorting_1">{{ $user->name }}</td>
                                                    <td>{{ $user->username }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->number == null ? '(not register)' : $user->number }}</td>
                                                    <td>{{ $user->rol }}</td>
                                                    <td>{{ date('jS F, Y / h:i:s', strtotime($user->created_at)) }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>

                        </div>


                        <div class="row"><div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="bs4-table_info" role="status" aria-live="polite">Mostrando {{$users->count()}} usuarios</div>
                        </div>
                        <div class="row">
                            <div class="btn btn-sm m-2">
                                {{$users->links()}}
                        </div>

                    </div>
                </div>
            </div>
    </section>
@endsection
