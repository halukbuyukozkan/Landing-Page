@extends('layouts.master')

@section('content')
	<section id="content" style="background-color: #E9E8E5">
		<div class="content-wrap">
			<div class="container clearfix">

				<div class="row">
					<div class="text-center d-flex justify-content-center">
						<div class="col-lg-4">
							<div class="portfolio-image">
								<div class="grid-inner">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												@foreach($product->images as $image)
												<div class="slide"><img src="{{ asset($image->url) }}" alt="Morning Dew"></div>
												@endforeach
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="mt-2">
								<h2>{{ $product->title }}</h2>
							</div>
						</div>
					</div>
				</div>

				<div class="row gutter-40 col-mb-80 text-center d-flex justify-content-center">
					<!-- Post Content
					============================================= -->
					<div class="postcontent col-lg-4 order-lg-last">
						<!-- Portfolio Items
						============================================= -->
						<div class="container">
							<div class="card" style="background-color: white">
								<div class="card-body">
									<div>
										<h3>Properties</h3>
									</div>
									<div>
										<div>
											<h4 class="border-bottom d-inline-block">Surface</h4>
										</div>
										@foreach ($surfaces as $property)
										<div>{{ $property->name }}</div>
									 	@endforeach
									</div>
									<div>
										<div class="pt-5">
											<h4 class="border-bottom d-inline-block">Dimensions</h4>
										</div>
										@foreach ($dimensions as $property)
										<div>{{ $property->name }}</div>
									 	@endforeach
									</div>
									<div>
										<div class="pt-5">
											<h4 class="border-bottom d-inline-block">Availables</h4>
										</div>
										@foreach ($availables as $property)
										<div>{{ $property->name }}</div>
									 	@endforeach
									</div>
								</div>
							</div>
						</div>
						<!-- #portfolio end -->

					</div><!-- .postcontent end -->
					<div class="postcontent col-lg-4 order-lg-last">
						<!-- Portfolio Items
						============================================= -->
						<div class="container">
							<div class="card" style="background-color: white">
								<div class="card-body">
									<div>
										<h3>Usage</h3>
								   </div>
								   <div>
									   @foreach ($usages as $property)
									   <div><h4><i class="icon-line-check"></i>{{ $property->name }}</h4></div>
										@endforeach
								   </div>
								</div>
							</div>
						</div>
						<!-- #portfolio end -->

					</div>

				</div>

			</div>
		</div>
	</section>
@endsection

