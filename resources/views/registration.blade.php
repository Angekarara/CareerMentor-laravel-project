@vite('resources/css/app.css')

<div class="grid grid-cols-3 h-screen">
    <div class="col-span-1 flex bg-turtle-green justify-center items-center p-20 ">
         <div class="text-white text-center space-y-10">
         <h1 class="text-xl font-bold ">Welcome to our Site!</h1>
         <p> Please enter your Registration details, and start journey with us.</p>
         <button class="border border-white py-3 px-8 rounded-full"><a href="/login"> SIGN IN</a></button>
         </div>
     </div>

     <div class="col-span-2 flex bg-white justify-center items-center">
         <div class="space-y-10 w-full px-40">
         <h1 class="text-turtle-green font-bold text-xl text-center" >CREATE ACCOUNT</h1>
         <div class="mt-5">
    @if($errors->any())
 <div class="space-y-3 pl-[10px]">
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
         <form method="POST" action="{{route('registration.post')}}" class="space-y-9 w-full">
         @csrf
         <input type="text" name="name" id="name" placeholder="Enter your Full name" 
            class="shadow-md w-full pl-4 py-3 border border-turle-green rounded-md"><br/>

            <input type="email" name="email" id="email" placeholder="Enter your email" 
            class="shadow-md w-full pl-4 py-3 border border-turle-green rounded-md"><br/>

            <input type="password" name="password" id="password" placeholder="Enter your password" 
            class="shadow-md w-full pl-4 py-3 border border-turle-green rounded-md"><br/>
<div class="mt-4">
            <label for="role">Select Role:</label>
<select name="role" id="role" class="shadow-md w-full pl-4 py-3 border border-turtle-green rounded-md">
    <option value="mentee">Mentee</option>
    <option value="admin">Admin</option>
</select><br/></div>

               <button type="submit" class="bg-turtle-green text-white px-8 py-2 rounded-full">SIGN IN</button>
         </form>
         </div>
     </div> 
    </div>
