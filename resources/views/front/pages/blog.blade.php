@extends('front.layouts.master')
@section('content')
@section('title') {{ $blog_seo->title }} @endsection
@section('meta_description'){{ $blog_seo->meta_desc }}@endsection
@section('meta_keywords'){{ $blog_seo->meta_keyword }}@endsection
<main id="main">
    <header id="page-header">
    <div id="page-header-inner" class="container">
        <h1 class="page-header-title">Yeniliklər və Xəbərlər</h1>                <div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" href="https://ginekoloq-naza.az/" itemprop="item"><span itemprop="name">Əsas səhifə</span></a><meta itemprop="position" content="1"></span><span class="breadcrumbs__separator"> / </span><span class="breadcrumbs__current">Kolposkopiya</span></div><!-- .breadcrumbs -->            </div>
</header>
        <div id="content-wrap" class="container">
                        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
                            
<div class="meqaleler">	
    @foreach ($blogs as $item)
    <div class="meqale">
        <div class="meqale-inner">
            <div class="meqale-sekil">
                <a href="{{ route('blog_single',$item->slug) }}" aria-label="Kolposkopiya nədir? Kolposkopiya müayinəsi necə aparılır?"><img width="500" height="300" src="{{ asset($item->img) }}" class="attachment-kesim size-kesim wp-post-image" alt="{{ $item->title }}" decoding="async"></a>
            </div>
            <div class="meqale-detallari">
                <h2 class="meqale-basliq"><a href="https://ginekoloq-naza.az/kolposkopiya-nedir-muayinesi-nece-aparilir/">{{ $item->title }}</a></h2>
                <div class="meqale-aciqlama">
                    {!! $item->desc !!}
                                          </div>
                <div class="meqale-button fontbold">
                    <a href="{{ route('blog_single',$item->slug) }}">Daha ətraflı</a>
                </div>
            </div>
        </div>
    </div>
           
    @endforeach			
 
              
                
</div>
</div></div></div>
</main>

@endsection