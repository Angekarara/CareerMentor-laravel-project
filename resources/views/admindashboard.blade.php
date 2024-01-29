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
   
    <div class="ml-[100px]">
            <div class="mt-5">
                @if(session()->has('success'))
                    <div class="alert alert-success text-green-500">{{ session('success') }}</div>
                @endif
            </div>
<h1 class="bg-red-00 font- text-lg  px-20 py-10 text-turtle-green">Explore the incredible journeys of our mentees and witness the impact of mentorship.
         From diverse backgrounds and unique aspirations, our mentees are on a path of 
         growth, learning, and achievement. </h1>
    <div class=" flex flex-wrap gap-8 mt-5 p-0 text-sm">
         @foreach($mentees as $mentee)
       <div class="shadow-md border border-turtle-green w-[350px] py-10 px-6 space-y-5 rounded-md">
   <div class="grid grid-cols-2">
    
<div class=" items-center ">
    
    <div class="space-y-3">
        <h1 class="text-lg text-turtle-green">{{ $mentee->mentee_name }}</h1>
       </div></div>
    </div>
         <p class="leading-6">{{ $mentee->description }}</p>
       </div>
         @endforeach
</div>
        </div>

    </div>
</div>
</body>
</html>
@endsection
