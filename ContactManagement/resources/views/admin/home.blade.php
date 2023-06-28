<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="antialiased bg-gray-50 dark:bg-gray-900">
    <nav
      class="bg-white border-b border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
      <div class="flex flex-wrap justify-between items-center">
        <div class="flex justify-start items-center">
          <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation"
            aria-controls="drawer-navigation"
            class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-white hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
            <svg aria-hidden="true" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Toggle sidebar</span>
          </button>
          <a href="https://flowbite.com" class="flex items-center justify-between mr-4">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Admin Dashboard</span>
          </a>
        </div>
        <div class="flex items-center lg:order-2">
          <button type="button"
            class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 rounded-full"
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png" alt="user photo" />
          </button>
          <!-- Dropdown menu -->
          <div
            class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl"
            id="dropdown">
            <div class="py-3 px-4">
              <span class="block text-sm font-semibold text-white dark:text-white">{{ Auth::user()->name }}</span>
              
            </div>
            <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
              
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
            <a href="/admin/home"
              class="flex items-center p-2 text-base font-medium  rounded-lg text-amber-500 group">
              <svg aria-hidden="true"
                class="w-6 h-6 transition duration-75 text-amber-500"
                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
              </svg>
              <span class="ml-3">Dashboard</span>
            </a>
          </li>

          <li>
            <a href="/users"
              class="flex items-center p-2 text-base font-medium text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                fill="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>

              <span class="ml-3">Users</span>
            </a>
          </li>
          <li>
            <a href="/allcontacts"
              class="flex items-center p-2 text-base font-medium text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6 text-gray-400transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
              </svg>
              <span class="ml-3">Contacts</span>
            </a>
          </li>
          <li>
            <a href="/admin/home/category"
              class="flex items-center p-2 text-base font-medium text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <svg aria-hidden="true"
                class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
              </svg>
              <span class="ml-3">Category</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>

    <main class="p-4 md:ml-64 h-screen pt-20">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
        <div
          class=" rounded-lg  h-32 md:h-64 justify-center flex items-center">
          <div class="p-4 sm:w-1/4 w-1/2">
            <h2 class="title-font font-medium sm:text-4xl text-3xl text-white text-center">
            {{ $userCount }}
            </h2>
            <p class="leading-relaxed text-center text-gray-500 font-bold">Users</p>
          </div>
        </div>
        <div
        class=" rounded-lg  h-32 md:h-64 justify-center flex items-center">
        <div class="p-4 sm:w-1/4 w-1/2">
          <h2 class="title-font font-medium sm:text-4xl text-3xl text-white text-center">
          {{ $categoryCount }}  
          </h2>
          <p class="leading-relaxed text-center text-gray-500 font-bold">Categories</p>
        </div>
      </div>
      <div
      class=" rounded-lg  h-32 md:h-64 justify-center flex items-center">
      <div class="p-4 sm:w-1/4 w-1/2">
        <h2 class="title-font font-medium sm:text-4xl text-3xl text-white text-center">
        {{ $contactCount }}
        </h2>
        <p class="leading-relaxed text-center text-gray-500 font-bold   ">Contacts</p>
      </div>
    </div>
    <div
    class=" rounded-lg  h-32 md:h-64 justify-center flex items-center">
    <div class="p-4 sm:w-1/4 w-1/2">
      <h2 class="title-font font-medium sm:text-4xl text-3xl text-white text-center">
      {{ $adminUserCount }}
      </h2>
      <p class="leading-relaxed text-center text-gray-500 font-bold">Admins</p>
    </div>
  </div>
      </div>

      
    </main>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
</body>

</html>