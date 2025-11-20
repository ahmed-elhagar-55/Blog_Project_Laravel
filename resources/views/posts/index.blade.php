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
                        <h1>All Posts</h1>
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            @if (session()->get('success')!=null)
                <h3 class="alert alert-success text-center">{{ session()->get('success') }}</h3>
            @endif
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('posts.create') }}"><button class="btn btn-primary">Create New Post</button></a>
            </div>
            <div>

                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col"> # </th>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                            <th scope="col">User</th>
                            <th scope="col">Image</th>
                            <th scope="col">controls</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ \Str::limit($post->description,50) }}</td>
                                <td>{{ $post->user->name}}</td>
                                <td>{{ $post->image}}</td>
                                <td class=" d-inline-flex ">
                                    {{--  {{ route('posts.edit',$post->id) }}  --}}
                                    <a href="{{ route('posts.edit',$post->id) }}"><button class="btn btn-warning">Edit</button></a>
                                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST" >
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger ms-1" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
