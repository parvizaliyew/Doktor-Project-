@extends('front.layouts.master')
@section('content')
@section('title') {{ $qal_seo->title }} @endsection
@section('meta_description'){{ $qal_seo->meta_desc }}@endsection
@section('meta_keywords'){{ $qal_seo->meta_keyword }}@endsection
<main id="main">
    <header id="page-header">
    <div id="page-header-inner" class="container">
            <div class="page-header-title fontbold">Qalereya</div>
        <div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" href="{{ route('index') }}" itemprop="item"><span itemprop="name">Əsas səhifə</span></a><meta itemprop="position" content="1"></span><span class="breadcrumbs__separator"> / </span><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link"itemprop="item"><span itemprop="name">Qalereya</span>       </div>
</header>
        <div id="content-wrap" class="container">
                        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">				
        <div class="wpex-lightbox-group sekiller">
            @foreach ($galeries as $item)
            <div class="sekil">
                <div class="sekil-inner">
                    <a data-fancybox="gallery" href="{{ asset($item->img) }}">
                        <img width="500" height="300" src="{{ asset($item->img) }}" class="attachment-kesim size-kesim" alt decoding="async" loading="lazy">                                	<div class="sekil-overlay"></div>
                    </a>
                </div>
                </div>
            @endforeach
        </div>

<div class="nomreler"></div>

</div></div></div>


</div>
</main>
@endsection