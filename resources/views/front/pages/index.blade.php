@extends('front.layouts.master')
@section('title') {{ $index_seo->title }} @endsection
@section('meta_description'){{ $index_seo->meta_desc }}@endsection
@section('meta_keywords'){{ $index_seo->meta_keyword }}@endsection
@section('content')
<style>



.home-slider .row{
    flex-direction: column;
    max-width: 552px;
}


.home-slider-head{
    font-weight: 700;
    font-size: 40px;
    line-height: 56px;
    color: #FDFDFD;
    margin-bottom: 15px;
    padding-top: 25%;
}
.home-slider-body{
    font-weight: 400;
    font-size: 16px;
    line-height: 21px;
    color: #FDFDFD;
    margin-bottom: 30px;
}
.home-slider-btn{
    width: 190px;
    height: 52px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid #FF7A00;
    border-radius: 4px;
    font-weight: 500;
    font-size: 16px;
    line-height: 19px;
    text-align: center;
    color: #FDFDFD;
    transition: 0.5s all ease-in-out;
    background: transparent;
}
.home-slider-btn:hover{
    background: #FF7A00;
}
.home-slider .item{
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    max-height: 700px;
}
.home-slider .container{
    position: absolute;
    transition: 0.5s all ease-in-out;
    transform: scale(0);
}
.home-slider .active .container{
    transform: scale(1);
}
.home-bg{
    background: rgba(23, 61, 122, 0.45);
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
}
.home-slider .owl-dots{
    display: flex !important;
    position: absolute;
    right: 100px;
    transform: rotate(90deg);
    top: 40%;
}
.home-slider .owl-dot span{
    border:1px solid #FF7A00;
    width: 12px;
    height: 12px;
    display: block;
    transform: rotate(45deg);
    transition: 0.5s all ease-in-out;
}
.home-slider .owl-dot.active span{
    background: #FF7A00;
    margin-right: 20px;
}
.home-slider .owl-dot{
    margin-right: 10px;
}
.home-slider .owl-nav{
    position: absolute;
    bottom: 20px;
    right: 100px;
}
.home-slider .owl-prev{
    margin-right: 10px;
}
</style>
<main id="main">
    <div id="content-wrap" class="container">
                    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">


            <div class="slayd-area tam-hisse">
   <div class="home-slider owl-carousel owl-theme">
          @foreach ($sliders as $slider)
          <div class="item">
            <img src="{{ asset($slider->img) }}" alt="">
            <div class="home-bg"></div>
            <div class="container">
                <div class="row">
                    <h2 class="home-slider-head">
                        {{ $slider->title }}
                    </h2>
                    <h1 style="color:#FDFDFD;">{{ $slider->title2 }}</h1>
                    <p class="home-slider-body">
                        {{ $slider->desc }}
                    </p>
                    <a href="{{ $slider->link }}" class="home-slider-btn">
                        Həkim haqqında
                    </a>
                </div>
            </div>
        </div>
          @endforeach



        </div>
    </div>






{{-- <div class="slayd-area tam-hisse">
<div class="container">
<div class="slayd-bloklar">
<div class="slayd-blok">
    <h2>{{ $slider->title }}</h2>
    <h1>{{ $slider->title2 }}</h1>
    <div class="slayd-aciqlama">
        {{ $slider->desc }}
    </div>
    <div class="slayd-telefon fontbold">
        <a href="{{ $slider->link }}">Həkim haqqında</a>
    </div>
</div>
</div>
</div>
<div class="slayd-mobil">
<img width="767" height="766" src="{{ asset($slider->img) }}" class="attachment-full size-full" alt decoding="async" loading="lazy">    </div>
</div> --}}

<div class="xidmetlerimiz tam-hisse">
<div class="container">
<div class="xidmetler-area">
<div class="basliq">
    <h3>Göstərdiyimiz ginekoloji xidmətlər</h3>
</div>
<div class="xidmetler">

        @foreach ($services as $item)
        <div class="xidmet">
            <a href="{{ $item->link }}">
                <div class="xidmet-sekil">
                    <img width="500" height="300" src="{{ asset($item->img) }}" class="attachment-kesim size-kesim" alt decoding="async" loading="lazy">        			        </div>
                <h3>{{ $item->title }}</h3>
                <div class="xidmet-aciqlama">{!! $item->desc !!}</div>
                <div class="xidmet-button fontbold">Daha ətraflı</div>
            </a>
        </div>
        @endforeach

</div>
</div>
</div>
</div>



