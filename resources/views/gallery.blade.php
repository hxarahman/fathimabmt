@extends('layouts.app')

@section('content')

<div class="banner1">
    <div class="overlay">
        <div class="text">GALLERY</div>
    </div>
</div>

<div class="gallery">
    <div class="container">
        <div class="row">
            @foreach($images as $image)
            <div class="col-4">
                <div class="holder">
                    <a href="{{ asset('storage/' . $image->image) }}">
                        <img src="{{ asset('storage/' . $image->image) }}" alt="Gallery">
                        <p><span>View</span></p>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
