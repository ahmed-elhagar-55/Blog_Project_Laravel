@extends('layouts.app')

@section('title', 'Add Post')

@section('header')
    <header class="masthead" style="background-image: url('../assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Edit Post</h1>
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <section class="py-3" style="width:100%;">
        <div class="container ">
            <div class="row">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-10 ">
                        <form action="{{ route('posts.update',$post->id) }}" method="POST" class="form border my-2 p-3"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <h3>Create Post </h3>
                                <div class="mb-3">
                                    <label for="">Post Title :</label>
                                    <input type="text" name="title" value="{{$post->title }}" class="form-control">
                                    @error('title')
                                        <div class="text-danger"> {{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="floatingTextarea">Description :</label>
                                    <textarea class="form-control" placeholder="create new content" name="description" id="floatingTextarea">{{ $post->description}}</textarea>
                                    @error('description')
                                        <div class="text-danger"> {{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="">Choose User :</label>
                                    <select name="user_id" class="form-control" aria-label="Default select example">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}" >{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <div class="text-danger"> {{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Image :</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('image')
                                        <div class="text-danger"> {{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-success" type="submit"> Update </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
