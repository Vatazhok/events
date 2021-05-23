@extends('layouts.admin_layout')
@section('title','Добавити пост')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить сатью</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('post.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Назва</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                           placeholder="Введите название статьи" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Назва(трансліт)</label>
                                    <input type="text" name="slug" class="form-control" id="exampleInputEmail1"
                                           placeholder="Введите название статьи" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Дата</label>
                                    <input type="text" name="date" class="form-control" id="exampleInputEmail1"
                                           placeholder="Введите название статьи" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Час</label>
                                    <input type="text" name="time" class="form-control" id="exampleInputEmail1"
                                           placeholder="Введите название статьи" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Місце проведення</label>
                                    <input type="text" name="venue" class="form-control" id="exampleInputEmail1"
                                           placeholder="Введите название статьи" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Населений пункт, де проходитиме подія</label>
                                    <input type="text" name="settlement" class="form-control" id="exampleInputEmail1"
                                           placeholder="Введите название статьи" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ціна</label>
                                    <input type="text" name="price" class="form-control" id="exampleInputEmail1"
                                           placeholder="Введите название статьи" required>
                                </div>

                                <div class="form-group">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Выберите категорию</label>
                                        <select name="category_id" class="form-control" required>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <textarea name="text" class="editor"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="feature_image">Изображение статьи</label>
                                    <img src="" alt="" class="img-uploaded" style="display: block; width: 300px">
                                    <input type="text" name="cover" class="form-control" id="feature_image"
                                           name="feature_image" value="" readonly>
                                    <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Публікація?</label>
                                    <input type="text" name="is_published" class="form-control" id="exampleInputEmail1"
                                           placeholder="Введите название статьи" required>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


@endsection