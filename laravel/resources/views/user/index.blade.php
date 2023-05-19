<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>座席表</title>
    <link rel="stylesheet" href="{{ asset('asset/css/index.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header style="background-color: #ff7f50;">
    <a href="{{ route('login') }}" class="btn btn-danger">管理者用ログインページはこちら</a>
    <h1 class="text-center">座席表</h1>
    <div class="clock"></div>
</header>

<main style="background-color: #fff3e6">
        <div class="seats">
            @for($i = 1; $i <= 40; $i++)
                @if(!is_null($users->first()) && $users->where('id', $i)->whereNotNull('updated_at')->count() > 0)
                    <div class="seat reserved">
                            <?php
                            $time = $users->where('id', $i)->whereNotNull('updated_at')->first()->time;
                            ?>
                        <span>~{{ $time }}時</span><br>
                    </div>
                @else
                    <a href="{{ route('user.edit.{seat_id}', ['seat_id' => $i]) }}">
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






