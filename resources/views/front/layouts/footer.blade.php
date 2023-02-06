<style>


.sticky-buttons{
    position: fixed;
    right: 20px;
    bottom: 20px;
    display: flex;
    z-index: 999999;
}
.sticky-button{
    width: 52px;
    height: 52px;
    border-radius: 50%;
    margin-right: 15px;
    background: #173D7A;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.5s all ease-in-out;
    animation: pulse 2s infinite;
}
@-webkit-keyframes pulse {
    0% {
      -webkit-box-shadow: 0 0 0 0 rgba(16, 2, 68, 0.2);
    }
    70% {
        -webkit-box-shadow: 0 0 0 10px rgba(204,169,44, 0);
    }
    100% {
        -webkit-box-shadow: 0 0 0 0 rgba(204,169,44, 0);
    }
}
@keyframes pulse {
    0% {
      -moz-box-shadow: 0 0 0 0 rgba(16, 2, 68, 0.2);
      box-shadow: 0 0 0 0 rgba(16, 2, 68, 0.4);
    }
    70% {
        -moz-box-shadow: 0 0 0 10px rgba(204,169,44, 0);
        box-shadow: 0 0 0 10px rgba(204,169,44, 0);
    }
    100% {
        -moz-box-shadow: 0 0 0 0 rgba(204,169,44, 0);
        box-shadow: 0 0 0 0 rgba(204,169,44, 0);
    }
}
.sticky-button:hover{
    background: #028C02;
}
.sticky-button img{
    width: 24px;
    height: 24px;
}



    @media only screen and (max-width: 1240px){
     .sticky-buttons{
        flex-direction: column;
    }
    .sticky-button{
        margin-right: 0;
        margin-bottom: 15px;
    }
}
</style>
<footer id="footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
    <div id="footer-inner" class="container">




@php
    $blogs=App\Models\Blog::orderBy('id','DESC')->take(4)->get();
@endphp
<div class="footer-area">
    <div class="footer-blok footer-bir">
        <h4>Son paylaşdıqlarımız</h4>
        <div class="footer-meqaleler-area">
            @foreach ($blogs as $item)
            <div class="footer-meqaleler">
                <div class="footer-meqale">
                <div class="footer-meqale-inner">
                    <a href="{{ route('blog_single',$item->slug) }}">
                        <div class="footer-meqale-sekil">
                            <img width="500" height="300" src="{{ asset($item->img) }}" class="attachment-kesim size-kesim wp-post-image" alt decoding="async" loading="lazy">                                
                        </div>
                        <div class="footer-meqale-basliq">{{ $item->title }}</div>
                    </a>
                </div>
                </div>
    </div>
            @endforeach
                                      
        </div>                          
    </div>
    <div class="footer-blok footer-iki">
        <h4>Sayt xəritəsi</h4>
        <div class="footer-linkler">
            <a href="{{ route('index') }}">Əsas Səhifə</a>
            <a href="{{ route('about') }}">Haqqımızda</a>
            <a href="{{ route('qal') }}">Qalereya</a>
            <a href="{{ route('blog') }}">Yeniliklər və Xəbərlər</a>
            <a href="{{ route('contact') }}">Əlaqə</a>
        </div>
    </div>
    <div class="footer-blok footer-iki">
        <h4>Sosial şəbəkələr</h4>
        <div class="footer-aciqlama">Bizi həmçinin sosial şəbəkə hesablarımızdan da izləyərək ən son paylaşım və əməliyyatlarımızdan daha tez məlumat ala bilərsiniz.</div>

<div class="sosial-sebekeler-area">
    <div class="sosial-sebekeler">
        <a href="{{ $contact->fb }}" target="_blank" rel="noopener" aria-label="Facebook" class="facebook-sosial"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    	<a href="{{ $contact->ins }}" target="_blank" rel="noopener" aria-label="Instagram" class="instagram-sosial"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    	<a href="{{ $contact->youtube }}" target="_blank" rel="noopener" aria-label="Youtube" class="youtube-sosial"><i class="fa fa-youtube" aria-hidden="true"></i></a>
    	<a href="https://api.whatsapp.com/send?phone={{ $contact->wp }}" target="_blank" rel="noopener" aria-label="Whatsapp" class="whatsapp-sosial"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
    </div>
