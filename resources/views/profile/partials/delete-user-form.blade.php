<section class="space-y-6">
    <body>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Eliminar cuenta') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Una vez eliminada tu cuenta, todos los datos seran eliminados permanentemente. Antes de eliminar tu cuenta, por favor descarga calquier dato o información que quieras guardar.') }}
        </p>
    </body>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Eliminar cuenta') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Estas seguro de eliminar tu cuenta?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Una vez eliminada tu cuenta, todos los datos seran eliminados permanentemente. Por favor, ingresa tu contraseña para confirmar que eliminaras permanentemente tu cuenta.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Contraseña') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Contraseña') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Eliminar cuenta') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
