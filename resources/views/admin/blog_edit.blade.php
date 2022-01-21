@extends('layouts.admin')

@section('title','Blog Düzenle')

@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 pb-3 text-gray-800 border-bottom-primary">Blog Düzenle</h1>

    <form action="{{ route('admin_blog_update',['id'=>$data->id]) }}" method="post">
        @csrf
        <div class="form-group">
          <label>Parent</label>
          <div class="form-group">
            <select class="custom-select mr-sm-2" name="category_id" id="inlineFormCustomSelect">


              @foreach ($datalist as $rs)
              <option  value="{{ $rs->id }}" @if ($rs->id==$data->category_id) selected="selected" @endif > {{ $rs->title }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label>Title</label>
          <input type="text" name="title"  value="{{$data->title}}" class="form-control">
        </div>
        <div class="form-group">
          <label>Keywords</label>
          <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
        </div>
        <div class="form-group">
          <label>Description</label>
          <input type="text" name="description" value="{{$data->description}}"  class="form-control">
        </div>
        <div class="form-group">
          <label>Content</label>
          <input type="text" name="content" value="{{$data->content}}" class="form-control">
        </div>
        <div class="form-group">
          <label>Author Name</label>
          <input type="text" name="author_name" value="{{$data->author_name}}" class="form-control">
        </div>
        <div class="form-group">
          <label>Author Job</label>
          <input type="text" name="author_job" value="{{$data->author_job}}" class="form-control">
        </div>
        <div class="form-group">
          <label>Tags</label>
          <input type="text" name="tags" value="{{$data->tags}}" class="form-control">
        </div>
        <div class="form-group">
          <label>Detail</label>
          <input type="text" name="detail" value="{{$data->detail}}" class="form-control">
        </div>
        <div class="form-group">
          <label>Slug</label>
          <input type="text" name="slug"  value="{{$data->slug}}"  class="form-control">
        </div>
        <div class="form-group">
              <label class="mr-sm-2" for="inlineFormCustomSelect">Status</label>
              <select class="custom-select mr-sm-2" name="status" id="inlineFormCustomSelect">
                <option selected="selected"> {{$data->status}} </option>
                <option >True</option>
                <option >False</option>
              </select>
        </div>
        <div>
          <button type="submit" class="btn btn-primary mb-3">Güncelle</button>
        </div>
      </form>

</div>
<!-- /.container-fluid -->

@endsection