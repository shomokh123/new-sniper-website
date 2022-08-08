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
  <!-- Navbar -->
  <nav id="Home"class="relative container mx-auto p-6">
      <!-- Flex container -->
      <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="pt-2">
          <img class= "md:1/2 h-32 w-32" src="img/SniperLogo1.SVG" alt="" />
          
        </div>
        <!-- Menu Items -->
        <div class="hidden space-x-6 text-sm md:flex">
          <a href="#Home" class="hover:text-darkGrayishBlue">HOME</a>
          <a href="#" class="hover:text-darkGrayishBlue">ABOUT US</a>
          <a href="#services" class="hover:text-darkGrayishBlue">SERVICES</a>
          <a href="#Partners" class="hover:text-darkGrayishBlue">PARTNERS</a>
          <a href="#Clients" class="hover:text-darkGrayishBlue">CLIENTS</a>
          <a href="#" class="hover:text-darkGrayishBlue">THE JOURNEY</a>
          <a href="#FOOTER" class="hover:text-darkGrayishBlue">CONTACT US</a>
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
         <a href="#Home" class="hover:text-darkGrayishBlue">HOME</a>
          <a href="#" class="hover:text-darkGrayishBlue">ABOUT US</a>
          <a href="#services" class="hover:text-darkGrayishBlue">SERVICES</a>
          <a href="#Partners" class="hover:text-darkGrayishBlue">PARTNERS</a>
          <a href="#Clients" class="hover:text-darkGrayishBlue">CLIENTS</a>
          <a href="#" class="hover:text-darkGrayishBlue">THE JOURNEY</a>
          <a href="#FOOTER" class="hover:text-darkGrayishBlue">CONTACT US</a>
        </div>
      </div>
    </nav>

    
    <section >
    <div class="max-w-6/12 px-5 mx-auto mt-32 text-center">
    <h2 class="text-4xl font-bold text-center"> <a class="text-darkRed">The</a> Journey</h2>

    <div class="flex flex-col mt-24 md:flex-row md:space-x-6 ">
          <!-- member 1 -->
          <div
            class="flex flex-col items-center p-6 space-y-6 rounded-lg md:w-1/3 sm:mt-16" id="journyimage" 
          >
          <h5 class=" text-lg font-bold">1ST: <a class="text-darkRed">EVALUATE</a> </h5>
            <img src="img/journey1.png"  alt="" id="journyimage"/>
            
            <p id="textJ">
            -SIGN UP as SNIPER<br>
            -APPLY<br>
            -GET your Score<br>
            -know where you should HUNT<br>

            </p>
          </div>

          <!-- member 2 -->
          <div
            class="flex flex-col items-center p-6 space-y-6 rounded-lg   md:w-1/3 sm:mt-16" id="journyimage" 
          >
          <h5 class="text-lg font-bold">2ST: <a class="text-darkRed">INCUBATE</a></h5>

          <img src="img/journey2.png" id="journyimage"  alt="" />
          <p id="textJ">
          1.Business STRATEGY & model.<br>
          2. management & EFFICIENCY.<br>
          3.Branding & Marketing.<br>
          4.Operation & LOGISTICS.<br>
          5. launching.<br>

            </p>
          </div>

          <!-- member 3 -->
          <div
            class="flex flex-col items-center p-6 space-y-6 rounded-lg  md:flex md:w-1/3 sm:mt-16" id="journyimage" 
          >
          <h5 class="text-lg font-bold">3ST: <a class="text-darkRed">GROW</a></h5>
          <img src="img/journey3.png" id="journyimage"  alt="" />
            <p id="textJ">
            When your businesses matures, we provide financial solutions to give you the opportunity to expand and grow, such As:
            Direct investment – crowded funding - angel investor -family fund.
            </p>
          </div>
          <!-- member 4-->
          <div
            class="flex flex-col items-center p-6 space-y-6 rounded-lg  md:flex md:w-1/3 sm:mt-16" id="journyimage" 
          >
          <h5 class="text-lg font-bold">3ST: <a class="text-darkRed">GROW</a></h5>

          <img src="img/journey4.png" id="journyimage"  alt="" />
            <p id="textJ">
            
            </p>
          </div>
        </div>
</div>
    </section>
     

</body>
</html>