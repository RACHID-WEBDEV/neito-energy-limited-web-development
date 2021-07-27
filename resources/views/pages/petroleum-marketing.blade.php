@extends('layouts.master')
@section('content')
   
	<!-- Breadcroumb Area -->

	<div class="breadcroumb-area bread-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcroumb-title">
						<h1>Petroleum Marketing</h1>
						<h6><a href="/services">Services</a> / Petroleum Marketing</h6>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Service Details -->
<!-- Service Details -->

<div id="service-page" class="service-details-section section-padding pb-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="service-list">
					<h5>Service Lists</h5>
					<a href=" {{ url('/services/petroleum-trading') }}">Petroleum Trading<span><i class="las la-arrow-right"></i></span></a>
					<a href="{{ url('/services/products-retailing') }}">Products Retailing<span><i class="las la-arrow-right"></i></span></a>
					<a class="active" href="{{ url('/services/petroleum-marketing') }}">Petroleum Marketing<span><i class="las la-arrow-right"></i></span></a>
					<a href="{{ url('/services/logistics') }}">Logistics<span><i class="las la-arrow-right"></i></span></a>
					<a href="{{ url('/services/additional-service') }}">Additional Services<span><i class="las la-arrow-right"></i></span></a>

				</div>
				

				<div class="helpline-section">
					<div class="helpline-content text-center">
						<p>Providing The Energy You Need</p>
						<h4>Need Consultancy Help</h4>
						
						<a href="/contact"><button type="submit"> Contact Us</button></a>
					</div>
				</div>
			</div>

			<div class="col-lg-8">
				<div class="single-service">
					<img src="\assets\img\service\marketing.jpeg" alt="" width="100%">
				
					
					<h2>Petroleum Marketing</h2>
					<p>
						 Whether you’re an independent operator or run a large branded site, 
						 Neito Energy can offer you fast, reliable fuel distribution and a wide array of related services.</p>
						
						<h4>Quality fuel. Fast delivery. No hassles.</h4>
					<p>We deliver top-quality branded and unbranded motor fuels, heating oil, and aviation fuels where and when you need them.
						 If you’re in the Northern region, our dedicated transportation division means you’ll never have to deal with third-party delivery services:
						  just a single point of contact at Neito Energy.

						We deliver over 400 Million gallons of fuel each year—that’s one delivery every 5 minutes—so you can buy with confidence,
						 knowing your supplier has the infrastructure to handle even the largest of accounts.</p>
					
					<hr>
					
				
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="key-feature text-center pr-50">
								<div class="row justify-content-center no-gutters">
									<div class="col-lg-4">
										<div class="about-icon">
											<img src="\assets\img\icon\oil.png" alt="">
										</div>
									</div>
									<div class="col-lg-12">
										<h5>100% Pure Oil</h5>
										<p>Products Retailing at Depots <br>& Service retail Outlets</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="key-feature text-center pr-50">
								<div class="row justify-content-center no-gutters">
									<div class="col-lg-4">
										<div class="about-icon">
											<img src="\assets\img\icon\24-hours.png" alt="">
											
										</div>
									</div>
									<div class="col-lg-12">
										<h5>24 Hours Service</h5>
										<p>Our customer service and support operates 24/7, 365 days a year.</p>
										{{-- <p>Top Notch Accurate Metering<br> of Products</p> --}}
									</div>
								</div>
							</div>
						</div>
					</div>

					 
<h5>More than just fuel </h5>

<p>In addition to fuel distribution, Neito Energy runs a wide range of branded convenience stores and More Additional Services in
	Our Filling Station.</p>

	
	<p> Also Neito Energy has the experience and connections to help you develop your site, streamline operations, and increase profitability.</p>



<div class="row">
	<div class="col-lg-6">
		<div class="single-serv-bg mt-50 pb-20">
			<img src="\assets\img\service\marketing-1.jpeg" alt="" width="100%" height="370px">
			
			
		</div>
	</div>
	<div class="col-lg-6">
		<div class="single-serv-bg mt-50 pb-20">
			<img src="\assets\img\service\Petroleum-Trading-2.jpg" alt="" width="100%" height="370px">
			
		</div>
	</div>
</div>

<h2>Wholesale Fuel Supply</h2>
<p>
Neito Energy is one of the largest distributors of branded and unbranded fuels in Nigeria,
supplying over 600 sites and delivering more than 78 Million gallons of fuel annually.</p>

<p>We provide premium-quality fuels to service stations, company-operated and commission agent sites, as well as dealer sites and travel plazas.</p>	
	
				
					<hr>

					<br>

				</div>
			</div>
		</div>
	</div>
</div>



@endsection