@extends('layouts.app')

@section('content')

<div class="gallery">
    @foreach($categories as $category)
    <div class="container">
        <h4>{{ $isArabic ? $category->name_ar : $category->name }}</h4>
        <div class="row">
            @foreach($category->products as $product)
            <div class="col-4">
                <div class="holder">
                    <a href="{{ asset('storage/' . $product->image) }}">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $isArabic ? $product->name_ar : $product->name }}">
                        <h5>{{ $isArabic ? $product->name_ar : $product->name }}</h5>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>

@endsection
