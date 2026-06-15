@extends('layouts.app')

@section('content')

<div class="banner1">
    <div class="overlay">
        <div class="text">ENQUIRY</div>
    </div>
</div>

<div class="enquiry_page">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-4">
                <h3>{{ t('form', 'get_in_touch') }}</h3>

                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <ul class="ml-4 mb-4">
                    <li><a href="">{{ t('general', 'company_name') }}</a></li>
                    <li><a href="#">{{ t('general', 'company_location') }}</a></li>
                    <li><a target="_blank" href="tel:+971556182050">+971 55 618 2050</a></li>
                    <li><a target="_blank" href="tel:+971502386667">+971 50 238 6667</a></li>
                </ul>

                <form action="{{ route('enquiry.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{ t('form', 'name_holder') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ t('form', 'email_holder') }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="{{ t('form', 'phone_holder') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" placeholder="{{ t('form', 'subject_holder') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="8" placeholder="{{ t('form', 'message_holder') }}">{{ old('message') }}</textarea>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary float-right">{{ t('form', 'submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 my-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d275.45223977633543!2d56.3543841!3d25.1243906!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDA3JzI3LjkiTiA1NsKwMjEnMTQuOSJF!5e1!3m2!1sar!2sae!4v1605725513269!5m2!1sar!2sae"
                    width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>

@endsection
