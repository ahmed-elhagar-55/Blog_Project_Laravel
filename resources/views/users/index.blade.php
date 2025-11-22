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
                        <h1>All Users</h1>
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

            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('users.create') }}"><button class="btn btn-primary">Create New User</button></a>
            </div>
            <div>
               @include('inc.message')

                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col"> # </th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Type</th>
                            <th scope="col">controls</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->type }}</td>
                                <td class=" d-inline-flex ">
                                    <a href="{{ route('users.edit', $user->id) }}"><button
                                            class="btn btn-warning">Edit</button></a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger ms-1" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            {{ $users->links() }}
        </div>
    </div>
@endsection
