
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{tailwindcss('css/app.css')}}" />
    <title>Admin Home</title>
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

     <!-- ====== Hero Section Start -->
     <div class="container relative pt-[120px] lg:pt-[5px] pb-[110px] bg-white  flex flex-col-reverse items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row max-w-6xl">
      <div class="container">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full lg:w-5/12 px-4">
            <div class="hero-content">
              <h1 class=" text-dark font-bold text-4xl sm:text-[42px] lg:text-[40px] xl:text-[42px] leading-snug mt-32 ">
              <a class="text-darkRed font-bold text-5xl">Hunt</a> Your Goals<br />
               With<a class="text-darkRed font-bold text-5xl"> Sniper</a><br/>
              </h1>
            </div>
          </div>

          <div class="hidden lg:block lg:w-1/12 px-4"></div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="lg:text-right lg:ml-auto">
              <div class="relative inline-block z-10 pt-11 lg:pt-0 mb-3">
                <img src="../img/Adminpanal.PNG" alt="hero" class="max-w-full lg:ml-auto"/>
                <span class="absolute -left-8 -bottom-8 z-[-1]">
                  <svg width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2.5" cy="2.5" r="2.5" fill="#cc0206" />
                    <circle cx="2.5" cy="24.5" r="2.5" fill="#cc0206" />
                    <circle cx="2.5" cy="46.5" r="2.5" fill="#cc0206" />
                    <circle cx="2.5" cy="68.5" r="2.5" fill="#cc0206" />
                    <circle cx="2.5" cy="90.5" r="2.5" fill="#cc0206" />
                    <circle cx="24.5" cy="2.5" r="2.5" fill="#cc0206" />
                    <circle cx="24.5" cy="24.5" r="2.5" fill="#cc0206" />
                    <circle cx="24.5" cy="46.5" r="2.5" fill="#cc0206" />
                    <circle cx="24.5" cy="68.5" r="2.5" fill="#cc0206" />
                    <circle cx="24.5" cy="90.5" r="2.5" fill="#cc0206" />
                    <circle cx="46.5" cy="2.5" r="2.5" fill="#cc0206" />
                    <circle cx="46.5" cy="24.5" r="2.5" fill="#cc0206" />
                    <circle cx="46.5" cy="46.5" r="2.5" fill="#cc0206" />
                    <circle cx="46.5" cy="68.5" r="2.5" fill="#cc0206" />
                    <circle cx="46.5" cy="90.5" r="2.5" fill="#cc0206" />
                    <circle cx="68.5" cy="2.5" r="2.5" fill="#cc0206" />
                    <circle cx="68.5" cy="24.5" r="2.5" fill="#cc0206" />
                    <circle cx="68.5" cy="46.5" r="2.5" fill="#cc0206" />
                    <circle cx="68.5" cy="68.5" r="2.5" fill="#cc0206" />
                    <circle cx="68.5" cy="90.5" r="2.5" fill="#cc0206" />
                    <circle cx="90.5" cy="2.5" r="2.5" fill="#cc0206" />
                    <circle cx="90.5" cy="24.5" r="2.5" fill="#cc0206" />
                    <circle cx="90.5" cy="46.5" r="2.5" fill="#cc0206" />
                    <circle cx="90.5" cy="68.5" r="2.5" fill="#cc0206" />
                    <circle cx="90.5" cy="90.5" r="2.5" fill="#cc0206" />
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ====== Hero Section End -->


    <script src="js/script.js"></script>
    
</body>
</html>
