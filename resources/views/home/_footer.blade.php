@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp
    <!-- Footer Start -->
    <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-4">
        <div class="row py-4">
            <div class="col-lg-6 col-md-6">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Bizimle İletişime Geçin</h5>
                <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-3 mb-3"></i>{{ $setting->address }}</p>
                <p class="font-weight-medium"><i class="fa fa-phone-alt mr-3 mb-3"></i>{{ $setting->phone }}</p>
                <p class="font-weight-medium"><i class="fa fa-envelope mr-3 mb-3"></i>{{ $setting->email }}</p>
            </div>
            <div class="col-lg-6 col-md-6">
                <h5 class=" mb-3 text-white text-uppercase font-weight-bold">Follow Us</h5>
                <div>
                    @if($setting->twitter!=null)
                        <a class="btn btn-lg btn-secondary btn-lg-square mt-2" href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a>
                    @endif
                </div>                
                <div>
                    @if($setting->facebook!=null)
                        <a class="btn btn-lg btn-secondary btn-lg-square mt-2" href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    @endif
                </div>
                <div>
                    @if($setting->instagram!=null)
                        <a class="btn btn-lg btn-secondary btn-lg-square mt-2" href="{{ $setting->instagram }}"><i class="fab fa-instagram"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="m-0 text-center">&copy; <a href="#">{{ $setting->company }}</a>.  All Rights Reserved. </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('assets') }}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets') }}/js/main.js"></script>
    

 
   