<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="{{tailwindcss('css/app.css')}}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    
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
          <img class= "md:1/2 h-32 w-32" src="../img/SniperLogo1.SVG" alt="" />
          
        </div>
        <!-- Menu Items -->
        <div class="hidden space-x-6 text-sm md:flex">
        <a href="{{ url('/admin/home')}}" class="hover:text-darkGrayishBlue">HOME</a>
          <a href="{{ url('/request')}}" class="hover:text-darkGrayishBlue">REQUEST</a>
          
        </div>
        <!-- Button -->
        <a
          href="#"
          class="hidden p-3 px-6 pt-2 text-white bg-white rounded-full baseline hover:bg-brightRed md:block"
          ></a
        >
        <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" ><i
        class="bi bi-box-arrow-left" ></i>  
LOGOUT</a>
        <form action="{{ route('admin.logout') }}" id="logout-form" method="post">@csrf</form>
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
        <a href="{{ url('/admin/home')}}" class="hover:text-darkGrayishBlue">HOME</a>
         <a href="{{ url('/request')}}" class="hover:text-darkGrayishBlue">REQUEST</a>
         
        </div>
      </div>
    </nav>  


<section>
    <div class="flex justify-center">
  <div class="block p-6 rounded-lg shadow-lg bg-white sm:w-1/3 ">
    <h5 class="text-red-700 text-3xl leading-tight font-medium mb-2 text-center">Request Information</h5>
    <h6 class=" text-base "><b>Startup-SMEs Name: </b> <span class="text-gray-700 text-base mb-4">{{$events->startup_name}}</span></h6>
    <h6 class=" text-base "><b>Firest Name: </b> <span class="text-gray-700 text-base mb-4"></span>{{$events->first_name}}</h6>
    <h6 class=" text-base "><b>Last  Name: </b> <span class="text-gray-700 text-base mb-4"></span>{{$events->last_name}}</h6>
    <h6 class=" text-base "><b>Email: </b> <span class="text-gray-700 text-base mb-4"></span>{{$events->email}}</h6>
    <h6 class=" text-base "><b>Phone Number: </b> <span class="text-gray-700 text-base mb-4"></span>{{$events->mobile_number}}</h6>
    <h6 class=" text-base "><b>Address:</b> <span class="text-gray-700 text-base mb-4"></span>{{$events->address}}</h6>
    <h6 class=" text-base "><b>Services: </b> <span class="text-gray-700 text-base mb-4"></span>{{$events->services}}</h6>
    <h6 class=" text-base "><b>Needs:</b> <span class="text-gray-700 text-base mb-4"></span>{{$events->needs}}</h6>
    <h6 class=" text-base "><b>Your Project Phase:</b> <span class="text-gray-700 text-base mb-4"></span>{{$events->project_phase}}</h6>

  </div>
</div>

</section>   
     

</body>
</html>