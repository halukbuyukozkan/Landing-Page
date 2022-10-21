<div class="section header-stick" style="background-color: #1D1D1D">
    <div class="container clearfix">
        <div class="row my-5">
            <div class="col-lg-9 mt-5">
                <div class="heading-block bottommargin-sm">
                    <h3 style="color:#E9E8E5">{{__('About')}}</h3>
                </div>
                @if($about)
                <p class="mb-0" style="color:white">@if(App::isLocale('tr')){{ $about->descriptiontr2 }}@else{{$about->description2}}@endif</p>
                @endif
                <div class="col-md-3">
                    <a href="{{ route('front.about') }}" class="button button-3d button-dark button-large w-100 center" style="margin-top: 30px;">{{__('See All')}}</a>
                </div>
            </div>
            <div class="col-lg-3 mt-5">
            </div>
        </div>
    </div>
</div>