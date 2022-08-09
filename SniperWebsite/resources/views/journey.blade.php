<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
          class=" flex-col items-center hidden self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md"
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
    <h2 class="text-4xl font-bold text-center"> <a class="text-darkRed">The</a> Journey</h2>

    <div class="container bg-white mx-auto w-full h-full">
  <div class="relative wrap overflow-hidden p-10 h-full">
    <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border" style="left: 50%"></div>
    <!-- right timeline -->
    <div class="mb-8 flex justify-between items-center w-full right-timeline">
      <div class="order-1 w-5/12"></div>
<<<<<<< HEAD
      <div class="z-20 flex items-center order-1 bg-white shadow-xl w-10 h-10 rounded-full border-solid border-2 border-red-700">
        <h1 class="mx-auto font-semibold text-lg text-white"><img src="img/newJ1.png" /></h1>
      </div>
      <div class="order-1 bg-gray-200 rounded-lg shadow-xl w-5/12 px-6 py-4">
        <h3 class="mb-3 font-bold text-gray-800 text-xl">1ST: <a class="text-darkRed">EVALUATE</a></h3>
        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100"><ul>
   <li class="flex text-base text-body-color mb-4">
      <span class="rounded-full mr-2 text-base text-primary">
         <svg width="20" height="20" viewBox="0 0 20 20" class="fill-current">
            <path d="M10 19.625C4.6875 19.625 0.40625 15.3125 0.40625 10C0.40625 4.6875 4.6875 0.40625 10 0.40625C15.3125 0.40625 19.625 4.6875 19.625 10C19.625 15.3125 15.3125 19.625 10 19.625ZM10 1.5C5.3125 1.5 1.5 5.3125 1.5 10C1.5 14.6875 5.3125 18.5312 10 18.5312C14.6875 18.5312 18.5312 14.6875 18.5312 10C18.5312 5.3125 14.6875 1.5 10 1.5Z"></path>
            <path d="M8.9375 12.1875C8.71875 12.1875 8.53125 12.125 8.34375 11.9687L6.28125 9.96875C6.0625 9.75 6.0625 9.40625 6.28125 9.1875C6.5 8.96875 6.84375 8.96875 7.0625 9.1875L8.9375 11.0312L12.9375 7.15625C13.1563 6.9375 13.5 6.9375 13.7188 7.15625C13.9375 7.375 13.9375 7.71875 13.7188 7.9375L9.5625 12C9.34375 12.125 9.125 12.1875 8.9375 12.1875Z"></path>
         </svg>
      </span>
      SIGN UP as SNIPER
   </li>
   <li class="flex text-base text-body-color mb-4">
      <span class="rounded-full mr-2 text-base text-primary">
         <svg width="20" height="20" viewBox="0 0 20 20" class="fill-current">
            <path d="M10 19.625C4.6875 19.625 0.40625 15.3125 0.40625 10C0.40625 4.6875 4.6875 0.40625 10 0.40625C15.3125 0.40625 19.625 4.6875 19.625 10C19.625 15.3125 15.3125 19.625 10 19.625ZM10 1.5C5.3125 1.5 1.5 5.3125 1.5 10C1.5 14.6875 5.3125 18.5312 10 18.5312C14.6875 18.5312 18.5312 14.6875 18.5312 10C18.5312 5.3125 14.6875 1.5 10 1.5Z"></path>
            <path d="M8.9375 12.1875C8.71875 12.1875 8.53125 12.125 8.34375 11.9687L6.28125 9.96875C6.0625 9.75 6.0625 9.40625 6.28125 9.1875C6.5 8.96875 6.84375 8.96875 7.0625 9.1875L8.9375 11.0312L12.9375 7.15625C13.1563 6.9375 13.5 6.9375 13.7188 7.15625C13.9375 7.375 13.9375 7.71875 13.7188 7.9375L9.5625 12C9.34375 12.125 9.125 12.1875 8.9375 12.1875Z"></path>
         </svg>
      </span>
      APPLY
   </li>
   <li class="flex text-base text-body-color mb-4">
      <span class="rounded-full mr-2 text-base text-primary">
         <svg width="20" height="20" viewBox="0 0 20 20" class="fill-current">
            <path d="M10 19.625C4.6875 19.625 0.40625 15.3125 0.40625 10C0.40625 4.6875 4.6875 0.40625 10 0.40625C15.3125 0.40625 19.625 4.6875 19.625 10C19.625 15.3125 15.3125 19.625 10 19.625ZM10 1.5C5.3125 1.5 1.5 5.3125 1.5 10C1.5 14.6875 5.3125 18.5312 10 18.5312C14.6875 18.5312 18.5312 14.6875 18.5312 10C18.5312 5.3125 14.6875 1.5 10 1.5Z"></path>
            <path d="M8.9375 12.1875C8.71875 12.1875 8.53125 12.125 8.34375 11.9687L6.28125 9.96875C6.0625 9.75 6.0625 9.40625 6.28125 9.1875C6.5 8.96875 6.84375 8.96875 7.0625 9.1875L8.9375 11.0312L12.9375 7.15625C13.1563 6.9375 13.5 6.9375 13.7188 7.15625C13.9375 7.375 13.9375 7.71875 13.7188 7.9375L9.5625 12C9.34375 12.125 9.125 12.1875 8.9375 12.1875Z"></path>
         </svg>
      </span>
      GET your Score
   </li>
   <li class="flex text-base text-body-color mb-4">
      <span class="rounded-full mr-2 text-base text-primary">
         <svg width="20" height="20" viewBox="0 0 20 20" class="fill-current">
            <path d="M10 19.625C4.6875 19.625 0.40625 15.3125 0.40625 10C0.40625 4.6875 4.6875 0.40625 10 0.40625C15.3125 0.40625 19.625 4.6875 19.625 10C19.625 15.3125 15.3125 19.625 10 19.625ZM10 1.5C5.3125 1.5 1.5 5.3125 1.5 10C1.5 14.6875 5.3125 18.5312 10 18.5312C14.6875 18.5312 18.5312 14.6875 18.5312 10C18.5312 5.3125 14.6875 1.5 10 1.5Z"></path>
            <path d="M8.9375 12.1875C8.71875 12.1875 8.53125 12.125 8.34375 11.9687L6.28125 9.96875C6.0625 9.75 6.0625 9.40625 6.28125 9.1875C6.5 8.96875 6.84375 8.96875 7.0625 9.1875L8.9375 11.0312L12.9375 7.15625C13.1563 6.9375 13.5 6.9375 13.7188 7.15625C13.9375 7.375 13.9375 7.71875 13.7188 7.9375L9.5625 12C9.34375 12.125 9.125 12.1875 8.9375 12.1875Z"></path>
         </svg>
      </span>
      know where you should 
   </li>
   <li class="flex text-base text-body-color mb-4">
      <span class="rounded-full mr-2 text-base text-primary">
         <svg width="20" height="20" viewBox="0 0 20 20" class="fill-current">
            <path d="M10 19.625C4.6875 19.625 0.40625 15.3125 0.40625 10C0.40625 4.6875 4.6875 0.40625 10 0.40625C15.3125 0.40625 19.625 4.6875 19.625 10C19.625 15.3125 15.3125 19.625 10 19.625ZM10 1.5C5.3125 1.5 1.5 5.3125 1.5 10C1.5 14.6875 5.3125 18.5312 10 18.5312C14.6875 18.5312 18.5312 14.6875 18.5312 10C18.5312 5.3125 14.6875 1.5 10 1.5Z"></path>
            <path d="M8.9375 12.1875C8.71875 12.1875 8.53125 12.125 8.34375 11.9687L6.28125 9.96875C6.0625 9.75 6.0625 9.40625 6.28125 9.1875C6.5 8.96875 6.84375 8.96875 7.0625 9.1875L8.9375 11.0312L12.9375 7.15625C13.1563 6.9375 13.5 6.9375 13.7188 7.15625C13.9375 7.375 13.9375 7.71875 13.7188 7.9375L9.5625 12C9.34375 12.125 9.125 12.1875 8.9375 12.1875Z"></path>
         </svg>
      </span>
      HUNT
   </li>
