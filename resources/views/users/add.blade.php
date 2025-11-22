@extends('layouts.app')

@section('title', 'Add User')

@section('header')
    <header class="masthead" style="background-image: url('../assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Add User</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
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
                        <form action="{{ route('users.store') }}" method="POST" class="form border my-2 p-3"
                            enctype="multipart/form-data">
                            @csrf
                            
                            <div class="mb-3">
                                <h3>Create User </h3>
                                <div class="mb-3">
                                    <label for="">Username :</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                                    @error('name')
                                        <div class="text-danger"> {{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="">Email :</label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                                    @error('email')
                                        <div class="text-danger"> {{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Password :</label>
                                    <input type="password" name="password" value="{{ old('password') }}"
                                        class="form-control">
                                    @error('password')
                                        <div class="text-danger"> {{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Confirm Password :</label>
                                    <input type="password" name="confirm_password" value="{{ old('confirm_password') }}"
                                        class="form-control">
                                    @error('confirm_password')
                                        <div class="text-danger"> {{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Phone :</label>
                                    <input type="text" name="phone" value="{{ old('phone') }}" class="form-control">
                                    @error('phone')
                                        <div class="text-danger"> {{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="">Choose Type :</label>
                                    <select name="type" class="form-control" aria-label="Default select example">
                                        <option value="admin">admin</option>
                                        <option value="writer">writer</option>
                                        <option value="user">user</option>
                                    </select>
                                    @error('type')
                                        <div class="text-danger"> {{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-success" type="submit"> Create </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
