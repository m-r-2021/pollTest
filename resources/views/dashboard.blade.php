<head>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Encuesta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
        <button type="submit" class="btn btn-primary text-black">Enviar</button>
    </div>

            </div>
        </div>
    </div>
</x-app-layout>
