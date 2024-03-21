<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />

</head>

<body class="bg-gray-800">
    <div class="sidebar h-screen lg:left-0 p-2 w-[300px] overflow-y-auto text-left bg-gray-800">

        <div class="p-2.5 flex items-center rounded-md px-4 duration-300 bg-gray-700 text-white">
        </div>
        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <a href="/store">
                <span class="text-[15px] ml-4 text-gray-200 font-bold">Mostrar todo</span>
            </a>
        </div>
        @foreach ($categories as $category)
            <div
                class="p-2.5 mt-3 flex items-center rounded-md px-2 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <a href="/store?cate={{ $category->id }}">
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">{{ $category->nombre }}</span>
                </a>
            </div>
        @endforeach
    </div>

    <script type="text/javascript">
        function dropdown() {
            document.querySelector("#submenu").classList.toggle("hidden");
            document.querySelector("#arrow").classList.toggle("rotate-0");
        }
        dropdown();

        function openSidebar() {
            document.querySelector(".sidebar").classList.toggle("hidden");
        }
    </script>


</body>

</html>
