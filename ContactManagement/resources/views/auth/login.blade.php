<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon" />
    <title>Login Employee System</title>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                primary: '#7f8fa4',
                bgColor: '#212529',
              }
            }
          }
        }
      </script>
      
  </head>
  <body class="bg-bgColor">
        <div class="flex flex-col items-center h-screen justify-center px-8 py-8 mx-auto md:h-screen lg:py-0">
           
            <div class="w-full rounded shadow  md:mt-0 sm:max-w-md xl:p-0 " style="background-color: #16191c;">
                <div class="p-8 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl text-center font-bold md:text-3xl" style="color: #bbc4cc">
                        User  Login
                    </h1>
                    <p class="text-center font-bold" style="color: #bbc4cc">Access to our dashboard</p>
                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
  @csrf
  <div>
    <label for="email" class="block mb-2 text-sm font-medium text-primary">Email Address</label>
    <input type="email" name="email" id="email" class="bg-bgColor text-primary sm:text-sm rounded-lg w-full p-4" required="">
  </div>
  <div>
    <label for="password" class="block mb-2 text-sm font-medium text-primary">Password</label>
    <input type="password" name="password" id="password" class="bg-bgColor text-primary sm:text-sm rounded-lg w-full p-4" required="">
  </div>
  <button type="submit" class="block w-full px-5 py-3 text-center text-white font-bold text-2xl bg-gradient-to-r from-pink-500 to-yellow-500 rounded-lg">Login</button>
  <p class="text-sm font-bold text-center" style="color: #bbc4cc">
    Don't have an account yet? <a href="{{ route('register') }}" class="font-bold text-amber-600">Register</a>
  </p>
</form>

                </div>
            </div>
        </div>
      
</body>
</html>
