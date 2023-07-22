<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new Dinas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded-xl">
            <x-splade-form action="{{ route('dinas.store') }}">
                {{-- @csrf --}}
                <x-splade-input name="kode_skpd" type="text" label="Kode SKPD" placeholder="Your Kode SKPD"
                    class="mb-4" />
                <x-splade-input name="nama_dinas" type="text" label="Nama SKPD" placeholder="Nama SKPD"
                    class="mb-4" />
                <x-splade-submit label="Save" :spinner="true" />
            </x-splade-form>
        </div>
    </div>

</x-app-layout>
