<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="{{tailwindcss('css/app.css')}}" />


      <!--Services style-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <!--Services script-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
  <script src="scripts.js"></script>

    <title>Journey Page</title>
    @vite('resources/css/app.css')
    @vite('resources/js/script.js')
  </head>
  <body>
  <nav class="relative container mx-auto p-6">
      <!-- Flex container -->
      <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="pt-2">
          <img class= "md:1/2 h-32 w-32" src="img/SniperLogo.jpeg" alt="" />
        </div>
        <!-- Menu Items -->
        <div class="hidden space-x-6 md:flex">
          <a href="#" class="hover:text-darkGrayishBlue">HOME</a>
          <a href="#" class="hover:text-darkGrayishBlue">ABOUT US</a>
          <a href="#" class="hover:text-darkGrayishBlue">SERVICES</a>
          <a href="#" class="hover:text-darkGrayishBlue"> PARTNERS</a>
          <a href="#" class="hover:text-darkGrayishBlue">CLIENTS</a>
          <a href="#" class="hover:text-darkGrayishBlue">THE JOURNY</a>
          <a href="#" class="hover:text-darkGrayishBlue">CONTACT US</a>

        </div>
        <!-- Button -->
        <a
          href="#"
          class="hidden p-3 px-6 pt-2 text-white bg-darkRed rounded-full baseline hover:bg-brightRed md:block"
          >Get Started</a
        >

        <!-- Hamburger Icon -->
        <button
          id="menu-btn"
          class="block hamburger md:hidden focus:outline-none"
        >
          <span class="hamburger-top"></span>
          <span class="hamburger-middle"></span>
          <span class="hamburger-bottom"></span>
        </button>
      </div>

      <!-- Mobile Menu -->
      <div class="md:hidden">
        <div
          id="menu"
          class="absolute flex-col items-center hidden self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md"
        >
        <a href="#" class="hover:text-darkGrayishBlue">HOME</a>
        <a href="#" class="hover:text-darkGrayishBlue">ABOUT US</a>
          <a href="#" class="hover:text-darkGrayishBlue">SERVICES</a>
          <a href="#" class="hover:text-darkGrayishBlue">PARTNERS</a>
          <a href="#" class="hover:text-darkGrayishBlue">CLIENTS</a>
          <a href="#" class="hover:text-darkGrayishBlue">OUR JOURNY</a>
          <a href="#" class="hover:text-darkGrayishBlue">CONTACT US</a>
        </div>
      </div>
    </nav>

    
    <section >
      
    </section>
     

</body>
</html>