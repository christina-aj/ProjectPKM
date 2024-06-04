<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="container profile bg-white py-5 rounded-3 shadow ">
        <div class="container bg-white py-1 my-5 invoice">
            <div class="typography-invoice py-1 my-2">
                <h5 class="title-invoice py-3 my-2">INVOICE</h5>
                <div class="row">
                    <div class="col-sm-6 col-lg-5 col-xl-6">
                        <div>Transaction ID</div>
                        <div>Date of Transaction</div>
                        <div>Email</div>
                    </div>
                    <div class="col-sm-6 col-lg-5 col-xl-6">
                        <div>12345</div>
                        <div>24 Juni 2024</div>
                        <div>gilbert@gmail.com</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container bg-white py-1 my-5 invoice">
            <div class="typography-invoice py-1 my-2">
                <h5 class="title-invoice py-3 my-2">Detail Product</h5>
                <img class="avatar" src="{!! URL::asset('/img/three.png')!!}" alt="">
                <div class="row">
                    <div class="col-sm-6 col-lg-5 col-xl-6">
                        <div>Product</div>
                        <div>Phone</div>
                        <div>Nominal</div>
                    </div>

                    <div class="col-sm-6 col-lg-5 col-xl-6">
                        <div>Pulsa Three</div>
                        <div>0895176628</div>
                        <div>Rp 20000</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container bg-white py-1 my-5 invoice">
            <div class="typography-invoice py-1 my-2">
                <h5 class="title-invoice py-3 my-2">Payment Detail</h5>
                <div class="row">
                    <div class="col-sm-6 col-lg-5 col-xl-6">
                        <div>Payment Status</div>
                        <div>Payment Method</div>
                        <div>Status Transaction</div>
                        <div>Total Payment</div>   
                    </div>
                    <div class="col-sm-6 col-lg-5 col-xl-6">
                        <div>Success</div>
                        <div>Qris</div>
                        <div>Pending</div>
                        <div>Rp 20000</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container bg-white py-1 my-5 invoice">
            <div class="typography-invoice py-1 my-2">
                <h5 class="title-invoice py-3 my-2">QR-Code</h5>
                <div class="d-flex justify-content-center row">
                    <img src="{!! URL::asset('/img/qr-code.png')!!}" alt="" class="qr">
                    <div class="d-flex justify-content-center p-3 fw-bold">Scan Now</div>  
                </div> 
            </div>
        </div>
    </div>
</x-layout>