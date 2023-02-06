@extends('front.layouts.master')
@section('content')
@section('title') {{ $about_seo->title }} @endsection
@section('meta_description'){{ $about_seo->meta_desc }}@endsection
@section('meta_keywords'){{ $about_seo->meta_keyword }}@endsection
<main id="main">
    <header id="page-header">
    <div id="page-header-inner" class="container">
            <h1 class="page-header-title">Haqqımda</h1>
        <div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" href="https://ginekoloq-naza.az/" itemprop="item"><span itemprop="name">Əsas səhifə</span></a><meta itemprop="position" content="1"></span><span class="breadcrumbs__separator"> / </span><span class="breadcrumbs__current">Haqqımda</span></div><!-- .breadcrumbs -->            </div>
</header>
        <div id="content-wrap" class="container">
                        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
<div class="hekim-haqqinda" itemscope itemtype="http://schema.org/Person">
</span>
<div class="haqq-blok haqq-bir">
<div class="hekim-detallar">
    <div class="hekim-sekil">
        <img src="{{ asset($about->img) }}" itemprop="image" alt="{{ $about->name }}">
    </div>
    <div class="hekim-elaqe-area">
        <div class="hekim-elaqe">
            <div class="hekim-elaqe-bir">Ad və soyad</div>
            <div class="hekim-elaqe-iki"><h2 itemprop="name">{{ $about->name }}</h2></div>
        </div>
        <div class="hekim-elaqe">
            <div class="hekim-elaqe-bir">İxtisas</div>
            <div class="hekim-elaqe-iki"><h2 itemprop="jobTitle">{{ $about->ixt }}</h2></div>
        </div>
        <div class="hekim-elaqe">
            <div class="hekim-elaqe-bir">Telefon</div>
            <div class="hekim-elaqe-iki"><a href="tel:(070)5550960">{{ $about->tel }}</a></div>
        </div>
        <div class="hekim-elaqe">
            <div class="hekim-elaqe-bir">Email</div>
            <div class="hekim-elaqe-iki"><a href="mailto:info@ginekoloq-naza.az">{{ $about->email }}</a></div>
        </div>
        <div class="hekim-elaqe">
            <div class="hekim-elaqe-bir">Xəstəxana</div>
            <div class="hekim-elaqe-iki">{{ $about->xestexana }}</div>
        </div>
    </div>
</div>
</div>
<div class="haqq-blok haqq-iki">
        
    <div class="haqqimda-melumatlar">

            
        <div class="haqqimda-melumat">

            <h3>Təhsili</h3>
            <div class="hekim-aciqlama">
                <ul>
                    {!! $about->tehsil !!}
                </ul>
            </div>

        </div>

            
        <div class="haqqimda-melumat">

            <h3>İş təcrübəsi</h3>
            <div class="hekim-aciqlama">
            <ul>
                {!! $about->is_tecrubesi !!}
            </ul>
</div>

        </div>

            
        <div class="haqqimda-melumat">

            <h3>İxtisaslaşma</h3>
            {!! $about->ixtisaslasma !!}

        </div>

            
        <div class="haqqimda-melumat">

            <h3>Üzvlük</h3>
            <div class="hekim-aciqlama">
                <ul>
                    {!! $about->uzvluk !!}
                </ul>
</div>

        </div>

            
        <div class="haqqimda-melumat">

            <h3>Göstərilən xidmətlər</h3>
            <div class="hekim-aciqlama">
            <ul>
                {!! $about->xidmetler !!}
            </ul>
</div>

        </div>

            
    </div>

    </div>
</div>

<div class="sertifikatlar-area tam-hisse">
<div class="container">
<div class="sertifikatlar-section">
                    <h2>Sertifikat və diplomlar</h2>
        <div class="diplomlar sertifikatlar wpex-lightbox-group">
            @foreach ($certifcats as $item)
            <div class="diplom">
                <a href="{{ asset($item->img) }}" data-fancybox="gallery">
                <img width="500" height="300" src="{{ $item->img }}" class="attachment-kesim size-kesim" alt decoding="async" loading="lazy">        					</a>
            </div>
            @endforeach
          
                                   
            </div>
</div>
</div>


</div></div></div>

</main>
@endsection