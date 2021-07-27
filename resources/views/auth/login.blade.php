
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neito Energy Login Page</title>
    <link rel="stylesheet" href="assets/css/login.css">
	<link rel="icon" href="/assets/img/favicon.png" type="image/jpg" />
  
</head>
<body>
    <section>

        <div class="box">
         
          <div class="square" style="--i:0;"></div>
          <div class="square" style="--i:1;"></div>
          <div class="square" style="--i:2;"></div>
          <div class="square" style="--i:3;"></div>
          <div class="square" style="--i:4;"></div>
          <div class="square" style="--i:5;"></div>
          
         <div class="container"> 
			 
			<div class="form"> 
				<p> <a href="/" > Home</a></p>
				<h2> NeitoEnergy Login </h2>
				<x-jet-validation-errors class="mb-4" />

				@if (session('status'))
					<div class="mb-4 font-medium text-sm text-green-600">
						{{ session('status') }}
					</div>
				@endif
				<form method="POST" action="{{ route('login') }}">
					@csrf
				<div class="inputBx">
					<input type="email" name="email" :value="old('email')" required autofocusname="username" >

					<span>Email</span>
<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNDA1LjMzMywyMTMuODc0VjEwNi42NjdjMC0yMy41MzEtMTkuMTM1LTQyLjY2Ny00Mi42NjctNDIuNjY3aC0zMjBDMTkuMTM1LDY0LDAsODMuMTM1LDAsMTA2LjY2N1YzMjANCgkJCWMwLDIzLjUzMSwxOS4xMzUsNDIuNjY3LDQyLjY2Nyw0Mi42NjdoMjM5LjIxNUMyOTUuODU4LDQxMS44NCwzNDEuMDczLDQ0OCwzOTQuNjY3LDQ0OGMyMC42MjUsMCw0MC45MDYtNS40MjcsNTguNjc3LTE1LjcwOA0KCQkJYzUuMDk0LTIuOTQ4LDYuODQ0LTkuNDY5LDMuODg1LTE0LjU3M2MtMi45NDgtNS4xMDQtOS40NzktNi44NjUtMTQuNTczLTMuODg1Yy0xNC41MjEsOC4zOTYtMzEuMTE1LDEyLjgzMy00Ny45OSwxMi44MzMNCgkJCWMtNTIuOTM4LDAtOTYtNDMuMDYzLTk2LTk2czQzLjA2My05Niw5Ni05NnM5Niw0My4wNjMsOTYsOTZ2MTAuNjY3YzAsMTEuNzYtOS41NzMsMjEuMzMzLTIxLjMzMywyMS4zMzMNCgkJCWMtMTEuNzYsMC0yMS4zMzMtOS41NzMtMjEuMzMzLTIxLjMzM3YtNDIuNjY3YzAtNS44OTYtNC43NzEtMTAuNjY3LTEwLjY2Ny0xMC42NjdjLTIuODY5LDAtNS40NDcsMS4xNjEtNy4zNjIsMw0KCQkJYy05LjQyOC04LjQwMS0yMS43MTQtMTMuNjY3LTM1LjMwNS0xMy42NjdjLTI5LjQwNiwwLTUzLjMzMywyMy45MjctNTMuMzMzLDUzLjMzM1MzNjUuMjYsMzg0LDM5NC42NjcsMzg0DQoJCQljMTUuODk2LDAsMzAuMDMtNy4xMzEsMzkuODEtMTguMjAyYzcuNzI3LDEwLjk3NywyMC40NCwxOC4yMDIsMzQuODU3LDE4LjIwMkM0OTIuODY1LDM4NCw1MTIsMzY0Ljg2NSw1MTIsMzQxLjMzM3YtMTAuNjY3DQoJCQlDNTEyLDI2OS41NjksNDY1LjA0NCwyMTkuMjg4LDQwNS4zMzMsMjEzLjg3NHogTTQyLjY2Nyw4NS4zMzNoMzIwYzAuNDQ0LDAsMC44MTYsMC4yMjcsMS4yNTQsMC4yNTRMMjExLjQzOCwyMTAuNzUNCgkJCWMtNS40MjcsMy40MTctMTMuMjkyLDIuNzA4LTE2LjgyMywwLjU0Mkw0MS40MjYsODUuNTg1QzQxLjg1OSw4NS41NTksNDIuMjI3LDg1LjMzMyw0Mi42NjcsODUuMzMzeiBNMzg0LDIxMy44NzQNCgkJCWMtNTkuNzExLDUuNDE0LTEwNi42NjcsNTUuNjk1LTEwNi42NjcsMTE2Ljc5M2MwLDMuNiwwLjIyMSw3LjE0OCwwLjU0LDEwLjY2N0g0Mi42NjdjLTExLjc2LDAtMjEuMzMzLTkuNTczLTIxLjMzMy0yMS4zMzMNCgkJCVYxMDYuNjY3YzAtMy4wMjEsMC42NjctNS44NzQsMS44MDUtOC40OGwxNTguODgzLDEzMC4yOTNjNi4yMDgsNC4wNTIsMTMuMzQ0LDYuMTg4LDIwLjY0Niw2LjE4OA0KCQkJYzcuMDIxLDAsMTMuODg1LTEuOTc5LDE5LjkyNy01LjcyOWMwLjYwNC0wLjMyMywxLjE3Ny0wLjcwOCwxLjcxOS0xLjE1NmwxNTcuODgtMTI5LjU5OGMxLjEzOSwyLjYwOCwxLjgwNyw1LjQ2MSwxLjgwNyw4LjQ4Mw0KCQkJVjIxMy44NzR6IE0zOTQuNjY3LDM2Mi42NjdjLTE3LjY0NiwwLTMyLTE0LjM1NC0zMi0zMmMwLTE3LjY0NiwxNC4zNTQtMzIsMzItMzJzMzIsMTQuMzU0LDMyLDMyDQoJCQlDNDI2LjY2NywzNDguMzEzLDQxMi4zMTMsMzYyLjY2NywzOTQuNjY3LDM2Mi42Njd6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" />				</div>
				<div class="inputBx password">
					<input id="password-input"  type="password" name="password" required autocomplete="current-password" >

					<span>Password</span>
					<a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
					<img src="https://www.flaticon.com/svg/static/icons/svg/1828/1828471.svg" alt="lock">
				</div>
				<label class="remember"><input type="checkbox">
					Remember</label>
				<div class="inputBx">
					<input type="submit" value="Log in" > 
				</div>
				</form>
				@if (Route::has('password.request'))
                                               
					<p>Forgot Password? <a href="{{ route('password.request') }}"> Click Here</a></p>
				@endif  

				<p>
					New User? <a href="{{ route('register') }}"><u>Sign up here</u></a>
				</p>
				{{-- <p>Don't have an account <a href="register.html">Sign up</a></p> --}}
			</div>
		</div>
          
        </div>
      </section>
      <script>
        function show_hide_password(target){
            var input = document.getElementById('password-input');
            if (input.getAttribute('type') == 'password') {
                target.classList.add('view');
                input.setAttribute('type', 'text');
            } else {
                target.classList.remove('view');
                input.setAttribute('type', 'password');
            }
            return false;
        }
      </script>
</body>
</html>


{{-- @extends('layouts.website')
@section('content')

			<main>


	
				<section id="breadcrumb_section" class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
					<div class="container">
						<div class="breadcrumb_content text-center" data-aos="fade-up" data-aos-delay="100">
                            <h1 class="page_title">Sign In Page</h1>
                            <h4 style="color: white;">
                                We are a full-service digital agency with global capabilities across web design and development.							</p>
                            </h4>
								
						</div>
					</div>

					<div class="deco_image spahe_1" data-aos="fade-down" data-aos-delay="300">
						<img src="/assets/assets/images/shapes/shape_1.png" alt="spahe_not_found">
					</div>
					<div class="deco_image spahe_2" data-aos="fade-up" data-aos-delay="500">
						<img src="/assets/assets/images/shapes/shape_2.png" alt="spahe_not_found">
					</div>
				</section>
			


				<section id="register_section" class="register_section sec_ptb_120 bg_gray half_bg_white clearfix">
					<div class="container">
						<div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

							<div class="col-lg-6 col-md-7 order-last">
								<div class="signin_image" data-aos="fade-up" data-aos-delay="300">
									<img src="{{asset('/assets/assets/images/register/img_1.png')}}" alt="image_not_found">
								</div>
							</div>

							<div class="col-lg-6 col-md-7 col-sm-8">
								<div class="section_title increase_size mb-80" data-aos="fade-up" data-aos-delay="400">
									<p class="mb-0">
										Welcome!
                                    </p>
                                    <h2 class="title_text mb-30">Sign in</h2>

								</div>

								<div class="reg_form signin_form" data-aos="fade-up" data-aos-delay="500">

                                    <x-jet-validation-errors class="mb-4" />

                                        @if (session('status'))
                                            <div class="mb-4 font-medium text-sm text-green-600">
                                                {{ session('status') }}
                                            </div>
                                        @endif

                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

										<div class="form_item">
											<h4 class="input_title">Email</h4>
											<input type="email" name="email" :value="old('email')" required autofocusname="username" placeholder="Email">
										</div>

										<div class="form_item">
											<h4 class="input_title">Password</h4>
											<input  type="password" name="password" required autocomplete="current-password"  placeholder="**********">
										</div>

										<div class="row mb-50">
											<div class="col-6">
												<div class="check_box">
													<input id="remember_btn" type="checkbox">
													<label for="remember_btn">Keep me signed in</label>
												</div>
											</div>

											<div class="col-6">
                                                @if (Route::has('password.request'))
                                               
                                                <a href="{{ route('password.request') }}" class="forget_btn">Forgot Password?</a>
                                            @endif  
												
											</div>
										</div>

										<button type="submit" class="btn bg_default_blue mb-30">Sign In</button>

										<p class="mb-0 text-center">
											New User? <a href="{{ route('register') }}"><u>Sign up here</u></a>
										</p>

									</form>
								</div>
							</div>

						</div>
					</div>
				</section>
			


			</main>
			
  
@endsection --}}


