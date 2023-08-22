<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    @for ($i = 0; $i < 8; $i++)
        <div class="card my-3 col-6 mx-auto">
            <div class="card-header bg-primary text-white">
                Pregunta {{ $i + 1 }}
            </div>
            <div class="card-body">
                @for ($j = 0; $j < 5; $j++)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="huey{{$j}}" name="drone{{ $i }}"
                            value="huey" />
                        <label for="huey" class="form-check-label">Huey{{$j}}</label>
                    </div>
                @endfor
            </div>
        </div>
    @endfor

    <div class="text-center my-5">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</body>

</html>
