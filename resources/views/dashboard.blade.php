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

    <div class="flex flex-wrap">
        <div class="w-full max-w-full px-3 mb-6  mx-auto bg-white">
            <div class="flex flex-wrap mt-5 mx-5 removable">
                <div class="w-full max-w-full px-3 mb-6 sm:w-1/4 sm:flex-none xl:mb-0 xl:w-1/4 drop-zone">
                    <div class="relative flex flex-col min-w-0 break-words border-2 border-dashed bg-clip-border rounded-2xl border-stone-300 bg-light/30 draggable"
                        draggable="true">
                        <div class="flex flex-col items-start justify-between flex-auto py-8 px-9">
                            <div class="m-0">
                                {{-- Logo --}}
                                <img class="w-[35px]" src="./assets/img/category.png" alt="category">
                            </div>
                            <div class="flex flex-col my-7">
                                <span
                                    class="text-secondary-inverse text-4xl tracking-[-0.115rem] font-bold">{{ count($categories) }}</span>
                                <div class="m-0">
                                    <span class="font-medium text-secondary-dark text-lg/normal">Categorias</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full max-w-full px-3 mb-6 sm:w-1/4 sm:flex-none xl:mb-0 xl:w-1/4 drop-zone">
                    <div class="relative flex flex-col min-w-0 break-words border-2 border-dashed bg-clip-border rounded-2xl border-stone-300 bg-light/30 draggable"
                        draggable="true">
                        <div class="flex flex-col items-start justify-between flex-auto py-8 px-9">
                            <div class="m-0">
                                {{-- Logo --}}
                                <img class="w-[35px]" src="./assets/img/box.png" alt="Products">
                            </div>
                            <div class="flex flex-col my-7">
                                <span
                                    class="text-secondary-inverse text-4xl tracking-[-0.115rem] font-bold">{{ count($products) }}</span>
                                <div class="m-0">
                                    <span class="font-medium text-secondary-dark text-lg/normal">Productos</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full max-w-full px-3 mb-6 sm:w-1/4 sm:flex-none xl:mb-0 xl:w-1/4 drop-zone">
                    <div class="relative flex flex-col min-w-0 break-words border-2 border-dashed bg-clip-border rounded-2xl border-stone-300 bg-light/30 draggable"
                        draggable="true">
                        <div class="flex flex-col items-start justify-between flex-auto py-8 px-9">
                            <div class="m-0">
                                {{-- Logo --}}
                                <img class="w-[35px]" src="./assets/img/user-group.png" alt="Users">
                            </div>
                            <div class="flex flex-col my-7">
                                <span
                                    class="text-secondary-inverse text-4xl tracking-[-0.115rem] font-bold">{{ count($users) }}</span>
                                <div class="m-0">
                                    <span class="font-medium text-secondary-dark text-lg/normal">Usuarios</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full max-w-full px-3 mb-6 sm:w-1/4 sm:flex-none xl:mb-0 xl:w-1/4 drop-zone">
                    <div class="relative flex flex-col min-w-0 break-words border-2 border-dashed bg-clip-border rounded-2xl border-stone-300 bg-light/30 draggable"
                        draggable="true">
                        <div class="flex flex-col items-start justify-between flex-auto py-8 px-9">
                            <div class="m-0">
                                {{-- Logo --}}
                                <img class="w-[35px]" src="./assets/img/view.png" alt="Views">
                            </div>
                            <div class="flex flex-col my-7">
                                <span class="text-secondary-inverse text-4xl tracking-[-0.115rem] font-bold">77k</span>
                                <div class="m-0">
                                    <span class="font-medium text-secondary-dark text-lg/normal">Visitas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- CATEGORIAS --}}
    <h2 class="flex flex-row flex-nowrap items-center mb-5">
        <span class="flex-grow block border-t border-black"></span>
        <span
            class="px-4 py-2.5 bg-clip-text text-transparent bg-gradient-to-r from-indigo-500 to-teal-500 text-5xl font-black">
            Categorias
        </span>
        <span class="flex-grow block border-t border-black"></span>
    </h2>

    {{-- CONTENT --}}
    <div class="flex items-center bg-gray-100 text-gray-800">
        <div class="p-4 w-full">
            @if (session('CategoryError'))
                <div class="container mb-2" id="alertbox">
                    <div class="container bg-red-500 flex items-center text-white text-sm font-bold px-4 py-3 relative"
                        role="alert">
                        <p>{{ session('CategoryError') }}</p>

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
            @if (session('CategorySuccess'))
                <div class="container mb-2" id="alertbox">
                    <div class="container bg-green-500 flex items-center text-white text-sm font-bold px-4 py-3 relative"
                        role="alert">
                        <p>{{ session('CategorySuccess') }}</p>

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

            <div class="grid grid-cols-12 gap-4">
                @foreach ($categories as $category)
                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                        <div class="flex flex-row bg-white shadow-sm rounded p-4">
                            <div
                                class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex flex-col flex-grow ml-4">
                                <div class="font-bold text-lg">{{ $category->nombre }}</div>
                                <div class="text-sm text-gray-500">{{ $category->descripcion }}</div>
                            </div>
                            <a href="/delCat?id={{ $category->id }}"
                                class="middle none center rounded-lg bg-pink-500 py-4 px-3 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                data-ripple-light="true">
                                Del
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    <!-- component -->
    <div class="mt-8 p-4">
        <form action="{{ url('/newCat') }}" method="POST">
            @csrf
            <div>
                <div class="flex flex-col md:flex-row">
                    <div class="mb-5 w-full mx-2 flex-1">
                        <label for="cname" class="mb-3 block text-base font-medium text-[#07074D]">
                            Nombre de la categoria *
                        </label>
                        <input type="text" name="cname" id="cname" placeholder="Pociones e ingredientes"
                            required
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="mb-5 w-full mx-2 flex-1">
                        <label for="cdesc" class="mb-3 block text-base font-medium text-[#07074D]">
                            Descripción de la categoria (op.)
                        </label>
                        <input type="text" name="cdesc" id="cdesc"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>

            </div>
            <div class="flex p-2 mt-4 justify-end">
                <input
                    class="hover:shadow-form w-1/4 rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
                    type="submit" value="Crear">
            </div>
        </form>

    </div>

    {{-- Productos --}}
    <h2 class="flex flex-row flex-nowrap items-center mb-5">
        <span class="flex-grow block border-t border-black"></span>
        <span
            class="px-4 py-2.5 bg-clip-text text-transparent bg-gradient-to-r from-indigo-500 to-teal-500 text-5xl font-black">
            Productos
        </span>
        <span class="flex-grow block border-t border-black"></span>
    </h2>

    {{-- CONTENT --}}
    <div class="flex items-center bg-gray-100 text-gray-800">
        <div class="p-4 w-full">
            <div class="grid grid-cols-4 gap-4">
                @foreach ($products as $product)
                    @if ($product->activo)
                        <div
                            class="mx-auto mt-11 w-80 transform overflow-hidden rounded-lg bg-white dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg border-4 border-green-500">
                        @else
                            <div
                                class="mx-auto mt-11 w-80 transform overflow-hidden rounded-lg bg-white dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg border-4 border-red-500">
                    @endif

                    <img src="./storage/{{ $product->imgURL }}" class="h-48 w-full object-cover object-center"
                        alt="Product img">

                    <div class="p-4">
                        <form action="{{ url('/modProd') }}" method="POST">
                            @csrf

                            <input type="text" name="pid" value="{{ $product->id }}" hidden>

                            <input
                                class="mb-2 text-lg font-medium dark:text-white text-gray-900 bg-transparent border border-gray-200 rounded px-1"
                                type="text" name="pname" value="{{ $product->nombre }}">
                            <input
                                class="mb-2 text-lg font-medium dark:text-white text-gray-900 bg-transparent border border-gray-200 rounded px-1"
                                type="text" name="pdesc" value="{{ $product->descripcion }}">
                            <div class="flex items-center mb-2">
                                <input
                                    class="mr-2 text-lg dark:text-white font-semibold text-gray-900 bg-transparent border border-gray-200 rounded w-20 px-1"
                                    type="number" name="pprice" value="{{ $product->precio }}">
                                <input
                                    class="mr-2 text-lg dark:text-white font-semibold text-gray-900 bg-transparent border border-gray-200 rounded w-20 px-1"
                                    type="number" name="pdto" value="{{ $product->descuento }}">
                                <input
                                    class="mr-2 text-lg dark:text-white font-semibold text-gray-900 bg-transparent border border-gray-200 rounded w-20 px-1"
                                    type="number" name="pcant" value="{{ $product->cantidad }}">
                            </div>
                            <select id="countries" name="pcat"
                                class="mb-2 text-lg font-medium dark:text-white text-gray-900 bg-transparent border border-gray-200 rounded">
                                @foreach ($categories as $category)
                                    @if ($product->categoria_id == $category->id)
                                        <option value="{{ $category->id }}" selected class="bg-gray-200 text-black">
                                            {{ $category->nombre }}</option>
                                    @else
                                        <option value="{{ $category->id }}" class="bg-gray-200 text-black">
                                            {{ $category->nombre }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <select id="countries" name="pstat"
                                class="mb-2 text-lg font-medium dark:text-white text-gray-900 bg-transparent border border-gray-200 rounded">
                                @if ($product->activo)
                                    <option value="true" selected class="bg-gray-200 text-black">Activo</option>
                                    <option value="false" class="bg-gray-200 text-black">Inactivo </option>
                                @else
                                    <option value="false" selected class="bg-gray-200 text-black">Inactivo
                                    </option>
                                    <option value="true" class="bg-gray-200 text-black">Activo</option>
                                @endif
                            </select>

                            <div class="flex items-center justify-end gap-4">
                                <select id="countries" name="op"
                                    class="mb-2 text-lg font-medium dark:text-white text-gray-900 bg-transparent border border-gray-200 rounded">
                                    <option value="upd" selected class="bg-gray-200 text-black">Update
                                    </option>
                                    <option value="del" class="bg-gray-200 text-black">Delete</option>
                                </select>
                                <input
                                    class="middle none center rounded-lg bg-yellow-500 py-4 px-3 font-sans text-xs font-bold uppercase text-black shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                    type="submit" value="Done">
                            </div>
                        </form>
                    </div>
            </div>
            @endforeach

        </div>
    </div>
    </div>


    {{-- CREACIÓN DEL PRODUCTO --}}
    <div class="mt-8 p-4">
        <form action="{{ url('/newProd') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div>
                <div class="flex
            flex-col md:flex-row">
                    <div class="mb-5 w-full mx-2 flex-1">
                        <label for="pname" class="mb-3 block text-base font-medium text-[#07074D]">
                            Nombre del producto *
                        </label>
                        <input type="text" name="pname" id="pname" placeholder="Varita de sauco" required
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="mb-5 w-full mx-2 flex-1">
                        <label for="pdesc" class="mb-3 block text-base font-medium text-[#07074D]">
                            Descripción del producto *
                        </label>
                        <input type="text" name="pdesc" id="pdesc" required
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="mb-5 w-full mx-2 flex-1">
                        <label for="pprice" class="mb-3 block text-base font-medium text-[#07074D]">
                            Precio *
                        </label>
                        <input type="number" name="pprice" id="pprice" placeholder="20.20" required
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="mb-5 w-full mx-2 flex-1">
                        <label for="pdto" class="mb-3 block text-base font-medium text-[#07074D]">
                            Descuento *
                        </label>
                        <input type="number" name="pdto" id="pdto" placeholder="0" required
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="mb-5 w-full mx-2 flex-1">
                        <label for="pcant" class="mb-3 block text-base font-medium text-[#07074D]">
                            Cantidad *
                        </label>
                        <input type="number" name="pcant" id="pcant" required
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="mb-5 w-full mx-2 flex-1">
                        <label for="pcat" class="mb-3 block text-base font-medium text-[#07074D]">
                            Categoria *
                        </label>
                        <select id="pcat" name="pcat"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-5 w-full mx-2 flex-1">
                        <label for="pstat" class="mb-3 block text-base font-medium text-[#07074D]">
                            Estado *
                        </label>
                        <select id="pstat" name="pstat"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            <option value="true" selected>Activo</option>
                            <option value="false">Inactivo </option>
                        </select>
                    </div>
                </div>
                <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                    Imagen del producto
                </label>

                <div class="mb-8">
                    <div class="bg-white p7 rounded w-full">
                        <div x-data="dataFileDnD()"
                            class="relative flex flex-col p-4 text-gray-400 border border-gray-200 rounded">
                            <div x-ref="dnd"
                                class="relative flex flex-col text-gray-400 border border-gray-200 border-dashed rounded cursor-pointer">
                                <input accept="*" type="file" name="file" multiple required
                                    class="absolute inset-0 z-50 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer"
                                    @change="addFiles($event)"
                                    @dragover="$refs.dnd.classList.add('border-blue-400'); $refs.dnd.classList.add('ring-4'); $refs.dnd.classList.add('ring-inset');"
                                    @dragleave="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                                    @drop="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                                    title="" />

                                <div class="flex flex-col items-center justify-center py-10 text-center">
                                    <svg class="w-6 h-6 mr-1 text-current-50" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <p class="m-0">Drag your files here or click in this area.</p>
                                </div>
                            </div>

                            <template x-if="files.length > 0">
                                <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-6" @drop.prevent="drop($event)"
                                    @dragover.prevent="$event.dataTransfer.dropEffect = 'move'">
                                    <template x-for="(_, index) in Array.from({ length: files.length })">
                                        <div class="relative flex flex-col items-center overflow-hidden text-center bg-gray-100 border rounded cursor-move select-none"
                                            style="padding-top: 100%;" @dragstart="dragstart($event)"
                                            @dragend="fileDragging = null"
                                            :class="{ 'border-blue-600': fileDragging == index }" draggable="true"
                                            :data-index="index">
                                            <button
                                                class="absolute top-0 right-0 z-50 p-1 bg-white rounded-bl focus:outline-none"
                                                type="button" @click="remove(index)">
                                                <svg class="w-4 h-4 text-gray-700" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                            <template x-if="files[index].type.includes('audio/')">
                                                <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                                </svg>
                                            </template>
                                            <template
                                                x-if="files[index].type.includes('application/') || files[index].type === ''">
                                                <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                                </svg>
                                            </template>
                                            <template x-if="files[index].type.includes('image/')">
                                                <img class="absolute inset-0 z-0 object-cover w-full h-full border-4 border-white preview"
                                                    x-bind:src="loadFile(files[index])" />
                                            </template>
                                            <template x-if="files[index].type.includes('video/')">
                                                <video
                                                    class="absolute inset-0 object-cover w-full h-full border-4 border-white pointer-events-none preview">
                                                    <fileDragging x-bind:src="loadFile(files[index])" type="video/mp4">
                                                </video>
                                            </template>

                                            <div
                                                class="absolute bottom-0 left-0 right-0 flex flex-col p-2 text-xs bg-white bg-opacity-50">
                                                <span class="w-full font-bold text-gray-900 truncate"
                                                    x-text="files[index].name">Loading</span>
                                                <span class="text-xs text-gray-900"
                                                    x-text="humanFileSize(files[index].size)">...</span>
                                            </div>

                                            <div class="absolute inset-0 z-40 transition-colors duration-300"
                                                @dragenter="dragenter($event)" @dragleave="fileDropping = null"
                                                :class="{
                                                    'bg-blue-200 bg-opacity-80': fileDropping == index &&
                                                        fileDragging !=
                                                        index
                                                }">
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </template>
                        </div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
                    <script src="https://unpkg.com/create-file-list"></script>
                    <script>
                        function dataFileDnD() {
                            return {
                                files: [],
                                fileDragging: null,
                                fileDropping: null,
                                humanFileSize(size) {
                                    const i = Math.floor(Math.log(size) / Math.log(1024));
                                    return (
                                        (size / Math.pow(1024, i)).toFixed(2) * 1 +
                                        " " + ["B", "kB", "MB", "GB", "TB"][i]
                                    );
                                },
                                remove(index) {
                                    let files = [...this.files];
                                    files.splice(index, 1);

                                    this.files = createFileList(files);
                                },
                                drop(e) {
                                    let removed, add;
                                    let files = [...this.files];

                                    removed = files.splice(this.fileDragging, 1);
                                    files.splice(this.fileDropping, 0, ...removed);

                                    this.files = createFileList(files);

                                    this.fileDropping = null;
                                    this.fileDragging = null;
                                },
                                dragenter(e) {
                                    let targetElem = e.target.closest("[draggable]");

                                    this.fileDropping = targetElem.getAttribute("data-index");
                                },
                                dragstart(e) {
                                    this.fileDragging = e.target
                                        .closest("[draggable]")
                                        .getAttribute("data-index");
                                    e.dataTransfer.effectAllowed = "move";
                                },
                                loadFile(file) {
                                    const preview = document.querySelectorAll(".preview");
                                    const blobUrl = URL.createObjectURL(file);

                                    preview.forEach(elem => {
                                        elem.onload = () => {
                                            URL.revokeObjectURL(elem.src); // free memory
                                        };
                                    });

                                    return blobUrl;
                                },
                                addFiles(e) {
                                    const files = createFileList([...this.files], [...e.target.files]);
                                    this.files = files;
                                    this.form.formData.files = [...files];
                                }
                            };
                        }
                    </script>
                </div>
            </div>
            <div class="flex p-2 mt-4 justify-end">
                <input
                    class="hover:shadow-form w-1/4 rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
                    type="submit" value="Crear">
            </div>
        </form>

    </div>

    {{-- USERS --}}
    <h2 class="flex flex-row flex-nowrap items-center mb-5">
        <span class="flex-grow block border-t border-black"></span>
        <span
            class="px-4 py-2.5 bg-clip-text text-transparent bg-gradient-to-r from-indigo-500 to-teal-500 text-5xl font-black">
            Usuarios
        </span>
        <span class="flex-grow block border-t border-black"></span>
    </h2>


    <!-- component -->
    <div class="bg-white rounded-md">
        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Usuario
                        </th>
                        <th
                            class=" py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Rol
                        </th>
                        <th
                            class=" py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Correo
                        </th>
                        <th
                            class=" py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Creación
                        </th>
                        <th
                            class=" py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Estado
                        </th>
                        <th
                            class=" py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Canvio de estado
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center justify-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-full h-full rounded-full" src="./assets/img/user.svg"
                                            alt="" />
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $user->name }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="py-5 border-b border-gray-200 bg-white text-sm text-center">
                                <p class="text-gray-900 whitespace-no-wrap">{{ $user->role }}</p>
                            </td>
                            <td class="py-5 border-b border-gray-200 bg-white text-sm text-center">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $user->email }}
                                </p>
                            </td>
                            <td class="py-5 border-b border-gray-200 bg-white text-sm text-center">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $user->created_at }}
                                </p>
                            </td>
                            <td class="py-5 border-b border-gray-200 bg-white text-sm text-center">
                                @if ($user->active)
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Activo</span>
                                    </span>
                                @else
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Inactive</span>
                                    </span>
                                @endif
                            </td>
                            <td class="py-5 border-b border-gray-200 bg-white text-sm text-center">
                                <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center"
                                    href="/userStatus?id={{ $user->id }}">
                                    Canviar Estado
                                </a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    {{-- @include('footer') --}}

</body>

</html>
