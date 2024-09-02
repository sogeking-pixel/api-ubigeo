<x-app-layout>
   <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight block">
                {{ __('Documentacion') }}
            </h2>

            <div class="md:hidden ml-auto">
             <x-dropdown align="right" width="48" >
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-2border border-transparent font-normal text-xl text-gray-700 leading-tight rounded-md   hover:text-gray-800 focus:outline-none transition ease-in-out duration-150">
                       <div>
                            @switch(request()->route()->getName())
                                @case('docs.index')
                                    Inicio
                                    @break
                                @case('docs.departamento')
                                    Departamentos
                                    @break
                                @case('docs.provincia')
                                    Provincias
                                    @break
                                @case('docs.distrito')
                                    Distritos
                                    @break
                            @endswitch
                        </div>

                        <div class="ms-1 p-">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
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

                    
                </x-slot>
            </x-dropdown>
        </div>
        </div>
        
        
       
    </x-slot>

    <div class="md:flex min-h-screen px-8 sm:px-16 ">

        <aside class="hidden md:block md:w-1/4 2xl:pl-24 md:sticky md:top-16 md:h-[calc(100vh_-_30rem)]">
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
        <div class="md:w-3/4 2xl:w-2/4 md:p-12 py-12 lg:pl-20">
            {{ $slot }}
        </div>        

    </div>

    <style>
            .hljs-attr{
                color: rgb(16, 146, 127);
            }
            .hljs-string{
                 color: rgb(201, 139, 32);
            }
            .hljs-number{
                color: rgb(67, 151, 224);
            }
            .hljs-keyword{
                color: rgb(238, 97, 78);
            }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</x-app-layout>