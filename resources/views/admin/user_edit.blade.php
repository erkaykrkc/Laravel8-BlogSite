@extends('layouts.admin')

@section('title','Kullanıcı Düzenle')

@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 pb-3 text-gray-800 border-bottom-primary">Kullanıcı Düzenle</h1>

    <form action="{{ route('admin_user_update',['id'=>$data->id]) }}" method="post">
        @csrf
        
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" value="{{ $data->name }}" class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" value="{{ $data->email }}" class="form-control">
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" name="phone" value="{{ $data->phone }}" class="form-control">
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" value="{{ $data->address }}" class="form-control">
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="image" class="form-control">

          @if($data->profile_photo_path)
         
             <img class="mt-2" src="{{ Storage::url($data->profile_photo_path)}}" height="200px" width="200px" style="border-radius: 10px" alt="">
         @endif
        </div>
        <div>
          <button type="submit" class="btn btn-primary mb-3">Güncelle</button>
        </div>
      </form>

</div>
<!-- /.container-fluid -->

@endsection