<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>勉強時間登録</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <header style="background-color: #ff7f50;">
        <h1>【登録内容】{{$user->id}}番</h1>
    </header>
    <form action="{{route('delete.{seat_id}',['seat_id'=>$user->id])}}" method="post">
        @csrf
        @if($user->content == "未登録")
            <h2>対象となるユーザーは存在しません</h2>
        @else
            <label for="name">生徒番号</label><br>
            <h3>{{$seat->id}}</h3>
            <label for="name">名前</label><br>
            <h3>{{$seat->name}}</h3>
            <label for="time">勉強時間</label><br>
            <?php
            $time = $user->time;
            ?>
            <h3>~{{$time}}時</h3>
            <label for="content">勉強内容</label><br>
            <h3>{{$user->content}}</h3>
            @if($user->updated_at!=null)
                <button type="submit" class="btn btn-primary btn-sm mt-1">削除する</button>
            @else
                <button type="submit" class="btn btn-primary btn-sm mt-1" disabled>削除する</button>
            @endif
        @endif
    </form>
    <a href="{{ route('admin.index') }}" class="btn btn-danger btn-sm mt-1">管理者画面トップに戻る</a>

</div>
</body>
</html>
