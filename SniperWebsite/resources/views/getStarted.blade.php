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

    <title>Get Started</title>
    @vite('resources/css/app.css')
    @vite('resources/js/script.js')

  </head>

  <body>
    <!-- Navbar -->
    <nav id="Home"class="relative container mx-auto px-6">
      <!-- Flex container -->
      <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="pt-2">
          <img class= "md:1/2 h-32 w-32" src="img/SniperLogo1.SVG" alt="" />
        </div>
      </div>

    
    </nav>
	
<!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]
-->



<!---General info-->

<div class="max-w-screen-xl  px-4 mx-auto sm:px-6 lg:px-8 ">
  <div class="max-w-lg mx-auto">
    <h1 class="text-2xl font-bold text-center text-darkRed sm:text-3xl">Get started today</h1>

    <p class="max-w-md mx-auto mt-4 text-center text-gray-500">
    Every <a class="text-darkRed">Sniper</a> has A story , create yours now
    </p>

<form action="{{ url('/store')}}"  method="POST" enctype="multipart/form-data"  class="p-8 mt-6 mb-0 space-y-4 rounded-lg shadow-xl" >
       @csrf

      <div >
        <label for="startup_name" class="text-md font-medium">Startup-SMEs Name</label>
        <div class="relative mt-1">
          <input type="text" name="startup_name" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm" placeholder="Enter Startup-SMEs Name"/>
        </div>
        
           <!--Error message-->
           @error('startup_name')
         <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert" class="form-control @error('startup_name') is-invalid @enderror"
                        value="{{ old('startup_name') }}" class="form-control">
           <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
           <span class="sr-only">Info</span>
           <div>
           <span class="font-medium">!</span> {{ $message }}
          </div>
        </div>
        @enderror

      </div>

      <div >
        <label for="first_name" class="text-md font-medium">First Name</label>
        <div class="relative mt-1">
          <input type="text"  name="first_name"  class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm" placeholder="Enter First Name"/>
        </div>
           <!--Error message-->
           @error('first_name')
         <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert" class="form-control @error('first_name') is-invalid @enderror"
                        value="{{ old('first_name') }}" class="form-control">
           <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
           <span class="sr-only">Info</span>
           <div>
           <span class="font-medium">!</span> {{ $message }}
          </div>
        </div>
        @enderror

      </div>

      <div>
        <label for="last_name" class="text-md font-medium">Last Name</label>
        <div class="relative mt-1">
          <input type="text" name="last_name" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm" placeholder="Enter Last Name"/>
        </div>
             <!--Error message-->
             @error('last_name')
         <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert" class="form-control @error('last_name') is-invalid @enderror"
                        value="{{ old('last_name') }}" class="form-control">
           <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
           <span class="sr-only">Info</span>
           <div>
           <span class="font-medium">!</span> {{ $message }}
          </div>
        </div>
        @enderror
        
      </div>


      <div>
        <label for="email" class="text-md font-medium">Email</label>
        <div class="relative mt-1">
          <input type="email" name="email" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm" placeholder="xxxx@example.com"/>

          <span class="absolute inset-y-0 inline-flex items-center right-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
            </svg>
          </span>
        </div>
           <!--Error message-->
           @error('email')
         <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert" class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}" class="form-control">
           <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
           <span class="sr-only">Info</span>
           <div>
           <span class="font-medium">!</span> {{ $message }}
          </div>
        </div>
        @enderror
      </div>

      <div>
        <label for="mobile_number" class="text-md font-medium">Mobile Number</label>
        <div class="relative mt-1">
          <input type="tel"  name="mobile_number" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm" placeholder="Enter Phone Number"/>
        </div>
          <!--Error message-->
          @error('mobile_number')
         <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert" class="form-control @error('mobile_number') is-invalid @enderror"
                        value="{{ old('mobile_number') }}" class="form-control">
           <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
           <span class="sr-only">Info</span>
           <div>
           <span class="font-medium">!</span> {{ $message }}
          </div>
        </div>
        @enderror
      </div>

      <div>
        <label for="address" class="text-md font-medium">City</label>
        <div class="relative mt-1">
          <input type="text" name="address" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm" placeholder="Enter Address"/>
        </div>
           <!--Error message-->
           @error('address')
         <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert" class="form-control @error('address') is-invalid @enderror"
                        value="{{ old('address') }}" class="form-control">
           <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
           <span class="sr-only">Info</span>
           <div>
           <span class="font-medium">!</span> {{ $message }}
          </div>
        </div>
        @enderror
      </div>

      <div class="flex p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
  <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <span class="sr-only">Info</span>
  <div>
    <span class="font-medium">Notcie!</span> Choose what you need, Don't rely on default options .
  </div>
