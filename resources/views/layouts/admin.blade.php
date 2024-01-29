<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Name - @yield('title')</title>
    @vite('resources/css/app.css')

</head>
<body>
<nav class="font-abc relative">
   <div class="grid grid-cols-3 ml-10 ">
            <div>
                <a href="/"><img class="w-40 h-20" src="{{ asset('Image/logo1.png') }}" alt=""></a>

            </div>
          <div class="flex justify-center items-center">
           <ul class="flex md:gap-20 mt-5 text-sm">
            <li><a href="/admindashboard">All mentees</a></li>
            <li><a href="/listofmentors">All mentors</a></li>
           
           </ul>
          </div>
          <div class="flex gap-5 justify-end items-center mr-10">
          <p>{{auth()->user()->name}}</p>
          <span class="text-turtle-green cursor-pointer" id="logoutToggle">
        <i class="fa-solid fa-circle-chevron-down"></i>
        </span>
           
          </div>
          
          <div>

          </div>
    </div> 
    <div class="absolute bg-white flex justify-end border border-turtle-green top-7 right-0 mt-8 mr-10 hidden" id="logoutSection">
        <p class="flex justify-center items-end py-4 shadow-md bg-red-00  w-32 h-  w-ful text-sm font-semibold text-turtle-green">
            <a href="/logout">Logout</a>
        </p>
    </div>
    
</nav>
    <div class="container font-abc">
        @yield('content')

    </div>
    <script>
    document.getElementById('logoutToggle').addEventListener('click', function() {
        var logoutSection = document.getElementById('logoutSection');
        logoutSection.classList.toggle('hidden');
    });
</script>


</body>
</html>