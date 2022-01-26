 <!-- Main News Slider Start -->
 <div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 px-0 mx-auto mt-2">
            <div class="owl-carousel main-carousel position-relative">
                @php
                    $counter=0;
                @endphp
                @foreach ($slider as $rs)
                @php
                        $counter=$counter+1;
                @endphp
                <div class="position-relative overflow-hidden"  style="height: 500px;  @if($counter==1) active @endif">
                    <img class="img-fluid h-100" src="{{ Storage::url($rs->image)}}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <div class="overlay">
                                <div class="mb-4">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href="{{ route('blog',['id'=>$rs->id,'slug'=>$rs->slug]) }}">{{ $rs->category->title }}</a>
                                </div>
                                <div class="mb-4 badge badge-success text-uppercase font-weight-semi-bold p-2 mr-2">
                                    Yazar : {{ $rs->author_name }}
                                </div>
                                <a class="h3 m-0 text-white text-uppercase text-info font-weight-semi-bold" href="{{ route('blog',['id'=>$rs->id,'slug'=>$rs->slug]) }}">{{ $rs->title }}</a>
                            </div>
                        </div>                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Main News Slider End -->