@extends('front.layouts.master')
@section('content')
<main id="main">
    <header id="page-header">
    <div id="page-header-inner" class="container">
            <h1 class="page-header-title">Əlaqə</h1>
        <div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" href="{{ route('index') }}" itemprop="item"><span itemprop="name">Əsas səhifə</span></a><meta itemprop="position" content="1"></span><span class="breadcrumbs__separator"> / </span><span class="breadcrumbs__current">Əlaqə</span></div><!-- .breadcrumbs -->            </div>
</header>
        <div id="content-wrap" class="container">
                        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
<script src="https://www.google.com/recaptcha/api.js?hl=az&amp;ver=5.4"></script>

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

<div class="xerite tam-hisse">
    <div id="map" class="acf-map" data-lat="40.3981653" data-lng="49.8283977"></div>

</div>


</div></div></div>

</main>
@endsection