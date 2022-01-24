@php
$setting = \App\Http\Controllers\HomeController::getsetting();
@endphp

@extends('layouts.home')

@section('title',"Contact - " . $setting->title)


@section('description')
    {{ $setting->description }}
@endsection

@section('keywords',$setting->keywords)


@section('content')

 <!-- News With Sidebar Start -->
 <div class="container-fluid">
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-4">
                <!-- News Detail Start -->
                <div class="position-relative mb-3">
                    <div class="bg-white border border-top-0 p-4">
                        <div class="mb-3">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">İletişim</a>
                        </div>
                        <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">KarBlog İletişim Bilgileri</h1>
                        <p>{!! $setting->contact !!}</p>
                        
                    </div>
                </div>
                <!-- News Detail End -->                
            </div>
            <div class="col-lg-8">
                <div class="section-title mb-3">
                    <h4 class="m-0 text-uppercase font-weight-bold">Bizimle İletişime Geçin</h4>
                </div>
                    @include('home.message')
                    <form action="{{ route('sendmessage') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" name="name" placeholder="Your Name" required="required"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control p-4" name="email" placeholder="Your Email" required="required"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control p-4" name="phone" placeholder="Your Phone" required="required"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control p-4" name="subject" placeholder="Subject" required="required"/>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="4" name="message" placeholder="Message" required="required"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;"
                                type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection