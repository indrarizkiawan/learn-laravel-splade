<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dinas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-splade-link href="{{ route('dinas.create') }}"
                class="bg-indigo-500 p-4 text-white rounded-lg hover:bg-indigo-700">
                Create Dinas</x-splade-link>
            <x-splade-table :for="$dinas" pagination-scroll="preserve">
                <x-splade-cell actions as="$dinas">
                    <x-splade-link href="{{ route('dinas.edit', $dinas) }}"
                        class="p-2 mr-1 bg-green-600 hover:bg-green-800 rounded-lg text-white">
                        Edit
                    </x-splade-link>
                    <x-splade-form confirm="Delete dinas" confirm-text="Kamu yakin menghapus data dinas ini"
                        confirm-button="Yes, delete dinas" cancel-button="No, Saya tidak manghapus"
                        action="{{ route('dinas.destroy', $dinas) }}" method="delete">
                        <x-splade-button class="bg-red-600 hover:bg-red-800 rounded-lg text-white">Delete
                        </x-splade-button>
                    </x-splade-form>
                </x-splade-cell>
            </x-splade-table>
        </div>
    </div>

</x-app-layout>
