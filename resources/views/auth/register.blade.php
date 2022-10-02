@extends('layouts.mainweb')


@section('content')
<div class="container" style="margin:0; position: absolute; top: 50%; left: 50%; -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%);">
    <div class="row justify-content-center">
		<div class="col-md-8 col-11 card" style="background-color: transparent; box-shadow: 0px 0px 10px 10px #8fe3ae; ">
			<div class="card-body">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center justify-content-center">
						<img src="{{asset('mainweb/images/maskot/maskotsamping.png')}}" class="img-fluid" width=250 alt="png image" id="login-header-image">
					</div>
					<div class="col-md-6">
						<h3>Welcome Back !</h3>
						<form method="POST" action="{{ route('login') }}" class="contact-form">
							@csrf
							<div><input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address">
							@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							
							<div><input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="Password">
							@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
							
							<!-- <div style="text-align:right"><small><a href="">Forgot Password?</a></small></div> -->
							
							<input type="submit" style="width:50%" class="form-control submit-btn" value="Sign In">
						</form>
					</div>
				</div>	
			</div>
		</div>
    </div>
</div>
@endsection
