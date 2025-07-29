<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Teampal Surf</title>
</head>

<body class="font-sans bg-white antialiased">
    <div x-data="{ sidebarOpen: false }" class="min-h-screen flex">
        <div x-show="sidebarOpen" x-transition.opacity.duration.300ms
            class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden"
            @click="sidebarOpen = false"></div>
        <x-backsidebar></x-backsidebar>
        <main class="flex-1 p-6 lg:p-8">
            <button @click="sidebarOpen = true" class="lg:hidden p-2 text-gray-600 focus:outline-none focus:ring-2 focus:ring-sky-500 rounded-md mb-6">
                <i class='bx bx-menu text-3xl'></i>
            </button>
            {{$slot}}
        </main>
    </div>
</body>

</html>