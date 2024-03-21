<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>El Giratiempo</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
</head>

<body>

    <div class="bg-gray-100 flex items-center justify-center h-screen bg-cover bg-center"
        style="background-image: url('./assets/img/bg_login.jpg');">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">
            <div class="flex justify-center mb-6">
                <span class="inline-block bg-gray-200 rounded-full p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                    </svg>
                </span>
            </div>
            <h2 class="text-2xl font-semibold text-center mb-4">Iniciar Sessión</h2>
            <p class="text-gray-600 text-center mb-6">Introduce tu información para iniciar sessión.</p>

            @if (Session::has('success'))
                <div class="container" id="alertbox">
                    <div class="container bg-red-500 flex items-center text-white text-sm font-bold px-4 py-3 relative"
                        role="alert">
                        <p>{{ Session::get('success') }}</p>

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
                        // $('.alertbox')[0].hide()
                        // e.preventDefault();
                        pid = $(this).parent().parent().hide(500)
                        console.log(pid)
                        // $(".alertbox", this).hide()
                    })
                </script>
            @endif

            <form action="{{ url('/oldUser') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Correo electrónico
                        *</label>
                    <input type="email" id="email"
                        class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required
                        placeholder="Sirius.Black@example.com" name="email" value="{{ session('email') }}">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Contraseña *</label>
                    <input type="password" id="password" minlength="8"
                        class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required
                        placeholder="••••••••" name="password">
                </div>

                <button type="submit"
                    class="transition duration-300 w-full bg-blue-900 text-amber-300 px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Entrar</button>

                <p class="text-gray-600 text-xs text-center mt-4">
                    No tienes una cuenta?
                    <a href="{{ url('/logup') }}" class="text-blue-500 hover:underline">Sign Up</a>.
                </p>

                <p class="text-gray-600 text-xs text-center mt-4">
                    No quieres una cuenta?
                    <a href="{{ url('/') }}" class="text-blue-500 hover:underline">Iniciar como invitado</a>.
                </p>
            </form>
        </div>
    </div>
</body>

</html>
