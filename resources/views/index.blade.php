<x-guest-layout>
    <div class="bg-neutral-6">
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-100 w-auto" src="{{ env('RESOURECE_ASSET_URL') }}/images/Logo.png" alt="Your Company" >
            <h2 class="mt-10 text-center text-4xl font-bold leading-9 tracking-tight text-neutral-9">EZEVENT</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">
            <div>
                <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" required placeholder="Email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" required placeholder="Password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-neutral-9 px-3 py-1.5 text-xl font-semibold leading-6 text-white shadow-sm hover:bg-teal-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
            </div>
            </form>

            <p class="mt-10 text-center text-sm">
            <a href="#" class="font-semibold leading-6" style="color: #757575;">Create account here</a>
            </p>
        </div>
        </div>
    </div>
</x-guest-layout>
