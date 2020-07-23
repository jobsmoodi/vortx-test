
	
	<?php

		/* Template Name:  Schedule */


	 get_header(); ?>

<body>
	<!-- Schedule -->
	<section class="schedule__sec">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-8">
					<div class="Heading__bar mb-5">
						<h1 class="text-uppercase text-center font-weight-bold display-3">Schedule A Call</h1>
						<p class="text-lg text-full">At VortX KleanAir Systems, it’s important that you receive personal, tailored information based on your specific system requirements for product installation and maintenance.</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 col-lg-8">
					<form class="schedule__Form" method="post">
						<div class="form-group">
							<input type="text" name="your_name" placeholder="Your Name" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" name="your_company" placeholder="Your Company Name" class="form-control">
						</div>
						<div class="form-group">
							<input type="email" name="your_email" placeholder="Your Email" class="form-control">
						</div>
						<div class="form-group">
							<input id="datetimepicker" type="text" name="your_date" placeholder="Your date + Time Preference" class="form-control">
						</div>
						<div class="form-group">
							<textarea class="form-control" name="message" placeholder="Message"></textarea>
						</div>
						<div class="schedule__submitbtn text-right">
							<input type="submit" class="btn btnprimary text-uppercase" id="schedule_call" value="Submit" />
						</div>
					</form>	
					<p class="text-lg mt-5 text-full">Please note that a VortX KleanAir Systems representative will email you to verify your appointment date and time. Unscheduled inquiries will be answered by the VortX Klean Air Systems customer representative team as quickly as possible. </p>
				</div>
			</div>
		</div>
	</section>
	<!-- End Schedule -->

	<!-- Map -->

	<!-- End Map -->

	<!-- Conatct -->
	<section class="contact__sec bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-8">
					<div class="Heading__bar">
						<h1 class="text-uppercase text-center font-weight-bold display-3">Contact Info</h1>
						<p class="text-lg mb-4 text-full">VortX KleanAir Systems <br /> 3412 Fir Drive, Sana Rosa, CA 95405</p>
						<p class="text-lg mb-4 text-full">Phone support Monday-Friday 8AM-5PM PST: 800.854.4816</p>
						<p class="text-lg text-full mb-0">For general inquiries, please email us: <a class="anchor__link" href="mailto:info@vortxkleanair.com">info@vortxkleanair.com</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Conatct -->

	<script type="text/javascript">
	    $(function () {
            $('#datetimepicker').datetimepicker();
        });
	</script>
	<style>
		.loading img {
			max-width: 70px;
		}
	</style>
	<?php get_footer(); ?>
	
	
	