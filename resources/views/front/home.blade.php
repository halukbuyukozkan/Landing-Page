@extends('layouts.master')

@section('content')
<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		@include('front.slider')

		<!-- Content
		============================================= -->
		<section id="content" style="background-color: #1D1D1D">
			<div class="content-wrap" >

				@include('front.about')

				<div class="container clearfix">

					<div id="portfolio" class="portfolio row grid-container gutter-30" data-layout="fitRows">
						@foreach ($products as $product)
							<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-media pf-icons">
								<div class="grid-inner">
									<div class="portfolio-image">
										<a href="#">
											<img src="{{ asset('storage/products/' . $product->image) }}" alt="Open Imagination">
										</a>
										<div class="bg-overlay">
											<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
												<a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
												<a href="{{ route('front.category.product.show',['category' => $product->category , 'product' => $product]) }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a class="text-white" href="{{ route('front.category.product.show',['category' => $product->category , 'product' => $product]) }}">{{ $product->title }}</a></h3>
										<span>{{ $product->description }}</span>
									</div>
								</div>
							</article>
						@endforeach			
					</div>
				</div>

				<div class="section topmargin-sm footer-stick">

					<h4 class="text-uppercase text-center">What <span>Clients</span> say?</h4>

					<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/3.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
										<div class="testi-meta">
											Steve Jobs
											<span>Apple Inc.</span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/2.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
										<div class="testi-meta">
											Collis Ta'eed
											<span>Envato Inc.</span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/1.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
										<div class="testi-meta">
											John Doe
											<span>XYZ Inc.</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section><!-- #content end -->

		<section id="content" style="background-color: #1D1D1D">
			<div class="content-wrap" >


				<div class="clearfix">
					<div class="slide-wrapper2">
						@foreach ($examples as $example)
								<div class="col-sm-6 col-lg-3 slider-item">
									<div class="feature-box media-box">
										<div class="fbox-media">
											<img src="{{ asset('storage/examples/' . $example->image)}}" alt="Why choose Us?">
										</div>
									</div>
								</div>
						@endforeach
						</div>
					<div class="section parallax" style="background-image: url('images/parallax/3.jpg');" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
						<div class="heading-block center border-bottom-0 mb-0">
							<h2 style="color:#E9E8E5">"Everything is designed, but some things are designed well."</h2>
						</div>
					</div>	
				</div>
			</div>
		</section>

	</div><!-- #wrapper end -->

</body>
@endsection
