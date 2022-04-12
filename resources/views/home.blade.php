<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dropzone Friendly</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <style>
        .images-container {

        }

        .images-container__item {

        }
    </style>
</head>
<body>

<div id="app">
    <form action="">
        <label for="name">Название поста</label>
        <input type="text" name="name" id="name" placeholder="Введите название поста">

        <hr>

        <span class="btn btn-add-file">Добавить изображение</span>
        <input type="file" name="files[]" multiple="multiple" id="files" style="display: none;">
        <br>
        <div class="images-container">

        </div>
    </form>
</div>

<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
