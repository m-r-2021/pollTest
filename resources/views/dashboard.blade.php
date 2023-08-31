<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Encuesta COSOC') }}
        </h2>
    </x-slot>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    @if (Auth::user()->canVote)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <form action="{{ route('sendVote') }}" method="post">
                        @csrf
                        {{-- <div>
                            <div class="card my-3 col-6 mx-auto">
                                <div class="card-header bg-primary text-white">
                                    Asociaciones Gremiales Colegio Profesional de la salud
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="candidate"
                                            value="patricia_cuevas" />
                                        <label class="form-check-label">Patricia Lorena Cuevas Rebolledo (Consejo
                                            Regional Iquique del Colegio de Cirujano Dentistas de Chile)</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="candidate"
                                            value="johan_wimmer" />
                                        <label class="form-check-label">Johan Manuel Wimmer Rios (Federación de
                                            Funcionarios de la Salud Primera Región)</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="candidate"
                                            value="ruth_rios" />
                                        <label class="form-check-label">Ruth Elizabeth Rios Garcia (Colegio de
                                            Enfermeras de Chile Consejo Regional Iquique)</label>
                                    </div>


                                </div>
                            </div>

                            <div class="card my-3 col-6 mx-auto">
                                <div class="card-header bg-success text-white">
                                    Consejos y Agrupaciones de Salud, Los Consejos de Desarrollo Local y Consejos
                                    Consultivos, de los Establecimientos que Conforman la Red Pública de Atención
                                    Primaria de Salud
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="candidate2"
                                            value="mario_muñoz" />
                                        <label class="form-check-label">Mario Moises Muñoz Russo (Consejo Vecinal de
                                            Salud Consultorio Cirujano Videla)</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="candidate2"
                                            value="johana_castillo" />
                                        <label class="form-check-label">Johana Castillo Diaz (Agrupacion Villa de la
                                            Solidaridad)</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="candidate2"
                                            value="maria_troncoso" />
                                        <label class="form-check-label">Maria Eliana Troncoso Ramos (Consejo Desarrollo
                                            Local de Salud de la Comuna de Pica)</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="candidate2"
                                            value="rosa_gonzalez" />
                                        <label class="form-check-label">Rosa Elena Gonzalez Rivera (Junta de Vecinos Sol
                                            Naciente)</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="candidate2"
                                            value="alicia_naranjo" />
                                        <label class="form-check-label">Alicia Naranjo Silva (Consejo Consultivo Ernesto
                                            Torres Galdames)</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="candidate2"
                                            value="daniza_esquivel" />
                                        <label class="form-check-label">Daniza Yuvana Esquivel Salidas (Centro Cultural
                                            De Desarrollo Salud Esmeralda)</label>
                                    </div>
                                </div>
                            </div>

                            <div class="card my-3 col-6 mx-auto">
                                <div class="card-header bg-success text-white">
                                    Asociaciones Gremiales Colegio Profesional de la salud
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="candidate3"
                                            value="patricio_cuevas" />
                                        <label class="form-check-label">Patricio Cuevas (Consejo Regional Iquique del
                                            Colegio de cirujano dentistas de Chile)</label>
                                    </div>
                                </div>
                            </div>

                            <div class="card my-3 col-6 mx-auto">
                                <div class="card-header bg-danger text-white">
                                    Federaciones de Estudiantes de Educación Superior
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="candidate4"
                                            value="maximo_sierralta" />
                                        <label class="form-check-label">Maximo Sierralta (Federación de Estudiantes
                                            Universidad Arturo Prat)</label>
                                    </div>
                                </div>
                            </div>

                            <div class="card my-3 col-6 mx-auto">
                                <div class="card-header bg-danger text-white">
                                    Organizaciones constituidas conforme a la Ley 19.253, Asociaciones u Organizaciones
                                    Indígenas
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="candidate5"
                                            value="alexandra_diaz" />
                                        <label class="form-check-label">Alexandra Diaz (Asociación indígena Willka
                                            Marka)</label>
                                    </div>
                                </div>
                            </div>

                            <div class="card my-3 col-6 mx-auto">
                                <div class="card-header bg-danger text-white">
                                    Organizaciones constituidas conforme a la Ley 19.253, Asociaciones u Organizaciones
                                    Indígenas
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="candidate6"
                                            value="alexander_puertas" />
                                        <label class="form-check-label">Alexander Puertas (Consejo Consultivo Para
                                            Adolescente EA Alto Hospicio)</label>
                                    </div>
                                </div>
                            </div>

                            <div class="card my-3 col-6 mx-auto">
                                <div class="card-header bg-info text-white">
                                    Organizaciones No Gubernamentales y Fundaciones sin fines de lucro y funcionales
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="candidate7"
                                            value="cristian_diaz" />
                                        <label class="form-check-label">Cristian Diaz (Centro Social, Cultural y
                                            Deportivo Movimiento Ciudadano del Tamarugal)</label>
                                    </div>
                                </div>
                            </div>

                            <div class="card my-3 col-6 mx-auto">
                                <div class="card-header bg-warning text-white">
                                    Organizaciones que promuevan la diversidad o personas en situación de discapacidad
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="candidate8"
                                            value="yokonda_montero" />
                                        <label class="form-check-label">Yokonda Montero (Centro Social Cultural
                                            Agrupación Nefertiti)</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="candidate8"
                                            value="diego_araya" />
                                        <label class="form-check-label">Diego Araya (Organizaciones que promuevan la
                                            diversidad o personas en situación de discapacidad)</label>
                                    </div>
                                </div>
                            </div>

                            <div class="card my-3 col-6 mx-auto">
                                <button type="submit" class="btn btn-primary text-black">Enviar</button>
                            </div>
                        </div> --}}

                        <div>

                            @php
                            $i = 1;
                            @endphp
                            @foreach ($categories as $category)
                                <div class="card my-3 col-6 mx-auto">
                                    <div class="card-header bg-primary text-white">
                                        {{ $category->agrupacion }}
                                    </div>
                                    <div class="card-body">

                                        @foreach ($candidates as $candidate)
                                            @if ($candidate->agrupacion == $category->agrupacion)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="{{'candidate' . $i}}"
                                                        value="{{$candidate->nombre}}" />
                                                    <label class="form-check-label"> <b>{{ $candidate->nombre }}</b> ({{ $candidate->organizacion }})
                                                    </label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                                            @php
                            $i++;
                            @endphp

                            @endforeach

                            <div class="card my-3 col-6 mx-auto">
                                <button type="submit" class="btn btn-primary text-black">Enviar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @else
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="alert alert-danger">
                    No puedes votar nuevamente.
                </div>
            </div>
        </div>
    @endif

</x-app-layout>
