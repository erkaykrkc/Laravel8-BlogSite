@extends('layouts.admin')

@section('title','Kategoriler Listesi')

@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-3 pb-3 text-gray-800 border-bottom-primary">Kategoriler</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class=" font-weight-bold text-primary">
            Kategori Listesi
          </h6>
          <a href="{{ route('admin_category_add') }}" class="btn btn-success btn-icon-split float-right">
            <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">Kategori Ekle</span>
        </a>
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
                  <th>Parent</th>
                  <th>Title</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($datalist as $rs )
                <tr>
                  <td>{{ $rs->id }}</td>
                  <td>{{ $rs->parent_id }}</td>
                  <td>{{ $rs->title }}</td>
                  <td>{{ $rs->status }}</td>
                  <td> 
                    <a href="{{ route('admin_category_edit',['id'=>$rs->id]) }}"> 
                      <img class="rounded mx-auto my-auto d-block" src="{{ asset('assets/admin/images') }}/edit.png" height="35">
                    </a>
                  </td>
                  <td>
                    <a href="{{ route('admin_category_delete',['id'=>$rs->id]) }}" onclick="return confirm('It will be deleted ! Are you sure ?')">
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