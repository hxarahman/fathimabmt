@extends('layouts.app')

@section('content')

<div class="banner1">
    <div class="overlay">
        <div class="text">ABOUT US</div>
    </div>
</div>

<div class="main_content">
    <div class="container">
        <div class="row">
            <div class="col-8 wow bounceInLeft" data-wow-delay="0.3s">
                <div class="holder big">
                    <h4>{{ t('about', 'about_h1') }}</h4>
                    <p>{{ t('about', 'about_c1') }}</p>
                </div>
            </div>
            <div class="col-4 wow bounceInRight" data-wow-delay="0.3s">
                <div class="holder img">
                    <img src="{{ asset('images/abt-img.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 wow bounceInUp" data-wow-delay="0.3s">
                <div class="holder little">
                    <div class="icon"><i class="fa fa-eye"></i></div>
                    <h4>{{ t('about', 'about_h2') }}</h4>
                    <p>{{ t('about', 'about_c2') }}</p>
                </div>
            </div>
            <div class="col-6 wow bounceInUp" data-wow-delay="0.3s">
                <div class="holder little">
                    <div class="icon"><i class="fa fa-bullseye"></i></div>
                    <h4>{{ t('about', 'about_h3') }}</h4>
                    <p>{{ t('about', 'about_c3') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="inline_slide bottom">
    <div class="container">
        <div class="title">
            <div class="icon">
                <svg fill="white" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
                    <g><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)">
                        <path d="M4714.9,4902.8l-259.3-115.2l-293.9,32.7l-293.9,32.7l-163.3-151.7c-268.9-245.8-261.2-242-562.8-303.5c-311.2-61.5-272.8-32.7-453.3-351.5c-59.5-107.6-132.5-213.2-161.3-232.4c-26.9-19.2-146-88.3-261.2-153.7l-213.2-117.2l-55.7-284.3l-57.6-282.4l-199.8-219l-199.8-217l32.6-292l30.7-293.9L1488,1700.9c-63.4-140.2-115.2-265.1-115.2-280.4c0-15.4,51.9-140.2,115.2-280.4l115.2-253.5l-30.7-293.9l-32.6-291.9l199.8-217.1l199.8-219l57.6-282.4l55.7-280.4l243.9-136.4c134.5-76.8,255.5-151.7,270.8-169c13.4-17.3,86.4-134.4,159.4-261.2l134.5-232.4l286.2-59.5l286.2-59.6l219-197.8l217-197.8l293.9,32.7l292,32.7l236.3-107.6c130.6-57.6,253.5-111.4,274.7-117.2c23-7.7,132.5,30.7,299.6,105.6l265.1,119.1l292-32.7L6117-2012l217,197.8l219,197.8l286.2,59.6l286.2,57.6l144.1,253.5L7413.6-994l211.3,121C7961-682.8,7928.3-725,7991.7-410l55.7,274.7l172.9,188.2c249.7,272.8,230.5,217,192.1,547.4l-30.7,284.3l115.2,255.5c65.3,142.1,117.2,267,117.2,280.4c0,13.5-51.9,138.3-117.2,280.4l-115.2,255.5l30.7,284.3c38.4,330.4,57.6,272.7-192.1,547.4l-172.9,188.2l-57.6,282.4l-55.7,284.3l-249.7,138.3c-272.7,153.7-261.2,140.2-462.9,497.5l-92.2,163.3l-280.4,57.6c-307.3,61.5-280.4,46.1-562.8,301.6l-167.1,151.7l-293.9-32.7l-293.9-32.7l-263.1,117.2c-144.1,65.3-268.9,117.2-278.5,115.2C4981.9,5020,4857,4968.1,4714.9,4902.8z"/>
                    </g></g>
                </svg>
            </div>
            <h4>{{ t('brands', 'our_brands') }}</h4>
        </div>
        <div class="product-slider owl-carousel">
            @foreach($brands as $brand)
            <div class="product-item">
                <div class="pi-pic">
                    <img src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->name }}">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
