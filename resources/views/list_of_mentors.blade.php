@extends('layouts.admin')
@section('title')
@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project with Icons</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div>
    <div>
    <div class="flex justify-end mt-10">
    <button class="bg-turtle-green text-white px-8 py-2 rounded-md"><a href="/addmentor">Add Mentor</a></button>
    </div>
    <div class="ml-[100px]">
            <div class="mt-5">
                @if(session()->has('success'))
                    <div class="alert alert-success text-green-500">{{ session('success') }}</div>
                @endif
            </div>

    <div class="flex flex-wrap gap-8 mt-5 p-0 text-sm">
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

    </div>
</div>
</body>
</html>
@endsection
