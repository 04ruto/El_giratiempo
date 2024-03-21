<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>El Giratiempo</title> --}}

    <link rel="shortcut icon" href="{{ URL::to('/assets/img/Logo_Sim.png') }}" type="image/x-icon">

</head>

<body>
    {{-- https://tailwindflex.com/@noob_dev/products-card-grid --}}
    {{-- https://harrypotter.fandom.com/es/wiki/Lista_de_objetos_m%C3%A1gicos --}}

    @include('header')
    <div class="h-[80vh] bg-gray-50 flex">
        <section class="bg-cover bg-center py-32 w-full"
            style="background-image: url('./assets/img/store_banner_img_1_v2.jpg');">
            <div class="container mx-auto text-left text-white h-full">
                <div class="flex items-center justify-center h-full p-10">
                    <div class="w-1/2 text-center backdrop-blur">
                        <h1 class="text-5xl font-medium mb-6">Tienda</h1>
                        <p class="text-xl mb-6">Bienvenido a nuestra tienda mágica, donde la magia toma forma en cada
                            rincón. Explora nuestra fascinante colección de Animales Fantásticos, desde majestuosas
                            bestias mitológicas hasta adorables seres mágicos. Sumérgete en el arte de la alquimia con
                            nuestras pociones e ingredientes místicos, y encuentra tu varita perfecta entre una amplia
                            selección. Descubre libros de conjuros e iníciate en los secretos de la magia.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <div class="flex">

        @include('categories')
        @include('products')
    </div>

    @include('footer')

</body>

</html>
