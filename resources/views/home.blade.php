@extends('layouts.app')

@section('content')

<div class="dg-subscribe-background">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p>
                    Subscriptions and Images On Demand for only 
                    <span>4.99 /month</span> 
                    <a href="{{ url('/register') }}">Free Signup Now!</a>
                </p>
            </div>
            <div class="col-md-1">
                &nbsp;
            </div>
        </div>
    </div>
</div>
<div class="dg-featured-background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Featured</h2>
                <p>Hand picked by the Durian Graphics team</p>
            </div>
        </div>
        <div class="row">

            @foreach( $option->where('category','=','featured')->skip(0)->take(6)->inRandomOrder()->get() as $optionList)
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <a href="{{ url('/products/'.$category->getCatName($products->find($optionList->img_id)->category).'/'.$products->find($optionList->img_id)->id) }}">
                        <img src="{{ asset('images/'.$products->changeSizeImage( $products->find($optionList->img_id)->watermark_img,'s') ) }}" width="100%">
                    </a>
                </div>
            @endforeach

            <!-- <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="{{ asset('assets/images/thumb1.png') }}">
            </div>
            
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="{{ asset('assets/images/thumb2.png') }}">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="{{ asset('assets/images/thumb3.png') }}">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="{{ asset('assets/images/thumb4.png') }}">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="{{ asset('assets/images/thumb5.png') }}">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="{{ asset('assets/images/thumb6.png') }}">
            </div> -->
        </div>
    </div>
</div>
<div class="dg-latest-news-background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Latest Updates</h2>
                <p>Recent launches from our global community</p>
            </div>
        </div>
        <div class="row">
            @foreach( $getLatestUpdate as $getLatest)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    
                        
                        <img src="{{ asset('images/'.$products->changeSizeImage($getLatest->watermark_img, 'm')) }}">
                        <div>
                            <a href="{{ url('/products/'.$category->getCatName($getLatest->category).'/'.$getLatest->id) }}" class="latest-prod">
                                <span class="product-hover"><i class="fa fa-search" aria-hidden="true"></i></span>
                            </a>
                        </div>
                        
                </div>
            @endforeach
                <!-- transition: all 0.2s; -->
            <!-- <div class="col-md-3 col-sm-6 col-xs-12">
                <img src="{{ asset('assets/images/latest1.png') }}">
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <img src="{{ asset('assets/images/latest2.png') }}">
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <img src="{{ asset('assets/images/latest3.png') }}">
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <img src="{{ asset('assets/images/latest4.png') }}">
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <img src="{{ asset('assets/images/latest5.png') }}">
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <img src="{{ asset('assets/images/latest6.png') }}">
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <img src="{{ asset('assets/images/latest7.png') }}">
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <img src="{{ asset('assets/images/latest8.png') }}">
            </div> -->
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <a href="{{ url('/categories') }}">ALL NEW ITEMS</a>
                <a href="{{ url('/categories/popular') }}">POPULAR FILES</a>
                <a href="{{ url('/categories') }}">BROWSE CATEGORIES</a>
            </div>
        </div>
    </div>
</div>

@endsection
