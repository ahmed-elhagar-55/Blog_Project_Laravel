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
                        <h1>Clean Blog</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                {{--  <x-single-post-component title="this is first post in site"
                subTitle="this is first subTitle"/>  --}}

                {{--  @foreach ($posts as $post )  --}}
                    {{--  <x-single-post-component>
                        <x-slot name="id">{{ $post['id'] }}</x-slot>
                        <x-slot name="title"> {{ $post['title'] }}</x-slot>
                        <x-slot name="subTitle"> {{ $post['subTitle'] }}</x-slot>
                    </x-single-post-component>  --}}

                {{--  @endforeach  --}}
                {{--  {{ $posts->links()}}  --}}

                <hr class="my-4" />
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older
                        Posts →</a></div>
            </div>
        </div>
    </div>
@endsection
