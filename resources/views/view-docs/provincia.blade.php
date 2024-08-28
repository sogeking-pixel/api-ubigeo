<x-docs-layout>   
    <div class="text-gray-600 text-lg">
        <x-title> {{ __('Consulta Provincias') }} </x-title>

         <x-subtitle>Get Provincias</x-subtitle>
        Este endpoint devuelve todas las provincias que pertenecen a un departamento específico. Debes reemplazar la variable
        <x-code-element class="text-red-500"> {departamento}</x-code-element> con el nombre del departamento del cual deseas obtener sus provincias. <br>
        <div class="my-4">
            <x-code-element class="text-green-600 text-lg">GET</x-code-element>
            <div class="overflow-auto">
                <x-code-element class="text-gray-500 text-lg">{{route('departamentos.index')}}/<span class="text-red-500">{departamento}</span>/provincias </x-code-element>
            </div>
        </div>
        
        <x-sub2title>Headers</x-sub2title>
        @component('components.table', ['numColumns' => 3, 'headers' => ['Name', 'Type', 'Description']])
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">Accept</td>
                <td class="px-6 py-4 whitespace-nowrap">String</td>
                <td class="px-6 py-4 whitespace-nowrap">application/json</td>
            </tr>

            <tr>
                <td class="px-6 py-4 whitespace-nowrap">Content-Type</td>
                <td class="px-6 py-4 whitespace-nowrap">String</td>
                <td class="px-6 py-4 whitespace-nowrap">application/json</td>
            </tr>


            <tr>
                <td class="px-6 py-4 whitespace-nowrap">Authorization</td>
                <td class="px-6 py-4 whitespace-nowrap">String</td>
                <td class="px-6 py-4 whitespace-nowrap">Bearer  <a href="{{route('docs.index')}}#autenticacion" class="text-sky-600 font-semibold hover:text-sky-800">{token}</a> </td>
            </tr>
            
        @endcomponent

        <x-sub2title>Resultado Json</x-sub2title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>

        <pre class="text-base w-full bg-white px-8 rounded shadow border border-gray-100 overflow-auto"> 
            <code class="hljs">
{
    <span class="hljs-attr">"success"</span>: <span class="hljs-keyword">true</span>,
    <span class="hljs-attr">"data"</span>:[
        {
            <span class="hljs-attr">"nombre"</span>: <span class="hljs-string">"resultado_1"</span>,
            <span class="hljs-attr">"link_info"</span>: <span class="hljs-string">"{{route('provincias.show',"resultado_1")}}"</span>,
            <span class="hljs-attr">"link_distritos"</span>: <span class="hljs-string">"{{route('departamentos.provincias.distritos.index', ['departamento' => 'depart', 'provincia' => 'resultado_1'])}}"</span>
        },
        {
            <span class="hljs-attr">"nombre"</span>: <span class="hljs-string">"resultado_2"</span>,
            <span class="hljs-attr">"link_info"</span>: <span class="hljs-string">"{{route('provincias.show','resultado_2')}}"</span>,
            <span class="hljs-attr">"link_distritos"</span>: <span class="hljs-string">"{{route('departamentos.provincias.distritos.index', ['departamento' => 'depart', 'provincia' => 'resultado_2'])}}"</span>
        },
        {            
            <span class="hljs-attr">"nombre"</span>: <span class="hljs-string">"resultado_3"</span>,
            <span class="hljs-attr">"link_info"</span>: <span class="hljs-string">"{{route('provincias.show','resultado_3')}}"</span>,
            <span class="hljs-attr">"link_distritos"</span>: <span class="hljs-string">"{{route('departamentos.provincias.distritos.index', ['departamento' => 'depart', 'provincia' => 'resultado_3'])}}"</span>
        }
    ]
}
            </code>
        </pre>

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

        <x-subtitle class="mt-12">Get Provincia específica</x-subtitle>
        Este es el endpoint para Provincia especifica la cual se necesitara cambiar la variable 
        <x-code-element class="text-red-500">{provincia}</x-code-element>
        con el nombre del departamento del cual se requiera obtener algunas informacion extra: <br>
        <div class="my-4">
            <x-code-element class="text-green-600 text-lg">GET</x-code-element>
            <div class="overflow-auto">
                <x-code-element class="text-gray-500 text-lg">{{route('index')}}/api/provincias/<span class="text-red-500">{provincia}</span></x-code-element>
            </div>
        </div>
        
        <x-sub2title>Headers</x-sub2title>
        @component('components.table', ['numColumns' => 3, 'headers' => ['Name', 'Type', 'Description']])
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">Accept</td>
                <td class="px-6 py-4 whitespace-nowrap">String</td>
                <td class="px-6 py-4 whitespace-nowrap">application/json</td>
            </tr>

            <tr>
                <td class="px-6 py-4 whitespace-nowrap">Content-Type</td>
                <td class="px-6 py-4 whitespace-nowrap">String</td>
                <td class="px-6 py-4 whitespace-nowrap">application/json</td>
            </tr>


            <tr>
                <td class="px-6 py-4 whitespace-nowrap">Authorization</td>
                <td class="px-6 py-4 whitespace-nowrap">String</td>
                <td class="px-6 py-4 whitespace-nowrap">Bearer  <a href="{{route('docs.index')}}#autenticacion" class="text-sky-600 font-semibold hover:text-sky-800">{token}</a> </td>
            </tr>
            
        @endcomponent

        <x-sub2title>Resultado Json</x-sub2title>
        

        <pre class="text-base w-full bg-white px-8 rounded shadow border border-gray-100 overflow-auto"> 
            <code class="hljs">
{
    <span class="hljs-attr">"success"</span>: <span class="hljs-keyword">true</span>,
    <span class="hljs-attr">"data"</span>:{    
        <span class="hljs-attr">"nombre"</span>: <span class="hljs-string">"resultado 1"</span>,
        <span class="hljs-attr">"num_distritos"</span>: <span class="hljs-number">12</span>        
    }
}
            </code>
        </pre>
        
        
        
    </div>
    


</x-docs-layout>