@extends('layouts.home')

@section('title', 'Blog Düzenleme')

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
                  <form action="{{ route('user_blog_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
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
                          CKEDITOR.replace( 'content' );
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
                          CKEDITOR.replace( 'references' );
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
              </div>
            </div>        
        </div>
</div>
<!-- News With Sidebar End -->

@endsection