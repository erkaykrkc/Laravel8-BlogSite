@php
$setting = \App\Http\Controllers\HomeController::getsetting();
@endphp

@extends('layouts.home')

@section('title',"About Us - " . $setting->title)


@section('description')
    {{ $setting->description }}
@endsection

@section('keywords','$setting->keywords')


@section('content')

 <!-- News With Sidebar Start -->
 <div class="container-fluid">
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-12">
                <!-- News Detail Start -->
                <div class="position-relative mb-3">
                    <div class="bg-white border border-top-0 p-4">
                        <div class="mb-3">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Hakkımızda</a>
                        </div>
                        <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">KarBlog Hakkımızda</h1>
                        <p>{!! $setting->aboutus !!}</p>
                    
                    </div>
                </div>
                <!-- News Detail End -->                
            </div>
        </div>
    </div>
</div>

@endsection