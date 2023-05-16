<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>設定画面</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
<header style="background-color: #ff7f50;">
    <h1>【管理者用】設定画面</h1>
</header>
<div class="container">
    <a href="{{ route('admin.new') }}" class="btn btn-danger btn-sm mt-1">新規生徒登録</a>
    <a href="{{ route('admin.index') }}" class="btn btn-danger btn-sm mt-1">管理者画面トップに戻る</a>
</div>
</body>
</html>
