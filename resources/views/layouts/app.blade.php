<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Name - @yield('title')</title>
    @vite('resources/css/app.css')

</head>
<body>
<nav class="font-abc">
   <div class="grid grid-cols-2 ml-10 ">
            <div>
                <a href="/"><img class="w-40 h-20" src="{{ asset('Image/logo1.png') }}" alt=""></a>

            </div>
          <div>
           <ul class="flex md:gap-10 justify-center items-center mt-5 text-sm">
            <li><a href="/"> Home</a></li>
            <li><a href="/about"> AboutUs</a></li>
            <li><a href="/contact"> ContactUs</a></li>
            <li><a href="/login"> <button class="bg-turtle-green text-white px-8 py-2 rounded-full">Login</button></a></li>
           </ul>
          </div>
    </div>
</nav>
    <div class="container font-abc">
        @yield('content')
    </div>
</body>
</html>