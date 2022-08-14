<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="{{tailwindcss('css/app.css')}}" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.9.0/dist/tailwind.min.css" rel="stylesheet">

      <!--Services style-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <!--Services script-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
  <script src="scripts.js"></script>

    <title>Thank you</title>
    @vite('resources/css/app.css')
    @vite('resources/js/script.js')
  </head>
  <body>

<!-- component -->
<div class="flex h-screen items-center justify-center bg-red-50 px-4">
  <div class="max-w-sm overflow-hidden rounded-xl bg-white shadow-md duration-200 hover:scale-105 hover:shadow-xl">
    <img src="img/SniperLogo2.svg" alt="Logo" class="h-auto w-full" />
    <div class="p-6">
      <p class="text-large text-xl font-bold  mb-5 text-black">Thank You For Choosing <a class="text-darkRed">Sniper</a> We Will Contact You Soon. Stay Tuend</p>
      <a href="{{ url('/')}}" >
        <button class="w-full rounded-md bg-darkRed  py-2 text-indigo-100 hover:bg-red-500 hover:shadow-md duration-75">Okey
        </button>
    </a>
    </div>
  </div>
</div>

    <script src="js/script.js"></script>


</body>
</html>