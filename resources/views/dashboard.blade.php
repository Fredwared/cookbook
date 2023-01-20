<x-layout>




    <div class="p-16">
        <div class="p-8 bg-white shadow mt-24">
            <div class="grid grid-cols-1 md:grid-cols-3">
                <div class="relative">
                    <div class="w-48 h-48 bg-indigo-100 mx-auto rounded-full shadow-2xl absolute inset-x-0 top-0 -mt-24 flex items-center justify-center text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <div class="space-x-8 flex justify-between mt-32 md:mt-0 md:justify-center">

                    <a href="{{route("edit",auth()->user()->id)}}" class="text-white outline-none py-2 px-4 uppercase rounded bg-blue-400 hover:bg-blue-500 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">
                        Edit Profile
                    </a>

                    <form action="{{route("logout")}}" method="POST">
                        @csrf
                        <button  class="text-white outline-none py-2 px-4 uppercase rounded bg-red-600 hover:bg-red-800 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">
                            Logout
                        </button>
                    </form>

                        <a href="{{route("edit-password",auth()->user()->id)}}" class="text-white outline-none py-2 px-4 uppercase rounded bg-[#43655A]  shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">
                            <button >
                           Reset Password
                            </button>

                        </a>

                </div>
            </div>
            <div class="mt-20 text-center border-b pb-12">
                <p class="mt-8 text-[#005A34] font-bold text-2xl">Username - <span class="text-black font-semibold">{{auth()->user()->username}}</span></p>
                <p class="mt-8 text-[#005A34] font-bold text-2xl">Email - <span class="text-black font-semibold">{{auth()->user()->email}}</span></p>
                <p class="mt-8 text-[#005A34] font-bold text-2xl">Firstname - <span class="text-black font-semibold">{{auth()->user()->firstname}}</span></p>
                <p class="mt-8 text-[#005A34] font-bold text-2xl">Lastname - <span class="text-black font-semibold">{{auth()->user()->lastname}}</span></p>

            </div>
        </div>
    </div>

</x-layout>