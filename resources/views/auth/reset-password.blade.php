<x-layout>



    <div class="flex items-center justify-center h-screen bg-gray-300">
        <!-- Login Container -->
        <div class="w-[500px] flex-col border bg-white px-6 py-14 shadow-md rounded-[4px] ">
            <h1 class="text-center mb-4 text-3xl font-semibold">Change Your Password</h1>
            <form action="{{route("update-password",auth()->user()->id)}}" method="POST" class="flex flex-col text-sm rounded-md">
                @csrf

                <input name="current_password" class="@error("password") border-red-500 @enderror border border-gray-500 mb-5 rounded-[4px] p-3 hover:outline-none focus:outline-none hover:border-yellow-500" type="password" placeholder="Current Password" />
                @error("current_password")
                <p class="text-red-500 -mt-5 text-center text-sm font-bold">{{$message}}</p>
                @enderror


                <input name="password" class="@error("password") border-red-500 @enderror border border-gray-500 mb-5 rounded-[4px] p-3 hover:outline-none focus:outline-none hover:border-yellow-500" type="password" placeholder="New Password" />
                @error("password")
                <p class="text-red-500 -mt-5 text-center text-sm font-bold">{{$message}}</p>
                @enderror

                <input name="password_confirmation" class="@error("password_confirmation") border-red-500 @enderror border border-gray-500 mb-5 rounded-[4px] p-3 hover:outline-none focus:outline-none hover:border-yellow-500" type="password" placeholder="Confirm new password" />
                @error("password_confirmation")
                <p class="text-red-500 -mt-5 text-center text-sm font-bold">{{$message}}</p>
                @enderror


                <button class="mt-5 w-full border p-2 bg-gradient-to-r from-gray-800 bg-gray-500 text-white rounded-[4px] hover:bg-slate-400 scale-105 duration-300" type="submit">Change Password</button>
            </form>


        </div>



</x-layout>