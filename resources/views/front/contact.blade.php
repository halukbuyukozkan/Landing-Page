@extends('layouts.master')

@section('content')
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row align-items-stretch col-mb-50 mb-0">
                <!-- Contact Form
                ============================================= -->
                <div class="col-lg-6">
                    <div class="row mb-5">
                        <div class="col-sm-6 col-lg-6">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-map-marker2"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>{{ __('Headquarters') }}<span class="subtitle">{{ $contact->address }}</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-phone3"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>{{ __('Phone') }}<span class="subtitle">{{ $contact->phone }}</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-sm-6 col-lg-6">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-mail"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Email<span class="subtitle">test@globexim.com</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-instagram"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>{{__('Follow on Instagram')}}<span class="subtitle">globeximmarble</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- Contact Form End -->

                <!-- Google Map
                ============================================= -->
                <div class="col-lg-6 min-vh-50">
                    <a href="https://www.google.com/maps/place/Enntepe+Mall+Office/@37.8869742,32.4974933,17z/data=!3m1!4b1!4m5!3m4!1s0x14d0856a7b500b6d:0xb19f1f4bc78d166d!8m2!3d37.88697!4d32.499682"><img src="{{ asset('img/map1.png') }}" alt=""></a>
                </div><!-- Google Map End -->
            </div>

        </div>
    </div>
</section>
</section>
@endsection