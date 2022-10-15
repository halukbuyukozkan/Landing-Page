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
                                    @if(App::isLocale('en'))
                                    <p class="mb-5">Globexim is a block marble supplier founded 2016 in Turkiye. 
                                        Back in the time we took over Globexim, it was just a quarry that produces block marble. 
                                        Many of customers wanted to work with us for different materials since they relied on our expertise and honesty. 
                                        Within the period, we got connected with many quarry owners and stopped quarrying. 
                                        At the end of the day, we found ourselves supplying various blocks from Turkiye to all over the world.
                                    </p>
                                    <p class="mb-5">Due to the transportation and labor costs, Turkiye has become more and more advantageous in marble processing. 
                                        Our factories’ production volume, quality, speed and service are now competing with the world. 
                                        Therefore as Globexim Marble, we are also working hard to include every type of tiles and slabs to our product portfolio.
                                    </p>
                                    <p class="mb-5">In today’s world, it is difficult to follow construction and design trends. Many materials emerge every day and requires so much expertise. 
                                        Our goal is to make our customers relaxed and consult them by offering the best fits. 
                                        Since it is easy to deceive people in this sector, our most crucial desire is to work hard for protecting people by trust and transparency.
                                    </p>
                                    @else
                                    <p class="mb-5">Globexim, 2016 yılında Türkiye'de kurulmuş bir blok mermer tedarikçisidir.
                                        Globexim'i devraldığımız zaman, sadece blok mermer üreten bir taş ocağıydı.
                                        Uzmanlığımıza ve dürüstlüğümüze güvendikleri için birçok müşteri farklı malzemeler için bizimle çalışmak istedi.
                                        Dönem içinde birçok taş ocağı sahibiyle bağlantı kurduk ve taş ocakçılığını bıraktık.
                                        Günün sonunda kendimizi Türkiye'den tüm dünyaya çeşitli bloklar tedarik ederken bulduk.
                                    </p>
                                    <p class="mb-5">Nakliye ve işçilik maliyetleri nedeniyle Türkiye mermer işlemede her geçen gün daha avantajlı hale gelmiştir.
                                        Fabrikalarımızın üretim hacmi, kalitesi, hızı ve hizmeti artık dünya ile rekabet ediyor.
                                        Bu nedenle Globexim Mermer olarak her türlü fayans ve plakayı da ürün portföyümüze dahil etmek için çok çalışıyoruz.
                                    </p>
                                    <p class="mb-5">Günümüz dünyasında inşaat ve tasarım trendlerini takip etmek zor. Her gün birçok malzeme ortaya çıkıyor ve çok fazla uzmanlık gerektiriyor.
                                        Amacımız müşterilerimizi rahatlatmak ve onlara en uygun olanı sunarak danışmaktır.
                                        Bu sektörde insanları aldatmak kolay olduğu için en önemli arzumuz güven ve şeffaflıkla insanları korumak için çok çalışmaktır.
                                    </p>
                                    @endif
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

