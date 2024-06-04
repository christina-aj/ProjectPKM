<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <x-sidemenu>
        <h5 class="title-profile">My Voucher</h5>
            <div class="row g-1 d-flex justify-content-center align-items-center">
                <span class="list-voucher d-flex align-items-center">
                    <img class="diskon" src="{!! URL::asset('/img/discount.png')!!}" alt="">
                    <span class="">Diskon 20 Ribu</span>
                </span>
                <span class="list-voucher d-flex align-items-center">
                    <img class="diskon" src="{!! URL::asset('/img/discount.png')!!}" alt="">
                    <span class="">Diskon 20 Ribu</span>
                </span>
                <span class="list-voucher d-flex align-items-center">
                    <img class="diskon" src="{!! URL::asset('/img/discount.png')!!}" alt="">
                    <span class="">Diskon 20 Ribu</span>
                </span>
                <span class="list-voucher d-flex align-items-center">
                    <img class="diskon" src="{!! URL::asset('/img/discount.png')!!}" alt="">
                    <span class="">Diskon 20 Ribu</span>
                </span>
            </div>
    </x-sidemenu>
</x-layout>