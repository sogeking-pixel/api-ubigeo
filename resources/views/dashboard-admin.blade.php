<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-6xl mx-auto sm:px-6 lg:px-8">
        {{-- esto el es title --}}
        <div class="mb-12 flex px-6 ">
            <x-title> API Tokens </x-title>
            <div class="flex items-center text-sm gap-2 ml-auto">
                <div class="text-muted-foreground flex items-center gap-2">
                   <x-point-ok></x-point_ok>
                   Usuario habilitado
                </div>              
                
            </div>

        </div>

       
        <div class="max-w-6xl">
            @component('components.cards', [            
            'title' => "Token Activo",
            'data' => [
                ["token" => "14|G88Corp2i2otSzoWeLMt6SZgGYod4W7CUjRk2BHCa8a151b1", "name" => "token asdf", "created" => "hoy", "expires" => "ayer"]
            ]])
            @endcomponent
        </div>

    </div>
</x-app-layout>
