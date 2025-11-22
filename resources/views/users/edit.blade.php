@extends('layouts.app')

@section('title', 'Add User')

@section('header')
    <header class="masthead" style="background-image: url('../assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Edit User</h1>
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
                        <form action="{{ route('users.update', $user->id) }}" method="POST" class="form border my-2 p-3"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @include('inc.message')
                            <div class="mb-3">
                                <h3>Create User </h3>
                                <div class="mb-3">
                                    <label for="">Username :</label>
                                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="">Email :</label>
                                    <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Password :</label>
                                    <input type="password" name="password"
                                        class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="">Confirm Password:</label>
                                    <input type="password" name="confirm_password"  class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Choose Type :</label>
                                    <select name="type" class="form-control" aria-label="Default select example">
                                        <option value="admin" @selected($user->type=='admin')>admin</option>
                                        <option value="writer" @selected($user->type=='writer')>writer</option>
                                        <option value="user" @selected($user->type=='user')>user</option>
                                    </select>

                                </div>
                                <div class="mb-3">
                                    <label for="">Phone:</label>
                                    <input type="phone" name="phone" value="{{ $user->phone }}" class="form-control">
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
