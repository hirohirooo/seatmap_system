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
    <h1>【管理者用】新規生徒登録＆参照画面</h1>
</header>
<div class="container">
    <form action="{{route('user.create')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="time">名前</label>
            <input id="name" name="name" type="text" class="form-control" required>

        </div>
        <button type="submit" class="btn btn-primary btn-sm mt-1">追加する</button>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($user as $users)
            <tr>
                <td>{{ $users->id }}</td>
                <td><a href="{{route('user.admin.edit',['user_id'=>$users->id])}}">{{ $users->name }}</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{ route('admin.set') }}" class="btn btn-danger btn-sm mt-1">設定画面トップに戻る</a>
</div>
</body>
</html>