</ul></p>
=======
      <div class="z-20 flex items-center order-1 bg-red-700 shadow-xl w-8 h-8 rounded-full">
        <h1 class="mx-auto font-semibold text-lg text-white">1</h1>
      </div>
      <div class="order-1 bg-gray-200 rounded-lg shadow-xl w-5/12 px-6 py-4">
        <h3 class="mb-3 font-bold text-gray-800 text-xl">1ST: <a class="text-darkRed">EVALUATE</a></h3>
        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">-SIGN UP as SNIPER.<br>
            -APPLY.<br>
            -GET your Score.<br>
            -know where you should HUNT.<br></p>
>>>>>>> 56cff2750d34d5a17cb030d89e700c43a23ce877
      </div>
    </div>

    <!-- left timeline -->
    <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
      <div class="order-1 w-5/12"></div>
<<<<<<< HEAD
      <div class="z-20 flex items-center order-1 bg-white shadow-xl w-10 h-10 rounded-full border-solid border-2 border-red-700">
        <h1 class="mx-auto text-white font-semibold text-lg"><img src="img/newJ2.png" /></h1>
      </div>
      <div class="order-1 bg-red-100 rounded-lg shadow-xl w-5/12 px-6 py-4">
        <h3 class="mb-3 font-bold text-black text-xl">2ST: <a class="text-darkRed">INCUBATE</a></h3>
        <p class="text-sm  leading-snug tracking-wide text-gray-900 text-opacity-100">
        <ul>
   <li class="flex text-base text-body-color mb-4">
      <span class="rounded-full mr-2 text-base text-primary">
         <svg width="20" height="20" viewBox="0 0 20 20" class="fill-current">
            <path d="M10 19.625C4.6875 19.625 0.40625 15.3125 0.40625 10C0.40625 4.6875 4.6875 0.40625 10 0.40625C15.3125 0.40625 19.625 4.6875 19.625 10C19.625 15.3125 15.3125 19.625 10 19.625ZM10 1.5C5.3125 1.5 1.5 5.3125 1.5 10C1.5 14.6875 5.3125 18.5312 10 18.5312C14.6875 18.5312 18.5312 14.6875 18.5312 10C18.5312 5.3125 14.6875 1.5 10 1.5Z"></path>
            <path d="M8.9375 12.1875C8.71875 12.1875 8.53125 12.125 8.34375 11.9687L6.28125 9.96875C6.0625 9.75 6.0625 9.40625 6.28125 9.1875C6.5 8.96875 6.84375 8.96875 7.0625 9.1875L8.9375 11.0312L12.9375 7.15625C13.1563 6.9375 13.5 6.9375 13.7188 7.15625C13.9375 7.375 13.9375 7.71875 13.7188 7.9375L9.5625 12C9.34375 12.125 9.125 12.1875 8.9375 12.1875Z"></path>
         </svg>
      </span>
      Business STRATEGY & model.
   </li>
   <li class="flex text-base text-body-color mb-4">
      <span class="rounded-full mr-2 text-base text-primary">
         <svg width="20" height="20" viewBox="0 0 20 20" class="fill-current">
            <path d="M10 19.625C4.6875 19.625 0.40625 15.3125 0.40625 10C0.40625 4.6875 4.6875 0.40625 10 0.40625C15.3125 0.40625 19.625 4.6875 19.625 10C19.625 15.3125 15.3125 19.625 10 19.625ZM10 1.5C5.3125 1.5 1.5 5.3125 1.5 10C1.5 14.6875 5.3125 18.5312 10 18.5312C14.6875 18.5312 18.5312 14.6875 18.5312 10C18.5312 5.3125 14.6875 1.5 10 1.5Z"></path>
            <path d="M8.9375 12.1875C8.71875 12.1875 8.53125 12.125 8.34375 11.9687L6.28125 9.96875C6.0625 9.75 6.0625 9.40625 6.28125 9.1875C6.5 8.96875 6.84375 8.96875 7.0625 9.1875L8.9375 11.0312L12.9375 7.15625C13.1563 6.9375 13.5 6.9375 13.7188 7.15625C13.9375 7.375 13.9375 7.71875 13.7188 7.9375L9.5625 12C9.34375 12.125 9.125 12.1875 8.9375 12.1875Z"></path>
         </svg>
      </span>
      Management & EFFICIENCY.
   </li>
   <li class="flex text-base text-body-color mb-4">
      <span class="rounded-full mr-2 text-base text-primary">
         <svg width="20" height="20" viewBox="0 0 20 20" class="fill-current">
            <path d="M10 19.625C4.6875 19.625 0.40625 15.3125 0.40625 10C0.40625 4.6875 4.6875 0.40625 10 0.40625C15.3125 0.40625 19.625 4.6875 19.625 10C19.625 15.3125 15.3125 19.625 10 19.625ZM10 1.5C5.3125 1.5 1.5 5.3125 1.5 10C1.5 14.6875 5.3125 18.5312 10 18.5312C14.6875 18.5312 18.5312 14.6875 18.5312 10C18.5312 5.3125 14.6875 1.5 10 1.5Z"></path>
            <path d="M8.9375 12.1875C8.71875 12.1875 8.53125 12.125 8.34375 11.9687L6.28125 9.96875C6.0625 9.75 6.0625 9.40625 6.28125 9.1875C6.5 8.96875 6.84375 8.96875 7.0625 9.1875L8.9375 11.0312L12.9375 7.15625C13.1563 6.9375 13.5 6.9375 13.7188 7.15625C13.9375 7.375 13.9375 7.71875 13.7188 7.9375L9.5625 12C9.34375 12.125 9.125 12.1875 8.9375 12.1875Z"></path>
         </svg>
      </span>
      Branding & Marketing 
   </li>
   <li class="flex text-base text-body-color mb-4">
      <span class="rounded-full mr-2 text-base text-primary">
         <svg width="20" height="20" viewBox="0 0 20 20" class="fill-current">
            <path d="M10 19.625C4.6875 19.625 0.40625 15.3125 0.40625 10C0.40625 4.6875 4.6875 0.40625 10 0.40625C15.3125 0.40625 19.625 4.6875 19.625 10C19.625 15.3125 15.3125 19.625 10 19.625ZM10 1.5C5.3125 1.5 1.5 5.3125 1.5 10C1.5 14.6875 5.3125 18.5312 10 18.5312C14.6875 18.5312 18.5312 14.6875 18.5312 10C18.5312 5.3125 14.6875 1.5 10 1.5Z"></path>
            <path d="M8.9375 12.1875C8.71875 12.1875 8.53125 12.125 8.34375 11.9687L6.28125 9.96875C6.0625 9.75 6.0625 9.40625 6.28125 9.1875C6.5 8.96875 6.84375 8.96875 7.0625 9.1875L8.9375 11.0312L12.9375 7.15625C13.1563 6.9375 13.5 6.9375 13.7188 7.15625C13.9375 7.375 13.9375 7.71875 13.7188 7.9375L9.5625 12C9.34375 12.125 9.125 12.1875 8.9375 12.1875Z"></path>
         </svg>
      </span>
      Operation & LOGISTICS
   </li>
   <li class="flex text-base text-body-color mb-4">
      <span class="rounded-full mr-2 text-base text-primary">
         <svg width="20" height="20" viewBox="0 0 20 20" class="fill-current">
            <path d="M10 19.625C4.6875 19.625 0.40625 15.3125 0.40625 10C0.40625 4.6875 4.6875 0.40625 10 0.40625C15.3125 0.40625 19.625 4.6875 19.625 10C19.625 15.3125 15.3125 19.625 10 19.625ZM10 1.5C5.3125 1.5 1.5 5.3125 1.5 10C1.5 14.6875 5.3125 18.5312 10 18.5312C14.6875 18.5312 18.5312 14.6875 18.5312 10C18.5312 5.3125 14.6875 1.5 10 1.5Z"></path>
            <path d="M8.9375 12.1875C8.71875 12.1875 8.53125 12.125 8.34375 11.9687L6.28125 9.96875C6.0625 9.75 6.0625 9.40625 6.28125 9.1875C6.5 8.96875 6.84375 8.96875 7.0625 9.1875L8.9375 11.0312L12.9375 7.15625C13.1563 6.9375 13.5 6.9375 13.7188 7.15625C13.9375 7.375 13.9375 7.71875 13.7188 7.9375L9.5625 12C9.34375 12.125 9.125 12.1875 8.9375 12.1875Z"></path>
         </svg>
      </span>
      Launching
   </li>
