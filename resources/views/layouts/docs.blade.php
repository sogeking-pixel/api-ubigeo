<x-app-layout>
   <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documentacion') }}
        </h2>
    </x-slot>

    <div class="md:flex min-h-screen px-24">

        <aside class="md:w-1/4 pl-24 md:sticky md:top-16 md:h-[calc(100vh_-_30rem)]">
            <div class="p-6">
                <x-aside-link :href="route('docs.index')" :active="request()->routeIs('docs.index')">
                        {{ __('Guia de Inicio') }}
                </x-aside-link>

                <x-aside-link :href="route('docs.departamento')" :active="request()->routeIs('docs.departamento')">
                        {{ __('Consultar Departamentos') }}
                </x-aside-link>

                <x-aside-link :href="route('docs.provincia')" :active="request()->routeIs('docs.provincia')">
                        {{ __('Consultar Provincias') }}
                </x-aside-link>

                <x-aside-link :href="route('docs.distrito')" :active="request()->routeIs('docs.distrito')">
                        {{ __('Consultar Distritos') }}
                </x-aside-link> 

            </div>
            
        </aside>

        <!-- Sección desplazable -->
        <div class="md:w-2/4 p-12 pl-20">
            {{ $slot }}
        </div>        

    </div>

</x-app-layout>