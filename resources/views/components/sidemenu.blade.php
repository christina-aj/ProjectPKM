<!-- Single Product Start -->
<div class="container-fluid profile py-5">
    <div class="container py-5">
        <div class="row g-4 mb-5">
            <div class="col-lg-8 col-xl-8">
                <div class="container bg-white tab-profile">
                    {{ $slot }}
                </div>
            </div>
            <div class="col-lg-4 col-xl-4">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="panel-profile container bg-white mb-4 rounded py-4">
                            <h5 class="panel-title-profile">My Profile</h5>
                            <div class="title-panel" >
                                <a href="{{ ('/profile/voucher') }}">Voucher</a>
                            </div>
                            <div class="title-panel" >
                                <a href="{{ ('/profile/history') }}">History</a>
                            </div>
                            <div class="title-panel" >
                                <a href="{{ ('/profile/setting') }}">Setting</a>
                            </div>
                            <div class="title-panel" >
                                <a href="">Log Out</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>