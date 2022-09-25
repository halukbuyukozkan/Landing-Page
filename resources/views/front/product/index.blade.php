@extends('layouts.master')

@section('content')
	<section id="content" style="background-color: #1D1D1D">
        <section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row gutter-40 col-mb-80">
						<!-- Post Content
						============================================= -->
						<div class="postcontent col-lg-9 order-lg-last">
							<!-- Portfolio Items
							============================================= -->
                            <div class="container">
                                <div id="portfolio" class="portfolio row grid-container gutter-20">
                                    @foreach($products as $product)
                                    <article class="portfolio-item col-sm-6 col-12 pf-media pf-icons">
                                        <div class="grid-inner">
                                            <div class="portfolio-image">
                                                <a href="{{ route('front.category.product.show',['category' => $product->category , 'product' => $product]) }}">
                                                    <img class="rounded" src="{{ asset('storage/products/' . $product->image) }}" alt="Open Imagination">
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
                                                <h3><a href="{{ route('front.category.product.show',['category' => $product->category , 'product' => $product]) }}">{{ $product->name }}</a></h3>
                                                <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                            </div>
                                        </div>
                                    </article>
                                    @endforeach
    
                                </div>
                            </div>
							<!-- #portfolio end -->

						</div><!-- .postcontent end -->

					</div>

				</div>
			</div>
		</section>
	</section>
@endsection

