@extends('layouts.admin')

@section('title','Kategori Düzenle')

@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 pb-3 text-gray-800 border-bottom-primary">Kategori Düzenle</h1>

    <form action="{{ route('admin_category_update',['id'=>$data->id]) }}" method="post">
        @csrf
        <div class="form-group">
          <label>Parent</label>
          <div class="form-group">
            <select class="custom-select mr-sm-2" name="parent_id" id="inlineFormCustomSelect">
              <option  value="0">Ana Kategori</option>
              @foreach ($datalist as $rs)
              <option  value="{{ $rs->id }}" @if ($rs->id==$data->parent_id) selected="selected" @endif > {{ $rs->title }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label>Title</label>
          <input type="text" name="title" value="{{ $data->title }}" class="form-control">
        </div>
        <div class="form-group">
          <label>Keywords</label>
          <input type="text" name="keywords" value="{{ $data->keywords }}" class="form-control">
        </div>
        <div class="form-group">
          <label>Description</label>
          <input type="text" name="description" value="{{ $data->description }}" class="form-control">
        </div>
        <div class="form-group">
          <label>Slug</label>
          <input type="text" name="slug" value="{{ $data->slug }}" class="form-control">
        </div>
        <div class="form-group">
              <label class="mr-sm-2" for="inlineFormCustomSelect">Status</label>
              <select class="custom-select mr-sm-2" name="status" id="inlineFormCustomSelect">
                <option selected="selected">{{ $data->status }}</option>
                <option >False</option>
                <option >True</option>
              </select>
        </div>
        <div>
          <button type="submit" class="btn btn-primary mb-3">Güncelle</button>
        </div>
      </form>

</div>
<!-- /.container-fluid -->

@endsection