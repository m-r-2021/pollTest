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

    <div class="card my-3 col-6 mx-auto">
        <div class="card-header bg-primary text-white">
            Pregunta 2
        </div>
        <div class="card-body">

            <div class="form-check">
                <input class="form-check-input" type="radio" id="candidate1" name="candidate2" value="huey1" />
                <label for="huey" class="form-check-label">Huey</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" id="candidate2" name="candidate2" value="huey2" />
                <label for="huey2" class="form-check-label">Huey2</label>
            </div>
        </div>
    </div>
    <div class="text-center my-5">
        <button type="submit" class="btn btn-primary text-black">Enviar</button>
    </div>

</body>

</html>
