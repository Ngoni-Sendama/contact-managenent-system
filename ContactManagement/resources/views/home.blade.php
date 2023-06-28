<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                  
                    tc: "#ff9b44",
                },
            },
        },
    };
</script>
</head>

<body>
  <div class="antialiased bg-gray-900">
  <nav class="bg-white border-b border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
        <div class="flex flex-wrap justify-between items-center">
          <div class="flex justify-start items-center">
            <button
              data-drawer-target="drawer-navigation"
              data-drawer-toggle="drawer-navigation"
              aria-controls="drawer-navigation"
              class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
            >
              <svg
                aria-hidden="true"
                class="w-6 h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              <svg
                aria-hidden="true"
                class="hidden w-6 h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              <span class="sr-only">Toggle sidebar</span>
            </button>
            <a href="/home" class="flex items-center justify-between mr-4">
             
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">User Dashboard</span>
            </a>
       
          </div>
          <div class="flex items-center lg:order-2">
         
      
         
            <button
              type="button"
              class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
              id="user-menu-button"
              aria-expanded="false"
              data-dropdown-toggle="dropdown"
            >
              <span class="sr-only">Open user menu</span>
              <img
                class="w-8 h-8 rounded-full"
                src="https://static.vecteezy.com/system/resources/previews/008/442/086/original/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg"
                alt="user photo"
              />
            </button>
            <!-- Dropdown menu -->
            <div
              class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl"
              id="dropdown"
            >
              <div class="py-3 px-4">
                <span
                  class="block text-sm font-semibold text-gray-900 dark:text-white"
                  >{{ Auth::user()->name }}</span
                >
                <span
                  class="block text-sm text-gray-900 truncate dark:text-white"
                  >{{ Auth::user()->email }}</span
                >
              </div>
              <ul
                class="py-1 text-gray-700 dark:text-gray-300"
                aria-labelledby="dropdown"
              >
              <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
              </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>


    <!-- Sidebar -->

    <aside
      class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
      aria-label="Sidenav" id="drawer-navigation">
      <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">

        <ul class="space-y-2">
     

          <li>
            <a href="#"
              class="flex items-center p-2 text-base font-medium text-amber-500 rounded-lg  group">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-amber-500 transition duration-75 "
              >
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
              </svg>
              <span class="ml-3">Contacts</span>
            </a>
          </li>

        </ul>

      </div>

    </aside>
    <main class="p-4 md:ml-64 h-screen pt-20">
      <div class="py-3 mb-16" >
        <h1 class="text-3xl text-white font-bold px-8">Contacts</h1>
        @if(session('success'))
            <div id="alert-3" class="flex p-4 mb-4 mx-48 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
  <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <span class="sr-only">Info</span>
  <div class="ml-3 text-sm font-medium">
  {{ session('success') }}
  </div>
  <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
    <span class="sr-only">Close</span>
    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
  </button>
</div>
@endif
      </div>
      <div class="px-8 grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-3 p-4">
          <button id="addcmodalButton" data-modal-toggle="addcmodal" class="py-2 block w-full bg-tc text-white text-center rounded-lg font-bold">Add Contact</button>
          <div class="my-3 bg-gray-800 text-white rounded-lg">
    
            <h1 class="px-3 pb-5 text-right text-xl text-gray-400 font-bold">Category</h1>
            <ul>
              <li class="pb-3 px-3 border-l-4  border-tc">
                <a href="" class="text-tc pl-2 mt-3">All</a>
              </li>
              @foreach ($categories as $category)
    <li class="pb-3 px-3 text-gray-400">
        <a href="{{ route('contact', ['category' => $category->name]) }}">{{ $category->name }}</a>
    </li>
@endforeach


            </ul>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-9 p-4 ">
          <ul class="divide-y bg-gray-800 rounded-lg p-4 divide-gray-700">
          @if($contacts->isEmpty())
    <h1 class="text-center text-green-500 text-xl">No contacts</h1>
    @else
           @foreach ($contacts as $contact)
           <li class="pb-3 pt-2 sm:pb-4">
              <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                  <a href="{{ route('contacts.show', $contact->id) }}">
                    <img class="w-6 h-6 rounded-full" src="{{ asset('storage/' . $contact->avatar) }}" alt=" {{$contact->first_name}}">
                  </a>
                </div>
                <div class="flex-1 min-w-0">
                  <p class="text-sm font-medium truncate text-white">
                    {{$contact->first_name}} <span >{{$contact->last_name}}</span>
                  </p>
                  <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                  {{$contact->category}}
                  </p>
                </div>
                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                  <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center p-2 text-sm font-medium text-center text-white " type="button"> 
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                  </button>
                  
                  <!-- Dropdown menu -->
                  <div id="dropdownDots" class="z-10 hidden bg-white rounded-lg divide-y divide-black  shadow w-20 ">
                      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                        <li>
                          <a href="{{ route('contacts.edit', ['id' => $contact->id]) }}" class="block px-4 py-2 text-gray-700">Edit</a>
                        </li>
                        <li>
                          <a href="{{ route('destroyContact', ['id' => $contact->id]) }}" class="block px-4 py-2 text-gray-700">Delete</a>
                        </li>
                       
                      </ul>
                     
                  </div>
                </div>
              </div>
            </li>
           @endforeach
           @endif
          </ul>
        </div>
 



      </div>
    </main>
    
    




    <!-- Main Employee modal -->
    <div id="addcmodal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative px-4 pt-20 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 rounded-lg shadow bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Add Contact
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="addcmodal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal Employee Modal -->
                <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="grid gap-4 mb-4 sm:grid-cols-2">
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name
                <span class="text-red-600">*</span>
            </label>
            <input type="text" name="first_name" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white" placeholder="First Name" required>
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name
                <span class="text-red-600">*</span>
            </label>
            <input type="text" name="last_name" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white" placeholder="Last Name" required>
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                <span class="text-red-600">*</span>
            </label>
            <input type="email" name="email" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white" placeholder="name@gmail.com" required>
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telephone
                <span class="text-red-600">*</span>
            </label>
            <input type="text" name="telephone" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white" placeholder="Telephone" required>
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                <span class="text-red-600">*</span>
            </label>
            <select name="category" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white" required>
                <option value="" selected disabled>Select a category</option>
                @foreach ($categories as $category)
    <option value="{{ $category->name }}">{{ $category->name }}</option>
@endforeach

            </select>
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Avatar
                <span class="text-red-600">*</span>
            </label>
            <input type="file" name="avatar" class="border text-lg rounded-lg block w-full bg-gray-700 border-gray-600 placeholder-gray-400 text-white" required>
        </div>

        <div class="sm:col-span-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comments
                <span class="text-red-600">*</span>
            </label>
            <textarea name="comment" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white"></textarea>
        </div>
    </div>
    <input type="text" name="user_id" class="hidden" value="{{ Auth::user()->id }}" required>
 
    <div class="text-center">
        <button type="submit" class="text-white inline-flex items-center rounded-lg text-sm px-5 py-2.5 text-center bg-tc">
            Submit
        </button>
    </div>
</form>

            </div>
        </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
</body>

</html>