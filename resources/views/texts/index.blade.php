<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Texts') }}
        </h2>
    </x-slot>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('texts.store') }}">
            @csrf
            <textarea
                name="message"
                placeholder="{{ __('example text') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                >{{ old('message') }}
            </textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Text') }}</x-primary-button>
        </form>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="texts table-striped Texts-table">
                        <!-- Заголовок таблицы -->
                        <thead>
                            <th>Text</th>
                            <th>&nbsp;</th>
                        </thead>
                        <!-- Тело таблицы -->
                        <tbody>
                            @foreach ($texts as $text)
                            <tr>
                                <td class="table-text">
                                <div>{{ $text->id }}</div>
                                </td>
                                <!-- Имя задачи -->
                                <td class="table-text">
                                <div>{{ $text->content }}</div>
                                </td>

                            <td>
                                 <!-- TODO: Кнопка Удалить -->
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
