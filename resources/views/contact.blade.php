@extends('layouts.app')
@section('title')

@section('content')
<div class="grid grid-cols-3 h-screen">
           <!-- sm:bg-yellow-300 md:bg-green-300 lg:bg-pink-300 xl:bg-blue-300 2xl:bg-red-300  -->
           <div class="col-span-1 flex justify-center items-center p-20 ">
                <div class="text-white  space-y-10">
                <h1 class="text-2xl font-bold text-turtle-green">Get in touch with us</h1>
                <p class="text-black">Fill out the form below, and we'll get back to you as soon as possible.</p>
                </div>
            </div>

            <div class="col-span-2 flex  justify-center items-center">
                <div class="space-y-10 w-full px-40">
     
          
                <form method="POST" action="/process-form" class="space-y-9 w-full">

                    <div class="flex gap-3">
                <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Your name" 
                   class="text-sm w-full pl-4 py-3 border border-turle-green rounded-md"><br/>

                   <input type="numberic" name="phone" id="phone" value="{{ old('phone') }}" placeholder="Phone" 
                   class="text-sm w-full pl-4 py-3 border border-turle-green rounded-md"><br/>
                   </div>

                   <input type="text" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Subject" 
                   class="text-sm w-full pl-4 py-3 border border-turle-green rounded-md"><br/>

                  <textarea name="" id="" cols="30" rows="5" class=" pl-4 py-3 border border-turle-green rounded-md w-full"> Message</textarea><br>

                      <button type="submit" class="text-sm bg-turtle-green text-white px-8 py-2 rounded-full">SEND</button>
                </form>
                </div>
            </div> 
</div>

@endsection
