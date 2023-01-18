<x-layout>

    <div class="flex items-center justify-center h-screen bg-gray-300">
        <!-- Login Container -->
        <div class="w-[500px] flex-col border bg-white px-6 py-14 shadow-md rounded-[4px] ">
            <h1 class="text-center mb-4 text-3xl font-semibold">Login</h1>
            <div class="flex flex-col text-sm rounded-md">
                <input name="email" class="mb-5 rounded-[4px] border border-gray-500 p-3 hover:outline-none focus:outline-none hover:border-yellow-500 " type="email" placeholder="Your Email" />
                <input name="password" class="border border-gray-500 mb-5 rounded-[4px] p-3 hover:outline-none focus:outline-none hover:border-yellow-500" type="password" placeholder="Password" />
            </div>
            <button class="mt-5 w-full border p-2 bg-gradient-to-r from-gray-800 bg-gray-500 text-white rounded-[4px] hover:bg-slate-400 scale-105 duration-300" type="submit">Login</button>

            <p class="text-center mt-5 text-lg">If you don't have an account please <a class="text-blue-700 underline" href="/register">Register</a> </p>

        </div>

</x-layout>