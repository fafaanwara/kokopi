<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <from method="post" action="{{ route('logout') }}">
                        @csrf
                        <div clas="mt-2">
                            <x-input-label for="name" :value="__('Nama Produk')" />
                            <x-text-input ad="name" class="block mt-1 w-full p-2" type="name"
                            name="name" :value="old('name')" required />
                            <x-input-error :massage="$errors->get('name')"class="mt-2"/>
</div>
                </from>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
