@extends('layouts.admin')

@section('title','Kullanıcı Listesi')

@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-3 pb-3 text-gray-800 border-bottom-primary">Kullanıcılar</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class=" font-weight-bold text-primary">
            Kullanıcı Listesi
          </h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>User Image</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Roles</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($datalist as $rs )
                <tr>
                  <td>{{ $rs->id }}</td>
                  <td>
                       @if($rs->profile_photo_path)
                       
                         <img src="{{ Storage::url($rs->profile_photo_path)}}" height="100" width="100" alt="">
                       
                       @endif
                  </td>
                  <td>{{ $rs->name }}</td>
                  <td>{{ $rs->email }}</td>
                  <td>{{ $rs->phone }}</td>
                  <td>{{ $rs->address }}</td>
                  <td>
                    @foreach ($rs->roles as $row)
                          {{ $row->name }} <br>
                    @endforeach
                    <a href="{{ route('admin_user_roles',['id'=>$rs->id]) }}" onclick="return !window.open(this.href,'','top=50 left=200 width=1000,height=800')">
                    <i class="nav-icon fas fa-plus-circle"></i>
                    </a>
                  </td>
                  <td> 
                    <a href="{{ route('admin_user_edit',['id'=>$rs->id]) }}">
                      <img class="rounded mx-auto my-auto d-block" src="{{ asset('assets/admin/images') }}/edit.png" height="35">
                    </a>
                  </td>
                  <td>
                    <a href="{{ route('admin_user_delete',['id'=>$rs->id]) }}" onclick="return confirm('It will be deleted ! Are you sure ?')">
                      <img class="rounded mx-auto my-auto d-block" src="{{ asset('assets/admin/images') }}/delete.png" height="35">
                    </a> 
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>    
</div>
<!-- /.container-fluid -->

@endsection