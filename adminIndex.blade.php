@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <br>
        <h1 class="display-4">ADMIN MANAGER</h1>
        @include('admin.sessionmessage')
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Table
            </div>
            <div class="card-body">
                <table id="datatabless">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Name</th>
                        <th>Date of birth</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Name</th>
                        <th>Date of birth</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($admin as $a)
                        <tr>
                            <td>{{$a->username}}</td>
                            <td>{{$a->password}}</td>
                            <td>{{$a->name}}</td>
                            <td>{{$a->dob}}</td>
                            <td>{{$a->contact}}</td>
                            <td>{{$a->email}}</td>
                            <td><a type="button" class="btn btn-primary btn-sm"
                                href="{{route('admin.show', ['username' => $a->username])}}">
                                    Show</a>
                            </td>
                            <td><a type="button" class="btn btn-success btn-sm"
                                href="{{route('admin.edit', ['username' => $a->username])}}">
                                    Edit
                                </a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
