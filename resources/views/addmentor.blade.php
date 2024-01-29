@extends('layouts.admin')
@section('title')
@section('content')
<div>
     <h2 class="text-center font-semibold m-10 text-turtle-green text-xl">Fill the form to add a new Mentor</h2>

<div class="mt-5">
    @if($errors->any())
 <div class="space-y-3 pl-[380px] pb-10">
   @foreach($errors->all() as $error)
   <div class="text-red-400 ">{{$error}}</div>
    @endforeach
 </div>
    @endif

    @if(session()->has('error'))
    <div class="alert alert-danger">{{session('error')}}</div>
    @endif

    @if(session()->has('success'))
    <div class="alert alert-success text-green-500">{{session('success')}}</div>
    @endif
</div>

<div class="flex justify-center items-center">     
<form method="post" action="{{ route('mentor.post') }}" enctype="multipart/form-data">

        @csrf

        <label for="image">Upload Image:</label><br>
        <input type="file" id="image" name="image" class="mt-3 mb-6"><br>

            <label for="mentor_name">Mentor Name:</label><br>
            <input type="text" id="mentor_name" name="mentor_name"
            class="shadow-sm w-[500px] pl-4 py-2 border border-turtle-green rounded-md mt-3 mb-6"><br>

            <label for="email" >Email:</label><br>
            <input type="email" id="email" name="email"
            class="shadow-sm w-[500px] pl-4 py-2 border border-turtle-green rounded-md mt-3 mb-6"><br>

            <label for="field">Field:</label><br>
            <input type="text" id="field" name="field"
            class="shadow-sm w-[500px] pl-4 py-2 border border-turtle-green rounded-md mt-3 mb-6"><br>

            <label for="location">Location:</label><br>
            <input type="text" id="location" name="location"
            class="shadow-sm w-[500px] pl-4 py-2 border border-turtle-green rounded-md mt-3 mb-6"><br>

            <label for="description">Description:</label><br>
            <textarea id="description" name="description" 
            class="shadow-sm w-[500px] pl-4 py-2 h-[150px] border border-turle-green rounded-md mt-3 mb-6"></textarea><br>

            <button type="submit" class="bg-turtle-green text-white font-semibold border border-white py-3 px-8 rounded-full mt-3 mb-6">ADD MENTOR</button>

        </form>
    </div>
</div>
    @endsection
