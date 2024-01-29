@extends('layouts.app')
@section('title')
@section('content')
<main>
<div class="relative w-screen">
    <div class="bg-cover bg-center bg-[url('../../public/Image/bac.jpg')] opacity-110 h-[400px]">
    <div class="text-white ml-60 pt-56">
    <h2 class="font-semibold text-xl">Guiding dreams,</h2>    
    <h1 class="font-bold text-4xl">Shaping careers</h1>
    </div>
    </div>
    <div class="absolute xl:top-[330px] mr-40 ml-40 bg-white rounded-sm shadow-lg px-10 py-7">
        <p>Hello there! Ready to make your job path awesome? Get help from cool mentors 
           at Your Career Buddy. They guide you step by step to reach your goals. Let's rock 
        your career together - start now!</p>
        <button class="bg-turtle-green text-white px-10 py-2 rounded-full mt-5"><a href="/about">Our work</a></button>
</div>
</main>
@endsection
