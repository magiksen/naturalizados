<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Nuevo Naturalizado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if(session('info'))
                        <div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700" role="alert">
                            {{ session('info') }}
                        </div>
                    @endif

                {!! Form::open(['route' => 'naturalizados.store']) !!}
                    <div class="mt-4">
                        <div>
                            <p class="font-medium leading-tight text-3xl mt-0 mb-2 text-blue-600">Nombres:</p>
                            {!! Form::label('nombre_uno', 'Nombre', ['class' => 'form-label block m-4 text-gray-700']) !!}
                            {!! Form::text('nombre_uno', null, ['class' => 'form-control text-gray-700 border border-solid border-gray-300 rounded']) !!}
                            {!! Form::label('nombre_dos', 'Nombre', ['class' => 'form-label block m-4 text-gray-700']) !!}
                            {!! Form::text('nombre_dos', null, ['class' => 'form-control text-gray-700 border border-solid border-gray-300 rounded']) !!}
                            {!! Form::label('nombre_tres', 'Nombre', ['class' => 'form-label block m-4 text-gray-700']) !!}
                            {!! Form::text('nombre_tres', null, ['class' => 'form-control text-gray-700 border border-solid border-gray-300 rounded']) !!}
                        </div>
                        <div>
                            <p class="font-medium leading-tight text-3xl mt-0 mb-2 text-blue-600">Apellidos:</p>
                            {!! Form::label('apellido_uno', 'Apellido', ['class' => 'form-label block m-4 text-gray-700']) !!}
                            {!! Form::text('apellido_uno', null, ['class' => 'form-control text-gray-700 border border-solid border-gray-300 rounded']) !!}
                            {!! Form::label('apellido_dos', 'Apellido', ['class' => 'form-label block m-4 text-gray-700']) !!}
                            {!! Form::text('apellido_dos', null, ['class' => 'form-control text-gray-700 border border-solid border-gray-300 rounded']) !!}
                            {!! Form::label('apellido_tres', 'Apellido', ['class' => 'form-label block m-4 text-gray-700']) !!}
                            {!! Form::text('apellido_tres', null, ['class' => 'form-control text-gray-700 border border-solid border-gray-300 rounded']) !!}
                            {!! Form::label('apellido_casada', 'Apellido de Casada', ['class' => 'form-label block m-4 text-gray-700']) !!}
                            {!! Form::text('apellido_casada', null, ['class' => 'form-control text-gray-700 border border-solid border-gray-300 rounded']) !!}
                        </div>
                        <div>
                            <p class="font-medium leading-tight text-3xl mt-0 mb-2 text-blue-600">Datos:</p>
                            {!! Form::label('ci_extranjero', 'Cedula Extranjero', ['class' => 'form-label block m-4 text-gray-700']) !!}
                            {!! Form::text('ci_extranjero', null, ['class' => 'form-control text-gray-700 border border-solid border-gray-300 rounded']) !!}
                            {!! Form::label('num_gaceta', 'Numero de Gaceta', ['class' => 'form-label block m-4 text-gray-700']) !!}
                            {!! Form::text('num_gaceta', null, ['class' => 'form-control text-gray-700 border border-solid border-gray-300 rounded']) !!}
                            {!! Form::label('fecha_publicacion', 'Fecha de Publicacion', ['class' => 'form-label block m-4 text-gray-700']) !!}
                            {!! Form::text('fecha_publicacion', null, ['class' => 'form-control text-gray-700 border border-solid border-gray-300 rounded']) !!}
                            {!! Form::label('num_pagina', 'Pagina', ['class' => 'form-label block m-4 text-gray-700']) !!}
                            {!! Form::text('num_pagina', null, ['class' => 'form-control text-gray-700 border border-solid border-gray-300 rounded']) !!}
                            {!! Form::label('num_linea', 'Linea', ['class' => 'form-label block m-4 text-gray-700']) !!}
                            {!! Form::text('num_linea', null, ['class' => 'form-control text-gray-700 border border-solid border-gray-300 rounded']) !!}
                            {!! Form::label('expediente', 'Expediente', ['class' => 'form-label block m-4 text-gray-700']) !!}
                            {!! Form::text('expediente', null, ['class' => 'form-control text-gray-700 border border-solid border-gray-300 rounded']) !!}
                            {!! Form::label('error_gaceta', 'Error en la Gaceta', ['class' => 'form-label block m-4 text-gray-700']) !!}
                            {!! Form::text('error_gaceta', null, ['class' => 'form-control text-gray-700 border border-solid border-gray-300 rounded']) !!}
                            {!! Form::label('observacion', 'Observacion', ['class' => 'form-label block m-4 text-gray-700']) !!}
                            {!! Form::text('observacion', null, ['class' => 'form-control text-gray-700 border border-solid border-gray-300 rounded']) !!}
                        </div>
                        
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="text-red-700 block mt-2">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                        {!! Form::submit('Registrar Usuario', ['class' => 'mt-5 block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out cursor-pointer']) !!}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
