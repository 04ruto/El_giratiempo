<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>El Giratiempo</title>

    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body>
    <div class="flex items-center justify-center h-screen bg-cover bg-center "
        style="background-image: url('./assets/img/bg_logup.jpg');">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">
            <h2 class="text-2xl font-semibold text-center mb-2">Crear nueva cuenta</h2>
            <p class="text-gray-600 text-center mb-2">Introduce tu información para registrarte.</p>
            <form action="{{ url('/newUser') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="fullName" class="block text-gray-700 text-sm font-semibold mb-2">Nombre *</label>
                    <input type="text" id="fullName"
                        class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500"
                        placeholder="Sirius Black" name="name">
                    @error('name')
                        <span class="text-red-600 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Correo electrónico
                        *</label>
                    <input type="text" id="email"
                        class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500"
                        placeholder="Sirius.Black@example.com" name="email">
                    @error('email')
                        <span class="text-red-600 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Contraseña *</label>
                    <input type="password" id="password"
                        class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500"
                        placeholder="••••••••" name="password">
                    <p class="text-gray-600 text-xs mt-1">Debe contener almenos 8 caracteres.
                    </p>
                    @error('password')
                        <span class="text-red-600 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-semibold mb-2">Repita la
                        contraseña
                        *</label>
                    <input type="password" id="password_confirmation"
                        class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500"
                        placeholder="••••••••" name="password_confirmation">
                    @error('password_confirmation')
                        <span class="text-red-600 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit"
                    class="transition duration-300 w-full bg-purple-900 text-zinc-300 px-4 py-2 rounded-lg hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Registrar</button>
                <p class="text-gray-600 text-xs text-center mt-4">
                    Registrandote, aceptas los
                    <a href="#" class="text-blue-500 hover:underline">Temrinos y Condiciones</a>.
                </p>

                <p class="text-gray-600 text-xs text-center mt-4">
                    Ya tienes una cuenta?
                    <a href="{{ url('/login') }}" class="text-blue-500 hover:underline">Sign In</a>.
                </p>
            </form>
        </div>
    </div>
</body>

</html>
