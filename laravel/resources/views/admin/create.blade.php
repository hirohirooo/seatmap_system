<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>管理者追加画面</title>
</head>
<header style="background-color: #ff7f50">
    <h1>管理者追加画面</h1>
</header>
<body style="background-color: #fff3e6">
<div class="container-fluid">
    <form action="{{route('admin.create.post')}}" method="post">
        @csrf
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group" style="max-width: 300px;">
            <label for="name">メールアドレス</label>
            <input id="email" name="email" type="email" class="form-control" required>
            <label for="name">パスワード</label>
            <input id="password" name="password" type="password" class="form-control" required>
            <button type="submit" class="btn btn-primary btn-sm mt-1">追加</button>
        </div>
        <a href="{{route('admin.set')}}" class="btn btn-secondary mt-1 btn-sm">設定画面に戻る</a>
    </form>
</div>

</body>
</html>
