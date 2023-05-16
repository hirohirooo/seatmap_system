<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>【管理者用】座席表</title>
    <link rel="stylesheet" href="{{ asset('asset/css/index.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
<header style="background-color: #ff7f50;">

    <a href={{route('user.index')}} class="btn btn-danger">生徒画面はこちら</a><br>
    <a href={{route('admin.set')}} class="btn btn-danger mt-1">設定</a>
    <h1 class="text-center">【管理者用】座席表</h1>
{{--    <div class="container">--}}
    <div class="clock"></div>
</header>
<main style="background-color: #fff3e6">

{{--<div class="seats @if(!is_null($users->first()) && !is_null($users->first()->created_at)) reserved @endif">--}}
    <div class="seats">
    @for($i = 1; $i <= 40; $i++)
                @if(!is_null($users->first()) && $users->where('id', $i)->whereNotNull('updated_at')->count() > 0)
                <a href="{{ route('admin.edit.{seat_id}', ['seat_id' => $i]) }}">
                <div class="seat reserved ">
                            <?php
                            $time = $users->where('id', $i)->whereNotNull('updated_at')->first()->time;
                            ?>
                        <span>~{{ $time }}時</span><br>
                    </div>
            </a>
                    @else
                        <a href="{{ route('admin.edit.{seat_id}', ['seat_id' => $i]) }}">
                            <div class="seat">
                                {{ $i }}<br>
                            </div>
                        </a>
                    @endif
        @endfor
    </div>
<script src="{{ asset('asset/js/index.js') }}"></script>
</main>
</body>
</html>




