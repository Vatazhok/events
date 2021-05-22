@extends('layouts.main_layout')

@section('title',$post->title)

@section('content')
    <!--Main layout-->
    <main class="my-5">
        <div class="container pt-5">
            <!--Section: Content-->
            <div class="row">
                <div class="col-xl-12  mb-4">
                    <article>
{!! $post->content !!}
                    </article>
                </div>


            </div>
        </div>
    </main>
@endsection

