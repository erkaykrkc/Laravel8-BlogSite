@extends('layouts.home')

@section('title', 'Blog Ekle')

@section('headerjs')

<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

@endsection

@section('content')
 <!-- News With Sidebar Start -->
 <div class="container-fluid mt-3">
    
        <div class="row">
            <div class="col-lg-3">
                @include('home.usermenu')
            </div>
            <div class="col-lg-9">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
               <!-- Page Heading -->
              <form action="{{ route('user_blog_store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Category</label>
                  <div class="form-group">
                    <select class="custom-select mr-sm-2" name="category_id" id="inlineFormCustomSelect">
                      @foreach ($datalist as $rs)
                      <option  value="{{ $rs->id }}">
                        {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}
                      </option>
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
                  <textarea class="summernote" name="content"></textarea>
                  <div>
                    <script>
                      CKEDITOR.replace( 'content' );
                    </script>
                  </div>
                </div>
                <div class="form-group">
                  <label>Image</label>
                  <input type="file" name="image" class="form-control">
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
                  <label>References</label>
                  <textarea class="summernote" name="references"></textarea>
                  <div>
                    <script>
                      CKEDITOR.replace( 'references' );
                    </script>
                  </div>
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
              </div>
            </div>        
    </div>
</div>
<!-- News With Sidebar End -->

@endsection