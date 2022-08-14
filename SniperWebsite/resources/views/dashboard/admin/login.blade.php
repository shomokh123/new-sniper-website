<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Sniper Admin Login</title>
    	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-red-50">

    <div>
			<a href="/">
				<img src="../img/SniperLogo1.svg" alt="Logo" class="w-20 h-20 fill-current text-gray-500"/>

			</a>
		</div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            	<!-- Session Status -->
			<div class="mb-4 font-medium text-sm text-green-600">
				{{ session('status') }}
			</div>

			<!-- Validation Errors -->
			@if ($errors->any())
				<div class="mb-4">
					<div class="font-medium text-red-600">
						{{ __('Whoops! Something went wrong.') }}
					</div>

					<ul class="mt-3 list-disc list-inside text-sm text-red-600">
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<form method="POST" action="{{ route('admin.check') }}">
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                     <div>
                       <label for="email" class="block font-medium text-sm text-gray-700">
						{{ __('Email') }}
					   </label>
                        <input id="email" name="email" type="email" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('email') }}" required autofocus>
                     </div>

                     <div class="mt-4">
                       <label for="password" class="block font-medium text-sm text-gray-700">
						  {{ __('Password') }}
					    </label>
                        <input id="password" name="password" type="password" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autocomplete="current-password">
                     </div>

                     <div  class="flex items-center justify-end mt-4">
                     <button type="submit" class="ml-3 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
						{{ __('Log in') }}
					</button>
                     </div>
                 </form>
                 </div>
    </div>
</body>
</html>