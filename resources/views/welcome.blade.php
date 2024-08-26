<x-app-layout>
   

    <div class="pt-2 pb-14">
        <div class=" mx-auto max-w-6xl sm:px-6 lg:px-8 flex flex-col md:flex-row">
            
            <div class="overflow-hidden  md:w-1/2 my-auto">
                <div class="p-6 text-gray-600 sm:text-5xl font-bold leading-snug text-4xl">
                    {{ __("Consulta de departamentos, provincias y ciudades ") }} <span class="text-sky-600">{{ __("del Peru") }}</span>
                    <p class="text-gray-500 text-base font-normal pt-3">
                         {{ __("Api para desarrolladores") }} <br>
                         {{ __("Usalo con distintos lenguajes de programación y frameworks") }} 
                    </p>                                         
                </div>                                 
            </div>

            <div class="overflow-hidden md:w-1/2 h-96">
                <div class="p-6 mx-auto h-full">
                   <img src="{{asset('build/assets/img/image.png')}}" alt="" class="object-contain h-full mx-auto">                   
                </div>                 
            </div>
        </div>
    </div>

    <div class="py-14">
        <div class=" mx-auto max-w-6xl sm:px-6 lg:px-8 flex flex-col">
            
            <div class="overflow-hidden mx-auto">
                <div class="p-6 text-gray-600 sm:text-4xl font-bold leading-tight text-2xl md:w-3/4 mx-auto text-center ">
                    {{ __("Gestiona informacion geografica del Peru") }}
                    <p class="text-gray-500 text-base font-normal pt-3">
                         {{ __("¿Para quién es adecuada esta API?") }} 
                    </p>                                         
                </div>                                 
            </div>

            <div class="overflow-hidden grid grid-flow-row md:grid-flow-col pt-1 justify-items-center">

                <div class="text-gray-600">
                   
                    <svg width="43" height="34" viewBox="0 0 43 34" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto fill-sky-600 stroke-sky-600">
                        <path d="M6.59261 10.3143C6.59261 15.5307 10.6893 19.7785 15.7667 19.7785C20.844 19.7785 24.9407 15.5307 24.9407 10.3143C24.9407 5.09785 20.844 0.85 15.7667 0.85C10.6893 0.85 6.59261 5.09785 6.59261 10.3143ZM23 10.3143C23 14.479 19.7502 17.8348 15.7667 17.8348C11.7831 17.8348 8.53335 14.479 8.53335 10.3143C8.53335 6.14955 11.7831 2.79369 15.7667 2.79369C19.7502 2.79369 23 6.14955 23 10.3143Z"  stroke-width="0.8"/>
                        <path d="M20.8388 20.1335V20.0498L20.7676 20.0058L20.3936 19.7748L20.3225 19.7309L20.2477 19.7683C18.8874 20.449 17.3688 20.8293 15.7666 20.8293C14.1645 20.8293 12.6459 20.449 11.2856 19.7683L11.2108 19.7309L11.1396 19.7748L3.00058 24.801C1.66388 25.6265 0.85 27.087 0.85 28.6599V29.6324C0.85 31.6036 2.44516 33.202 4.41347 33.202H20.6888H20.8388V33.052V31.4083V31.2583H20.6888H4.41347C3.51751 31.2583 2.79074 30.5306 2.79074 29.6324V28.6599C2.79074 27.7612 3.25576 26.9269 4.01917 26.4555L11.3532 21.9265C12.7494 22.4828 14.2395 22.773 15.7666 22.773C17.2937 22.773 18.7838 22.4828 20.1801 21.9265L20.61 22.192L20.8388 22.3333V22.0643V20.1335Z" stroke-width="0.8"/>
                        <path d="M27.9287 22.7904C28.3126 22.416 28.3209 21.8009 27.9472 21.4163C27.5734 21.0316 26.9589 21.0232 26.5748 21.3978L21.6526 26.1976C21.2353 26.6046 21.2674 27.2854 21.7212 27.6511L26.6434 31.6176C27.0611 31.9542 27.6721 31.8878 28.0079 31.4694C28.3437 31.0513 28.2775 30.4397 27.86 30.1032L23.7915 26.8247L27.9287 22.7904Z"  stroke-width="0.8"/>
                        <path d="M35.8723 22.7904C35.4884 22.416 35.4802 21.8009 35.8539 21.4163C36.2277 21.0316 36.8422 21.0232 37.2262 21.3978L42.1484 26.1976C42.5657 26.6046 42.5336 27.2854 42.0798 27.6511L37.1576 31.6176C36.7399 31.9542 36.129 31.8878 35.7931 31.4694C35.4573 31.0513 35.5235 30.4397 35.941 30.1032L40.0095 26.8247L35.8723 22.7904Z"  stroke-width="0.8"/>
                        <path d="M32.38 21.533L29.6036 30.8655C29.4528 31.3721 29.7339 31.9099 30.2368 32.0646C30.7409 32.2196 31.2701 31.9291 31.4211 31.4215L34.1975 22.089C34.3482 21.5824 34.0672 21.0446 33.5642 20.8899C33.0602 20.7349 32.531 21.0255 32.38 21.533Z"  stroke-width="0.8"/>
                    </svg>
                    
                    

                    <div class="p-2 text-gray-600 sm:text-2xl font-bold leading-tight text-1xl md:w-3/4 mx-auto text-center ">
                        {{ __("Desarrolladores") }}
                        <p class="text-gray-500 text-base font-normal pt-2 px-8">
                            {{ __("Que necesiten integrar datos geográficos del Perú en sus aplicaciones.") }} 
                        </p>                                         
                    </div>   
                                                       
                </div>

                <div class="text-gray-600 pt-6 md:pt-0">
                   
                    <svg width="34" height="33" viewBox="0 0 34 33" xmlns="http://www.w3.org/2000/svg" class="mx-auto fill-sky-600 stroke-sky-600">
                        <path d="M32.4023 32.5444H1.59792C1.01512 32.536 0.536607 32.0784 0.501853 31.4956C0.468469 30.9128 0.889917 30.4023 1.46856 30.3272V7.79508C1.47412 6.10088 2.59387 4.61255 4.2199 4.13806L18.0753 0.148814C19.2242 -0.182237 20.4621 0.045883 21.4177 0.765023C22.3733 1.48416 22.9353 2.61084 22.9339 3.80569V11.3725C23.0243 11.3865 23.1133 11.4059 23.201 11.431L31.1196 13.7107C31.9542 13.9528 32.5287 14.7164 32.5314 15.5858V30.3271C33.1101 30.4022 33.5315 30.9126 33.4981 31.4954C33.4634 32.0783 32.9851 32.5361 32.4023 32.5444ZM22.9354 30.3188H30.306V15.7916L22.9354 13.6703V30.3188ZM16.8666 30.3188H20.7084V3.80565C20.7084 3.30909 20.4747 2.84172 20.0783 2.54265C19.6819 2.24498 19.1686 2.15038 18.6915 2.28671L4.83618 6.27595C4.16158 6.47347 3.69699 7.09246 3.69421 7.79488V30.3188H7.53746L7.53885 21.788C7.53885 21.4932 7.65569 21.2108 7.86434 21.0022C8.07298 20.7935 8.35535 20.6753 8.65161 20.6753H15.7523C16.0472 20.6753 16.331 20.7935 16.5396 21.0022C16.7483 21.2108 16.8651 21.4932 16.8651 21.788L16.8666 30.3188ZM9.76585 30.3188H14.641L14.6397 22.9008H9.76446L9.76585 30.3188ZM16.5454 17.0019H14.5438C13.9304 17.0019 13.431 16.5039 13.431 15.8891C13.431 15.2743 13.9304 14.7763 14.5438 14.7763H16.5454C17.1546 14.7847 17.6429 15.2813 17.6429 15.8891C17.6429 16.497 17.1546 16.9936 16.5454 17.0019ZM9.85915 17.0019H7.85755C7.24832 16.9935 6.76009 16.497 6.76009 15.8891C6.76009 15.2813 7.24832 14.7847 7.85755 14.7763H9.85915C10.4684 14.7847 10.9566 15.2813 10.9566 15.8891C10.9566 16.497 10.4684 16.9936 9.85915 17.0019ZM16.5454 12.0669H14.5438C13.9304 12.0669 13.431 11.5675 13.431 10.9541C13.431 10.3393 13.9304 9.84133 14.5438 9.84133H16.5454C17.1546 9.84968 17.6429 10.3449 17.6429 10.9541C17.6429 11.5619 17.1546 12.0572 16.5454 12.0669ZM9.85915 12.0669H7.85755C7.24832 12.0571 6.76009 11.5619 6.76009 10.9541C6.76009 10.3449 7.24832 9.84966 7.85755 9.84133H9.85915C10.4684 9.84968 10.9566 10.3449 10.9566 10.9541C10.9566 11.5619 10.4684 12.0572 9.85915 12.0669Z" stroke-width="0.5"/>
                    </svg>
                    
                    

                    <div class="p-2 text-gray-600 sm:text-2xl font-bold leading-tight text-1xl md:w-3/4 mx-auto text-center ">
                        {{ __("Empresas") }}
                        <p class="text-gray-500 text-base font-normal pt-2 px-8">
                            {{ __("Que requieran gestionar información de direcciones para sus clientes o empleados.") }} 
                        </p>                                         
                    </div>               
                </div>  
                           
            </div>
        </div>
    </div>

    <div class="py-14">
        <div class=" mx-auto max-w-6xl sm:px-6 lg:px-8 flex flex-col md:flex-row">

             <div class="overflow-hidden md:w-1/3 ">
                <div class="p-6 mx-auto h-full">
                   <img src="{{asset('build/assets/img/image-1.png')}}" alt="" class="object-contain h-full mx-auto">                   
                </div>                 
            </div>
            
            <div class="overflow-hidden  md:w-2/3 my-auto">
                <div class="px-6 text-gray-600 sm:text-4xl font-bold leading-snug text-2xl text-center md:text-left">
                    {{ __("Rápida integración en sus sistemas") }}
                    <p class="text-gray-500 text-base font-normal pt-3">
                         {{ __("Nuestra API provee una forma sencilla de integrarse en cualquier sistema. Simplemente regístrese, obtenga un token y realice las consultas que desee.") }}
                    </p>
                                                             
                </div> 
                <div class="flex pt-4 justify-center md:justify-start md:ml-6">
                    <a href="{{route('register')}}" type="button" class="inline-block px-5 py-2 bg-sky-600 hover:bg-sky-800 text-white shadow-lg rounded-none">
                        Registrarse
                    </a>
                </div>                                
            </div>

           
        </div>
    </div>


</x-app-layout>