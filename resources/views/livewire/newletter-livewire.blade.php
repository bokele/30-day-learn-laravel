<div
    class="flex flex-wrap items-center justify-between pb-4 border-b border-gray-500 dark:border-gray-700 lg:justify-between">
    <h2 class="mb-4 text-2xl font-semibold tracking-wider text-gray-300 lg:mb-0 dark:text-gray-400">
        Subscribe to the Job Newsletters
    </h2>
    <div class="flex flex-wrap">
        <form class="flex flex-wrap" wire:submit.prevent='save'>
            <div class="w-full py-1 mb-2 lg:flex-1 lg:py-0 lg:mr-3 lg:mb-0">
                {{-- <input type="email "
                class="inline-block w-full h-12 px-3 text-gray-700 placeholder-gray-500 border rounded-md dark:placeholder-gray-400 dark:text-gray-400 dark:border-gray-700 dark:bg-gray-700"
                placeholder="Your email"> --}}
                <x-input placeholder="Email.." wire:model='email_news' id="email" type="email"
                    value="{{ old('email') }}" class="block w-full   " />

                <x-input-error for='email_news' />

            </div>
            <div class="w-full py-1 lg:w-auto lg:py-0">
                <button type="submit"
                    class="inline-block w-full px-5 py-4 font-medium leading-4 text-center bg-indigo-200 rounded-md dark:bg-gray-700 dark:text-gray-400 dark:hover:bg-gray-800 hover:bg-indigo-300">Subscribe</button>
            </div>
        </form>

    </div>
</div>
