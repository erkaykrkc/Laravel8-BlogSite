@extends('layouts.admin')

@section('title','Blog Düzenle')

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
    <h1 class="h3 mb-3 pb-3 text-gray-800 border-bottom-primary">Blog Düzenle</h1>

    <form action="{{ route('admin_blog_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label>Category</label>
          <div class="form-group">
            <select class="custom-select mr-sm-2" name="category_id" id="inlineFormCustomSelect">


              @foreach ($datalist as $rs)
              <option  value="{{ $rs->id }}" @if ($rs->id==$data->category_id) selected="selected" @endif > 
                {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}
              </option>
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
          <textarea class="summernote" name="content">{{$data->content}}</textarea>
          <div>
            <script>
              $('.summernote').summernote({
                placeholder: 'İçeriği yazınız.',
                tabsize: 2,
                height: 100
              });
            </script>
          </div>
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="image" class="form-control">
          @if($rs->image)
          {
             <img src="{{ Storage::url('$rs->image')}}" height="60" alt="">
          }
         @endif
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
          <label>References</label>
          <textarea class="summernote" name="references">{{$data->references}}</textarea>
          <div>
            <script>
              $('.summernote').summernote({
                placeholder: 'Referansları yazınız.',
                tabsize: 2,
                height: 100
              });
            </script>
          </div>

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