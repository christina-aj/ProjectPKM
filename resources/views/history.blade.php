<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <x-sidemenu>
        <h5 class="title-profile">My History</h5>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="list-voucher d-flex align-items-center row">
                    <section class="d-flex row">
                        <div class="d-flex typography-detil py-4">
                            <div class="mx-3">5 June 2024</div>
                            <div class="mx-3 alert-success rounded px-3">Success</div>
                            <div class="mx-3">12345</div>
                        </div>
                        <div class="d-flex col">
                            <div class="d-flex align-items-center">
                                <img class="diskon" src="{!! URL::asset('/img/three.png')!!}" alt="">
                                <span class="">Pulsa 20 Ribu</span>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="typography-detil ">Total Belanja</div>
                                <div class="typography-detil ">Rp. 20000</div>
                            </div>  
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="d-flex align-items-center py-4">
                                <a href="{{( '/profile/history/invoice') }}" class="btn mx-3">Detail Transaction<a>
                                <a href="" class="btn btn-primary mx-3 title-button-history">Buy again</a>
                                <button class="btn mx-3 detail-button">...</button>
                            </div> 
                        </div>
                    </section>
                </div>
                
                <div class="list-voucher d-flex align-items-center row">
                    <section class="d-flex row">
                        <div class="d-flex typography-detil py-4">
                            <div class="mx-3">5 June 2024</div>
                            <div class="mx-3 alert-danger rounded px-3">Pending</div>
                            <div class="mx-3">12345</div>
                            <div class="mx-3 alert-danger rounded px-3">15:05</div>
                        </div>
                        <div class="d-flex col">
                            <div class="d-flex align-items-center">
                                <img class="diskon" src="{!! URL::asset('/img/three.png')!!}" alt="">
                                <span class="">Pulsa 20 Ribu</span>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="typography-detil ">Total Belanja</div>
                                <div class="typography-detil ">Rp. 20000</div>
                            </div>  
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="d-flex align-items-center py-4">
                                <a href="{{( '/profile/history/invoice') }}" class="btn mx-3">Detail Transaction<a>
                                <button class="btn mx-3 detail-button">...</button>
                            </div> 
                        </div>
                    </section>
                </div>

                <div class="list-voucher d-flex align-items-center row">
                    <section class="d-flex row">
                        <div class="d-flex typography-detil py-4">
                            <div class="mx-3">5 June 2024</div>
                            <div class="mx-3 alert-danger rounded px-3">Cancelled</div>
                            <div class="mx-3">12345</div>
                        </div>
                        <div class="d-flex col">
                            <div class="d-flex align-items-center">
                                <img class="diskon" src="{!! URL::asset('/img/three.png')!!}" alt="">
                                <span class="">Pulsa 20 Ribu</span>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="typography-detil ">Total Belanja</div>
                                <div class="typography-detil ">Rp. 20000</div>
                            </div>  
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="d-flex align-items-center py-4">
                                <a href="{{( '/profile/history/invoice') }}" class="btn mx-3">Detail Transaction<a>
                                <a href="" class="btn btn-primary mx-3 title-button-history">Buy again</a>
                                <button class="btn mx-3 detail-button">...</button>
                            </div> 
                        </div>
                    </section>
                </div>
            </div>
    </x-sidemenu>
</x-layout>