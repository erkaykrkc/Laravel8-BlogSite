@extends('layouts.admin')

@section('title','Blog Listesi')

@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-3 pb-3 text-gray-800 border-bottom-primary">Bloglar</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class=" font-weight-bold text-primary">
            Blog Listesi
          </h6>
          <a href="{{ route('admin_blog_add') }}" class="btn btn-success btn-icon-split float-right">
            <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">Blog Ekle</span>
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
                  <th>Category</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Image</th>
                  <th>Author Name</th>
                  <th>Author Job</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($datalist as $rs )
                <tr>
                  <td>{{ $rs->id }}</td>
                  <td>{{ $rs->category_id }}</td>
                  <td>{{ $rs->title }}</td>
                  <td>{{ $rs->content }}</td>
                  <td>{{ $rs->image }}</td>
                  <td>{{ $rs->author_name }}</td>
                  <td>{{ $rs->author_job }}</td>
                  <td>{{ $rs->status }}</td>
                  <td> 
                    <a href="{{ route('admin_blog_edit',['id'=>$rs->id]) }}"> Edit </a>
                  </td>
                  <td>
                    <a href="{{ route('admin_blog_delete',['id'=>$rs->id]) }}" onclick="return confirm('It will be deleted ! Are you sure ?')">Delete</a> 
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