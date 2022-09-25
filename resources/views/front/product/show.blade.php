@extends('layouts.master')

@section('content')
	<section id="content" style="background-color: #E9E8E5">
		<div class="content-wrap">
			<div class="container clearfix">

				<div class="row">
					<div class="text-center">
						<div>
							<img class="rounded-3" src="{{ asset('storage/products/' . $product->image) }}" alt="">
						</div>
						<div class="mt-2">
							<h2>{{ $product->title }}</h2>
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
									 <h3>Properties</h3>
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
									 <h3>Properties</h3>
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

