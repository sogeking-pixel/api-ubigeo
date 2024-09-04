<x-docs-layout>

    <div class="text-gray-600 text-lg mb-14">
        <x-title> {{ __('Inicio') }} </x-title>
        Este es un servicio API REST que permite realizar:
        <ul class="list-disc pl-8 py-4">
            <li>Consulta de departamento</li>
            <li>Consulta de provincia</li>
            <li>Consulta de distritos</li>
        </ul>

        Esta página te ayudará a iniciar con nuestra API así puedas orientarte en los distintos endpoints que se
        encuentran a tu disposición. Comencemos con esta guía rápida.
        <br>
        <br>
        <div class="bg-indigo-100 px-12 py-3 mb-4">
            Recomendamos utilizar los clientes REST como Postman o Insomnia para realizar pruebas sin escribir código.
        </div>
        <br>


        <x-subtitle> {{ __('Peticiones') }} </x-subtitle>
        Las peticiones son <x-code-element class="text-sky-600">HTTP REST</x-code-element>
        por lo que se debe especificar el método que se va a utilizar, junto al método se debe enviar en la cabecera de
        la petición el token de
        acceso que permite la autenticación en la API.

        <ul class="list-disc pl-8 py-4">
            <li><x-code-element class="text-green-600 text-lg">GET</x-code-element>, para obtener información de un
                recurso.</li>
            <li><x-code-element class="text-sky-600 text-lg">POST</x-code-element>, para crear un recurso.</li>
            <li><x-code-element class="text-yellow-600 text-lg">PUT</x-code-element>, para modificar un recurso.</li>
            <li><x-code-element class="text-red-600 text-lg">DELETE</x-code-element>, para eliminar un recurso.</li>
            <div id="autenticacion"></div>
        </ul>
        <br >

        <x-subtitle> {{ __('Autenticacion Api') }} </x-subtitle>
        Para autenticar una petición, se utiliza un token de acceso. Para ello, se necesita
       
       @auth
            <a href="{{ route('profile.edit') }}" class="text-indigo-600 hover:text-indigo-800">verificar</a> 
        @else
            <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-800">registrarse</a> y 
            <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800">verificar</a>            
        @endauth

         el correo.
        Cada usuario tiene su propio token para ello necesita logearse en la api. A continuacion,se muestra el endpoint 
        para el inicio de sesión en la API:

        <div class="my-4">
            <x-code-element class="text-sky-600 text-lg">POST</x-code-element>
            <div class="overflow-auto">
                <x-code-element class="text-gray-500 text-lg">{{ route('api.login') }}</x-code-element>
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
        @endcomponent
        

        <x-sub2title>Body</x-sub2title>
        El cuerpo (body) de la solicitud debe incluir las credenciales del usuario (correo electrónico y contraseña).
        

        <pre class="text-base w-full bg-white px-8 rounded shadow border border-gray-100 overflow-auto"> 
            <code class="hljs">
{
    <span class="hljs-attr">"email"</span>: <span class="hljs-string">"tu correo"</span>,
    <span class="hljs-attr">"password"</span>: <span class="hljs-string">"tu password"</span>    
}
            </code>
        </pre>


<x-sub2title>Resultado Json</x-sub2title>
        

        <pre class="text-base w-full bg-white px-8 rounded shadow border border-gray-100 overflow-auto"> 
            <code class="hljs">
{
    <span class="hljs-attr">"success"</span>: <span class="hljs-keyword">true</span>,
    <span class="hljs-attr">"message"</span>: <span class="hljs-string">"Se logeo correctamente"</span>,
    <span class="hljs-attr">"token"</span>: <span class="hljs-string">"tu tokken"</span>    
}
            </code>
        </pre>

        <br>
        <br>
       El token que obtengas deberás guardarlo, ya que se utilizará para el consumo de la API. <br>
       Debes incluirlo en la cabecera de las futuras peticiones utilizando el encabezado 
       <x-code-element> Authorization</x-code-element> con el formato
         <x-code-element> Bearer <span class="text-sky-600">{tu-token}</span></x-code-element>, donde
        <x-code-element class="text-sky-600"> {{ __('{tu-token}') }}</x-code-element>
       será reemplazado por tu token único asociado a tu cuenta..

    </div>

</x-docs-layout>
