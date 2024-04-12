<div>
    <form wire:submit="save">
        <div class="mb-6">
            <h2 class="text-xl font-bold text-gray-00 dark:text-gray-400">
                Please send message for futher information! </h2>
        </div>
        <div class="col-span-full mb-4">
            <x-label for="first_name" value="First Name" />
            <div class="mt-2">
                <x-input placeholder="First Name.." id="first_name" wire:model='form.first_name' type="text"
                    value="{{ old('form.first_name') }}" class="block w-full
                                     " />
                <x-input-error for='form.first_name' />
            </div>
        </div>
        <div class="col-span-full mb-4">
            <x-label for="last_name" value="Last Name" />
            <div class="mt-2">
                <x-input placeholder="Last Name.." id="first_name" wire:model='form.last_name' type="text"
                    value="{{ old('form.last_name') }}" class="block w-full
                                 " />
                <x-input-error for='form.last_name' />
            </div>
        </div>
        <div class="col-span-full mb-4">
            <x-label for="email" value="Email" />
            <div class="mt-2">
                <x-input placeholder="Email.." wire:model='form.email' id="email" type="email"
                    value="{{ old('email') }}" class="block w-full   " />

                <x-input-error for='form.last_name' />
            </div>
        </div>
        <div class="col-span-full mb-4">
            <x-label for="message" value="Message" />
            <div class="mt-2">
                <textarea rows="4" type="message" placeholder="Write a message..." wire:model='form.message'
                    class="block w-full px-4  leading-tight text-gray-700 border rounded bg-gray-50 dark:placeholder-gray-400 py-7 dark:text-gray-400 dark:border-gray-800 dark:bg-gray-700 "></textarea>
                <x-input-error for='form.message' />
            </div>
        </div>

        <button type="submit"
            class="w-full py-4 text-sm font-bold leading-normal text-white transition-all duration-300 bg-indigo-600 rounded-md dark:bg-indigo-500 dark:hover:bg-indigo-600 hover:bg-indigo-700">
            Send Message
        </button>
    </form>
</div>
