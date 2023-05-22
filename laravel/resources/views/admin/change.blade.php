<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>パスワード変更</title>
</head>
<body>
    <header style="background-color: #ff7f50">
        <h1>パスワード変更</h1>
    </header>
    <div class="container-fluid">
        <body style="background-color: #fff3e6">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form action="{{route('admin.change_pass')}}" method="post">
                @csrf
                <div class="form-group" style="max-width: 300px;">
                    <label for="name">現在のメールアドレス</label>
                    <input id="email" name="email" type="email" class="form-control" required>
                    <label for="name">新しいパスワード</label>
                    <input id="password" name="password" type="password" class="form-control" required>
                    <button type="submit" class="btn btn-primary btn-sm mt-1">変更</button>
                </div>
                <a href="{{route('admin.set')}}" class="btn btn-secondary mt-1 btn-sm">管理者設定画面に戻る</a>
            </form>
        </body>
</div>
</body>
</html>
