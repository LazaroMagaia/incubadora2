<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incubadora de negocios</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <!--- FONT--->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <!--- END FONT--->
    <!-- CSS -->
        <link rel="stylesheet" href="css/slider.css">
    <!-- CSS -->
</head>
<body>
    @vite('resources/css/app.css')
    <nav class="bg-white shadow-md py-5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/">
                    <img class="h-[80px] w-auto object-cover" src="{{asset('images/logo/logo.png')}}" alt="Logo">
                </a>
            </div>

            <!--- DESKTOP MENU --->
                @include('frontend.template.fragments.desktop')
            <!--- DESKTOP MENU --->

       
        </div>
    </div>

    <!--- MOBILE MENU --->

    @include('frontend.template.fragments.mobile')

    <!--- MOBILE MENU --->
</nav>
