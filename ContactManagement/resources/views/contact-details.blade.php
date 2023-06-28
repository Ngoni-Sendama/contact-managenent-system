<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
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
    
        <main class="p-12 md:px-24 md:ml-64 h-screen  pt-20">
            <div class=" flex flex-row justify-between lg:place-items-end mb-3">
                <div>
                    <h1 class="text-gray-400  text-2xl font-bold mb-2">Profile</h1>
                    <nav class="flex hidden md:flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-3">
                            <li class="inline-flex items-center">
                                <a href="#"
                                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="#"
                                        class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white"
                                        id="defaultModalButton" data-modal-toggle="defaultModal" type="button">Profile</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <a href="{{ route('contacts.edit', ['id' => $contact->id]) }}"> <svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="white" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg></a>
    
    
                </div>
            </div>
    
            <div
                class="grid grid-cols-1  gap-4  bg-gray-800 py-4 border border-gray-600 rounded-lg">
                <div class="bg-gray-800 p-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-center md:text-left">
                        <div class=" p-2  md:text-left">
                        <img src="{{ asset('storage/' . $contact->avatar) }}" alt="" class="rounded-full mx-auto md:mx-2 w-32 h-32 md:w-32 md:h-32">

                        </div>
                        <div class="bg-gray-800 p-2">
                            <h1 class="text-gray-400  font-bold mb-3 text-2xl">{{$contact->first_name}} {{$contact->last_name}}</h1>
                            
                            <p class="text-gray-400 text-sm mb-3">{{$contact->category}}</p>
                           
                        </div>
    
                    </div>
                </div>
                <div class="bg-gray-800 px-4">
                    <div class="">
                        <div class="text-gray-400  p-2 flex flex-row justify-between">
                            <p>Tele Phone:</p>
                            <p>{{$contact->telephone}}</p>
                        </div>
                        <div class="text-gray-400  p-2 flex flex-row justify-between">
                            <p>Email:</p>
                            <p>{{$contact->email}}</p>
                        </div>
                        <div class="text-gray-400  p-2 flex flex-row justify-between">
                            <p>Comments:</p>
                            <p>{{$contact->comment}} </p>
                        </div>
                    </div>
    
    
                </div>
            </div>
        </main>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
</body>
</html>