@extends('layouts.admin')

@section('title','FAQ Düzenle')

@section('javascript')

<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    
@endsection

@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 pb-3 text-gray-800 border-bottom-primary">FAQ Düzenle</h1>

    <form action="{{ route('admin_faq_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
          <label>Positon</label>
          <input type="number" name="position"  value="{{$data->position}}" class="form-control">
        </div>
        <div class="form-group">
          <label>Question</label>
          <input type="text" name="question" value="{{$data->question}}"  class="form-control">
        </div>
        <div class="form-group">
          <label>Answer</label>
          <textarea class="summernote" name="answer">{{$data->answer}}</textarea>
          <div>
            <script>
              CKEDITOR.replace( 'answer' );
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