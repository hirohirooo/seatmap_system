<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>【管理者用】座席表</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container-fluid">

    <div class="row">
        <header style="background-color: #ff7f50;">
            <p>ようこそ{{\Illuminate\Support\Facades\Auth::user()->email}}さん</p>
            <a href="{{route('logout')}}" class="btn btn-danger btn-sm pt-0">ログアウト</a><br>
            <a href="{{route('admin.set')}}" class="btn btn-danger mt-1 btn-sm">設定</a>
            <div class="row">
                <div class="col">
                    <h1 class="text-center">【管理者用】座席表</h1>
                </div>
                <div class="col">
                    <div class="clock text-center fs-2"></div>
                </div>
            </div>
        </header>
    </div>
</div>
<div class="container-fluid"  style="background-color: #fff3e6">
<main>
    <div class="row text-center">
    @for($i = 1; $i <= 40; $i++)
                @if(!is_null($users->first()) && $users->where('id', $i)->whereNotNull('updated_at')->count() > 0)
                        <?php
                        $time = $users->where('id', $i)->whereNotNull('updated_at')->first()->time;
                        ?>
                    <a class="col-3 btn btn-outline-dark" href="{{ route('admin.edit.{seat_id}', ['seat_id' => $i]) }}">
                        ~{{ $time }}時<br>
                    </a>
                @else
                    <a class="col-3 btn btn-outline-warning" href="{{ route('admin.edit.{seat_id}', ['seat_id' => $i]) }}">
                        {{ $i }}<br>
                    </a>
               @endif
        @endfor
    </div>
<script src="{{ asset('asset/js/index.js') }}"></script>
</main>
</body>
</html>




