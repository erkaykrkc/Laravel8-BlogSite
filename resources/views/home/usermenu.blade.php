<!-- Menu -->
<div class="my-0">
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold">Kullanıcı Paneli</h4>
    </div>
    <div class="bg-white border border-top-0 p-3">
        <a href="{{ route('myprofile') }}" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
            <i class="fas fa-id-badge text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
            <span class="font-weight-medium">My Profile</span>
        </a>
        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
            <i class="fas fa-rss text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
            <span class="font-weight-medium">My Reviews</span>
        </a>
        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
            <i class="fas fa-inbox text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
            <span class="font-weight-medium">My Messages</span>
        </a>
        <a href="{{ route('logout') }}" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
            <i class="fas fa-sign-out-alt text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
            <span class="font-weight-medium">Logout</span>
        </a>
    </div>
</div>
<!-- Social Follow End -->