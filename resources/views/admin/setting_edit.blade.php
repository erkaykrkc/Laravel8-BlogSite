@extends('layouts.admin')

@section('title','Ayarları Düzenle')

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
    <h1 class="h3 mb-3 pb-3 text-gray-800 border-bottom-primary">Ayarları Düzenle</h1>

    <form action="{{ route('admin_setting_update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          
          <input type="hidden" name="id" value="{{$data->id}}" class="form-control"> <!-- Hidden ID -->
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
          <label>Company</label>
          <input type="text" name="company" value="{{$data->company}}"  class="form-control">
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" value="{{$data->address}}"  class="form-control">
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" name="phone" value="{{$data->phone}}"  class="form-control">
        </div>
        <div class="form-group">
          <label>Fax</label>
          <input type="text" name="fax" value="{{$data->fax}}"  class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" value="{{$data->email}}"  class="form-control">
        </div>
        <div class="form-group">
          <label>Smpt Server</label>
          <input type="text" name="smptserver" value="{{$data->smtpserver}}"  class="form-control">
        </div>
        <div class="form-group">
          <label>Smpt Email</label>
          <input type="text" name="smptemail" value="{{$data->smptemail}}"  class="form-control">
        </div>
        <div class="form-group">
          <label>Smpt Password</label>
          <input type="password" name="smptpassword" value="{{$data->smptpassword}}"  class="form-control">
        </div>
        <div class="form-group">
          <label>Smpt Port</label>
          <input type="text" name="smptport" value="{{$data->smptport}}"  class="form-control">
        </div>
        <div class="form-group">
          <label>Facebook</label>
          <input type="text" name="facebook" value="{{$data->facebook}}"  class="form-control">
        </div>
        <div class="form-group">
          <label>Instagram</label>
          <input type="text" name="instagram" value="{{$data->instagram}}"  class="form-control">
        </div>
        <div class="form-group">
          <label>Twitter</label>
          <input type="text" name="twitter" value="{{$data->twitter}}"  class="form-control">
        </div>
        <div class="form-group">
          <label>About Us</label>
          <textarea class="summernote" name="aboutus">{{$data->aboutus}}</textarea>
          <div>
            <script>
              $('.summernote').summernote({
                placeholder: 'Hakkımızda yazınız.',
                tabsize: 2,
                height: 100
              });
            </script>
          </div>
        </div>
        <div class="form-group">
          <label>Contact</label>
          <textarea class="summernote" name="contact">{{$data->contact}}</textarea>
          <div>
            <script>
              $('.summernote').summernote({
                placeholder: 'İletişimi yazınız.',
                tabsize: 2,
                height: 100
              });
            </script>
          </div>
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
          <button type="submit" class="btn btn-primary mb-3">Ayarları Güncelle</button>
        </div>
      </form>

</div>
<!-- /.container-fluid -->

@endsection