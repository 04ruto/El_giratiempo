<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{ URL::to('/assets/img/Logo_Sim.png') }}" type="image/x-icon">

</head>

<body>
    @include('header')


    <!-- component -->
    <section class="text-gray-700 body-font overflow-hidden bg-white">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="Product Image"
                    class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200"
                    src="./storage/{{ $product->imgURL }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <form action="/store/{{ $product->id }}/purchase/0" method="POST">
                        @csrf

                        <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $category->nombre }}</h2>
                        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->nombre }}</h1>
                        <p class="leading-relaxed mt-4 text-justify">{{ $product->descripcion }}</p>
                        <div class="mt-6 pb-5 border-b-2 border-gray-200 mb-5">
                            <div class="flex items-center">
                                <span class="mr-3">Cantidad</span>
                                <input
                                    class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 h-8 w-14"
                                    type="number" name="cant" max="{{ $product->cantidad }}" required>
                                <span class="text-xs self-end ml-2">Max. {{ $product->cantidad }}</span>
                            </div>
                        </div>
                        <div class="flex">
                            @if ($product->descuento > 0)
                                <p class="mr-2 text-2xl font-semibold text-gray-900">
                                    {{ number_format($product->precio * (1 - $product->descuento / 100), 2, ',', '.') }}
                                    €
                                </p>
                                <p class="text-base  font-medium text-gray-500 line-through">
                                    {{ number_format($product->precio, 2, ',', '.') }} €
                                </p>
                                <p class="ml-auto text-base font-medium text-green-500">
                                    {{ $product->descuento }}% dto
                                </p>
                            @else
                                <p class="mr-2 text-2xl font-semibold text-gray-900">
                                    {{ number_format($product->precio, 2, ',', '.') }} €
                                </p>
                            @endif
                            {{-- <a href="/store/{{ $product->id }}/purchase/0" --}}
                            {{-- class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">Comprar</a> --}}
                            <button type="submit"
                                class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">Comprar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
