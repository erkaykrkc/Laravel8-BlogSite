@extends('layouts.admin')

@section('title','Yorumlar')

@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-3 pb-3 text-gray-800 border-bottom-primary">Yorumlar</h1>

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
                  <th>Blog</th>
                  <th>Subject</th>
                  <th>Review</th>
                  <th>Rate</th>
                  <th>Status</th>
                  <th>Date</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($datalist as $rs )
                <tr>
                  <td>{{ $rs->id }}</td>
                  <td>
                    <a href="{{route('admin_user_show',['id'=>$rs->user->id]) }}" onclick="return !window.open(this.href,'','top=50 left=100 width=1000,height=800')">{{ $rs->user->name }}</a> 
                  </td>
                  <td>
                    <a href="{{ route('blog',['id'=>$rs->blog_id,'slug'=>$rs->blog->slug]) }}" target="_blank">{{ $rs->blog->title }}</a>
                  </td>
                  <td>{{ $rs->subject }}</td>
                  <td>{{ $rs->review }}</td>
                  <td>{{ $rs->rate}}</td>
                  <td>{{ $rs->status }}</td>
                  <td>{{ $rs->created_at }}</td>
                  <td> 
                    <a href="{{ route('admin_review_show',['id'=>$rs->id]) }}">
                      <img class="rounded mx-auto my-auto d-block" src="{{ asset('assets/admin/images') }}/edit.png" height="35">
                    </a>
                  </td>
                  <td>
                    <a href="{{ route('admin_review_delete',['id'=>$rs->id]) }}" onclick="return confirm('It will be deleted ! Are you sure ?')">
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