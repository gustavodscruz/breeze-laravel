<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white">
                    <a href="{{ route('clientes.create') }}" class="bg-purple-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-3">
                        Cadastrar Cliente
                    </a>

                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-3 mt-2">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(count($clientes) > 0)
                        <table class="table-auto w-full">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="px-4 py-2">Nome</th>
                                    <th class="px-4 py-2">Endereço</th>
                                    <th class="px-4 py-2">Bairro</th>
                                    <th class="px-4 py-2">CEP</th>
                                    <th class="px-4 py-2">Cidade</th>
                                    <th class="px-4 py-2">Estado</th>
                                    <th class="px-4 py-2">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clientes as $cliente)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $cliente->nome }}</td>
                                        <td class="border px-4 py-2">{{ $cliente->endereco }}</td>
                                        <td class="border px-4 py-2">{{ $cliente->bairro }}</td>
                                        <td class="border px-4 py-2">{{ $cliente->cep }}</td>
                                        <td class="border px-4 py-2">{{ $cliente->cidade }}</td>
                                        <td class="border px-4 py-2">{{ $cliente->estado }}</td>
                                        <td class="border px-4 py-2">
                                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
                                                Editar
                                            </a>
                                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded" onclick="return confirm('Tem certeza que deseja excluir este cliente?')">
                                                    Excluir
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-gray-600">Nenhum cliente cadastrado ainda.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
