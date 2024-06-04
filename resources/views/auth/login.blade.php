<x-loginlayout>
    <x-slot:title>{{ $title }}</x-slot>
    <header class="login-page">
        <div class="title" ><a class="title" href="{{( '/') }}">
            <h1 class="first text-third">Eco</h1>
            <h1 class="next">Shop</h1>
            </a>
        </div>
        <div class="container px-0 konten ">
            <h2 class="login-title">Login</h2>
            <div class="input-group d-flex mx-auto w-50">
                <h5 class="title-email">E-mail</h5>
                <div class="input-group d-flex mx-auto ">
                    <input class="form-control" type="text" placeholder="Masukkan E-mail">
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
            <div class="reset-password mx-auto w-50">
                <span>Forgot Password?</span>
                <a href="#">Reset Password</a>
            </div>
            <button type="submit" class="btn btn-primary to-login w-50 mx-auto py-2 border-0 border-secondary position-relative d-flex rounded-pill text-white text-center justify-content-center">Login</button>
            <div class="register mx-auto w-50 justify-content-end">
                <span>Don't have account?</span>
                <a href="{{ ('/register') }}">Register Now</a>
            </div>
        </div>
    </header>
</x-loginlayout>