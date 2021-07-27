@extends('layouts.master')
@section('content')

  <!-- Breadcroumb Area -->

  <div class="breadcroumb-area bread-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcroumb-title">
					<h1>Additional Services</h1>
					<h6><a href="/services">Services</a> / Additional Services</h6>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- FAQ Section  -->

<div class="faq-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mt-40 wow fadeInRight" data-wow-delay=".4s">
				<div class="section-title">
					<h6>Additional Services</h6>
					<h2>Providing<b> First <br> Class</b> Services</h2>
				</div>
				<div class="styled-faq">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading active" role="tab" id="headingOne">
								<h6 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<h5>Car Evacaution</h5>
										<i class="fa fa-angle-up"></i>
										<i class="fa fa-angle-down"></i>
									</a>
								</h6>
							</div>
							<div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">
									Neito Energy Auto Dept evaluation team of experts will provide prospective car buyers an independent and factual assessment on the
									 exterior and interior condition of pre-owned cars. The assessment will help car
									 buyers to get a sense of the actual condition of the pre-owned car and help them make the final decision on buying.

									{{-- Whether you're selling or buying a new/used vehicle it can benefit you to have a non-biased and professional
									third party evaluate the vehicle. Plus there are other benefits to meeting at Neito Energy Auto Department. --}}
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h6 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<h5>Lubricants Oils Sales</h5>
										<i class="fa fa-angle-up"></i>
										<i class="fa fa-angle-down"></i>
									</a>
								</h6>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
									End to End Lubricant Solutions 
									Our expertise lies in providing the highest quality lubricants alongside the proper lubrication
									 processes and services that create sustainable value for customers. 
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h6 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										<h5>Wheels Pumping</h5>
										<i class="fa fa-angle-up"></i>
										<i class="fa fa-angle-down"></i>
									</a>
								</h6>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">
									We are instrumental in presenting a quality approved Wheels Pumping Services to our esteemed customers.
									 
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading active" role="tab" id="headingSeven">
								<h6 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
										<h5>Engine Repair</h5>
										<i class="fa fa-angle-up"></i>
										<i class="fa fa-angle-down"></i>
									</a>
								</h6>
							</div>
							<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
								<div class="panel-body">
									We offer comprehensive engine repair and maintenance services. From engine system analysis to engine rebuilding,
									 we are your one-stop shop for auto services

							
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 wow fadeInRight" data-wow-delay=".3s">
				<div class="faq-bg bg-cover">
				</div>
			</div>
		</div>
	</div>
</div>
  
@endsection