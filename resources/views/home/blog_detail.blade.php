
@extends('layouts.home')

@section('title', $data->title)


@section('description')
    {{ $data->description }}
@endsection

@section('keywords',$data->keywords)


@section('content')

@php
    $avgrev=\App\Http\Controllers\HomeController::avrgreview($data->id);    
    $countreview=\App\Http\Controllers\HomeController::countreview($data->id);    
@endphp

 <!-- News With Sidebar Start -->
 <div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- News Detail Start -->
                <div class="position-relative mt-4 mb-3">
                    <img class="img-fluid w-100" src="{{ Storage::url($data->image) }}" style="object-fit: cover; height:350px">
                    <div class="bg-white border border-top-0 p-4">
                        <div class="text-center text-primary">
                            @for ($i=1;$i<=$avgrev;$i++)
                            <i class="fa fa-star"></i>
                            @endfor
                            <p>
                                @if ($countreview>0)
                                {{ $countreview }} adet yorum mevcut
                                @endif
                                 
                            </p>
                        </div>
                        <div class="mb-3">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">{{ $data->category->title}}</a>
                        </div>
                        <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">{{ $data->title }}</h1>
                        <p>
                            {!! $data->content !!}
                        </p>
                    </div>
                    <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle mr-2" src="{{ asset('assets') }}/img/user.jpg" width="40" height="40" alt="">
                            <span class="h5 mt-2 text-info">{{ $data->author_name }}</span>
                        </div>
                    </div>
                </div>
                <!-- News Detail End -->    
                <!-- Featured News Slider Start -->
                <div class="container-fluid pt-3 mb-3">
                    <div class="container">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">Öne Çıkan Bloglar</h4>
                        </div>
                        <div class="owl-carousel news-carousel carousel-item-3 position-relative">
                            @foreach ($datalist as $rs)
                            <div class="position-relative overflow-hidden" style="height: 300px;">
                                <img class="img-fluid h-100" src="{{ Storage::url($rs->image) }}" style="object-fit: cover;">
                                <div class="overlay">
                                    <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href="{{ route('blog',['id'=>$rs->id,'slug'=>$rs->slug]) }}">{{ $rs->category->title }}</a>
                                    </div>
                                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" style="text-decoration:none" href="{{ route('blog',['id'=>$rs->id,'slug'=>$rs->slug]) }}">{{ $rs->title }}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Featured News Slider End -->      
                <!-- Comment List Start -->
                 <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Yorumlar {{ $countreview }}</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-4">
                        @foreach ($reviews as $rs)
                        <div class="media mb-4">
                            <img src="{{ asset('assets') }}/img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 75px; height:75px;">
                            <div class="media-body">
                                <div>Kullanıcı: <a class="text-secondary font-weight-bold" href="">{{ $rs->user->name }}</a></div>
                                <div class="mt-2"><h5 class="text-danger">{{ $rs->subject }}</h5></div>
                                <div class="text-info"><p>{{ $rs->review }}</p></div>
                                <div class="text-right text-success">Değerlendirme:
                                    @for ($i=1;$i<=$rs->rate;$i++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                </div>
                                <div class="text-right"><small>{{ $rs->created_at }}</small></div>
                                
                            </div>
                        </div>
                        @endforeach
                    </div>
                        
                </div>
                <!-- Comment List End -->
                <!-- Comment Form Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Yorum Yazın</h4>
                    </div>
                        @livewire('review',['id'=>$data->id])
                </div>
                <!-- Comment Form End -->
            </div>
        </div>
    </div>
</div>

@endsection