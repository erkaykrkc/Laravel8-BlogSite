@extends('layouts.admin')

@section('title','Frequently Asked Question Listesi')

@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-3 pb-3 text-gray-800 border-bottom-primary">FAQlar</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class=" font-weight-bold text-primary">
            FAQ Listesi
          </h6>
          <a href="{{ route('admin_faq_add') }}" class="btn btn-success btn-icon-split float-right">
            <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">FAQ Ekle</span>
        </a>
        </div>
        <div class="card-body">
          @include('home.message')
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
                  <th>Position</th>
                  <th>Question</th>
                  <th>Answer</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($datalist as $rs )
                <tr>
                  <td>{{ $rs->position }}</td>
                  <td>{{ $rs->position }}</td>
                  <td>{{ $rs->question }}</td>
                  <td>{!! $rs->answer !!}</td>
                  <td>{{ $rs->status }}</td>
                  <td> 
                    <a href="{{ route('admin_faq_edit',['id'=>$rs->id]) }}">
                      <img class="rounded mx-auto my-auto d-block" src="{{ asset('assets/admin/images') }}/edit.png" height="35">
                    </a>
                  </td>
                  <td>
                    <a href="{{ route('admin_faq_delete',['id'=>$rs->id]) }}" onclick="return confirm('It will be deleted ! Are you sure ?')">
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