</div>    </div>
</div>    </div>
</footer>

<div id="footer-bottom">
    <div id="footer-bottom-inner" class="container">

<div class="master-footer-bottom">
    <div class="master">
        <div class="master-footer-bottom-inner">
            <span>2023 © Sayt </span><span><strong><a  rel="noopener" target="_blank">Digital Vibe</a></strong></span> <span>tərəfindən hazırlanmışdır.</span>
        </div>
    </div>
    <div class="studio">Bütün hüquqlar qorunmaqdadır.</div>
</div>    </div>
</div>


<div class="sticky-buttons">
    <div class="sticky-button">
        <a href="https://api.whatsapp.com/send?phone={{ $contact->wp }}">
            <img src="{{asset('front/svg/wp-sticky.svg')}}" alt>
        </a>
    </div>
    <div class="sticky-button">
        <a href="{{ $contact->phone_1 }}">
            <img src="{{asset('front/svg/phone-sticky.svg')}}" alt>
        </a>
    </div>
    <div id="yuxari" class="sticky-button to-top">
        <a href="javascript:void(0)">
            <img src="{{asset('front/svg/arrow-sticky.svg')}}" alt>
        </a>
    </div>
</div>

{{-- <div id="site-scroll-top">
    <span class="fa fa-angle-up" aria-hidden="true"></span>
    <span class="screen-reader-text">Back To Top</span>
</div> --}}
<div class="master-overlay"></div>
<div class="mobile-menu-area">
    <div class="mobile-menu-close"><span class="mobile-menu-close-icon">×</span></div>
    <div class="menu-menu-1-container"><ul id="menu-menu-2" class="master-main-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-14 current_page_item menu-item-18"><a href="https://ginekoloq-naza.az/" aria-current="page">Əsas səhifə</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a href="https://ginekoloq-naza.az/naza-qurbanova/">Haqqımda</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-345"><a href="#">Xidmətlərimiz</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-351"><a href="https://ginekoloq-naza.az/kateqoriya/kolposkopiya/">Kolposkopiya</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-347"><a href="https://ginekoloq-naza.az/kateqoriya/femilift-alma-lazer/">Femilift Alma Lazer</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-346"><a href="https://ginekoloq-naza.az/kateqoriya/estetik-kosmetik-emeliyyatlar/">Estetik-kosmetik əməliyyatlar</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-348"><a href="https://ginekoloq-naza.az/kateqoriya/ginekoloji-emeliyyatlar/">Ginekoloji əməliyyatlar</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-349"><a href="https://ginekoloq-naza.az/kateqoriya/ginekoloji-xestelikler/">Ginekoloji xəstəliklər</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-350"><a href="https://ginekoloq-naza.az/kateqoriya/hamilelik/">Hamiləlik</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-22"><a href="#">Qalereya</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23"><a href="/qalereya/">Şəkillər</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a href="https://ginekoloq-naza.az/videolar/">Videolar</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17"><a href="https://ginekoloq-naza.az/elaqe/">Əlaqə</a></li>
</ul></div>    <div class="mobile-master-axtar-area">
        <form id="mobile-search" method="GET" action="https://ginekoloq-naza.az">
            <label for="mobile-header-input-text" class="screen-reader-text">Sayt axtarış</label>
            <input type="text" name="s" placeholder="Saytda axtar" id="mobile-header-input-text">
            <button type="submit" aria-label="Axtar"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>
</div>

</div></div>
<script src="{{ asset('front/') }}/js/jquery-3.5.1.min.js" id="jquery-js"></script>
<script src="{{ asset('front/') }}/js/jquery.fancybox.min.js" id="fancybox-script-js"></script>
<script src="{{ asset('front/') }}/js/owl.carousel.min.js" id="owl-carousel-script-js"></script>
<script src="{{ asset('front/') }}/js/carousel.js" id="owl-carousel-script-js"></script>
<script src="{{ asset('front/') }}/js/main.js" id="owl-carousel-script-js"></script>
<script src="{{ asset('front/') }}/js/master.js" id="masterstudio-js-script-js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha512-NqYds8su6jivy1/WLoW8x1tZMRD7/1ZfhWG/jcRQLOzV1k1rIODCpMgoBnar5QXshKJGV7vi0LXLNXPoFsM5Zg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script> </script>

</body></html>
