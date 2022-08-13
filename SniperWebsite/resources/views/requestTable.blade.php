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
          <img class= "md:1/2 h-32 w-32" src="img/SniperLogo1.SVG" alt="" />
          
        </div>
        <!-- Menu Items -->
        <div class="hidden space-x-6 text-sm md:flex">
          <a href="#" class="hover:text-darkGrayishBlue"></a>
          
        </div>
        <!-- Button -->
        <a
          href="#"
          class="hidden p-3 px-6 pt-2 text-white bg-white rounded-full baseline hover:bg-brightRed md:block"
          ></a
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
         <a href="#" class="hover:text-darkGrayishBlue"></a>
         
        </div>
      </div>
    </nav> 

    <!--table-->
    <section>
    <div>
      <h2 class="text-4xl font-bold text-center pb-16"> Apply Request</h2>
    </div>
    <div
        class="container flex flex-col-reverse items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row"
      >
    
  <div class="table w-full p-2">
        <table class="w-full border">
            <thead>
                <tr class="bg-red-700 border-b">
                    
                    <th class="p-2 border-r cursor-pointer text-sm font-bold text-white">
                        <div class="flex items-center justify-center">
                            Name
                            
                        </div>
                    </th>
                    
                    <th class="p-2 border-r cursor-pointer text-sm font-bold text-white">
                        <div class="flex items-center justify-center">
                            Email
                           
                        </div>
                    </th>
                   
                    <th class="p-2 border-r cursor-pointer text-sm font-bold text-white">
                        <div class="flex items-center justify-center">
                            Action
                           
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                
                  
                <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                
                    <td class="p-2 border-r">John Doe</td>
                    <td class="p-2 border-r">john@gmail.com</td>
                    <td>
                        <a href="#" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">View</a>
                        <a href="#" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Remove</a>
                    </td>
                </tr>
                
               
                <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                    
                    <td class="p-2 border-r">Jean Doe</td>
                    <td class="p-2 border-r">jean@gmail.com</td>
                    <td>
                        <a href="#" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">View</a>
                        <a href="#" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Remove</a>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>
</section>
</body>
</html>