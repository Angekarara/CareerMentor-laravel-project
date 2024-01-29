@vite('resources/css/app.css')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project with Icons</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="font-abc">
   <div class="grid grid-cols-3 ml-10">
            <div>
                <a href="/"><img class="w-40 h-20" src="{{ asset('Image/logo1.png') }}" alt=""></a>

            </div>
          <div class="flex justify-center items-center">
           <ul class="flex md:gap-20 text-sm">
            <li><a href="/menteedashboard"> Home</a></li>
            <li><a href="/mentors"> Mentors</a></li>
           </ul>
          </div>
          <div class="flex gap-5 justify-end items-center pr-20">
          <p>{{auth()->user()->name}}</p>
        <span class="text-turtle-green cursor-pointer" id="logoutToggle">
        <i class="fa-solid fa-circle-chevron-down"></i>
        </span>
          </div>
    </div>
    <div class="absolute bg-white flex justify-end border border-turtle-green top-7 right-0 mt-8 mr-10 hidden" id="logoutSection">
        <p class="flex justify-center items-end py-4 shadow-md bg-red-00  w-32 h-  w-ful text-sm font-semibold text-turtle-green">
            <a href="/logout">Logout</a>
        </p>
    </div>
</nav>

<div class="font-abc ">

    <div class="flex gap-8 justify-end mr-20">
        <form action="{{ route('meteeDashboard') }}" method="get">
        <input type="text" name="search" placeholder="Search....." class="border border-turtle-green py-2 px-6 rounded-md">
        <button type="submit" class="border border-turtle-green text-turtle-green font-bold py-2 px-6 rounded-md">Search</button>
    </form>

    </div>
    <div class="flex flex-wrap gap-8 p-10 text-sm">
    @foreach($mentors as $mentor)
       <div class=" border border-turtle-green w-[350px] py-10 px-6 space-y-5 rounded-tl-[30px] rounded-br-[30px]">
   <div class="grid grid-cols-2">
       @if($mentor->image_path)
    <img src="{{ asset('storage/' . $mentor->image_path) }}" alt="Mentor Image" class="object-cover w-[130px] h-[130px] mb-4 rounded-full">
       @endif
<div class="flex items-center">
    <div class="space-y-3">
        <h1 class="text-lg">{{ $mentor->mentor_name }}</h1>
        
        <h2 class="text-turtle-green text-md"><span class="mr-3 text-black"><i class="fa-solid fa-layer-group"></i></span>{{ $mentor->field }}</h2>
        <h3><span class="mr-3"><i class="fa-solid fa-location-dot"></i></span>{{ $mentor->location }}</h3></div></div>
    </div>
        <p class="leading-6">{{ $mentor->description }}</p>
       </div>
         @endforeach

    </div>
</div>
<script>
    document.getElementById('logoutToggle').addEventListener('click', function() {
        var logoutSection = document.getElementById('logoutSection');
        logoutSection.classList.toggle('hidden');
    });
</script>
</body>
</html>