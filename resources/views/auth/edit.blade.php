<x-layout>

    <x-layout>

        <div class="flex items-center justify-center h-screen bg-gray-300">
            <!-- Login Container -->
            <div class="w-[500px] flex-col border bg-white px-6 py-14 shadow-md rounded-[4px] ">
                <h1 class="text-center mb-4 text-3xl font-semibold">Edit Your Profile</h1>
                <form method="POST" action="{{route("update",$user->id)}}"  class="flex flex-col text-sm rounded-md">
                    @csrf
                    @method("PATCH")

                    <input name="username" value="{{$user->username}}" class=" @error("username") border-red-500 @enderror mb-5 rounded-[4px] font-semibold border  border-gray-500 p-3 hover:outline-none focus:outline-none hover:border-yellow-500 " type="text" placeholder="Your Username" />
                    @error("username")
                    <p class="text-red-500 -mt-5 text-center text-sm font-bold">{{$message}}</p>
                    @enderror

                    <input name="email" value="{{$user->email}}" class=" @error("email") border-red-500 @enderror mb-5 rounded-[4px] border border-gray-500 p-3 hover:outline-none focus:outline-none hover:border-yellow-500 " type="email" placeholder="Your Email" />
                    @error("email")
                    <p class="text-red-500 -mt-5 text-center text-sm font-bold">{{$message}}</p>
                    @enderror

                    <input name="firstname" value="{{$user->firstname}}" class=" @error("firstname") border-red-500 @enderror mb-5 rounded-[4px] border border-gray-500 p-3 hover:outline-none focus:outline-none hover:border-yellow-500 " type="text" placeholder="Your Firstname" />
                    @error("firstname")
                    <p class="text-red-500 -mt-5 text-center text-sm font-bold">{{$message}}</p>
                    @enderror

                    <input name="lastname" value="{{$user->lastname}}" class=" @error("lastname") border-red-500 @enderror mb-5 rounded-[4px] border  border-gray-500 p-3 hover:outline-none focus:outline-none hover:border-yellow-500 " type="text" placeholder="Your Lastname" />
                    @error("lastname")
                    <p class="text-red-500 -mt-5 text-center text-sm font-bold">{{$message}}</p>
                    @enderror


                    <button class="mt-5 w-full border p-2 bg-gradient-to-r from-gray-800 bg-gray-500 text-white rounded-[4px] hover:bg-slate-400 scale-105 duration-300" type="submit">Edit</button>
                </form>


            </div>

    </x-layout>

</x-layout>