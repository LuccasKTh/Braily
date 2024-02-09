<x-app-layout>
    
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __($student->name) }}
                </h2>
            </div>
            <div class="flex flex-row gap-x-6">
                <x-primary-button>
                    <a href="{{ route('student.edit', $student->id) }}">
                        {{ __('Editar') }}
                    </a>
                </x-primary-button>
                <x-danger-button
                    x-data=""
                    x-on:click.prevent="$dispatch('open-modal', 'confirm-student-deletion')"
                > {{ __('Excluir') }} </x-danger-button>

                <x-modal name="confirm-student-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                    <form action="{{ route('student.destroy', $student->id) }}" method="post" class="p-6">
                        @csrf
                        @method('delete')

                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Você tem certeza que deseja exclur este aluno?') }}
                        </h2>
            
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Uma vez excluido, todos os dados serão permanentemente deletados.') }}
                        </p>
            
                        <div class="mt-6 flex justify-end">
                            <x-secondary-button x-on:click="$dispatch('close')">
                                {{ __('Cancelar') }}
                            </x-secondary-button>
            
                            <x-danger-button class="ms-3">
                                {{ __('Excluir Aluno') }}
                            </x-danger-button>
                        </div>
                    </form>
                </x-modal>
            </div>
        </div>
        <div class="">
            <div class="grid grid-cols-2 gap-x-4 text-gray-400">
                <h4>Idade: {{ __($student->age) }}</h4>
                <h4>Matrícula: {{ __($student->registration) }}</h4>
                <h4>Escolaridade: {{ __($student->education) }}</h4>
                <h4>Habilidade: {{ __($student->skill) }}</h4>
                <h4>Observações: {{ __($student->about) }}</h4>
            </div>
        </div>
    </x-slot>

</x-app-layout>