</ul>
        </p>
=======
      <div class="z-20 flex items-center order-1 bg-red-700 shadow-xl w-8 h-8 rounded-full">
        <h1 class="mx-auto text-white font-semibold text-lg">2</h1>
      </div>
      <div class="order-1 bg-red-100 rounded-lg shadow-xl w-5/12 px-6 py-4">
        <h3 class="mb-3 font-bold text-black text-xl">2ST: <a class="text-darkRed">INCUBATE</a></h3>
        <p class="text-sm font-medium leading-snug tracking-wide text-gray-900 text-opacity-100"> 1.Business STRATEGY & model.<br>
          2. management & EFFICIENCY.<br>
          3.Branding & Marketing.<br>
          4.Operation & LOGISTICS.<br>
          5. launching.<br></p>
>>>>>>> 56cff2750d34d5a17cb030d89e700c43a23ce877
      </div>
    </div>
    
    <!-- right timeline -->
    <div class="mb-8 flex justify-between items-center w-full right-timeline">
      <div class="order-1 w-5/12"></div>
<<<<<<< HEAD
      <div class="z-20 flex items-center order-1 bg-white shadow-xl w-10 h-10 rounded-full border-solid border-2 border-red-700">
        <h1 class="mx-auto font-semibold text-lg text-white"><img src="img/newJ3.png" /></h1>
