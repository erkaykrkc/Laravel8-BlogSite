@extends('layouts.home')

@section('title', $data->title .' Blog Listesi')


@section('description')
    {{ $data->description }}
@endsection

@section('keywords',$data->keywords)


@section('content')
     <!-- News With Sidebar Start -->
     <div class="container-fluid mt-2 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0  font-weight-bold">{{ $data->title }}</h4>
                            </div>
                        </div>
                        @foreach ($datalist as $rs)
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ Storage::url($rs->image) }}" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary  font-weight-semi-bold p-2 mr-2 mb-3"
                                            href="">{{ $rs->category->title}}
                                        </a>
                                        <br>
                                        <small>Tags : {{ $rs->tags }}  </small> 
                                    </div>
                                    <a class="h5 d-block pt-3 text-secondary text-uppercase " href="{{ route('blog',['id'=>$rs->id,'slug'=>$rs->slug]) }}">{{ $rs->title }}</a>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-2 p-4">
                                    <div class="d-flex align-items-center">
                                        <h6>Yazar : {{ $rs->author_name }}</h6>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small>{{ $rs->created_at }}</small></a>
                                    </div>

                                </div>
                            </div>
                        </div>  
                        @endforeach                      
                    </div>
                </div>
            </div>
        </div>
    </div>                         
    
@endsection