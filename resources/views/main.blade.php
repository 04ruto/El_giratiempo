<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>El Giratiempo</title> --}}

    <link rel="shortcut icon" href="{{ URL::to('/assets/img/Logo_Sim.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ URL::to('/assets/css/style.css') }}">

</head>

<body>
    @include('header')

    {{-- Image 1 --}}
    <div class="h-[80vh] bg-gray-50 flex">
        <section class="bg-cover bg-center py-32 w-full"
            style="background-image: url('./assets/img/banner_img_1.jpg');">
            <div class="container mx-auto text-left text-white backdrop-blur-sm h-full">
                <div class="flex items-center h-full p-10">
                    <div class="w-1/2">
                        <h1 class="text-5xl font-medium mb-6">Animales Fantásticos</h1>
                        <p class="text-lg mb-6">Embárcate en un viaje a través de la diversidad mágica de criaturas
                            extraordinarias en nuestra colección de Animales Fantásticos. Desde majestuosas bestias
                            mitológicas hasta adorables seres mágicos, nuestra tienda te ofrece la oportunidad de
                            conocer y aprender sobre estas maravillas místicas. Descubre historias fascinantes, aprende
                            sobre sus hábitats y encuentra productos exclusivos inspirados en estas criaturas
                            sorprendentes.</p>
                        <a href="/store"
                            class="bg-indigo-500 text-white py-2 px-12 rounded-full hover:bg-indigo-600">Tienda</a>
                    </div>
                    <div class="w-1/2 pl-16">
                        <img src="{{ URL::to('/assets/img/banner_img_sub_1.jpg') }}"
                            class="h-64 w-full object-cover rounded-xl shadow-md shadow-rose-900" alt="Layout Image">
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Image 2 --}}
    <div class="h-[80vh] bg-gray-50 flex">
        <section class="bg-cover bg-center py-32 w-full"
            style="background-image: url('./assets/img/banner_img_2.jpg');">
            <div class="container mx-auto text-left text-white backdrop-blur-sm h-full">
                <div class="flex items-center h-full p-10">
                    <div class="w-1/2 pr-16">
                        <img src="{{ URL::to('/assets/img/banner_img_sub_2.jpg') }}"
                            class="h-64 w-full object-cover rounded-xl shadow-md shadow-green-900" alt="Layout Image">
                    </div>
                    <div class="w-1/2">
                        <h1 class="text-5xl font-medium mb-6">Libros y Conjuros</h1>
                        <p class="text-lg mb-12">Explora nuestro fascinante catálogo de libros y conjuros,
                            donde la
                            magia se encuentra con la sabiduría. Descubre antiguos grimorios llenos de hechizos
                            poderosos y conocimientos arcanos que te transportarán a un mundo de maravillas. Desde
                            encantamientos básicos hasta textos esotéricos, encontrarás la llave para desbloquear nuevos
                            horizontes mágicos.</p>

                        <a href="/store"
                            class="bg-indigo-500 text-white py-2 px-12 rounded-full hover:bg-indigo-600">Tienda</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Image 3 --}}
    <div class="h-[80vh] bg-gray-50 flex">
        <section class="bg-cover bg-center py-32 w-full"
            style="background-image: url('./assets/img/banner_img_3.jpg');">
            <div class="container mx-auto text-left text-white backdrop-blur-sm h-full">
                <div class="flex items-center h-full p-10">
                    <div class="w-1/2">
                        <h1 class="text-5xl font-medium mb-6">Pociones e Ingredientes</h1>
                        <p class="text-lg mb-6">Adéntrate en el fascinante mundo de las pociones y los ingredientes
                            mágicos. Descubre nuestra amplia gama de elixires, brebajes y componentes místicos que te
                            llevarán a través de los secretos de la alquimia. Desde ingredientes raros hasta mezclas
                            exquisitas, nuestra tienda ofrece todo lo que necesitas para desatar tu habilidad como
                            alquimista. ¡Crea, experimenta y sumérgete en el arte ancestral de la mezcla mágica!</p>
                        <a href="/store"
                            class="bg-indigo-500 text-white py-2 px-12 rounded-full hover:bg-indigo-600">Tienda</a>
                    </div>
                    <div class="w-1/2 pl-16">
                        <img src="{{ URL::to('/assets/img/banner_img_sub_3.jpg') }}"
                            class="h-64 w-full object-cover rounded-xl border-2 border-white-200" alt="Layout Image">
                    </div>
                </div>
            </div>
        </section>
    </div>


    @include('footer')

</body>

</html>
