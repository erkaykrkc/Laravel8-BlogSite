@extends('layouts.admin')

@section('title','Mesajlar')

@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-3 pb-3 text-gray-800 border-bottom-primary">Mesajlar</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class=" font-weight-bold text-primary">
            Mesaj Listesi
          </h6>
          <br>
          @include('home.message')
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table
              class="table table-bordered"
              id="dataTable"
              width="100%"
              cellspacing="0"
            >
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Admin Note</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($datalist as $rs )
                <tr>
                  <td>{{ $rs->id }}</td>
                  <td>{{ $rs->name }}</td>
                  <td>{{ $rs->email }}</td>
                  <td>{{ $rs->phone }}</td>
                  <td>{{ $rs->subject }}</td>
                  <td>{{ $rs->message}}</td>
                  <td>{{ $rs->note }}</td>
                  <td>{{ $rs->status }}</td>
                  <td> 
                    <a href="{{ route('admin_message_edit',['id'=>$rs->id]) }}">
                      <img class="rounded mx-auto my-auto d-block" src="{{ asset('assets/admin/images') }}/edit.png" height="35">
                    </a>
                  </td>
                  <td>
                    <a href="{{ route('admin_message_delete',['id'=>$rs->id]) }}" onclick="return confirm('It will be deleted ! Are you sure ?')">
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