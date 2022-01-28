@extends('layouts.home')

@section('title', 'Kullanıcı Profili')


@section('content')
 <!-- News With Sidebar Start -->
 <div class="container-fluid mt-3">
    
        <div class="row">
            <div class="col-lg-3">
                @include('home.usermenu')
            </div>
            <div class="col-lg-9">
                @include('profile.show')
            </div>
        </div>
    
</div>
<!-- News With Sidebar End -->

@endsection