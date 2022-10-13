@extends('layouts.mainweb')

@section('title')
ICF 2022 - LOGIN
@endsection
@section('style')
<style>
    .wavy {
        position: relative;
        display: inline-block;
        color: #273242;
        font-size: 3rem;
        text-transform: uppercase;
        animation: animate 1s ease-in-out infinite;
        animation-delay: calc(0.1s * var(--i));
        font-weight: bold;
        -webkit-box-reflect:below -60px linear-gradient(transparent,rgba(94, 211, 160, 0.1));
    }
</style>
@endsection
@section('content')
<section id="login" style="margin: 100px 0">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session()->get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div style="width:100%;" class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-11 text-center">
                @if(session('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                </div>
                @endif
                {{-- @if(session()->has('registerClosed'))
                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session()->get('registerClosed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif --}}
            <div>
                <span class="wavy" style="--i:1;">L</span>
                <span class="wavy" style="--i:2;">O</span>
                <span class="wavy" style="--i:3;">G</span>
                <span class="wavy" style="--i:4;">I</span>
                <span class="wavy" style="--i:5;">N</span>
                <span class="wavy" style="--i:6;">&nbsp;</span>
                <span class="wavy" style="--i:7;">I</span>
                <span class="wavy" style="--i:8;">C</span>
                <span class="wavy" style="--i:9;">F</span>
                <br>
                <span class="wavy" style="--i:11;">2</span>
                <span class="wavy" style="--i:12;">0</span>
                <span class="wavy" style="--i:13;">2</span>
                <span class="wavy" style="--i:14;">2</span>
            </div>

            <form method="POST" action="{{ url('/login_detail') }}" class="mt-5">
                @csrf
                <input type="email" name="email" id="txtEmail"
                    class="myTextbox width-90 @error('email') is-invalid @enderror" placeholder="example@gmail.com">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <input type="password" name="password" id="txtPassword"
                    class="myTextbox width-90  @error('password') is-invalid @enderror" placeholder="Password">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <div class="d-flex align-items-center" style="margin-left: 5%; position: relative;">
                    <input type="checkbox" class="myChkbox mx-2" onclick="showPassword()">
                    <span class="checkmark"></span>
                    <span class="chkText">Show Password</span>
                </div>
                <button class="btn myBtn width-90 nav-link" type="submit"
                    style="background-color: red !important;">Login</button>
            </form>
            <div class="row justify-content-center">
                <p class="text-center have-account">Don't have an account yet? <a href="{{ url('/register') }}"
                        class="btn-link">Register</a></p>
            </div>
        </div>
    </div>
    </div>
</section>
@if (session('loginError'))
<script>
    toastr.danger("{ !! session('loginError') !! }");

</script>
@endif
@endsection

@section('script')

<script>
    function showPassword() {
        let txtPassword = document.getElementById("txtPassword");
        if (txtPassword.type === "password") {
            txtPassword.type = "text";
        } else {
            txtPassword.type = "password";
        }
    }

</script>
@endsection
