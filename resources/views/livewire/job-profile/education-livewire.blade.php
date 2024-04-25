<div>
    <div class="flex justify-end">
        <span class=" sm:block mt-10 flex ">
            <button type="button" wire:click="showModal()"
                class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:ring-indigo-700 hover:bg-indigo-200 hover:text-indigo-700">
                <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-gray-700 hover:text-indigo-700" viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true">
                    <path
                        d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
                </svg>
                Add Education
            </button>
        </span>
    </div>




    <!-- Card Blog -->
    <div class="max-w-full px-4 py-10 sm:px-6 lg:px-2 lg:py-10 mx-auto">
        <!-- Grid -->
        <div class="grid lg:grid-cols-1 lg:gap-y-4 gap-10">
            <!-- Card -->
            @foreach ($jobProfiles as $jobProfile)
                <div class="group rounded-xl overflow-hidden border-2 border-gray-400 ">
                    <div class="sm:flex">
                        <div class="flex-shrink-0 relative  overflow-hidden w-full sm:w-56 h-46">
                            <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out size-full absolute top-0 start-0 object-cover "
                                src="https://images.unsplash.com/photo-1668906093328-99601a1aa584?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=986&q=80"
                                alt="Image Description">
                        </div>

                        <div class="grow mt-4 sm:mt-0 sm:ms-6 px-4 sm:px-0">
                            <div class="flex justify-between">
                                <div class="mt-4  mr-4">
                                    <h3
                                        class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                                        {{ $jobProfile->job_title }}
                                    </h3>

                                    <h4
                                        class="text-md mt-2 font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                                        {{ $jobProfile->company_name }}
                                    </h4>
                                </div>
                                <div class="mt-4 mr-4">

                                    <a type="button" wire:click="edit({{ $jobProfile->id }})"
                                        class="py-2 px-2 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border-2 border-gray-600   text-indigo-700 hover:border-indigo-700 disabled:opacity-50 disabled:pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>

                                        View
                                    </a>
                                    <button type="button" wire:click="edit({{ $jobProfile->id }})"
                                        class="py-2 px-2 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border-2 border-gray-600   text-indigo-700 hover:border-indigo-700 disabled:opacity-50 disabled:pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>
                                        Edit
                                    </button>
                                    <button type="button" wire:click="delete({{ $jobProfile->id }})"
                                        class="py-2 px-2 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600   text-white hover:bg-red-400 disabled:opacity-50 disabled:pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>

                                        Delete
                                    </button>

                                </div>

                            </div>

                            <div class="mt-1 flex flex-row justify-between  sm:mt-0 mb-4">
                                <div class="mt-2 flex  text-sm text-gray-500">
                                    <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M6 3.75A2.75 2.75 0 018.75 1h2.5A2.75 2.75 0 0114 3.75v.443c.572.055 1.14.122 1.706.2C17.053 4.582 18 5.75 18 7.07v3.469c0 1.126-.694 2.191-1.83 2.54-1.952.599-4.024.921-6.17.921s-4.219-.322-6.17-.921C2.694 12.73 2 11.665 2 10.539V7.07c0-1.321.947-2.489 2.294-2.676A41.047 41.047 0 016 4.193V3.75zm6.5 0v.325a41.622 41.622 0 00-5 0V3.75c0-.69.56-1.25 1.25-1.25h2.5c.69 0 1.25.56 1.25 1.25zM10 10a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V11a1 1 0 00-1-1H10z"
                                            clip-rule="evenodd" />
                                        <path
                                            d="M3 15.055v-.684c.126.053.255.1.39.142 2.092.642 4.313.987 6.61.987 2.297 0 4.518-.345 6.61-.987.135-.041.264-.089.39-.142v.684c0 1.347-.985 2.53-2.363 2.686a41.454 41.454 0 01-9.274 0C3.985 17.585 3 16.402 3 15.055z" />
                                    </svg>
                                    {{ Str::title($jobProfile->employment_type) }}
                                </div>
                                <div class="mt-2 flex  text-sm text-gray-500 ">
                                    <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    {{ $jobProfile->started_date->format('d-m-Y') }} <strong> &nbsp; To &nbsp;</strong>
                                    {{ $jobProfile->ended_date?->format('d-m-Y') }}
                                </div>
                                <div class="mt-2 flex  text-sm text-gray-500 mr-4">
                                    <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    {{ Str::title($jobProfile->location) }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Blog -->
    @include('livewire.job-profile.partials.education-modal')
    <x-mary-modal wire:model="deleteEducation" title="Are you sure?">
        <div>You want to delete this loan product</div>

        <x-slot:actions>
            {{-- Notice `onclick` is HTML --}}
            <x-mary-button label="Cancel" @click="$wire.deleteEducation= false" />
            <x-mary-button label="Confirm" class="btn-success" wire:click="delete('{{ $hashid }}','delete')" />
        </x-slot:actions>
    </x-mary-modal>
</div>
