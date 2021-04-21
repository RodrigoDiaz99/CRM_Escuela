<x-app2-layout>
    <div class="container mx-auto px-6">
        <h3 class="text-gray-700 text-2xl font-medium">Checkout</h3>
        <div class="flex flex-col lg:flex-row mt-8">
            <div class="w-full lg:w-1/2 order-2">
                <div class="flex items-center">
                    <button class="flex text-sm text-blue-500 focus:outline-none"><span
                            class="flex items-center justify-center text-white bg-blue-500 rounded-full h-5 w-5 mr-2">1</span>
                        Contacts</button>
                    <button class="flex text-sm text-gray-700 ml-8 focus:outline-none"><span
                            class="flex items-center justify-center border-2 border-blue-500 rounded-full h-5 w-5 mr-2">2</span>
                        Shipping</button>
                    <button class="flex text-sm text-gray-500 ml-8 focus:outline-none" disabled><span
                            class="flex items-center justify-center border-2 border-gray-500 rounded-full h-5 w-5 mr-2">3</span>
                        Payments</button>
                </div>
                <form class="mt-8 lg:w-3/4">
                    <div class="mt-8">
                        <div class="grid-cols-2">
                            <h4 class="text-sm text-gray-500 font-medium">Datos de envio</h4>

                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 font-bold mb-2"
                                    for="">Nombre(s)</label>
                                <input
                                    class="px-4 py-2 border focus:ring-gray-500 w-full sm:text-sm border-blue-500 rounded-md focus:outline-none text-gray-600"
                                    type="text" id="name" name="name">
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 font-bold mb-2"
                                    for="">Apellidos</label>
                                <input
                                    class="px-4 py-2 border focus:ring-gray-500 w-full sm:text-sm border-blue-500 rounded-md focus:outline-none text-gray-600"
                                    type="text" id="last_name" name="last_name">
                            </div>


                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 font-bold mb-2"
                                    for="">Celular</label>
                                <input
                                    class="px-4 py-2 border focus:ring-gray-500 w-full sm:text-sm border-blue-500 rounded-md focus:outline-none text-gray-600"
                                    type="text" id="phone" name="phone">


                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <h4 class="text-sm text-gray-500 font-medium">Direccion de envio de envio</h4>
                        <div class="grid grid-cols-3">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 font-bold mb-2"> PAIS
                                    <select
                                        class="px-4 py-2 border focus:ring-gray-500 border-blue-500 rounded-md focus:outline-none block w-full pl-10 mt-1 text-sm text-black"
                                        required>
                                        <option value="" selected>SELECCIONE UN PAIS</option>
                                        <option value="">ARGENTINA</option>
                                        <option value="">BOLIVIA</option>
                                        <option value="">CHILE</option>
                                        <option value="">COLOMBIA</option>
                                        <option value="">COSTA RICA</option>
                                        <option value="">CUBA</option>
                                        <option value="">ECUADOR</option>
                                        <option value="">EL SALVADOR</option>
                                        <option value="">GUATEMALA</option>
                                        <option value="">HONDURAS</option>
                                        <option value="">MEXICO</option>
                                        <option value="">NICARAGUA</option>
                                        <option value="">PANAMA</option>
                                        <option value="">PERU</option>
                                        <option value="">REPUBLICA DOMINICANA</option>
                                        <option value="">URUGUAY</option>
                                        <option value="">VENEZUELA</option>
                                        <option value="">PUERTO RICO</option>


                                    </select>
                                </label>
                            </div>
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 font-bold mb-2">ESTADO/PROVINCIA/REGION
                                    <input type="text" onkeyup="mayus(this);" style="text-transform: uppercase;"
                                        class="px-4 py-2 border focus:ring-gray-500 w-full sm:text-sm border-blue-500 rounded-md focus:outline-none text-gray-600"
                                        required autofocus id="state" name="state"></label>
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 font-bold mb-2">MUNICIPIO/CIUDAD
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 w-full sm:text-sm border-blue-500 rounded-md focus:outline-none text-gray-600"
                                        placeholder=""></label>
                            </div>
                        </div>
                        <div class="mt-8">
                            <div class="grid grid-cols-3">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 font-bold mb-2">DIRECCION POSTAL/CALLE
                                        <input type="text"
                                            class="px-4 py-2 border focus:ring-gray-500 w-full sm:text-sm border-blue-500 rounded-md focus:outline-none text-gray-600">
                                    </label>
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label
                                        class="block uppercase tracking-wide text-gray-700 font-bold mb-2">NUMERO EXTERIOR
                                        <input type="number"
                                            class="px-4 py-2 border focus:ring-gray-500 w-full sm:text-sm border-blue-500 rounded-md focus:outline-none text-gray-600">
                                    </label>
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="tracking-wide text-gray-700 font-bold mb-2">NUMERO INTERIOR (opcional)

                                        <input type="number"
                                            class="px-4 py-2 border focus:ring-gray-500 w-full sm:text-sm border-blue-500 rounded-md focus:outline-none text-gray-600">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <div class="grid grid-cols-3">
                            <div class="w-full md:w-1/2 px-3 mb-3">
                                <label class="block uppercase tracking-wide text-gray-700 font-bold mb-2">COLONIA
                                    POSTAL/CALLE
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 w-full sm:text-sm border-blue-500 rounded-md focus:outline-none text-gray-600">
                                </label>
                            </div>
                            <div class="w-full md:w-1/2 px-3 mb-3">
                                <label class="block uppercase tracking-wide text-gray-700 font-bold mb-2">
                                    CODIGO POSTAL
                                    <input type="number"
                                        class="px-4 py-2 border focus:ring-gray-500 w-full sm:text-sm border-blue-500 rounded-md focus:outline-none text-gray-600">
                                </label>
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-3">
                                <label class="block uppercase tracking-wide text-gray-700 font-bold mb-2">
                                    REFERENCIA
                                    <textarea class="px-4 py-2 focus:ring-gray-500 w-full sm:text-sm border-blue-500 rounded-md focus:outline-none text-gray-600 resize border rounded-md"></textarea>
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class="flex items-center justify-between mt-8">

                        <button
                            class="flex items-center px-3 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            <span>Payment</span>
                            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
            </div>
            </form>
        </div>
        <div class="w-full mb-8 flex-shrink-0 order-1 lg:w-1/2 lg:mb-0 lg:order-2">
            <div class="flex justify-center lg:justify-end">
                <div class="border rounded-md max-w-md w-full px-4 py-3">
                    <div class="flex items-center justify-between">
                        <h3 class="text-gray-700 font-medium">Order total (2)</h3>
                        <span class="text-gray-600 text-sm">Edit</span>
                    </div>
                    <div class="flex justify-between mt-6">
                        <div class="flex">
                            <img class="h-20 w-20 object-cover rounded"
                                src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80"
                                alt="">
                            <div class="mx-3">
                                <h3 class="text-sm text-gray-600">Mac Book Pro</h3>
                                <div class="flex items-center mt-2">
                                    <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z">
                                            </path>
                                        </svg>
                                    </button>
                                    <span class="text-gray-700 mx-2">2</span>
                                    <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <span class="text-gray-600">20$</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app2-layout>