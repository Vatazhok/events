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
                        {!! $post->text !!}
                    </article>
                </div>


            </div>

            <!-- Pills navs -->
            <ul class="nav nav-pills mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link"
                        id="ex1-tab-1"
                        data-mdb-toggle="pill"
                        href="#ex1-pills-1"
                        role="tab"
                        aria-controls="ex1-pills-1"
                        aria-selected="true"
                    >Залишити коментар</a
                    >
                </li>
                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link"
                        id="ex1-tab-2"
                        data-mdb-toggle="pill"
                        href="#ex1-pills-2"
                        role="tab"
                        aria-controls="ex1-pills-2"
                        aria-selected="false"
                    >Переглянути коментарі</a
                    >
                </li>

            </ul>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content" id="ex1-content">
                <div
                    class="tab-pane fade"
                    id="ex1-pills-1"
                    role="tabpanel"
                    aria-labelledby="ex1-tab-1"
                >
                    <form class="row gy-2 gx-3 align-items-center">
                        <div class="col-auto">
                            <div class="form-outline">
                                <input type="text" id="form11Example1" class="form-control"/>
                                <label class="form-label" for="form11Example1">Ім'я</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-outline">
                                <input type="text" id="form11Example1" class="form-control"/>
                                <label class="form-label" for="form11Example1">Адреса Email</label>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-outline p-5">
                                <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
                                <label class="form-label" for="textAreaExample">Коментар</label>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Відправити</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">

                    @foreach($post->comments as $comment)
                        {{$comment->message}}
                    @endforeach
                </div>

            </div>
            <!-- Pills content -->


        </div>

    </main>
@endsection