</div>
           <!--- Services --->
    <div class="flex">
      <div>
       <label for="services" class="text-md font-medium">Services</label>

      <div class="form-check">
      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white  mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2  text-darkRed" type="checkbox"  checked name="services[]" value="MARKETING">
      <label class="text-sm font-medium text-black dark:text-black" for="services[]"  >MARKETING
      </label>
      </div>

     <div class="form-check">
      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white  mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2  text-darkRed" type="checkbox"  name="services[]" value="BUSINESS MODEL">
      <label class="text-sm font-medium text-black dark:text-black" for="services[]" >BUSINESS MODEL
      </label>
     </div>

     <div class="form-check">
      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white  mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2  text-darkRed" type="checkbox" name="services[]" value="OPERATION">
      <label class="text-sm font-medium text-black dark:text-black" for="services[]" >OPERATION
      </label>
     </div>

     <div class="form-check">
      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white  mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2  text-darkRed" type="checkbox"   name="services[]" value="FRASIIBILITY STUDY" >
      <label class="text-sm font-medium text-black dark:text-black" for="services[]" >FRASIIBILITY STUDY
      </label>
     </div>

     <div class="form-check">
      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white  mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2  text-darkRed" type="checkbox"  name="services[]" value="TECHNOLOGY" >
      <label class="text-sm font-medium text-black dark:text-black" for="services[]" >TECHNOLOGY
      </label>
     </div>

     <div class="form-check">
      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white  mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2  text-darkRed" type="checkbox"  name="services[]" value="FRANCHISE" >
      <label class="text-sm font-medium text-black dark:text-black" for="services[]" >FRANCHISE
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white  mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2  text-darkRed" type="checkbox"   name="services[]" value="FUNDING" >
      <label class="text-sm font-medium text-black dark:text-black" for="services[]" >FUNDING
      </label>
     </div>

     <div class="form-check">
      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white  mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2  text-darkRed" type="checkbox"   name="services[]" value="Offices" >
      <label class="text-sm font-medium text-black dark:text-black" for="services[]" >Offices
      </label>
     </div>

    </div>

  </div>


     <!--- NEEDS --->
   <div class="flex">
    <div>
     <label for="needs" class="text-md font-medium">Needs</label>
      <div class="form-check">
        <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white  mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2  text-darkRed" type="checkbox"  checked name="needs[]" value="Consultation">
        <label class="form-check-label inline-block text-gray-800" for="needs[]"  >Consultation
        </label>
     </div>

      <div class="form-check">
      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white  mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2  text-darkRed" type="checkbox"   name="needs[]" value="Mentorship">
      <label class="form-check-label inline-block text-gray-800" for="needs[]">Mentorship
      </label>
      </div>

      <div class="form-check">
      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white  mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2  text-darkRed" type="checkbox"  name="needs[]" value="Knowledge">
      <label class="form-check-label inline-block text-gray-800" for="needs[]" >Knowledge
      </label>
      </div>

      <div class="form-check">
      <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white  mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2  text-darkRed" type="checkbox"   name="needs[]" value="Incubation"  >
      <label class="form-check-label inline-block text-gray-800" for="needs[]" >Incubation
      </label>
      </div>
 
    </div>

   </div>



     <!--- Your project phase  --->

      <div>
        <label for="project_phase" class="text-md font-medium">Your project phase</label>
        <div class="relative mt-1">

        <div class="flex items-center mb-2">
        <input checked  type="radio" value="IDEA" name="project_phase" class="w-4 h-4 text-darkRed border-gray-300 bg-white">
    <label for="project_phase" class="ml-2 text-sm font-medium text-black dark:text-black">IDEA</label>
    </div>

  <div class="flex items-center mb-2">
    <input  type="radio" value="FEASIBILITY STUDY" name="project_phase" class="w-4 h-4 text-darkRed border-gray-300 bg-white">
    <label for="project_phase" class="ml-2 text-sm font-medium text-black dark:text-black">FEASIBILITY STUDY</label>
   </div>

  <div class="flex items-center mb-2">
  <input type="radio" value="PRESEED" name="project_phase" class="w-4 h-4 text-darkRed border-gray-300 bg-white">
    <label for="project_phase" class="ml-2 text-sm font-medium text-black dark:text-black">PRESEED</label>
  </div>

 <div class="flex items-center mb-2">
 <input  type="radio" value="SEED PHASE" name="project_phase" class="w-4 h-4 text-darkRed border-gray-300 bg-white">
    <label for="project_phase" class="ml-2 text-sm font-medium text-black dark:text-black">SEED PHASE</label>
 </div>

 <div class="flex items-center mb-2">
 <input type="radio" value="ROUND A" name="project_phase" class="w-4 h-4 text-darkRed border-gray-300 bg-white">
    <label for="project_phase" class="ml-2 text-sm font-medium text-black dark:text-black">ROUND A</label>
 </div>

  <div class="flex items-center mb-2">
    <input type="radio" value="SERIES B" name="project_phase" class="w-4 h-4 text-darkRed border-gray-300 bg-white">
    <label for="project_phase" class="ml-2 text-sm font-medium text-black dark:text-black">SERIES B</label>
  </div>

    </div>
      </div>


      <button type="submit" class="block w-full px-5 py-3 text-sm font-medium text-white bg-darkRed rounded-lg">
        SUBMIT
      </button>
</form>

  </div>
</div>

      

  </body>
</html>
