<!-- resources/views/clientes/create.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white">
                    <form action="{{ route('clientes.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="mb-4">
                                <label for="nome" class="block text-gray-700 text-sm font-bold mb-2">Nome:</label>
                                <input type="text" name="nome" id="nome" class="form-input rounded-md shadow-sm w-full" required>
                            </div>
                            <div class="mb-4">
                                <label for="endereco" class="block text-gray-700 text-sm font-bold mb-2">Endereço:</label>
                                <input type="text" name="endereco" id="endereco" class="form-input rounded-md shadow-sm w-full" required>
                            </div>
                            <div class="mb-4">
                                <label for="bairro" class="block text-gray-700 text-sm font-bold mb-2">Bairro:</label>
                                <input type="text" name="bairro" id="bairro" class="form-input rounded-md shadow-sm w-full" required>
                            </div>
                            <div class="mb-4">
                                <label for="cep" class="block text-gray-700 text-sm font-bold mb-2">CEP:</label>
                                <input type="text" name="cep" id="cep" class="form-input rounded-md shadow-sm w-full" required>
                            </div>
                            <div class="mb-4">
                                <label for="cidade" class="block text-gray-700 text-sm font-bold mb-2">Cidade:</label>
                                <input type="text" name="cidade" id="cidade" class="form-input rounded-md shadow-sm w-full" required>
                            </div>
                            <div class="mb-4">
                                <label for="estado" class="block text-gray-700 text-sm font-bold mb-2">Estado:</label>
                                <input type="text" name="estado" id="estado" class="form-input rounded-md shadow-sm w-full" required>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="bg-purple-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Cadastrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
