<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>勉強時間登録</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<header>
    <div class="container">
        <div>
            <h1 style="background-color:  #ff7f50;">【登録画面】{{$user->id}}番</h1>
        </div>
    </div>

</header>
<div class="container">
    <form action="{{ route('user.store.{seat_id}', ['seat_id' => $user->id]) }}" method="post">
        @csrf
        <div class="form-group" style="max-width: 300px;">
            <label for="id">生徒番号</label>
            <input id="id" name="id" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="time">勉強時間</label>
            <select id="time" name="time" class="form-control" style="max-width: 190px;" required>
                <option value="">時間を選択してください</option>
                <option value="13">~13時</option>
                <option value="14">~14時</option>
                <option value="15">~15時</option>
                <option value="16">~16時</option>
                <option value="17">~17時</option>
                <option value="18">~18時</option>
                <option value="19">~19時</option>
                <option value="20">~20時</option>
                <option value="21">~21時</option>
            </select>
        </div>
        <div class="form-group">
            <label for="content">勉強内容</label>
            <textarea id="content" name="content" rows="4" cols="50" class="form-control"  style="max-width: 600px;" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-sm mt-1">送信する</button>
    </form>
    <a href="{{route('user.index')}}" class="btn btn-secondary mt-1 btn-sm">トップに戻る</a>
</div>
</body>
</html>

