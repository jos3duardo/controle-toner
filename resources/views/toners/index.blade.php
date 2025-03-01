@extends('layouts.layout')
@section('content')


    <a href="{{route('toners.create')}}" class="mt-2 mb-2 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
        Novo
    </a>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Modelo
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tipo
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Marca
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Cilindro
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Data
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($toners as $toner)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$toner->modelo}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$toner->marca}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$toner->tipo}}

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$toner->status}}

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$toner->created_at->format('d/m/Y')}}

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex inline">
                                <a href="{{route('toners.edit', ['toner' => $toner->id])}}" class=" text-indigo-600 hover:text-indigo-900 mr-2">
                                    <i class="fas fa-edit text-blue-900"></i>
                                </a>
                                <form action="{{route('toners.destroy', $toner)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <a class="text-indigo-600 hover:text-indigo-900 curso-pointer"
                                       onclick="confirm('{{ __('Tem certeza de que deseja excluir este toner?') }}') ? this.parentElement.submit() : ''">
                                        <i class="fas fa-trash-alt text-red-900"></i>
                                    </a>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    sem dados
                                </td>
                            </tr>
                        @endforelse
                        <!-- More rows... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{$toners->links()}}
    </div>


@endsection
