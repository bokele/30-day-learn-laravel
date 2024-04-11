<x-layout>
    <div class="lg:flex lg:items-center lg:justify-between">
        <div class="min-w-0 flex-1">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                Your Jobs List</h2>

        </div>
        <div class="mt-5 flex lg:ml-4 lg:mt-0">
            <span class="hidden sm:block">
                <x-link href="{{ route('jobs.create') }}"> <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-gray-400"
                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path
                            d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
                    </svg> Create Job</x-link>
            </span>
            <!-- Dropdown -->
            <div class="relative ml-3 sm:hidden">
                <button type="button"
                    class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:ring-gray-400"
                    id="mobile-menu-button" aria-expanded="false" aria-haspopup="true">
                    More
                    <svg class="-mr-1 ml-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>



                <div class="absolute right-0 z-10 -mr-1 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="mobile-menu-button" tabindex="-1">
                    <!-- Active: "bg-gray-100", Not Active: "" -->
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                        id="mobile-menu-item-0">Edit</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                        id="mobile-menu-item-1">View</a>
                </div>
            </div>
        </div>

    </div>

    <div class="lg:col-span-3 mb-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}"
                class="flex  flex-col rounded-2xl px-6 py-6 lg:px-8 bg-white  mt-4 hover:border-2 hover:border-indigo-800">
                <div class="flex justify-between">
                    <p>{{ $job->employer->name }}</p>
                    <p class="flex ">
                        @if ($job->published)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-600 font-extrabold">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />

                            </svg>
                            <span class="text-green-600 ">Published</span>
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-600 font-extrabold">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                            <span class="text-red-600 ">Unpublished</span>
                        @endif
                    </p>
                </div>

                <p class="font-bold">{{ $job->title }} - {{ $job->location }} </p>
                <p><span>{{ $job->type }} - {{ $job->salary }} </p>


            </a>
        @endforeach
    </div>

    {{ $jobs->links() }}

</x-layout>
