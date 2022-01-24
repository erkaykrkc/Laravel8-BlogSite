@extends('layouts.admin')

@section('title','Kategori Ekle')

@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 pb-3 text-gray-800 border-bottom-primary">Kategori Ekle</h1>

    <form action="{{ route('admin_category_create') }}" method="post">
        @csrf
        <div class="form-group">
          <label>Parent</label>
          <div class="form-group">
            <select class="custom-select mr-sm-2" name="parent_id" id="inlineFormCustomSelect">
              <option selected="selected" value="0">Ana Kategori</option>

              @foreach ($datalist as $rs)
              <option  value="{{ $rs->id }}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}</option>
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