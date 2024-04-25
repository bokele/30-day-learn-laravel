<x-layout>
    <div class="lg:flex lg:items-center lg:justify-between">
        <div class="min-w-0 flex-1">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Your Job
                Profile</h2>

        </div>

    </div>

    <div
        class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto border-2 border-indigo-200  rounded-lg bg-white shadow-lg mt-4">

        {{-- border-transparent --}}
        <div class=" max-w-full">
            <div class="flex justify-between">
                <div class="flex min-w-0 gap-x-4">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <img class="h-20 w-20 flex-none rounded-full bg-gray-50"
                            src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                    @endif
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ Auth::user()->name }}</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ Auth::user()->email }}</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ Auth::user()->phone_number }}
                        </p>
                    </div>
                </div>
                <div class="mt-5 flex lg:ml-4 lg:mt-0">


                    <span class="ml-3 hidden sm:block">
                        <button type="button"
                            class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                            <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path
                                    d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z" />
                                <path
                                    d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z" />
                            </svg>
                            Add Education
                        </button>
                    </span>

                    <span class="sm:ml-3">
                        <button type="button"
                            class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            <svg class="-ml-0.5 mr-1.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Publish
                        </button>
                    </span>
                </div>


            </div>
            <div class="flex justify-around border-t-2 border-gray-300 mt-4 items-center">
                <div class="border-r-2 border-gray-300  inline-flex items-center">
                    <div class="min-w-0 flex-auto py-4 px-10">
                        <p class="flex text-sm font-semibold leading-6 text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-sm mt-1 mr-1"
                                viewBox="0 0 496 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                            </svg>
                            GitHub
                        </p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                            <a
                                href="{{ Auth::user()->github_url }}"class="font-semibold text-indigo-600 hover:text-indigo-500 text-center">
                                {{ Auth::user()->github_url }}</a>
                    </div>
                </div>
                <div class="border-r-2 border-gray-300 inline-flex items-start ">
                    <div class="min-w-0 flex-auto py-4 px-10">
                        <p class="flex text-sm font-semibold leading-6 text-blue-700 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-sm mt-1 mr-1 text-blue-700"
                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path class="fill-blue-700"
                                    d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                            </svg> LinkedIn
                        </p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500"><a
                                href="{{ Auth::user()->linkedin_url }}"class="font-semibold text-indigo-600 hover:text-indigo-500 text-center">
                                {{ Auth::user()->linkedin_url }}</a></p>

                    </div>
                </div>
                <div class="inline-flex items-center ">
                    <div class="min-w-0 flex-auto py-4 px-10">
                        <p class="flex text-sm font-semibold leading-6 text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-sm mt-1 mr-1"
                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                            </svg>
                            Twitter
                        </p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500"><a
                                href="{{ Auth::user()->twitter_url }}"class="font-semibold text-indigo-600 hover:text-indigo-500 text-center">
                                {{ Auth::user()->twitter_url }}</a></p>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <livewire:JobProfile.ExperienceLivewire>
        <livewire:JobProfile.EducationLivewire>


</x-layout>
