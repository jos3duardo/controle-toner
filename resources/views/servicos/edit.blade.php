@extends('layouts.layout')
@section('content')

    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-0 md:gap-6">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{route('servicos.update', $servico)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                                    <input type="text"  {{old('nome')}} value="{{$servico->nome}}" name="nome" id="nome" autocomplete="given-name" class="mt-1 py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-500 rounded-md">
                                    @error('nome')
                                    {{$message}}
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="modelo_equipamento" class="block text-sm font-medium text-gray-700">Modelo Equipamento</label>
                                    <input type="text"  {{old('modelo_equipamento')}} value="{{$servico->modelo_equipamento}}" name="modelo_equipamento" id="modelo_equipamento" autocomplete="given-name" class="mt-1 py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-500 rounded-md">
                                    @error('modelo_equipamento')
                                    {{$message}}
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="numero_os" class="block text-sm font-medium text-gray-700">Numero OS</label>
                                    <input type="text"  {{old('numero_os')}} value="{{$servico->numero_os}}" name="numero_os" id="numero_os" autocomplete="family-name" class="mt-1 py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-500 rounded-md">
                                    @error('numero_os')
                                    {{$message}}
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
                                    <input type="text" {{old('descricao')}} value="{{$servico->descricao}}" name="descricao" id="descricao" autocomplete="given-name" class="mt-1 py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-500 rounded-md">
                                    @error('descricao')
                                    {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Salvar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
