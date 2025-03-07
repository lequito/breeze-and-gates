<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            NOVO POST
        </h2>
    </x-slot>

    <div class="max-w-lg mx-auto p-8 bg-white dark:bg-gray-800 shadow-lg rounded-2xl">
        <form action="{{ route('post.store') }}" method="POST" class="space-y-6">
            @csrf

            <div class="mb-3">
                <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Título</label>
                <input type="text" id="title" name="title"
                    class="mt-1 block w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                    placeholder="Digite o título" required>
                @error('title')
                    <div class="text-red-500">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="content"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Conteúdo</label>
                <textarea id="content" name="content" rows="4"
                    class="mt-1 block w-full p-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                    placeholder="Digite sua mensagem" required></textarea>
                @error('content')
                    <div class="text-red-500">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <button type="submit"
                class="w-full bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white font-bold py-3 px-6 rounded-xl shadow-md transition transform hover:scale-105">
               🚀 Enviar Post
        </button>
            </div>
        </form>
    </div>

</x-app-layout>
