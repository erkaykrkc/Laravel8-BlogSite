@extends('layouts.home')

@section('title', 'Bloglarım')


@section('content')
 <!-- News With Sidebar Start -->
 <div class="container-fluid mt-3">
    
        <div class="row">
            <div class="col-lg-2">
                @include('home.usermenu')
            </div>
            <div class="col-lg-10">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class=" font-weight-bold text-primary">
                  Blog Listesi
                </h6>
                <a href="{{ route('user_blog_add') }}" class="btn btn-success btn-icon-split float-right">
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
                        <th>Image</th>
                        <th>Image Gallery</th>
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
                        <td>
                          {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title) }}
                        </td>
                        <td>{{ $rs->title }}</td>
                        <td>
                            @if($rs->image)
                            
                              <img src="{{ Storage::url($rs->image)}}" height="60" width="100" alt="">
                            
                            @endif
                        </td>
                        <td><a href="{{ route('user_image_add',['blog_id'=>$rs->id]) }}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                          <img class="rounded mx-auto my-2 d-block" src="{{ asset('assets/admin/images') }}/gallery.png" height="35">
                        </a></td>
                        <td>{{ $rs->author_name }}</td>
                        <td>{{ $rs->author_job }}</td>
                        <td>{{ $rs->status }}</td>
                        <td> 
                          <a href="{{ route('user_blog_edit',['id'=>$rs->id]) }}">
                            <img class="rounded mx-auto my-auto d-block" src="{{ asset('assets/admin/images') }}/edit.png" height="35">
                          </a>
                        </td>
                        <td>
                          <a href="{{ route('user_blog_delete',['id'=>$rs->id]) }}" onclick="return confirm('It will be deleted ! Are you sure ?')">
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
        
    </div>
</div>
<!-- News With Sidebar End -->

@endsection