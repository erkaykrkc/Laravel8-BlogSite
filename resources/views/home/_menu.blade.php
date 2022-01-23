@php
    $parentCategories=\App\Http\Controllers\HomeController::categorylist()
@endphp   
   <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="{{ route('homepage') }}" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-primary">Kar<span class="text-white font-weight-normal">Blog</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="{{ route('homepage') }}" class="nav-item nav-link active">Anasayfa</a>

                    @foreach ($parentCategories as $rs)
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ $rs->title }}</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">
                                @if(count($rs->children))
                                    @include('home.categorytree',['children'=>$rs->children])
                                @endif
                            </a>
                        </div>
                    </div>
                    @endforeach
                    <a href="{{ route('aboutus') }}" class="nav-item nav-link text-warning">About Us</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link text-warning">Contact</a>
                    <a href="{{ route('faq') }}" class="nav-item nav-link text-warning">FAQ</a>
                    <a href="{{ route('references') }}" class="nav-item nav-link text-warning">References</a>
                </div> 
            </div>  
            <div class="navbar-nav py-0">
                @auth
                <a href="{{ route('myprofile') }}" class="nav-link text-info">{{Auth::user()->name}}</a>
                
                <a href="{{ route('logout') }}" class="nav-item nav-link text-info text-danger">Çıkış</a>
                @endauth
                
                @guest
                <a href="/login" class="nav-item nav-link text-info">Giriş</a>
                <a href="/register" class="nav-item nav-link text-info">Kayıt Ol</a>
                @endguest
                
            </div>
        </nav>
    </div>
    <!-- Navbar End -->