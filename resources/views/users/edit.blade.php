<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update user') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded-xl">
            <x-splade-form action="{{ route('users.update', $user) }}" :default="$user" method="put">
                <x-splade-input name="name" label="Name" placeholder="Your name" class="mb-4" />
                <x-splade-input name="email" type="email" label="Email address" placeholder="Email address"
                    class="mb-4" />
                <x-splade-input name="password" type="password" :label="__('password')" placeholder="Password"
                    class="mb-4" />
                <x-splade-submit label="Save" :spinner="true" />
            </x-splade-form>
        </div>
    </div>

</x-app-layout>
