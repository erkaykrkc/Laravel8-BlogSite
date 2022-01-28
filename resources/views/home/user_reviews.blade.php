@extends('layouts.home')

@section('title', 'Yorum Profili')


@section('content')
 <!-- News With Sidebar Start -->
 <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-3">
                @include('home.usermenu')
            </div>
            <div class="col-lg-9">
                    <table class="table table-bordered bg-light" style="border-radius: 15px">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Blog</th>
                          <th scope="col">Subject</th>
                          <th scope="col">Review</th>
                          <th scope="col">Rate</th>
                          <th scope="col">Status</th>
                          <th scope="col">Date</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @include('home.message')
                        @foreach ($datalist as $rs)  
                        <tr>
                          <td>{{ $rs->id }}</td>
                          <td>
                              <a class="text-info" href="{{ route('blog',['id'=>$rs->blog_id,'slug'=>$rs->blog->slug]) }}" target="_blank">{{ $rs->blog->title }}</a>
                          </td>
                          <td>{{ $rs->subject }}</td>
                          <td>{{ $rs->review }}</td>
                          <td>{{ $rs->rate }}</td>
                          <td>{{ $rs->status }}</td>
                          <td><small>{{ $rs->created_at }}</small></td>
                          <td>
                            <a href="{{ route('admin_review_delete',['id'=>$rs->id]) }}" onclick="return confirm('Delete ! Are you sure!')">
                                <img class="rounded mx-auto my-auto d-block" src="{{ asset('assets/admin/images') }}/delete.png" height="35">
                            </a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
            </div>
        </div>
</div>
<!-- News With Sidebar End -->

@endsection