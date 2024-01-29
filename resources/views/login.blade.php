@vite('resources/css/app.css')

<div class="grid grid-cols-3 h-screen sm:bg-yellow-300 md:bg-green-300 lg:bg-pink-300 xl:bg-blue-300 2xl:bg-red-300 ">
            <div class="col-span-2 flex bg-white justify-center items-center">
                <div class="space-y-10 w-full px-40">
                <h1 class="text-turtle-green font-bold text-xl text-center" >SIGN IN</h1>
          
<div class="mt-5">
    @if($errors->any())
 <div class="space-y-3 pl-[10px] pb-10">
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


            <form method="POST" action="{{route('login.post')}}" class="space-y-9 w-full">
               @csrf
                 <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Enter your email" 
                   class="shadow-md w-full pl-4 py-3 border border-turle-green rounded-md"><br/>

                   <input type="password" name="password" id="password" value="{{ old('password') }}" placeholder="Enter your password" 
                   class="shadow-md w-full pl-4 py-3 border border-turle-green rounded-md"><br/>

                      <button type="submit" class="bg-turtle-green text-white px-8 py-2 rounded-full">SIGN IN</button>
            </form>
                </div>
            </div> 
            <div class="col-span-1 flex bg-turtle-green justify-center items-center p-20 ">
                <div class="text-white text-center space-y-10">
                <h1 class="text-xl font-bold ">Welcome back!</h1>
                <p>To keep connected with us please Sign in with your personal info.</p>
                <button class="border border-white py-3 px-8 rounded-full"><a href="/registration"> SIGN UP</a></button>
                </div>
            </div>
</div>

