
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/app.css" />
    <title>Request</title>
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
        <a href="{{ url('/admin/home')}}" class="hover:text-darkGrayishBlue">Home</a>
          <a href="{{ url('/request')}}" class="hover:text-darkGrayishBlue">Request</a>
          
        </div>
        <!-- Button -->
        <a
          href="#"
          class="hidden p-3 px-6 pt-2 text-white bg-white rounded-full baseline hover:bg-brightRed md:block"
          ></a
        >
        <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" >Logout</a>
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
        <a href="{{ url('/admin/home')}}" class="hover:text-darkGrayishBlue">Home</a>
         <a href="{{ url('/request')}}" class="hover:text-darkGrayishBlue">Request</a>
         
        </div>
      </div>
    </nav> 

    
</body>
</html>
