@extends('layouts.app')

@section('content')
	@include('layouts.main-banner')

	<!-- categories section -->
	<section class="categories-section spad">
		<div class="container">
			<div class="section-title">
				<h2>What You Will Learn</h2>
				<p>In order to become a successful tech entrepreneur, you must first be able to understand many different topics and then understand how they fit together to create your business.</p>
			</div>
			<div class="row">
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="https://cdn-images-1.medium.com/max/2000/1*7aJPlxn8gwhI7JjcBFr-tQ.jpeg"></div>
						<div class="ci-text">
							<h5>Development</h5>
							<p>Learn the principles of development needed to launch a successful tech business. Don't worry, no coding knowledge required.</p>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="https://create.adobe.com/content/microsites/inspire/en/2018/1/9/creative_trends_for_/_jcr_content/article-marquee.img.jpg/1515522605447.jpg"></div>
						<div class="ci-text">
							<h5>UI/UX Design</h5>
							<p>Things must work, however, in order to make a good first impression, you must first learn some principles about design. Remember, first impressions matter.</p>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="https://s3-us-west-2.amazonaws.com/hs-production-blog/blog/wp-content/uploads/2017/10/30171151/BLOG-HS_NIKE-Dec18-GrowthMindset_P1-1600x700.jpg"></div>
						<div class="ci-text">
							<h5>Mindset</h5>
							<p>Your business is often a reflection of the thoughts and beliefs that you have internally. Once you improve your mind, your business will improve as well.</p>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="https://thehiringadvisors.com/wp-content/uploads/2018/07/training-sales-team-investment-open-graph.png"></div>
						<div class="ci-text">
							<h5>Sales</h5>
							<p>Without learning the basics of sales, such as the psychological breakdown behind a transaction, it will be very hard to create things that are sell-able.</p>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="https://cdn-images-1.medium.com/max/2000/1*bMl0zoLkWkZTIHHrdwbaJA.png"></div>
						<div class="ci-text">
							<h5>Psychology</h5>
							<p>This is the bedrock of both sales and marketing. Without learning psychology, you'll be left wondering why your sales and marketing isn't working.</p>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="https://www.prestigeacademy.co.za/wp-content/uploads/2018/10/marketing-digital.png"></div>
						<div class="ci-text">
							<h5>Marketing</h5>
							<p>It's no longer enough to just create an amazing product. You must also be able to get the attention of your target audience with marketing.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- categories section end -->

	{{-- <!-- signup section -->
	<section class="signup-section spad">
		<div class="signup-bg set-bg" data-setbg="https://assets.entrepreneur.com/content/3x2/2000/20150824161251-wordpress-blogging-writing-typing-macbook-laptop-computer-technology-business-working.jpeg"></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="signup-warp">
						<div class="section-title text-white text-left">
							<h2>Sign up to contribute to our blog</h2>
							<p>Share what you know with others. Gain traffic for your website. Build your own community. It's a win all around.</p>
						</div>
						<!-- signup form -->
						<form class="signup-form">
							<h4 class="text-center mb-4">Become a Guest Writer</h4>
							<div class="row">
								<div class="col-12">
									<input type="text" class="form-control" placeholder="Name" name="name" required>
								</div>

								<div class="col-12">
									<input type="text" class="form-control" placeholder="Email" name="name" required>
								</div>

								<div class="col-12">
									<label>Select a category to write for:</label>
									<select class="form-control">
										<option value="Development">Development</option>
										<option value="Design">Design</option>
										<option value="Mindset">Mindset</option>
										<option value="Sales">Sales</option>
										<option value="Psychology">Psychology</option>
										<option value="Marketing">Marketing</option>
									</select>
								</div>

								<div class="col-12 mt-4">
									<input type="submit" value="Start Writing" class="site-btn">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- signup section end --> --}}

	{{-- @include('layouts.bottom-cta') --}}
@endsection