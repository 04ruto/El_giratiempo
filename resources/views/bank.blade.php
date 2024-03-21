<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>
    @include('header')

    <!-- component -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <div class="min-w-screen relative top-60 z-10 flex items-center justify-center bg-transparent pt-4"
        x-data="{ open: {{ $show }} }">
        <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            x-description="Background backdrop, show/hide based on modal state."
            class="fixed inset-0 bg-gray-600 bg-opacity-75 transition-opacity"></div>


        <div class="fixed overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                <div x-show="open" x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-description="Modal panel, show/hide based on modal state."
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg"
                    @click.away="open = false">
                    <div class="p-4 sm:p-10 text-center overflow-y-auto">
                        <!-- Icon -->
                        <span
                            class="mb-4 inline-flex justify-center items-center w-[62px] h-[62px] rounded-full border-4 border-yellow-50 bg-yellow-100 text-yellow-500">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                </path>
                            </svg>
                        </span>
                        <!-- End Icon -->

                        <h3 class="mb-2 text-2xl font-bold text-gray-800">
                            Realizar Compra
                        </h3>
                        <p class="text-gray-500">
                            Está seguro que quiere realizar la compra con esta tarjeta?
                        </p>

                        <div class="mt-6 flex justify-center gap-x-4">
                            <a class="py-2.5 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm"
                                href="/purchaseDone/{{ $product->id }}/{{ $productCant }}">
                                Estoy Seguro
                            </a>
                            <a href="/store/{{ $product->id }}" type="button"
                                class="py-2.5 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                                Cancelar
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="flex">
        <div class="w-full max-w-lg mx-auto p-8 ">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-lg font-medium mb-6">Añadir tarjeta</h2>
                @if (session('BankSuccess'))
                    <div class="container mb-2" id="alertbox">
                        <div class="container bg-green-500 flex items-center text-white text-sm font-bold px-4 py-3 relative"
                            role="alert">
                            <p>{{ session('BankSuccess') }}</p>

                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3 closealertbutton">
                                <svg class="fill-current h-6 w-6 text-white" role="button"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <title>Close</title>
                                    <path
                                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
                        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

                    <script>
                        $(".closealertbutton").click(function(e) {
                            pid = $(this).parent().parent().hide(500)
                        })
                    </script>
                @endif
                <form action="/card/add" method="POST">
                    @csrf
                    <input type="text" name="prodId" value="{{ $product->id }}" hidden>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="col-span-2 sm:col-span-1">
                            <label for="card-number" class="block text-sm font-medium text-gray-700 mb-2">Numero de
                                Tarjeta</label>
                            <input type="text" name="card-number" id="card-number" placeholder="0000 0000 0000 0000"
                                class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                            @error('card-number')
                                <span class="text-red-600 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="expiration-date" class="block text-sm font-medium text-gray-700 mb-2">Fecha
                                Expiración</label>
                            <input type="date" name="expiration-date" id="expiration-date"
                                class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500"
                                min="{{ date('Y-m') }}" max="{{ date('Y-m', strtotime('+10 years')) }}">
                            @error('expiration-date')
                                <span class="text-red-600 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="cvv" class="block text-sm font-medium text-gray-700 mb-2">CVV</label>
                            <input type="text" name="cvv" id="cvv" placeholder="000"
                                class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500"
                                maxlength="3">
                            @error('cvv')
                                <span class="text-red-600 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="card-holder"
                                class="block text-sm font-medium text-gray-700 mb-2">Titular</label>
                            <input type="text" name="card-holder" id="card-holder"
                                placeholder="Titular de la tarjeta"
                                class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                            @error('card-holder')
                                <span class="text-red-600 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-8">
                        <button type="submit"
                            class="w-full bg-green-500 hover:bg-blue-600 text-white font-medium py-3 rounded-lg focus:outline-none">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="flex flex-col items-center w-2/4 p-8 gap-5">

            @foreach ($bankAccounts as $bankAccount)
                <a href="/store/{{ $product->id }}/purchase/1/{{ $bankAccount->id }}/{{ $productCant }}">
                    <div
                        class="w-96 h-56 m-auto bg-red-100 rounded-xl relative text-white shadow-2xl transition-transform transform hover:scale-110">

                        <img class="relative object-cover w-full h-full rounded-xl"
                            src="https://i.imgur.com/kGkSg1v.png">

                        <div class="w-full px-8 absolute top-8">
                            <div class="flex justify-between">
                                <div class="">
                                    <p class="font-light">
                                        Name
                                        </h1>
                                    <p class="font-medium tracking-widest">
                                        {{ $bankAccount->titular }}
                                    </p>
                                </div>
                                <img class="w-14 h-14" src="https://i.imgur.com/bbPHJVe.png" />
                            </div>
                            <div class="pt-1">
                                <p class="font-light">
                                    Card Number
                                    </h1>
                                <p class="font-medium tracking-more-wider">
                                    {{ $bankAccount->numero }}
                                </p>
                            </div>
                            <div class="pt-6 pr-6">
                                <div class="flex justify-between">
                                    <div class="">
                                        {{-- <p class="font-light text-xs">
                                        Valid
                                        </h1>
                                    <p class="font-medium tracking-wider text-sm">
                                        {{$bankAccount->fCaduca}}
                                    </p> --}}
                                    </div>
                                    <div class="">
                                        <p class="font-light text-xs text-xs">
                                            Expiry
                                            </h1>
                                        <p class="font-medium tracking-wider text-sm">
                                            {{-- {{ $bankAccount->fCaduca->format('m/y') }} --}}
                                            {{ \Carbon\Carbon::parse($bankAccount->fCaduca)->format('m/y') }}
                                        </p>
                                    </div>

                                    <div class="">
                                        <p class="font-light text-xs">
                                            CVV
                                            </h1>
                                        <p class="font-bold tracking-more-wider text-sm">
                                            {{ $bankAccount->cvv }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>


</body>

</html>
