@extends('layouts.master')

@section('content')
	<section id="content" style="background-color: #1D1D1D">
        <section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
                    <div class="postcontent col-lg-12 order-lg-last">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 mt-4">
                                    <div class="heading-block bottommargin-sm">
                                        <h3 style="color:#000000">{{__('About')}}</h3>
                                    </div>
                                    @foreach($abouts as $about)
                                    @if(App::isLocale('tr'))
                                        @foreach($about->descriptiontr as $paragraph)
                                        <p class="mb-5">{{ $paragraph }}</p>
                                        @endforeach
                                    @else
                                        @foreach($about->description as $paragraph)
                                        <p class="mb-5">{{ $paragraph }}</p>
                                        @endforeach
                                    @endif
                                    @endforeach
                                </div>
                                <div class="col-lg-5 mt-5">
                                    <img src="{{ asset('img/about.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</section>
	</section>
@endsection

