<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="{{tailwindcss('css/app.css')}}" />

    <title>About us Page</title>
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
          <a href="{{ url('/')}}" class="hover:text-darkGrayishBlue">HOME</a>
          <a href="{{ url('/Aboutus')}}" class="hover:text-darkGrayishBlue">ABOUT US</a>
          <a href="{{ url('/#services')}}" class="hover:text-darkGrayishBlue">SERVICES</a>
          <a href="{{ url('/#Partners')}}" class="hover:text-darkGrayishBlue">PARTNERS</a>
          <a href="{{ url('/#Clients')}}" class="hover:text-darkGrayishBlue">CLIENTS</a>
          <a href="{{ url('/journey')}}" class="hover:text-darkGrayishBlue"> JOURNEY</a>
          <a href="#FOOTER" class="hover:text-darkGrayishBlue">CONTACT US</a>
        </div>
        <!-- Button -->
        <a
        href="{{ url('/getStarted')}}"
          class="hidden p-3 px-6 pt-2 text-white bg-darkRed rounded-full baseline hover:bg-brightRed md:block"
          >Let's Hunt</a
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
         <a href="{{ url('/')}}" class="hover:text-darkGrayishBlue">HOME</a>
          <a href="{{ url('/Aboutus')}}" class="hover:text-darkGrayishBlue">ABOUT US</a>
          <a href="{{ url('/#services')}}" class="hover:text-darkGrayishBlue">SERVICES</a>
          <a href="{{ url('/#Partners')}}" class="hover:text-darkGrayishBlue">PARTNERS</a>
          <a href="{{ url('/#Clients')}}" class="hover:text-darkGrayishBlue">CLIENTS</a>
          <a href="{{ url('/journey')}}" class="hover:text-darkGrayishBlue"> JOURNEY</a>
          <a href="#FOOTER" class="hover:text-darkGrayishBlue">CONTACT US</a>
        </div>
      </div>
    </nav> 

        <!-- About us Section -->
    <section id="Aboutus">
      <!-- Flex Container -->
      <div
        class="container flex flex-col-reverse items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row"
      >
        <!-- About us paragraph-->
        
        <div class="flex flex-col mb-32 space-y-12 md:w-1/2">
        <dd class="text-justify ml-16 text-3xl text-base text-black"><Strong class="text-red-700">Sniper</Strong> is the ultimate world of business destinations to develop
          startups and SMEs to grow up, sustain and penetrate new markets via
          bundles of strategies, solutions and services with high qualified
          experts.</dd>
          <p class="max-w-sm  text-3xl text-center md:text-3xl text-black md:text-left ml-16 font-base">
          
          </p>
        </div>
        
        <!-- Image -->
        <div class="md:w-1/2 hidden md:block">
          <img id="AboutusIMG" src="img/AboutUs sniper.png" alt="" />
        </div>
      </div>
    </section>

          
     <!-- Sniper team -->
    <section id="sniperteam" >
      <!-- Container to heading and testm blocks -->
      <div class="max-w-6xl px-5 mx-auto mt-32 text-center py-32">
        <!-- Heading -->
        <h2 class="text-4xl font-bold text-center"> Meet Our <a class="text-darkRed">Professional</a> Team</h2>
        <!-- sniper team Container -->

        <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
          <!-- member 1 -->

          <div
            class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3 sm:mt-16" id="teamCard"
          >
          <img src="img/6.jpg" alt="" class="h-20 w-20 -mt-16 rounded-full object-cover  shadow-md"/>
            <h5 class="text-lg font-bold">YOUSIF AL-HARBI</h5>
            <p class="text-sm text-darkGrayishBlue">
            FOUNDER & PRESIDENT
            </p>
          </div>
           <!-- member 2 -->
          <div
            class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3 sm:mt-16" id="teamCard"
          >
            <img src="img/3.jpg" alt="" class="h-20 w-20 -mt-16 rounded-full object-cover  shadow-md"/>
            <h5 class="text-lg font-bold">DALAL NASSER</h5>
            <p class="text-sm text-darkGrayishBlue">
            CO-FOUNDER & CEO
            </p>
          </div>

          <!-- member 3 -->
          <div
            class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray  md:w-1/3 sm:mt-16" id="teamCard"
          >
          <img src="img/3.jpg" alt="" class="h-20 w-20 -mt-16 rounded-full object-cover  shadow-md"/>
            <h5 class="text-lg font-bold">DR.SARA AL-HMOOD</h5>
            <p class="text-sm text-darkGrayishBlue">
            ARTIFICIAL INTILLEGENCE
            </p>
          </div>
        </div>


        <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
          <!-- member 4 -->
          <div
            class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3 sm:mt-16" id="teamCard"
          >
          <img src="img/6.jpg" alt="" class="h-20 w-20 -mt-16 rounded-full object-cover  shadow-md"/>
            <h5 class="text-lg font-bold">MAJED RUSHDI</h5>
            <p class="text-sm text-darkGrayishBlue">
            MARKETING ADVISOR
            </p>
          </div>

          <!-- member 5 -->
          <div
            class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex md:w-1/3 sm:mt-16" id="teamCard"
          >
          <img src="img/3.jpg" alt="" class="h-20 w-20 -mt-16 rounded-full object-cover  shadow-md"/>
            <h5 class="text-lg font-bold">DR.EMAN ALSHAMMARI</h5>
            <p class="text-sm text-darkGrayishBlue">
            MARKETING
            </p>
          </div>

          <!-- member 6 -->
          <div
            class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex md:w-1/3 sm:mt-16" id="teamCard"
          >
          <img src="img/6.jpg" alt="" class="h-20 w-20 -mt-16 rounded-full object-cover shadow-md"/>
            <h5 class="text-lg font-bold">JASSIM HAROON</h5>
            <p class="text-sm text-darkGrayishBlue">
            FAINANCE ADVISOR
            </p>
          </div>
        </div>


        <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
          <!-- member 7 -->
          <div
            class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3 sm:mt-16" id="teamCard"
          >
          <img src="img/6.jpg" alt="" class="h-20 w-20 -mt-16 rounded-full object-cover shadow-md"/>
            <h5 class="text-lg font-bold">WALEED AL-NOUH</h5>
            <p class="text-sm text-darkGrayishBlue">
            FAINANCE ADVISORE
            </p>
          </div>

          <!-- member 8 -->
          <div
            class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex md:w-1/3 sm:mt-16" id="teamCard"
          >
          <img src="img/6.jpg" alt="" class="h-20 w-20 -mt-16 rounded-full object-cover shadow-md"/>
            <h5 class="text-lg font-bold">AHMAD AL-DAEJ</h5>
            <p class="text-sm text-darkGrayishBlue">
            GOVERNANCE
            </p>
          </div>

          <!-- member 9-->
          <div
            class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex md:w-1/3 sm:mt-16" id="teamCard"
          >
          <img src="img/3.jpg" alt="" class="h-20 w-20 -mt-16 rounded-full object-cover  shadow-md"/>
            <h5 class="text-lg font-bold">MAJEDAH ALKENANI</h5>
            <p class="text-sm text-darkGrayishBlue">
            HR ADVISOR
            </p>
          </div>
        </div>
        
        <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
          <!-- member 10 -->
          <div
            class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex md:w-1/3 sm:mt-16" id="teamCard"
          >
          <img src="img/3.jpg" alt="" class="h-20 w-20 -mt-16 rounded-full object-cover  shadow-md"/>
            <h5 class="text-lg font-bold">JAWAHER ALMOOH</h5>
            <p class="text-sm text-darkGrayishBlue">
            PROJECT MANAGER
            </p>
          </div>

          <!-- member 11 -->
          <div
            class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex md:w-1/3 sm:mt-16" id="teamCard"
          >
          <img src="img/6.jpg" alt="" class="h-20 w-20 -mt-16 rounded-full object-cover  shadow-md"/>
            <h5 class="text-lg font-bold">MOHMED ALZAHRANI</h5>
            <p class="text-sm text-darkGrayishBlue">
            FAINANCE
            </p>
          </div>

          <!-- member 12-->
          <div
            class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex md:w-1/3 sm:mt-16" id="teamCard"
          >
          <img src="img/6.jpg" alt="" class="h-20 w-20 -mt-16 rounded-full object-cover  shadow-md"/>
            <h5 class="text-lg font-bold">MOHAMED ABUZAIED</h5>
            <p class="text-sm text-darkGrayishBlue">
            OPERATION
            </p>
          </div>
        </div>

        <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
          <!-- member 13 -->
          <div
            class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3 sm:mt-16" id="teamCard"
          >
          <img src="img/6.jpg" alt="" class="h-20 w-20 -mt-16 rounded-full object-cover  shadow-md"/>
            <h5 class="text-lg font-bold">MOHAMMED ALHOSAN</h5>
            <p class="text-sm text-darkGrayishBlue">
            LOGISTICS
            </p>
          </div>

         
        </div>

        <!-- Button -->
        <div class="my-0 p-0 px-6 pt-2 ">
          
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
            <a href="{{ url('/')}}" class="hover:text-brightRed">HOME</a>
            <a href="{{ url('/Aboutus')}}" class="hover:text-brightRed">ABOUT US</a>
            <a href="{{ url('/#services')}}" class="hover:text-brightRed">SERVICES</a>
            <a href="{{ url('/#Partners')}}" class="hover:text-brightRed">PARTNERS</a>
          </div>
          <div class="flex flex-col space-y-3 text-white">
            <a href="{{ url('/#Clients')}}" class="hover:text-brightRed">CLIENTS</a>
            <a href="{{ url('/journey')}}" class="hover:text-brightRed"> JOURNEY</a>
            <a href="#FOOTER" class="hover:text-brightRed">CONTACT US</a>
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


