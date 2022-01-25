@extends('layouts.admin')

@section('title','Yorum Düzenle')

@section('javascript')

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    
@endsection

@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 pb-3 text-gray-800 border-bottom-primary">Mesaj Düzenle</h1>
    <br>
    @include('home.message')
    <form action="{{ route('admin_review_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                      <th>ID</th>
                      <td>{{ $data->id }}</td>
                    </tr>
                    <tr>
                      <th>Name</th>
                      <td>{{ $data->user->name }}</td>
                    </tr>
                    <tr>
                      <th>Blog</th>
                      <td>{{ $data->blog->title }}</td>
                    </tr>
                    <tr>
                      <th>Subject</th>
                      <td>{{ $data->subject }}</td>
                    </tr>
                    <tr>
                      <th>Review</th>
                      <td>{{ $data->review }}</td>
                    </tr>
                    <tr>
                      <th>Rate</th>
                      <td>{{ $data->rate }}</td>
                    </tr>
                    <tr>
                      <th>IP</th>
                      <td>{{ $data->IP }}</td>
                    </tr>
                    <tr>
                      <th>Created Date</th>
                      <td>{{ $data->created_at }}</td>
                    </tr>
                    <tr>
                      <th>Updated Date</th>
                      <td>{{ $data->updated_at }}</td>
                    </tr>
                    <tr>
                      <th>Status</th>
                      <td>
                          <select name="status">
                            <option selected="{{ $data->status }}"></option>
                            <option>True</option>
                            <option>False</option>
                          </select>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td> 
                      <div>
                        <button type="submit" class="btn btn-primary mb-3">Yorumu Güncelle</button> 
                      </div>
                      </td>
                    </tr>
                </table>
              </div>
            </div>
        </div>
      </form>

</div>
<!-- /.container-fluid -->

@endsection