@extends('layouts.app')
@section('title')
    home
@endsection

@section('header')
    <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Posts</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-1 justify-content-center">
            <div class="card col-lg-8 mb-3">
                <div class="card-header">
                    {{ $post->user->name }} - {{ $post->created_at->format('Y-m-d') }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
