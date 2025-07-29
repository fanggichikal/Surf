<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    @vite('resources/css/style.css')
    <!-- Scripts -->
    @vite('resources/js/script.js')

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Teampal Travel</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-20 w-20 object-contain">
            <span class="text">Teampal Travel</span>
        </a>
        <div class="text-center text-lg font-bold text-sky-800">
            {{ Auth::user()->name }}
        </div>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Surfing Lessons</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Surfing Trips</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Article konten</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="route('logout')"
                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Log Out</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->