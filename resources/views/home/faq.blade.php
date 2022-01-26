@extends('layouts.home')

@section('title', 'Frequently asked question')

@section('content')

 <!-- News With Sidebar Start -->
 <div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-3">
                
                <div class="accordion" id="accordionPanelsStayOpenExample">
                  @foreach ($datalist as $rs)
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button text-success font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            {{ $rs->question }}
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseOne" class="accordion-collapse" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body text-info">
                            {!! $rs->answer !!}
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