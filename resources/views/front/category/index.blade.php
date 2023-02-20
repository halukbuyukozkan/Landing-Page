@extends('layouts.master')

@section('content')
	<section id="content" style="background-color: #1D1D1D">
        <section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row gutter-40 col-mb-80">
						<!-- Post Content
						============================================= -->
						<div class="postcontent col-lg-12 order-lg-last ">

							<!-- Portfolio Items
							============================================= -->
                            <div class="container">
                                <div id="portfolio" class="portfolio row grid-container gutter-20">
                                    <div class="col-md-12 d-flex justify-content-center">
                                    @foreach($category->categories as $subcategory)
                                    <article class="portfolio-item col-sm-4 col-md-3 pf-media pf-icons text-center">
                                        <div class="grid-inner">
                                            <a href="{{ route('front.category.subcategory.show',['category' => $category,'subcategory' => $subcategory]) }}">
                                            <div class="portfolio-image" style="border-radius: 50%">
                                                <img src="{{ asset('images/categories/' . $subcategory->image) }}" alt="Open Imagination">
                                                <div class="bg-overlay">
                                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                                </div>
                                            </div>
                                            </a>
                                            <div class="portfolio-desc">
                                                <h3><a href="{{ route('front.category.subcategory.show',['category' => $category,'subcategory' => $subcategory]) }}">{{ $subcategory->name }}</a></h3>
                                                <span><a href="#"></a></span>
                                            </div>
                                        </div>
                                    </article>
                                    @endforeach
                                    </div>
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

