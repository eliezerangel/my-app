<x-layout>
    <div class="container">
        <div class="items-center">
            <form action="{{ url('/login') }}" method="post">
                @csrf
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                {{--                            <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span>--}}
                                <input type="email" name="email" id="email" autocomplete="email" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="email">
                            </div>
                        </div>

                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                {{--                            <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span>--}}
                                <input type="password" name="password" id="password" autocomplete="password" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="password">
                            </div>
                        </div>


                        <label for="remember" class="block text-sm font-medium leading-6 text-gray-900">Remember</label>
                        <div class="mt-2">
    {{--                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">--}}
                                {{--                            <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span>--}}
                                <input type="checkbox" name="remember" id="remember" autocomplete="remember" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="password">
    {{--                        </div>--}}
                        </div>
                    </div>
                </div>

                <button class="btn">Login</button>
            </form>
        </div>
    </div>
</x-layout>
