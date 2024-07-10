<x-app-layout>

    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <div>
                <h2 class="font-semibold text-xl my-2 text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Lista de Habilidades') }}
                </h2>
            </div>
            <div>
                <a href="{{ route('skill.create') }}">
                    <x-primary-button>
                        {{ __('Adicionar Habilidade') }}
                    </x-primary-button>
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <ul role="list" class="divide-y divide-gray-100">
                        @foreach ($skills as $skill)
                            <li class="flex justify-between items-center gap-x-6 py-5">
                                <div class="flex min-w-0 gap-x-4">
                                    <div class="min-w-0 flex-auto">
                                        <p class="text-sm font-semibold leading-6 text-gray-100">{{ $skill->description }}</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="{{ route('skill.show', $skill->id) }}">
                                        <x-secondary-button>
                                            {{ __('Ver Habilidade') }}
                                        </x-secondary-button>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    {{-- <div>
                        {{ $skills->links() }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