<div class="esas-haqqimda">
<div class="esas-blok esas-bir">
<div class="esas-blok-sekil">
<img width="956" height="1003" src="{{ asset($about->img) }}" class="attachment-full size-full" alt decoding="async" loading="lazy">        </div>
</div>
<div class="esas-blok esas-iki">
<div class="hekim-basliq">
<h2 class="hekim-ixtisas">{{ $about->position }}</h2>
<h2 class="hekim-ad">{{ $about->name }}</h2>
</div>
<div class="esas-haqq-aciqlama">
<p>{!! $about->desc !!}</p>
</div>
<div class="esas-blok-button fontbold">
<a href="{{route('about')}}">Daha ətraflı</a>
</div>
</div>
</div>

<div class="esas-sertifikatlar-area">
    <div class="basliq">
        <h3>Sertifikatlar</h3>
        <div class="xett"></div>
    </div>
    <div class="esas-sertifikat-blok">
            		<div class="esas-sertifikatlar owl-carousel owl-loaded owl-drag">
    			    		<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1907px, 0px, 0px); transition: all 0s ease 0s; width: 7630px;">
                                @foreach ($sers as $item)
                                <div class="owl-item cloned" style="width: 181.918px; margin-right: 30px;"><div class="esas-sertifikat item">
                                    <a href="{{ asset($item->img) }}" data-fancybox="sertifikat" aria-label="Sertifikatlar">
                                         <img width="500" height="300" src="{{ asset($item->img) }}" class="attachment-kesim size-kesim" alt="" decoding="async" loading="lazy">    					</a>
                                </div></div>  					</a>
                         @endforeach





                </div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right"></i></button></div><div class="owl-dots"><button role="button" aria-label="dots" class="owl-dot active"><span></span></button><button role="button" aria-label="dots" class="owl-dot"><span></span></button><button role="button" aria-label="dots" class="owl-dot"><span></span></button><button role="button" aria-label="dots" class="owl-dot"><span></span></button></div></div>
    		</div>
</div>

{{-- <div class="esas-sertifikatlar-area">
<div class="basliq">
<h3>Sertifikatlar</h3>
<div class="xett"></div>
</div>
<div class="esas-sertifikat-blok">

    <div class="esas-sertifikatlar owl-carousel">

    @foreach ($sers as $item)
        <div class="esas-sertifikat item">
<a href="{{ asset($item->img) }}" data-fancybox="sertifikat" aria-label="Sertifikatlar">
 <img width="500" height="300" src="{{ asset($item->img) }}" class="attachment-kesim size-kesim" alt decoding="async" loading="lazy">    					</a>
 @endforeach
</div>


        </div>
</div>
</div> --}}



<div class="slayd-mobil tam-hisse">
<img width="1000" height="986" src="{{ asset('front') }}/images/dr-naza-qurbanova-09.jpg" class="attachment-full size-full" alt decoding="async" loading="lazy"></div>

<div class="whatsapp-area tam-hisse">
<div class="container">
<div class="whatsapp-blok">
<div class="whatsapp-basliq fontbold">Whatsapp-a keçin və Həkimə sualınızı verin</div>
<div class="whatsapp-img">
    <img src="{{ asset('front') }}/images/asagi.png" alt="Ox">
</div>
<div class="whatsapp-button fontbold">
    <a href="https://api.whatsapp.com/send?phone=994705550960&text=Salam%20Dr.%20Naza%2C%20siz%C9%99%20sual%C4%B1m%20var." target="_blank" rel="noopener">Whatsapp keçid</a>
</div>
</div>
</div>
</div>

<div class="video-area">
<h2>Ginekoloq Dr. Naza Qurbanova CO2 lazer haqqında</h2>
<div class="hekim-video">
<div class="esas-video-sekil">
<img width="1000" height="560" src="{{ asset('front') }}/images/dr-naza-video.jpg" class="attachment-full size-full" alt decoding="async" loading="lazy">			<div class="video-ikon">
    <a data-fancybox href="https://www.youtube.com/watch?v=olU5ZhXITcs" aria-label="Video">
        <i class="fa fa-play" aria-hidden="true"></i>
    </a>
</div>
</div>
</div>
</div>


<div class="suallar-ve-cavablar-area tam-hisse">
<div class="container">
<div class="suallar-ve-cavablar">
<div class="sc-blok sc-bir">
    <div class="basliq">
        <h3>Mama ginekoloq Dr. Naza Qurbanova tərəfindən ən çox verilən suallara cavablar</h3>
    </div>
    <div class="sc-aciqlama">
        Oxşar xəstəlikdən əziyyət çəkən pasiyentlərin hər zaman həkimdən soruşduqları ortaq suallar və onları narahat edən məqamlar vardır. Mama ginekoloq Dr. Naza Qurbanova həmin sualların bir qismini birbaşa olaraq saytda cavablandırmışdır. Əlavə suallarınızla bağlı isə aşağıdakı keçiddən həkimlə əlaqə saxlaya bilərsiniz.
    </div>
    <div class="sc-button fontbold">
        <a href="{{route('contact')}}">Həkimə sual ver</a>
    </div>
