<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>座席表</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container-fluid">
    <div class="row">
    <header style="background-color: #ff7f50;">
        <a href="{{ route('login') }}" class="btn btn-secondary btn-sm">管理者用ログインページ</a>
        <div class="row">
            <div class="col">
                <h1 class="text-center">座席表</h1>
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
                                <a class="col-3 btn btn-outline-dark disabled" aria-disabled="true">
                                    ~{{ $time }}時<br>
                                </a>
                        @else
                                <a class="col-3 btn btn-outline-warning" href="{{ route('user.edit.{seat_id}', ['seat_id' => $i]) }}">
                                    {{ $i }}<br>
                                </a>

                        @endif
                    @endfor
                </div>
            <script src="{{ asset('asset/js/index.js') }}"></script>
    </main>
</div>
</body>
</html>






