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
    @vite('public/css/app.css')
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

   <!-- Hero Section -->
   <section id="hero">
      <!-- Flex Container -->
      <div class="container flex flex-col-reverse items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row max-w-6xl ">
        <!-- Left item -->
        <div class="flex flex-col mb-32 space-y-12 md:w-1/2">
          <h1
            class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left"
          >
          Grow Your Business with <Strong class=" text-darkRed">Sniper</Strong> 
          </h1>
          <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
            At Sniper Accelerator, we empower emerging businesses by providing solutions and services and connecting our customers with the knowledge, tools and networks they need.

          </p>
          <div class="flex justify-center md:justify-start">
          <a
          href="#"
          class="hidden p-3 px-6 pt-2 text-white bg-darkRed rounded-full baseline hover:bg-brightRed md:block"
          >Get Started</a
        >
          </div>
        </div>
        <!-- Image -->
        <div class="md:w-1/2">
          <img src="img/WelcomSection.svg" alt="" />
        </div>
      </div>
    </section>


  
    <!---Vision & Mission section-->
<section id="VisionMission">
  <!-- Flex container -->
  <div id="visionOverley"class="relative container mx-auto md:py-48 sm:py-10 max-w-6xl">
  <div
  class="container flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row"
>
  <!--    Sniper Future -->
  <div class="flex flex-col space-y-12 md:w-1/2">
    <h2 class="max-w-md text-5xl font-bold text-center md:text-left">
      <Strong class="text-darkRed">Sniper</Strong> Future
    </h2>
    <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
      Let's HUNT the SUCCESS
    </p>
  </div>
  <!-- Numbered List -->
  <div class="flex flex-col space-y-8 md:w-1/2">
    <!-- Vision  -->
    <div
      class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row"
    >
      <!-- Heading -->
      <div class="rounded-l-full bg-red-100 md:bg-transparent">
        <div class="flex items-center space-x-2">
          <div
            class="px-4 py-2 text-white rounded-full md:py-1 bg-red-700"
          >
            01
          </div>
          <h3 class="text-base font-bold text-darkRed text-3xl md:mb-4 md:hidden">
            Vision
          </h3>
        </div>
      </div>

      <div>
        <h3 class="hidden mb-4 text-lg text-darkRed text-3xl font-bold md:block">
          Vision
        </h3>
        <p class="text-black">
          To create wealth and drive development for Startups and SMEs.
        </p>
      </div>
    </div>

    <!-- Mission -->
    <div
      class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row"
    >
      <!-- Heading -->
      <div class="rounded-l-full bg-red-100 md:bg-transparent">
        <div class="flex items-center space-x-2">
          <div
            class="px-4 py-2 text-white rounded-full md:py-1 bg-red-700"
          >
            02
          </div>
          <h3 class="text-base font-bold text-darkRed  text-3xl md:mb-4 md:hidden">
            Mission
          </h3>
        </div>
      </div>

      <div>
        <h3 class="hidden mb-4 text-lg text-darkRed  text-3xl font-bold md:block">
          Mission
        </h3>
        <p class="text-black">
          Empowering SRARTUPS AND MSMEs through providing facilities, experience and capabilities they need to reach their ultimate goals.
        </p>
      </div>
    </div>

  </div>
</div> 

</div>

</section>


<!--Services-->

<div id="services"class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
  <div  class="max-w-6xl px-5 mx-auto mt-2 text-center">
<h2 class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900 sm:text-4xl"><a class="text-darkRed">Services</a> We Offer</h2>
        </div> 
    <div class="mt-10">
      <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white " id="serviceIcon">
             <!-- Heroicon name: outline/lightning-bolt -->
             <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
          </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Strategy</p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">Business Strategy, Guiding principles, Strategic plan structure, Action plan.Craft and design business model.
            </dd>
        </div>

        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white " id="serviceIcon">
               <!-- Heroicon name: outline/lightning-bolt -->
               <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Management</p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">Running your business, controlling problems and solve it, Manage humane resources, Controlfinance activities.
            </dd>
        </div>

        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white " id="serviceIcon">
              <!-- Heroicon name: outline/lightning-bolt -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Marketing</p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">Professional branding leads to more revenue, Sniper will get you to your customer.</dd>
        </div>

        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white" id="serviceIcon">
              <!-- Heroicon name: outline/lightning-bolt -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Technologies</p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">Software, IT infrastructure services in addition to technicalfinancial solutions.
            </dd>
        </div>

        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white " id="serviceIcon">
              <!-- Heroicon name: outline/lightning-bolt -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Investment</p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">Join us to access opportunities to grow through connecting your business with available investment and funding options.</dd>
        </div>


        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white" id="serviceIcon">
              <!-- Heroicon name: outline/lightning-bolt -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Franchise</p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">GO to Franchise professionals – safely with Sniper.</dd>
        </div>

        <div class="relative">
          <dt>
          <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white" id="serviceIcon">
             <!-- Heroicon name: outline/lightning-bolt -->
             <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
          </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Legal</p>
          </dt>
          <dd class="mt-2 ml-16 text-base text-gray-500">Connecting you with specialized lawyers in the field you need who will support you with
            legal consultations and services specifically in the startups establishment phase, legal contracts, agreements.</dd>
        </div>

        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white" id="serviceIcon">
              <!-- Heroicon name: outline/lightning-bolt -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Place</p>
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


