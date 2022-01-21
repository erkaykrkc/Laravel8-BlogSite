@extends('layouts.admin')

@section('title','Blog Ekle')

@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 pb-3 text-gray-800 border-bottom-primary">Blog Ekle</h1>

    <form action="{{ route('admin_blog_store') }}" method="post">
        @csrf
        <div class="form-group">
          <label>Parent</label>
          <div class="form-group">
            <select class="custom-select mr-sm-2" name="category_id" id="inlineFormCustomSelect">


              @foreach ($datalist as $rs)
              <option  value="{{ $rs->id }}">{{ $rs->title }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label>Title</label>
          <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
          <label>Keywords</label>
          <input type="text" name="keywords" class="form-control">
        </div>
        <div class="form-group">
          <label>Description</label>
          <input type="text" name="description" class="form-control">
        </div>
        <div class="form-group">
          <label>Content</label>
          <input type="text" name="content" class="form-control">
        </div>
        <div class="form-group">
          <label>Author Name</label>
          <input type="text" name="author_name" class="form-control">
        </div>
        <div class="form-group">
          <label>Author Job</label>
          <input type="text" name="author_job" class="form-control">
        </div>
        <div class="form-group">
          <label>Tags</label>
          <input type="text" name="tags" class="form-control">
        </div>
        <div class="form-group">
          <label>Detail</label>
          <input type="text" name="detail" class="form-control">
        </div>
        <div class="form-group">
          <label>Slug</label>
          <input type="text" name="slug" class="form-control">
        </div>
        <div class="form-group">
              <label class="mr-sm-2" for="inlineFormCustomSelect">Status</label>
              <select class="custom-select mr-sm-2" name="status" id="inlineFormCustomSelect">
                <option selected="selected">False</option>
                <option >True</option>
              </select>
        </div>
        <div>
          <button type="submit" class="btn btn-primary mb-3">Ekle</button>
        </div>
      </form>

</div>
<!-- /.container-fluid -->

@endsection