</div>
<div class="sc-blok sc-iki">
                        <div class="suallar" itemscope itemtype="https://schema.org/FAQPage">

                            @foreach ($questions as $item)
                            <div class="master-accordion" itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">
                                <div class="master-accordion-title fontbold" itemprop="name"><span class="plus-icon"></span>{{ $item->sual }}</div>
                                <div class="master-accordion-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div class="sualin-cavabi" itemprop="text"><p>{{ $item->cavab }}</p>
                                </div>
                                </div>
                            </div>
                            @endforeach
</div>
                </div>
</div>
</div>
</div>


<div class="elaqe-area">
    <div class="elaqe-blok elaqe-bir">
    <h2>Onlayn mesaj göndərin</h2>
    <div class="elaqe-form">
        <form id="contact" method="POST" action="{{ route('contact_post') }}">
            @csrf
            <div class="form-group">
                <div class="form-element form-50">
                    <input type="text" name="name" id="adsoyad" placeholder="Ad və soyadınız">
                </div>
                <div class="form-element form-50">
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
            </div>
            <div class="form-element form-100">
                <input type="text" name="title" id="movzu" placeholder="Mövzu">
            </div>
            <div class="form-element form-100">
                <textarea name="msj" id="mesaj" rows="3" placeholder="Mesajınız"></textarea>
            </div>
            <div class="form-group">
                
              
                <div class="form-submit">
                    <button type="submit" class="fontbold"  >Göndər</button>
                </div>
            </div>
            <div id="contact-form-result" class="fontbold" role="alert" style="display: none;"></div>
        </form>
    </div>
    </div>
    <div class="elaqe-blok elaqe-iki">
    <h2>Əlaqə məlumatları</h2>
    <div class="elaqe-aciqlama">
        Aşağıda göstərilmiş əlaqə vasitələrindən biri ilə həkimə əlaqə saxlaya və həkim qəbuluna yazıla bilərsiniz.
    </div>
    <div class="elaqe-element">
        <strong>Telefon:</strong> <a href="tel:{{ $contact->phone_1 }}">{{ $contact->phone_1 }}</a>
    </div>
    <div class="elaqe-element">
        <strong>Email:</strong> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
    </div>
    <div class="elaqe-element">
        <strong>İş günləri:</strong> Həftənin I-VI günləri        </div>
    <div class="elaqe-element">
        <strong>İş saatları:</strong> 09:00 - 17:00        </div>
    <div class="elaqe-element">
        <strong>Xəstəxana:</strong> {{ $about->xestexana }}        </div>
    <div class="elaqe-element">
        <strong>Ünvan:</strong> {{ $contact->adress }} </div>
    </div>
    </div>

<div class="slayd-mobil tam-hisse">
<img width="1000" height="986" src="{{ asset('front') }}/images/dr-naza-qurbanova-09.jpg" class="attachment-full size-full" alt decoding="async" loading="lazy"></div>




<div class="xerite tam-hisse">
<div id="map" class="acf-map" data-lat="40.3981653" data-lng="49.8283977"></div>

<div class="container">
<div class="esas-elaqe-area">
<div class="esas-elaqe-inner">
    <div class="elaqe-icon-box">
        <div class="elaqe-icon">
            <i class="fa fa-phone" aria-hidden="true"></i>
        </div>
        <div class="elaqe-detallar">
            <div class="elaqe-basliq-bir fontbold">Əlaqə telefonu</div>
            <div class="elaqe-basliq-iki"><a href="tel:{{ $contact->phone_1 }}">{{ $contact->phone_1 }}</a></div>
        </div>
    </div>
    <div class="elaqe-icon-box">
        <div class="elaqe-icon">
            <i class="fa fa-at" aria-hidden="true"></i>
        </div>
        <div class="elaqe-detallar">
            <div class="elaqe-basliq-bir fontbold">Elektron poçt</div>
            <div class="elaqe-basliq-iki"><a href="tel:">{{ $contact->email }}</a></div>
        </div>
    </div>
    <div class="elaqe-icon-box">
        <div class="elaqe-icon">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
        </div>
        <div class="elaqe-detallar">
            <div class="elaqe-basliq-bir fontbold">Həftənin I-VI günləri</div>
            <div class="elaqe-basliq-iki">09:00 - 17:00</div>
        </div>
    </div>
    <div class="elaqe-icon-box">
        <div class="elaqe-icon">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
        </div>
        <div class="elaqe-detallar">
            <div class="elaqe-basliq-bir fontbold">Ünvan</div>
            <div class="elaqe-basliq-iki">{{ $contact->adress }}</div>
        </div>
    </div>
</div>
</div>
</div>

</div>


</div></div></div>

</main>

@endsection
