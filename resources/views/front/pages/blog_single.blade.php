@extends('front.layouts.master')
@section('content')
@section('title') {{ $blog->title }} @endsection
@section('meta_description'){{ $blog->desc }}@endsection
    <main id="main">
    <header id="page-header">
    <div id="page-header-inner" class="container">
            <div class="page-header-title fontbold">{{ $blog->title }}</div>
        <div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" href="https://ginekoloq-naza.az/" itemprop="item"><span itemprop="name">Əsas səhifə</span></a><meta itemprop="position" content="1"></span><span class="breadcrumbs__separator"> / </span><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" href="https://ginekoloq-naza.az/kateqoriya/kolposkopiya/" itemprop="item"><span itemprop="name">Yeniliklər və Xəbərlər</span></a><meta itemprop="position" content="2"></span><span class="breadcrumbs__separator"> / </span><span class="breadcrumbs__current">{{ $blog->title }}</span></div><!-- .breadcrumbs -->            </div>
</header>
        <div id="content-wrap" class="container">
        
                <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">

<div id="single-post-content" class="single-post-content" itemscope itemtype="http://schema.org/Article">
    
    <h1 itemprop="name">{{ $blog->title }}</h1>
                    <div class="yazi-sekil">
            <img src="{{ asset($blog->img) }}" itemprop="image" alt="Kolposkopiya nedir? Kolposkopiya muayinesi nece edilir?">
        </div>
                <meta itemprop="headline" content="Kolposkopiya nədir? Kolposkopiya müayinəsi necə aparılır?">
    <div class="yazi-metn" itemprop="articleBody">

        {!! $blog->desc !!}
</div>
</div>
<aside id="sidebar" class="sidebar-container sidebar-primary">
    <div id="sidebar-inner">
    <div class="master-sidebar-area">
        <div class="master-widget">
            <div class="master-sidebar-title fontbold">Digər Xəbərlər</div>
            @foreach ($blogs as $item)
            <a class="sidebar-meqale" href="{{ route('blog_single',$item->slug) }}">
                <div class="sidebar-sekil" style="background-image: url({{ asset($item->img) }});"></div>
                <div class="sidebar-basliq">
                    <div class="sidebar-title">{{ $item->title }}</div>
                    <div class="sidebar-date"></div>
                </div>
            </a> 
            @endforeach
                              
    </div>
    </div>
    </div>
    </aside>
</main>

@endsection