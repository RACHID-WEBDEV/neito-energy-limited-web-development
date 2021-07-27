@extends('layouts.master')
@section('content')
  	<!-- Breadcroumb Area -->

	<div class="breadcroumb-area bread-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcroumb-title">
						<h1>Logistics</h1>
						<h6><a href="/services">Services</a> / Logistics</h6>
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
					<a  href=" {{ url('/services/petroleum-trading') }}">Petroleum Trading<span><i class="las la-arrow-right"></i></span></a>
					<a href="{{ url('/services/products-retailing') }}">Products Retailing<span><i class="las la-arrow-right"></i></span></a>
					<a href="{{ url('/services/petroleum-marketing') }}">Petroleum Marketing<span><i class="las la-arrow-right"></i></span></a>
					<a class="active" href="{{ url('/services/logistics') }}">Logistics<span><i class="las la-arrow-right"></i></span></a>
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
					<img src="\assets\img\service\logistics.jpg" alt="" width="100%">
				
					
					<h2>Logistics</h2>
					<p>
						Neito Energy offers petroleum additives for Nigerias and has over 11 years of experience
						 to its credit.

We are a flexible and customer focused company providing a first class customer service. We aim for world 
class performance by understanding and serving our clients, by continuously improving quality, health and safety,
 protecting the environment, and optimising the supply chain.

</p>

					
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

					 
<h2>Our Expertise </h2>

<p>We offers products specifically developed for fuel that keeps clients safe. we also offer a fast track service of unique products tailored
	to meet our clients needs and specifications.</p>

	<p>We have been actively involved in the transport industry Across Nigeria with our transportation fuel logistics capabilities, such as
		 competitive fuel
		transportation and transportation security products.</p>

<div class="row">
	<div class="col-lg-6">
		<div class="single-serv-bg mt-50 pb-20">
			<img src="\assets\img\service\logistics-2.jpg" alt="" width="100%" height="370px">
			
			
		</div>
	</div>
	<div class="col-lg-6">
		<div class="single-serv-bg mt-50 pb-20">
			<img src="\assets\img\service\logistics-1.png" alt="" width="100%" height="370px">
			
		</div>
	</div>
</div>



<h2>Our Capabilities</h2>
<p>	We work closely with our global network of agents and distributors to provide excellent technical and commercial 
	local support to the end users.	
				
	</p>				
	
<p>These companies provide a nearly unlimited menu of supporting services to the oil and gas industry.
	 Examples include transportation, shipping and logistics companies, pipeline companies, construction and rigging companies,
	  drilling and refining hardware and equipment manufacturers, refiners, and many others.
</p>


	

					<hr>

					<br>

				</div>
			</div>
		</div>
	</div>
</div>


@endsection