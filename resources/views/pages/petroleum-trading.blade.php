@extends('layouts.master')
@section('content')
	<!-- Breadcroumb Area -->

	<div class="breadcroumb-area bread-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcroumb-title">
						<h1>Petroleum Trading</h1>
						<h6><a href="/services">Services</a> / Petroleum Trading</h6>
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
					<a class="active" href=" {{ url('/services/petroleum-trading') }}">Petroleum Trading<span><i class="las la-arrow-right"></i></span></a>
					<a href="{{ url('/services/products-retailing') }}">Products Retailing<span><i class="las la-arrow-right"></i></span></a>
					<a href="{{ url('/services/petroleum-marketing') }}">Petroleum Marketing<span><i class="las la-arrow-right"></i></span></a>
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
					<img src="\assets\img\service\Petroleum-Trading.jpg" alt="" width="100%">
				
					
					<h2>Petroleum Trading</h2>
					<p>
						Neito Energy Petroleum Trading has an efficient and competitive trading desk with extensive knowledge in handling a wide range of 
						petroleum products, with strategic 
						infrastructure of ports, Liquid Terminals, Supply Vessels and operations & trading team based in Nigeria. As a global trading house, 
						we have a detailed overview of macro and micro trends. As physical traders, we gain direct experience of economic fundamentals 
						as they play out on the ground.
						
						
						With our expertise and extensive global network in supply, trading, operations and risk management, we are able 
						to support our customers by optimizing their fuel procurement needs and by working with them to develop strategic solutions.</p>

					
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

					 
<h5>Neito Energy Petroleum Trading Also Actively Assists on Several Other Types of Oil and Gas Investments </h5>

<p>Broadly speaking, we facilitate four main types of oil and gas investments:</p>

<h6>1. Exploration</h6>
<p>These companies or projects buy or lease land and invest money in drilling. If they strike oil, the investment can pay off 10 times over – sometimes much more if the company uses borrowed money (leverage) to finance operations. If not, they may lose nearly everything they invested in that particular project. Pure exploration companies are best suited for those with very high tolerance for investment risk. These plays are highly speculative.

	
<h6>2. Developing</h6>
<p>These projects drill near proven reserves, hoping to unlock further value. These are somewhat less speculative, but there are never any guarantees that their efforts on any one plot of land will bear fruit.

	
<h6>3. Income</h6>
<p>These projects involve the acquisition of plots of land, either through lease or purchase, over proven oil and gas reserves, and seek to create a steady stream of income over and above expenses. This is generally the safest way to get involved specifically in the drilling and extraction operations, and is more of an income play than a speculative play. The risk is that the oil or natural gas will run out faster than expected.
</p>
<div class="row">
	<div class="col-lg-6">
		<div class="single-serv-bg mt-50 pb-20">
			<img src="\assets\img\service\Pipeline.jpg" alt="" width="100%" height="370px">
			
			
		</div>
	</div>
	<div class="col-lg-6">
		<div class="single-serv-bg mt-50 pb-20">
			<img src="\assets\img\service\Petroleum-Trading-2.jpg" alt="" width="100%" height="370px">
			
		</div>
	</div>
</div>

<p>This investment is for those seeking a passive income stream, but who can take on more risk than those investing in other traditional income generators, like investment grade bonds and annuities.
</p>

<h6>4. Services and Support</h6>
<p>These companies provide a nearly unlimited menu of supporting services to the oil and gas industry. Examples include transportation, shipping and logistics companies, pipeline companies, construction and rigging companies, drilling and refining hardware and equipment manufacturers, refiners, and many others.
</p>

<p>Investing in these companies is similar to investing in any other company involved in B2B services, logistics, technology, and the like. Some of these investments don’t rely on increasing fuel prices to be profitable. For example, pipelines make money by charging a fee per barrel transported. They’ll make roughly the same amount regardless of whether fuel prices rise or fall, as long as demand remains consistent.
	</p>				
	
				
					<hr>

					<br>

				</div>
			</div>
		</div>
	</div>
</div>



@endsection