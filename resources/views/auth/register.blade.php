<x-loginlayout>
    <x-slot:title>{{ $title }}</x-slot>
    <header class="register-page">
        <div class="title" ><a class="title" href="{{( '/') }}">
            <h1 class="first text-third">Eco</h1>
            <h1 class="next">Shop</h1>
            </a>
        </div>
        {{-- <div class="container px-0 konten "> --}}
            <form class="container px-0 konten " method="POST" action="">
                <h2 class="register-title">Register</h2>
                <div class="input-group d-flex mx-auto w-50">
                    <h5 class="title-email">E-mail</h5>
                    <div class="input-group d-flex mx-auto ">
                        <input class="form-control" type="email" placeholder="Masukkan E-mail">
                    </div>
                </div>
                <div class="input-group d-flex mx-auto w-50">
                    <h5 class="title-email">Nama</h5>
                    <div class="input-group d-flex mx-auto ">
                        <input class="form-control" type="text" placeholder="Masukkan Nama">
                    </div>
                </div>
                <div class="input-group d-flex mx-auto w-50">
                    <h5 class="title-email">Password</h5>
                    <div class="input-group d-flex mx-auto ">
                        <input class="form-control" type="password" placeholder="Masukkan Password" aria-describedby="eyes-icon" id="password">
                        <span id="eyes-icon" class="input-group-text p-3">
                            <i id="togglePassword" class="fa fa-eye"></i>
                        </span>
                    </div>
                </div>
                <div class="input-group d-flex mx-auto w-50">
                    <h5 class="title-email">Confirm Password</h5>
                    <div class="input-group d-flex mx-auto ">
                        <input class="form-control" type="password" placeholder="Masukkan Password" aria-describedby="eyes-icon" id="password1">
                        <span id="eyes-icon" class="input-group-text p-3">
                            <i id="togglePassword1" class="fa fa-eye"></i>
                        </span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary to-login w-50 mx-auto py-2 border-0 border-secondary position-relative d-flex rounded-pill text-white text-center justify-content-center">Register</button>
                <div class="d-flex mx-auto w-50 justify-content-center">
                    <span>Already have account?</span>
                    <a href="{{ ('/login') }}">Login Now</a>
                </div>
            </form>
        {{-- </div> --}}
    </header>
</x-loginlayout>