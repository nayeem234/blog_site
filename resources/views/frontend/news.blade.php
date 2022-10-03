@extends('partials.frontend.frontend')
@section('title', 'Home')
@section('content')
    <div class="container p-5">

        <div class="row ">
            @foreach ($newsData as $postData)
                <div class="col-md-8 post">
                    <img src="{{ asset('images/blog-on-computer.jpg') }}" alt="">
                    <div class="tech-date">
                        <span>Technology</span>
                        <span>{{ date_format($postData->updated_at, 'Y F d') }}</span>
                        <h4>{{ $postData->title }}</h4>
                        <p>{{ $postData->description }}</p>
                    </div>
                    <div></div>
                </div>
            @endforeach
            <div class="col-md-4 category">
                <h1>CATEGORIES</h1>
                <ul>
                    <li>Business</li>
                    <li>Technology</li>
                    <li>Entertainment</li>
                    <li>sports</li>
                </ul>

            </div>
        </div>
    @endsection
