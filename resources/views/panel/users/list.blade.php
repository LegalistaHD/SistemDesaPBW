@extends(('panel.layouts.app'))

@section('content')

<div class="pagetitle">
    <h1>Users</h1>
  </div>

  <section class="section">
    <div class="row">

      <div class="col-lg-12">
        @include('_message')
        <div class="card">
          <div class="card-body">
            
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Users List</h5>
                </div>

                 <div class="col-md-6" style="text-align: right">
                    @if(!empty($PermissionAdd))
                    <a class="btn btn-primary" style="margin-top: 15px" href="{{ url('panel/users/add') }}">Tambah User</a>
                    @endif
                </div>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Roles</th>
                    <th scope="col">Date</th>
                    @if(!empty($PermissionEdit) || !empty($PermissionEdit))
                    <th scope="col">Action</th>
                    @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $getRecord as $value )
                        <tr>
                        <th scope="row">{{  $value->id }}</th>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->roles_name }}</td>
                        <td>{{ $value->created_at }}</td>
                        <td>
                          @if(!empty($PermissionEdit))
                            <a href="{{ url('panel/users/edit/' .$value->id) }}" class="btn btn-primary btn-sm">Edit</a>
                          @endif
                          
                          @if(!empty($PermissionDelete))
                            <a href="{{ url('panel/users/delete/' .$value->id) }}" class="btn btn-danger btn-sm">Delete</a>
                          @endif
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

          </div>
        </div>

      </div>

    </div>

  </section>
@endsection">