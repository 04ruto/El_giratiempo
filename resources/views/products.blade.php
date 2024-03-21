<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Hogsmade Store</title> --}}
</head>

<body>

    <div class=" bg-gray-100 text-gray-800 w-full">
        <div class="p-4 w-full">
            <div class="grid grid-cols-3 gap-4">
                @foreach ($products as $product)
                    <div
                        class="mx-auto mt-11 w-80 transform overflow-hidden rounded-lg bg-white dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
                        @if (Auth::user())
                            <a href="/store/{{ $product->id }}">
                        @endif
                        <img class="h-48 w-full object-cover object-center" src="./storage/{{ $product->imgURL }}"
                            alt="Product Image" />
                        <div class="p-4">
                            <h2 class="mb-2 text-lg font-medium dark:text-white text-gray-900">
                                {{ $product->nombre }}</h2>
                            <p class="mb-2 text-base dark:text-gray-300 text-gray-700">{{ $product->descripcion }}
                            </p>
                            <div class="flex items-center">
                                @if ($product->descuento > 0)
                                    <p class="mr-2 text-lg font-semibold text-gray-900 dark:text-white">
                                        {{ number_format($product->precio * (1 - $product->descuento / 100), 2, ',', '.') }}
                                        €
                                    </p>
                                    <p class="text-base  font-medium text-gray-500 line-through dark:text-gray-300">
                                        {{ number_format($product->precio, 2, ',', '.') }} €
                                    </p>
                                    <p class="ml-auto text-base font-medium text-green-500">
                                        {{ $product->descuento }}% dto
                                    </p>
                                @else
                                    <p class="mr-2 text-lg font-semibold text-gray-900 dark:text-white">
                                        {{ number_format($product->precio, 2, ',', '.') }} €
                                    </p>
                                @endif

                            </div>
                        </div>
                        @if (Auth::user())
                            </a>
                        @endif
                    </div>
                @endforeach

            </div>
        </div>
    </div>

</body>

</html>
