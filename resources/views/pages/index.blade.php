@extends('layouts.main_layout')

@section('title','Події')

@section('content')
    <!--Main layout-->
    <main class="my-5">
        <div class="container pt-5">
            <!--Section: Content-->
            {{--        <section class="text-center">--}}
            {{--            <h4 class="mb-5"><strong>Latest posts</strong></h4>--}}

            <div class="row">
                @foreach($posts as $post)
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="{{$post->cover}}" class="img-fluid"/>
                                <a href="{{route('getPost',[$post->category['slug'], $post->slug])}}">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">

                                <h5 class="card-title text-center pb-1">{{$post->title}}</h5>
                                <table class="table table-borderless">
                                    <tbody>
                                    <tr>
                                        <th scope="row" class="px-0 pb-3 pt-2">
                                            <i class="far fa-calendar-alt fa-2x"></i>
                                        </th>
                                        <td class="pb-3 pt-2">{{$post->date}}</td>
                                    </tr>
                                    <tr class="mt-2">
                                        <th scope="row" class="px-0 pb-3 pt-2">
                                            <i class="far fa-clock living-coral-text"></i>
                                        </th>
                                        <td class="pb-3 pt-2">{{$post->time}}</td>
                                    </tr>
                                    <tr class="mt-2">
                                        <th scope="row" class="px-0 pb-3 pt-2">
                                            <i class="fas fa-city "></i>
                                        </th>
                                        <td class="pb-3 pt-2">{{$post->venue}}</td>
                                    </tr>
                                    <tr class="mt-2">
                                        <th scope="row" class="px-0 pb-3 pt-2">
                                            <i class="fas fa-map-marked-alt "></i>
                                        </th>
                                        <td class="pb-3 pt-2">{{$post->settlement}}</td>
                                    </tr>
                                    <tr class="mt-2">
                                        <th scope="row" class="px-0 pb-3 pt-2">
                                            <i class="fas fa-hryvnia"></i>
                                        </th>
                                        <td class="pb-3 pt-2">{{$post->price}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a>{{$post->category['title']}}</a>
                                <a href="{{route('getPost',[$post->category['slug'], $post->slug])}}" class="btn btn-primary">Read</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        {{--        </section>--}}
        <!--Section: Content-->

            <!-- Pagination -->
        {{$posts->links('vendor.pagination.bootstrap-4')}}
        <!--Main layout-->
    </main>
@endsection
