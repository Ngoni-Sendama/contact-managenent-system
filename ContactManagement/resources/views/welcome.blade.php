<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COntact Management System</title>
  <link rel="icon" href="https://e-exam.io/img/logos/favicon.png">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
</head>
<body class="bg-gray-900">
 
<nav class="bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-800 shadow-2xl">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
  <a href="dashboard.html" class="flex items-center">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png" class="h-6 md:h-16 mr-3" alt="Flowbite Logo">
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
        
      </span>
  </a>
  <div class="flex md:order-2">
     
  @if (Route::has('login'))
                    @auth
                        <a type="button" href="{{ url('/home') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-4 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View Dashboard</a>
                    @else
                    <a type="button" href="{{ route('login') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-4 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Login</a>

                        @if (Route::has('register'))
                        <a type="button" href="{{ route('register') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-4 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ml-3">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      
    </ul>
  </div>
  </div>
</nav>
<section class="bg-gray-900 h-auto  w-full z-0 top-0 left-0 border-b border-gray-600 py-20">
    <div class="flex flex-col md:flex-row py-20 max-w-screen-xl items-center gap-8 mx-auto px-4">
        <div>
            <a href="" class="bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90% max-w-xs px-2 text-sm text-white rounded-lg animate__animated animate__fadeInUp">Contact</a>
            <h1 class="text-5xl text-white font-bold mt-4 mb-8 animate__animated animate__fadeInUp"> Contact Management<br>
                <span class="text-purple-400 font-medium animate__animated animate__fadeInUp">System</span></h1>
                <p class="text-white animate__animated animate__fadeInUp">. It provides a centralized database or repository for storing and retrieving contact details such as names, addresses, phone numbers, email addresses, and other relevant information.</p>
                <a href="{{route('register')}}" class="animate__animated animate__fadeInUp bg-purple-700 text-white inline-flex items-center py-4 px-6 rounded-lg mt-8">Register Now   <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1 animate__animated animate__fadeInUp" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></a>
                <a href="{{route('login')}}" class="text-white ml-4 animate__animated animate__fadeInUp">Login</a>
        </div>
        <div>
       
        <img src="{{asset('img.png')}}" alt=""  class="w-full h-96 rounded lg:rounded-lg sm:h-96 lg:h-full animate__animated animate__fadeInUp">
            </div>
    </div>
</section>
</body>
</html>