=======
      <div class="z-20 flex items-center order-1 bg-red-700 shadow-xl w-8 h-8 rounded-full">
        <h1 class="mx-auto font-semibold text-lg text-white">3</h1>
>>>>>>> 56cff2750d34d5a17cb030d89e700c43a23ce877
      </div>
      <div class="order-1 bg-gray-200 rounded-lg shadow-xl w-5/12 px-6 py-4">
        <h3 class="mb-3 font-bold text-gray-800 text-xl">3ST: <a class="text-darkRed">GROW</a></h3>
        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">When your businesses matures, we provide financial solutions to give you the opportunity to expand and grow, such As:
            Direct investment, crowded funding, angel investor, family fund.</p>
      </div>
    </div>

    <!-- left timeline -->
    <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
      <div class="order-1 w-5/12"></div>
<<<<<<< HEAD
      <div class="z-20 flex items-center order-1 bg-white shadow-xl w-10 h-10 rounded-full border-solid border-2 border-red-700">
        <h1 class="mx-auto text-white font-semibold text-lg"><img src="img/newJ4.png" /></h1>
      </div>
      <div class="order-1 bg-red-100 rounded-lg shadow-xl w-5/12 px-6 py-4">
        <h3 class="mb-3 font-bold text-black text-xl">4ST: <a class="text-darkRed">RUN</a></h3>
        <p class="text-sm  leading-snug tracking-wide text-gray-900 text-opacity-100">When your businesses matures, we provide financial solutions to give you the opportunity to expand and grow, such As:
            Direct investment, crowded funding, angel investor, family fund.</p>
=======
      <div class="z-20 flex items-center order-1 bg-red-700 shadow-xl w-8 h-8 rounded-full">
        <h1 class="mx-auto text-white font-semibold text-lg">4</h1>
      </div>
      <div class="order-1 bg-red-100 rounded-lg shadow-xl w-5/12 px-6 py-4">
        <h3 class="mb-3 font-bold text-black text-xl">4ST: <a class="text-darkRed">RUN</a></h3>
        <p class="text-sm font-medium leading-snug tracking-wide text-gray-900 text-opacity-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
>>>>>>> 56cff2750d34d5a17cb030d89e700c43a23ce877
      </div>
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