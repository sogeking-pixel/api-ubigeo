<x-docs-layout>

    <div class="text-gray-600 text-lg">
        <x-title> {{ __('Inicio') }} </x-title>
        Este es un servicio API REST que permite realizar:
        <ul class="list-disc pl-8 py-4">
            <li>Consulta de departamento</li>
            <li>Consulta de provincia</li>
            <li>Consulta de distritos</li>
        </ul>

       Esta página te ayudará a iniciar con nuestra API así puedas orientarte en los distintos endpoints que se encuentran a tu disposición. Comencemos con esta guía rápida.
        <br>
        <br>
        <div class="bg-indigo-100 px-12 py-3 mb-4">
             Recomendamos utilizar los clientes REST como Postman o Insomnia para realizar pruebas sin escribir código.
        </div>
        
        <x-subtitle id="autenticacion"> {{ __('Autentificación') }} </x-subtitle>
        Para autenticar una petición en esta API REST construida en Laravel, se utiliza un token de acceso.
        Cada usuario debe obtener su propio token siguiendo el proceso de autenticación, 
        este se mostrar en el seccion de <a href="#" class="text-indigo-600 hover:text-indigo-800">tokken</a> en su dashboard. <br>
        El token debe acompañar cada llamada en la cabecera de la petición, utilizando el encabezado  <x-code-element> Authorization</x-code-element>
        con el formato <x-code-element> Bearer <span class="text-sky-600">{token}</span></x-code-element>, donde <x-code-element class="text-sky-600"> {{ __('{token}') }}</x-code-element>
        lo reemplazara por su tokken unico que esta asociadao a su cuenta.       
        <br><br>
        <x-subtitle> {{ __('Peticiones') }} </x-subtitle>
        Las peticiones son <x-code-element class="text-sky-600">HTTP REST</x-code-element> 
        por lo que se debe especificar el método que se va a utilizar, junto al método se debe enviar en la cabecera de la petición el token de 
        acceso que permite la autenticación en la API.

        <ul class="list-disc pl-8 py-4">
            <li><x-code-element>GET</x-code-element>, para obtener información de un recurso.</li>
            <li><x-code-element>POST</x-code-element>, para crear un recurso.</li>
            <li><x-code-element>PUT</x-code-element>, para modificar un recurso.</li>
            <li><x-code-element>DELETE</x-code-element>, para eliminar un recurso.</li>            
        </ul>
        
    </div>  

</x-docs-layout>