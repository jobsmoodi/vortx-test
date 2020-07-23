<?php /* Template Name: Order */ 

get_header(); ?>

<section class="orderSec">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-8">
				<div class="Heading__bar mb-5">
					<h1 class="text-uppercase text-center font-weight-bold display-3">Pre-order-today</h1>
					<p class="text-lg text-full">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-12">
				<form method="post" class="orderForm">
					<div class="row">
						<div class="col-12 col-md-3">
							<label class="text-uppercase">Your Name <span>*</span></label>	
						</div>
						<div class="col-12 col-md-9">
							<div class="form-group position-relative">
								<input type="text" name="user_name" placeholder="Your name" class="input__control">
								<span class="formIcon"><i class="fa fa-user"></i></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-3">
							<label class="text-uppercase">Company <span>*</span></label>	
						</div>
						<div class="col-12 col-md-9">
							<div class="form-group position-relative">
								<input type="text" name="company" placeholder="Your Company" class="input__control">
								<span class="formIcon"><i class="fa fa-building-o"></i></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-3">
							<label class="text-uppercase">Installation Address <span>*</span></label>	
						</div>
						<div class="col-12 col-md-9">
							<div class="form-group position-relative">
								<input type="text" name="address" placeholder="Address line one" class="input__control">
								<span class="formIcon"><i class="fa fa-address-book"></i></span>
							</div>
							<div class="form-group position-relative">
								<input type="text" name="city" placeholder="City" class="input__control">
								<span class="formIcon"><i class="fa fa-address-book"></i></span>
							</div>
							<div class="row">
								<div class="col-12 col-md-4">
									<div class="form-group position-relative">
										<input type="text" name="country" placeholder="Country" class="input__control">
										<span class="formIcon"><i class="fa fa-flag"></i></span>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group position-relative">
										<input type="text" name="state" placeholder="State/Province" class="input__control">
										<span class="formIcon"><i class="fa fa-flag"></i></span>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group position-relative">
										<input type="text" name="postal_code" placeholder="Postal Code" class="input__control">
										<span class="formIcon"><i class="fa fa-map-marker"></i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-3">
							<label class="text-uppercase">Best phone number <span>*</span></label>	
						</div>
						<div class="col-12 col-md-9">
							<div class="form-group position-relative">
								<input type="text" name="phone" placeholder="Phone" class="input__control">
								<span class="formIcon"><i class="fa fa-mobile"></i></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-3">
							<label class="text-uppercase">Your Email <span>*</span></label>	
						</div>
						<div class="col-12 col-md-9">
							<div class="form-group position-relative">
								<input type="email" name="email_address" placeholder="Email Address" class="input__control">
								<span class="formIcon"><i class="fa fa-envelope"></i></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-3">
							<label class="text-uppercase">Website <span>*</span></label>	
						</div>
						<div class="col-12 col-md-9">
							<div class="form-group position-relative">
								<input type="text" name="website" placeholder="Write Here" class="input__control">
								<span class="formIcon"><i class="fa fa-film"></i></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-12">
							<label class="mb-3">How Did You Find Us?</label>	
							<div class="radio__list find_us">
								<label class="radio-container">Trade Show
								  	<input type="radio" name="trade" value="trade_show">
								  	<span class="radio-checkmark"></span>
								</label>
								<label class="radio-container">Trade Publication
								  	<input type="radio" name="trade" value="trade_publication">
								  	<span class="radio-checkmark"></span>
								</label>
								<label class="radio-container">Online Search
								  	<input type="radio" name="trade" value="online_search">
								  	<span class="radio-checkmark"></span>
								</label>
								<label class="radio-container">Friend or Industry Contact
								  	<input type="radio" name="trade" value="friend_industry">
								  	<span class="radio-checkmark"></span>
								</label>
								<label class="radio-container">Other
								  	<input type="radio" name="trade" value="other">
								  	<span class="radio-checkmark"></span>
								</label>
							</div>
						</div>
					</div>
					<hr class="mt-5">
					<div class="formtitle mb-4">If you would like a budgetary quote fill in the information below</div>
					<div class="row mb-3">
						<div class="col-12 col-lg-6">
							<div class="row">
								<div class="col-12 col-md-4">
									<label class="text-uppercase">Roaster Model <span>*</span></label>	
								</div>
								<div class="col-12 col-md-8">
									<div class="form-group position-relative">
										<input type="text" name="roaster_modal" placeholder="Write Here" class="input__control">
										<span class="formIcon"><i class="fa fa-fire"></i></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-4">
									<label class="text-uppercase">Roaster Capacity <span>*</span></label>	
								</div>
								<div class="col-12 col-md-8">
									<div class="form-group position-relative">
										<input type="text" name="roaster_capacity" placeholder="Write Here" class="input__control">
										<span class="formIcon"><i class="fa fa-glass"></i></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-12 mb-3">
									<label class="text-uppercase mb-0">Current Exhaust Treatment <span>*</span></label>
									<small class="font-italic d-block">Check all that apply</small>	
								</div>
								<div class="col-12 col-md-12">
									<div class="form-group position-relative">
										<div class="checkbox__list exhaust_treat">
											<label class="check-container text-uppercase">Chaff Collector
											  	<input type="checkbox" name="treat1[0]" value="chaff_collector">
											  	<span class="check-checkmark"></span>
											</label>
											<label class="check-container text-uppercase">Afterburner
											  	<input type="checkbox" name="treat1[1]" value="afterburner">
											  	<span class="check-checkmark"></span>
											</label>
											<label class="check-container text-uppercase">Electrostatic Filter
											  	<input type="checkbox" name="treat1[2]" value="electrostatic_filter">
											  	<span class="check-checkmark"></span>
											</label>
											<label class="check-container text-uppercase">Media Bed Filter
											  	<input type="checkbox" name="treat1[3]" value="media_bed">
											  	<span class="check-checkmark"></span>
											</label>
											<label class="check-container text-uppercase">Ozone
											  	<input type="checkbox" name="treat1[4]" value="ozone">
											  	<span class="check-checkmark"></span>
											</label>
											<label class="check-container text-uppercase">Other
											  	<input type="radio" name="treat1[5]" value="other">
											  	<span class="check-checkmark"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="row mb-2">
								<div class="col-12 col-md-12">
									<label class="text-uppercase">The vortax shall address <span>*</span></label>	
								</div>
								<div class="col-12 col-md-12">
									<div class="form-group position-relative">
										<div class="radio__list shall_address">
											<label class="radio-container text-uppercase">Roasting Exhaust
											  	<input type="radio" name="roast" value="roasting_exhaust">
											  	<span class="radio-checkmark"></span>
											</label>
											<label class="radio-container text-uppercase">Cooling Exhaust
											  	<input type="radio" name="roast" value="cooling_exhaust">
											  	<span class="radio-checkmark"></span>
											</label>
											<label class="radio-container text-uppercase">Both
											  	<input type="radio" name="roast" value="both">
											  	<span class="radio-checkmark"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="row mb-2">
								<div class="col-12 col-md-12">
									<label class="text-uppercase">Production Zoning <span>*</span></label>	
								</div>
								<div class="col-12 col-md-12">
									<div class="form-group position-relative">
										<div class="radio__list product_zon">
											<label class="radio-container text-uppercase">Resedential
											  	<input type="radio" name="resedential" value="resedential">
											  	<span class="radio-checkmark"></span>
											</label>
											<label class="radio-container text-uppercase">Industrial
											  	<input type="radio" name="resedential" value="industrial">
											  	<span class="radio-checkmark"></span>
											</label>
											<label class="radio-container text-uppercase" value="roasting_exhaust">Mixed
											  	<input type="radio" name="resedential" value="mixed">
											  	<span class="radio-checkmark"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="row mb-2">
								<div class="col-12 col-md-4">
									<label class="text-uppercase mb-0">Maximum Airflow</label>
									<small class="font-italic d-block">in m3/h or cf/h</small>
								</div>
								<div class="col-12 col-md-8">
									<div class="form-group position-relative">
										<input type="text" name="max_airflow" placeholder="Please specify m3/h or cf/h" class="input__control not-required">
										<span class="formIcon"><i class="fa fa-mixcloud"></i></span>
									</div>
								</div>
							</div>
							<div class="row mb-2">
								<div class="col-12 col-md-4">
									<label class="text-uppercase mb-0">Roaster Blower Outlet Diameter</label>
									<small class="font-italic d-block">in cm or inch</small>
								</div>
								<div class="col-12 col-md-8">
									<div class="form-group position-relative">
										<input type="text" name="roasted_blower" placeholder="Please specify cm or inch" class="input__control not-required">
										<span class="formIcon"><i class="fa fa-dot-circle-o"></i></span>
									</div>
								</div>
							</div>
							<div class="row mb-2">
								<div class="col-12 col-md-12">
									<label class="text-uppercase">Project Timeline <span>*</span></label>	
								</div>
								<div class="col-12 col-md-12">
									<div class="form-group position-relative">
										<div class="radio__list project_timeline">
											<label class="radio-container text-uppercase">Asap
											  	<input type="radio" name="project" value="asap">
											  	<span class="radio-checkmark"></span>
											</label>
											<label class="radio-container text-uppercase" >60 Days
											  	<input type="radio" name="project" value="60_days">
											  	<span class="radio-checkmark"></span>
											</label>
											<label class="radio-container text-uppercase" >90 Days
											  	<input type="radio" name="project" value="90_days">
											  	<span class="radio-checkmark"></span>
											</label>
											<label class="radio-container text-uppercase" >No Project Timeline
											  	<input type="radio" name="project" value="no_project">
											  	<span class="radio-checkmark"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-12 col-lg-6">
							<div class="row">
								<div class="col-12 col-md-4">
									<label class="text-uppercase">Roaster Model <span>*</span></label>	
								</div>
								<div class="col-12 col-md-8">
									<div class="form-group position-relative">
										<input type="text" name="roaster_model2" placeholder="Write Here" class="input__control">
										<span class="formIcon"><i class="fa fa-fire"></i></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-4">
									<label class="text-uppercase">Roaster Capacity <span>*</span></label>	
								</div>
								<div class="col-12 col-md-8">
									<div class="form-group position-relative">
										<input type="text" name="roaster_capacity2" placeholder="Write Here" class="input__control">
										<span class="formIcon"><i class="fa fa-glass"></i></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-12 mb-3">
									<label class="text-uppercase mb-0">Current Exhaust Treatment <span>*</span></label>
									<small class="font-italic d-block">Check all that apply</small>	
								</div>
								<div class="col-12 col-md-12">
									<div class="form-group position-relative">
										<div class="checkbox__list exahust_treat2">
											<label class="check-container text-uppercase">Chaff Collector
											  	<input type="checkbox" name="treat[0]" value="chaff_collector">
											  	<span class="check-checkmark"></span>
											</label>
											<label class="check-container text-uppercase">Afterburner
											  	<input type="checkbox" name="treat[1]" value="afterburner">
											  	<span class="check-checkmark"></span>
											</label>
											<label class="check-container text-uppercase">Electrostatic Filter
											  	<input type="checkbox" name="treat[2]" value="electrostatic_filter">
											  	<span class="check-checkmark"></span>
											</label>
											<label class="check-container text-uppercase">Media Bed Filter
											  	<input type="checkbox" name="treat[3]" value="media_bed">
											  	<span class="check-checkmark"></span>
											</label>
											<label class="check-container text-uppercase">Ozone
											  	<input type="checkbox" name="treat[4]" value="ozone">
											  	<span class="check-checkmark"></span>
											</label>
											<label class="check-container text-uppercase">Other
											  	<input type="checkbox" name="treat[5]" value="other">
											  	<span class="check-checkmark"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="row mb-2">
								<div class="col-12 col-md-12">
									<label class="text-uppercase">The vortax shall address <span>*</span></label>	
								</div>
								<div class="col-12 col-md-12">
									<div class="form-group position-relative">
										<div class="radio__list shall_address2">
											<label class="radio-container text-uppercase">Roasting Exhaust
											  	<input type="radio" name="roast1" value="roasting_exhaust">
											  	<span class="radio-checkmark"></span>
											</label>
											<label class="radio-container text-uppercase">Cooling Exhaust
											  	<input type="radio" name="roast1" value="cooling_exhaust">
											  	<span class="radio-checkmark"></span>
											</label>
											<label class="radio-container text-uppercase">Both
											  	<input type="radio" name="roast1" value="both">
											  	<span class="radio-checkmark"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="row mb-2">
								<div class="col-12 col-md-12">
									<label class="text-uppercase">Production Zoning <span>*</span></label>	
								</div>
								<div class="col-12 col-md-12">
									<div class="form-group position-relative">
										<div class="radio__list product_zon2">
											<label class="radio-container text-uppercase">Resedential
											  	<input type="radio" name="resedential1" value="resedential">
											  	<span class="radio-checkmark"></span>
											</label>
											<label class="radio-container text-uppercase">Industrial
											  	<input type="radio" name="resedential1" value="industrial">
											  	<span class="radio-checkmark"></span>
											</label>
											<label class="radio-container text-uppercase">Mixed
											  	<input type="radio" name="resedential1" value="Mixed">
											  	<span class="radio-checkmark"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="row mb-2">
								<div class="col-12 col-md-4">
									<label class="text-uppercase mb-0">Maximum Airflow</label>
									<small class="font-italic d-block">in m3/h or cf/h</small>
								</div>
								<div class="col-12 col-md-8">
									<div class="form-group position-relative">
										<input type="text" name="max_airflow2" placeholder="Please specify m3/h or cf/h" class="input__control not-required">
										<span class="formIcon"><i class="fa fa-mixcloud"></i></span>
									</div>
								</div>
							</div>
							<div class="row mb-2">
								<div class="col-12 col-md-4">
									<label class="text-uppercase mb-0">Roaster Blower Outlet Diameter</label>
									<small class="font-italic d-block">in cm or inch</small>
								</div>
								<div class="col-12 col-md-8">
									<div class="form-group position-relative">
										<input type="text" name="roasted_blower2" placeholder="Please specify cm or inch" class="input__control not-required">
										<span class="formIcon"><i class="fa fa-dot-circle-o"></i></span>
									</div>
								</div>
							</div>
							<div class="row mb-2">
								<div class="col-12 col-md-12">
									<label class="text-uppercase">Project Timeline <span>*</span></label>	
								</div>
								<div class="col-12 col-md-12">
									<div class="form-group position-relative">
										<div class="radio__list project_timeline2">
											<label class="radio-container text-uppercase">Asap
											  	<input type="radio" name="project1" value="asap">
											  	<span class="radio-checkmark"></span>
											</label>
											<label class="radio-container text-uppercase" >60 Days
											  	<input type="radio" name="project1" value="60_days">
											  	<span class="radio-checkmark"></span>
											</label>
											<label class="radio-container text-uppercase">90 Days
											  	<input type="radio" name="project1" value="90_days">
											  	<span class="radio-checkmark"></span>
											</label>
											<label class="radio-container text-uppercase">No Project Timeline
											  	<input type="radio" name="project1" value="no_project">
											  	<span class="radio-checkmark"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-12 text-center">
							<button type="submit" id="custom_submit_order" class="btn btnprimary text-uppercase">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>