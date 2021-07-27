@extends('layouts.master')
@section('content')
 
		<!-- Breadcroumb Area -->

		<div class="breadcroumb-area bread-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcroumb-title">
							<h1>Products-Retailing</h1>
							<h6><a href="/services">Services</a> / Products-Retailing</h6>
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
						<a class="active" href="{{ url('/services/products-retailing') }}">Products Retailing<span><i class="las la-arrow-right"></i></span></a>
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
						<img src="\assets\img\service\retailing.jpg" alt="" width="100%">
					
						<h2>Products Retailing</h2>
						<p>
							Neito Energy delivers high-quality petroleum products that enrich the lives of our customers and help fuel the nation’s economy. Specializing 
							in storage, marketing and distribution, our experience also extends to importation of refined petroleum products. Our products marketing
							 operations (downstream activities) are concentrated in the Western, Eastern, Northern and Southern region of Nigeria.</p>

							
							
							<p>Neito Energy is a diversified distributor of petroleum products in Nigeria. We offer commercial, retail, wholesale and residential petroleum products 
								such as PMS, AGO and DPK to customers through our branded stations throughout the country. Neito Energy has evolved into a multi branded
								 multi-petroleum product distributor with sales exceeding 15 million litres annually.
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
	
						 
	
	
	<p>Through our marketing division, we supply petroleum products to consumer end-users within our market area. Neito Energy recently entered the lubricant business, 
		blending and marketing motor engine oils and specialties throughout the nation. The company’s retail operations include Neito Energy branded petrol stations.
	</p>
	
	
	<div class="row">
		<div class="col-lg-6">
			<div class="single-serv-bg mt-50 pb-20">
				<img src="\assets\img\service\3.jpg" alt="" width="100%" height="370px">
				
				
			</div>
		</div>
		<div class="col-lg-6">
			<div class="single-serv-bg mt-50 pb-20">
				<img src="\assets\img\service\retailing-2.jpg" alt="" width="100%" height="370px">
				
			</div>
		</div>
	</div>
	<p>The distribution department manages the competitive bidding process to efficiently obtain products from different source for delivery to our numerous customers. The company has over the years been rendering services to ChevronTexaco now MRS across the country, a partnership which has been described as rewarding.
	</p>
	<hr>
	<p>This investment is for those seeking a passive income stream, but who can take on more risk than those investing in other traditional income generators, like investment grade bonds and annuities.
	</p>
	
	<h5> Services and Support</h5>
	<p>These companies provide a nearly unlimited menu of supporting services to the oil and gas industry. Examples include transportation, shipping and logistics companies, pipeline companies, construction and rigging companies, drilling and refining hardware and equipment manufacturers, refiners, and many others.
	</p>
	
				
		
					
						<hr>
	
						<br>
	
					</div>
				</div>
			</div>
		</div>
	</div>
	
			
   
@endsection