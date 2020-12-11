@extends('layouts.layout')
@section('content')

    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-0 md:gap-6">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{route('toners.store')}}" method="POST">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="modelo" class="block text-sm font-medium text-gray-700">Modelo</label>
                                    <input type="text"  {{old('modelo')}} name="modelo" id="modelo" autocomplete="given-name" class="mt-1 py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-500 rounded-md">
                                    @error('modelo')
                                    {{$message}}
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="marca" class="block text-sm font-medium text-gray-700">Marca</label>
                                    <input type="text"  {{old('marca')}} name="marca" id="marca" autocomplete="family-name" class="mt-1 py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-500 rounded-md">
                                    @error('marca')
                                    {{$message}}
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tipo" class="block text-sm font-medium text-gray-700">Tipo</label>
                                    <input type="text" {{old('tipo')}} name="tipo" id="tipo" autocomplete="given-name" class="mt-1 py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-500 rounded-md">
                                    @error('tipo')
                                    {{$message}}
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                    <input type="text" {{old('status')}}  name="status" id="status" autocomplete="family-name" class="mt-1 py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border border-gray-500 rounded-md">
                                    @error('status')
                                    {{$message}}
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="cilindro" class="block text-sm font-medium text-gray-700">Tem Cilindro</label>
                                    <select id="cilindro" name="cilindro" autocomplete="cilindro" class="mt-1 py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm  sm:text-sm bg-white border border-gray-500 rounded-md">
                                        <option>Selecione</option>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
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
