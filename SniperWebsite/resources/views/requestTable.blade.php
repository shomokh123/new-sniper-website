
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="{{tailwindcss('css/app.css')}}" />
    <!--Jquery online library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    

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
        class="bi bi-box-arrow-left" id="logouticon"></i> LOGOUT</a>
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

      <!--success message-->
<div id="DeleteSuccessMessage"class="relative container mx-auto p-6">
      @if(\Session::has('success'))
    <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
  <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <div>
    <span class="font-medium">Success alert!</span> {{ \Session::get('success') }}.
    {{ \Session::forget('success') }}
  </div>
</div>
@endif
</div>
<script>$("#DeleteSuccessMessage").show().delay(2000).fadeOut();</script>

   <!--end success message-->

    <!--table-->
    <section>
    <div>
      <h2 class="text-4xl font-bold text-center pb-16"> Apply Request</h2>
    </div>
 
     <!-- Button -->
     <div class="container absolute sm:w-44 sm:left-1/2 md:left-3/4 sm:mb-32">
     <a
          href="{{url('/export')}}"
          class=" p-3 px-6 pt-2 text-white bg-green-700 rounded-full baseline hover:bg-green-500 md:block"
          ><i class="bi bi-download"></i> DOWNLOAD</a
        >
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
                
            @foreach($request as $item)   
                <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                    <td class="p-2 border-r">{{ $item->first_name }} {{ $item->last_name }}</td>
                    <td class="p-2 border-r">{{ $item->email }}</td>
                    <td>
                        <a href="{{url('/viewR', $item->id)}}" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">View</a>
                        <a href="{{url('/destroy', $item->id)}}" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Remove</a>
                        
                    </td>
                </tr>
                
               
                @endforeach   

                
            </tbody>
        </table>
    </div>
</div>
</section>
</body>
</html>