<!-- Partners -->

<div id="Partners" class="max-w-6xl px-5 mx-auto mt-32 text-center">
<h2 class="text-4xl font-bold text-center">Our Partners Focus On Your <a class="text-darkRed">Success</a></h2>
        </div>  

<section id="Partners" class="relative px-6  py-16 w-full h-full text-sm z-1 float-left text-center box-border bg-fcfcfd">
  <div class="container">
  </div>
  <div class="testimonials-carousel-wrap">
      <div class="listing-carousel-button listing-carousel-button-next"><i class="fa fa-caret-right" style="color:bg-brightRed"></i></div>
      <div class="listing-carousel-button listing-carousel-button-prev"><i class="fa fa-caret-left" style="color:bg-brightRed"></i></div>
      <div class="testimonials-carousel">
          <div class="swiper-container">
              <div class="swiper-wrapper">

                   <!--First--->
                  <div class="swiper-slide">
                      <div class="testi-item">
                          <img src="img/VimIcon.svg">
                    
                      </div>
                  </div>

                  <!--second--->
                  <div class="swiper-slide">
                    <div class="testi-item">
                        <img src="img/IthraaIcon.svg">
                  
                    </div>
                </div>
                  <!--third-->
                  <div class="swiper-slide">
                    <div class="testi-item">
                        <img src="img/FranchiseArtIcon.svg">
                  
                    </div>
                </div>

                  <!--fourth-->
                  <div class="swiper-slide">
                    <div class="testi-item">
                        <img src="img/ForusIcon.svg">
                  
                    </div>
                </div>

                 <!--fivth-->
                 <div class="swiper-slide">
                  <div class="testi-item">
                      <img src="img/ClaodIcon.svg">
                
                  </div>
              </div>

               <!--Sixth-->
               <div class="swiper-slide">
                <div class="testi-item">
                    <img src="img/ScopeerIcon.svg">
              
                </div>
            </div>

                  <!-- end-->

              </div>
          </div>
      </div>

      <div class="tc-pagination"></div>
  </div>
</section>


    <!-- clients -->
 <!-- clients Heading -->
<div id="Clients" class="max-w-6xl px-5 mx-auto mt-32 text-center">
        <h2 class="text-4xl font-bold text-center">
        Our <a class="text-darkRed">Clients</a>  Who Make Us Proud </h2>
        </div>  

<section  class="bg-white lg:px-[200px] py-20 lg:py-[120px]">
   <div class="container">
      <div class="flex flex-wrap -mx-4 ">
         <div class="w-full px-4">
            <div class="flex flex-wrap justify-center items-center">
               <!-- First -->
               <a class="w-[150px] 2xl:w-[180px] py-5 flex items-center justify-center mx-4">
                  <img src="img/coffeeIcon.svg" alt="image" class="w-full h-full"/>
               </a>

               <!-- Second -->
               <a class="w-[150px] 2xl:w-[180px] py-5 flex items-center justify-center mx-4">
                  <img src="img/antaderkIcon.svg" alt="image" class="w-full h-full"/>
               </a>

               <!-- third -->
               <a class="w-[150px] 2xl:w-[180px] py-5 flex items-center justify-center mx-4">
                  <img src="img/mysteryIcon.svg" alt="image" class="w-full h-full"/>
               </a>


               <!-- fourth -->
               <a class="w-[150px] 2xl:w-[180px] py-5 flex items-center justify-center mx-4">
                  <img src="img/xpokrIcon.svg" alt="image" class="w-full h-full"/>
               </a>
               

               <!-- fivth -->
               <a class="w-[150px] 2xl:w-[180px] py-5 flex items-center justify-center mx-4">
                  <img src="img/sultanIcon.svg" alt="image" class="w-full h-full"/>
               </a>

                 <!-- sixth -->
                 <!-- fivth -->
               <a class="w-[150px] 2xl:w-[180px] py-5 flex items-center justify-center mx-4">
                  <img src="img/arabiaIcon.svg" alt="image" class="w-full h-full"/>
               </a>

            </div>
         </div>
      </div>
   </div>
</section>

   <!-- CTA Section -->
   <section id="cta" class="  relative bg-red-300">
      <!-- Flex Container -->
      <div
        class="container flex flex-col items-center justify-between px-6 py-24 mx-auto space-y-12 md:py-12 md:flex-row md:space-y-0"
      >
        <!-- Heading -->
        <h2
          class="text-5xl font-bold leading-tight text-center text-white md:text-4xl md:max-w-xl md:text-left"
        >
        Every <a class="text-darkRed">Sniper</a> has A story , create yours now
        </h2>
        <!-- Button -->
        <div>
          <a
            href="#"
            class="p-3 px-6 pt-2 text-darkRed bg-white rounded-full shadow-2xl baseline hover:bg-gray-900"
            >Get Started</a
          >
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
