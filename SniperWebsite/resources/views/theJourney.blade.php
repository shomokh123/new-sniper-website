<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{tailwindcss('css/app.css')}}" />

     <!--Services style-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <!--Services script-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
  <script src="scripts.js"></script>

    <title>Sniper Landing Page</title>
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
          <a href="theJourney" class="hover:text-darkGrayishBlue">THE JOURNEY</a>
          <a href="#FOOTER" class="hover:text-darkGrayishBlue">CONTACT US</a>
        </div>
      </div>
    </nav>

     <!-- Hero Section -->
   <section>
     
<div id="theJourney"class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
  <div  class="max-w-6xl px-5 mx-auto mt-2 text-center">
<h2 class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900 sm:text-4xl">The <a class="text-darkRed">Journey</a></h2>
        </div> 
    <div class="mt-10">
      <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-4 md:gap-x-8 md:gap-y-10">
        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white " id="journeyIcon">

            <img class="text-white dark:text-white" src="img/SniPericon.svg" alt=""/>
             
          </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">1ST: <a class="text-darkRed">EVALUATE</a> </p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">SIGN UP as SNIPER,
APPLY,
GET your Score,
know where you should 
HUNT.</dd>
        </div>


        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white" id="journeyIcon">

            <img class="text-white dark:text-white" src="img/SniPericon.svg" alt=""/>

            </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">2ST: <a class="text-darkRed">INCUBATE</a></p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">Business STRATEGY model, management EFFICIENCY, Branding Marketing, Operation LOGISTICS, launching</dd>
        </div>

        <div class="relative">
          <dt>
          <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white" id="journeyIcon">
            
          <img class="text-white dark:text-white" src="img/SniPericon.svg" alt=""/>

          </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">3ST: <a class="text-darkRed">GROW</a></p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">When your businesses matures, we provide financial solutions to give you the opportunity to expand and grow, such As:
Direct investment – crowded funding - angel investor -family fund.</dd>
        </div>

        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white" id="journeyIcon">
             
            <img class="text-white dark:text-white" src="img/SniPericon.svg" alt=""/>

            </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">4ST: <a class="text-darkRed">RUN</a></p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">Place to work, place to HUNT.
            An open flexible HUB with different designs of workspaces (open – private),
            facilities equipped with capabilities that entrepreneurs need fortheir work, a
            place that brings together creative people in various fields to share knowledge
            and experience.</dd>
        </div>
        
      </dl>
    </div>
  </div>
</div>



    </section>
   


 





  <!-- Footer -->
  <footer id="FOOTER" class="bg-darkRed">
      <!-- Flex Container -->
      <div
        class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0"
      >
        <!-- Logo and social links container -->
        <div
          class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start"
        >
          <div class="mx-auto my-6 text-center text-white md:hidden">
            Copyright &copy; 2022, All Rights Reserved
          </div>
          <!-- Logo -->
          <div>
            <img src="img/SniperLogoFooter.SVG" class="h-8 w-8" alt="" />
          </div>
          <!-- Social Links Container -->
          <div class="flex justify-center space-x-4">
            <!-- facebook Link  -->
            <a href="#">
              <img src="img/icon-facebook.svg" alt="" class="h-6" />
            </a>
            <!-- youtube Link  -->
            <a href="#">
              <img src="img/icon-youtube.svg" alt="" class="h-6" />
            </a>
            <!-- twitter Link  -->
            <a href="https://twitter.com/SniperHubCo" target="_blank">
              <img src="img/icon-twitter.svg" alt="" class="h-6" />
            </a>
            <!-- instagram Link  -->
            <a href="#">
              <img src="img/icon-instagram.svg" alt="" class="h-6" />
            </a>

              <!-- email Link  -->
              <a href="mailto:Projects@bdd.com.sa">
              <img src="img/icon-email.svg" alt="" class="h-6" />
            </a>

              <!-- phone Link  -->
              <a href="tel:+966501422999">
              <img src="img/icon-phone.svg" alt="" class="h-6" />
            </a>
          </div>
        </div>
        <!-- Mnue List Container -->
        <div class="flex justify-around space-x-32">
          <div class="flex flex-col space-y-3 text-white">
            <a href="#" class="hover:text-brightRed">HOME</a>
            <a href="#" class="hover:text-brightRed">ABOUT US</a>
            <a href="#" class="hover:text-brightRed">SERVICES</a>
            <a href="#" class="hover:text-brightRed">PARTNERS</a>
          </div>
          <div class="flex flex-col space-y-3 text-white">
            <a href="#" class="hover:text-brightRed">CLIENTS</a>
            <a href="#" class="hover:text-brightRed">THE JOURNEY</a>
            <a href="#" class="hover:text-brightRed">CONTACT US</a>
          </div>
        </div>
      
        <!-- Copyright -->
        <div class="flex flex-col justify-between">
       
          <div class="hidden text-white md:block">
            Copyright &copy; 2022, All Rights Reserved
          </div>
        </div>
      </div>
    </footer>

    <script src="js/script.js"></script>

  </body>
</html>
