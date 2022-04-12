<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dropzone Friendly</title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <style>
        .btn {
            display: inline-block;
            padding: 12px 15px;
            background: rgba(0,0,0,0.9);
            color: #fff;
            cursor: pointer;
        }

        .images-container {
            display: flex;
            flex-direction: column;
            margin-bottom: 25px;
        }

        .btns-container {
            display: flex;
        }

        .btns-container .btn:not(:last-child) {
            margin-right: 15px;
        }

        .btn-add-file {
            display: inline-block;
        }

        .images-container__item {
            width: 275px;
            height: 150px;
        }

        .images-container__item:not(:last-child) {
            margin-bottom: 20px;
        }

        .images-container__item img {
            border-radius: 10px;
            height: 100%;
            width: 100%;
            object-fit: cover;
            box-shadow: 0 0 15px 3px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

<div id="app">
    <form action="">
        <label for="name">Название поста</label>
        <input type="text" name="name" id="name" placeholder="Введите название поста">

        <hr>

        <div class="btns-container">
            <span class="btn btn-add-file">Добавить изображение</span>
            <span class="btn btn-remove-all">Удалить все</span>
            <span class="btn btn-send-in-server">Отправить на сервер</span>

        </div>
        <input type="file" name="files[]" multiple="multiple" id="files" style="display: none;">
        <br>
        <div class="images-container">

        </div>
    </form>
</div>

<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
