@extends('website.website')

@section('content')
<!-- wrapper  -->	
<div id="wrapper">
    <!-- content -->	
    <div class="content full-height hor-content hor-content_padd">
        <!-- slider-counter_wrap-->	
        <div class="slider-counter_wrap">
            <div class="count-folio round-counter">
                <div class="num-album"></div>
                <div class="all-album"></div>
            </div>
        </div>
        <!-- slider-counter_wrap end -->	
        <!-- bottom-filter-wrap -->	 
        <div class="bottom-filter-wrap">
            <div class="scroll-down-wrap">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
                <span>Scroll down or  Swipe to Discover</span>
            </div>
            <div class="filter-title">Filters <i class="fal fa-long-arrow-right"></i></div>
            <div class="gallery-filters">
                <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All</a>
                @foreach ($categories as $option)
                    <a href="#" class="gallery-filter" data-filter=".ps-cat-{{$option->id}}">{{ $option->name }}</a>
                @endforeach
            </div>
        </div>
        <!-- bottom-filter-wrap end -->	
        <!--horizontal-grid   -->   
        <div class="horizontal-grid-wrap  fl-wrap full-height ">

            <!-- portfolio start -->
            <div id="portfolio_horizontal_container" class="two-ver-columns lightgallery">
                @foreach ($photos as $photo)
                <div class="portfolio_item ps-cat-{{ $photo->category['id'] }}">
                    <div class="grid-item-holder hov_zoom">
                        <img  src="{{ asset('storage/photo_files/'.$photo->url) }}"    alt="">
                        <!-- <a href="/admin/photos/{{ $photo->id }}"></a> -->
                        <a href="{{ asset('storage/photo_files/'.$photo->url) }}" class="box-media-zoom popup-image"><i class="fal fa-search"></i></a>                                    
                        <div class="thumb-info">
                            <h3><a href="#">{{ $photo->title }}</a></h3>
                            <p>{{ $photo->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- portfolio end -->
        </div>
        <!--horizontal-grid end -->       
    </div>
    <!--content end-->	
    <!--share-wrapper-->
    <div class="share-wrapper">
        <div class="share-container fl-wrap  isShare"></div>
    </div>
    <!--share-wrapper end-->
</div>
<!-- wrapper end -->
<!-- cursor-->
<div class="element">
    <div class="element-item"></div>
</div>
<!-- cursor end--> 
@endsection