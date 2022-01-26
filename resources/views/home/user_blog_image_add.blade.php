<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Image Gallery</title>
   <!-- Bootstrap 4 -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
   <!-- Custom fonts for this template-->
   <link href="{{ asset('assets') }}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

   <!-- Custom styles for this template-->
   <link href="{{ asset('assets') }}/admin/css/sb-admin-2.min.css" rel="stylesheet">
   
   <!-- Custom styles for this page -->
    <link
    href="{{ asset('assets') }}/admin/vendor/datatables/dataTables.bootstrap4.min.css"
    rel="stylesheet"
   /> 
</head>
<body>
    <!-- Begin Page Content -->
 <div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-3 pb-3 text-gray-800 border-bottom-primary">{{ $data->title }}</h1>

  <form action="{{ route('user_image_store',['blog_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
      @csrf
     
      <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control">
      </div>
      
      <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
      </div>
     
      <div>
        <button type="submit" class="btn btn-primary mb-3">Resim Ekle</button>
      </div>
    </form>
    <hr>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($images as $rs )
              <tr>
                <td>{{ $rs->id }}</td>
                <td>{{ $rs->title }}</td>
                <td>
                  @if($rs->image)
                  
                    <img class="rounded mx-auto my-2 d-block" src="{{ Storage::url($rs->image)}}" height="100" width="150" alt="">
                  
                  @endif
                </td>
                <td>
                  <a href="{{ route('user_image_delete',['id'=>$rs->id,'blog_id'=>$data->id]) }}" onclick="return confirm('It will be deleted ! Are you sure ?')">
                    <img class="rounded mx-auto mt-4 d-block" src="{{ asset('assets/admin/images') }}/delete.png" height="50">
                  </a> 
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
</div>
<!-- /.container-fluid -->

</body>
</html>

 