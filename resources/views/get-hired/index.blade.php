<x-layout>
    <x-slot:heading>
        <div class=" relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply"
                alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
            <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
                aria-hidden="true">
                <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
                aria-hidden="true">
                <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Work with us</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Uvajob is our first stop whenever we're hiring a
                        Software or IT role. We've hired 10 Software developers in the last few years, all thanks to
                        Uvajob.
                    </p>
                </div>

            </div>
        </div>

    </x-slot:heading>

    <div class="lg:col-span-3 mb-4">

        @foreach ($jobs as $job)
            <a href="{{ route('get-hidred.show', $job->id) }}"
                class="job-link group block mb-6 px-6 md:px-0 text-gray-800 border-2 border-gray-400 rounded-lg hover:border-indigo-600">

                <div class=" rounded-lg lj-shadow flex items-center md:space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500"
                    style="min-height:110px;">

                    @if ($job->employer->company_logo)
                        <div class="hidden  sm:block flex-shrink-0  rounded-tl-lg rounded-bl-lg md:bg-white lj-shadow ">

                            <img src="{{ $job->employer->company_logo }}" class="h-28 w-28 rounded-lg object-contain">
                        </div>
                    @endif

                    <div class=" flex flex-col md:flex-row w-full">
                        <div class="flex-1 min-w-0 px-10 md:pl-6 mb-2 md:mb-0 w-full">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm text-gray-500 truncate">{{ $job->employer->name }}
                            </p>
                            <p class="text-lg font-bold text-gray-900">
                                {{ Str::title($job->title) }}</p>
                            <p class="text-sm text-gray-500 truncate">
                                {{ Str::title($job->type) }}
                            </p>
                        </div>
                        <div class="flex-none md:flex flex-col md:justify-end text-sm text-gray-500 px-2">
                            <div class="flex-none md:flex sm:justify-end mb-4">
                                <div class="flex items-center mr-4 mb-1 md:mb-0 text-sm text-gray-500 truncate">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    {{ Str::title($job->location) }}
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    {{ $job->created_at->diffForHumans() }}
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-1 md:gap-2 md:justify-end mt-2">
                                @if ($job->tags)
                                    @foreach ($job->tags as $tag)
                                        <span
                                            class="inline-flex items-center rounded-md bg-indigo-200 px-2 py-1 text-xs font-medium text-indigo-600 ring-1 ring-inset ring-indigo-500/10">{{ $tag->name }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            {{-- <a
                class="flex  flex-col rounded-2xl px-6 py-6 lg:px-8 bg-white  mt-4 hover:border-2 hover:border-indigo-800">
                <p class="mt-2"> {{ $job->employer->name }}</p>
                <p class="font-bold mt-2">{{ $job->title }} - {{ $job->location }} </p>
                <p class="mt-2"><span>{{ $job->type }} - {{ $job->salary }} </p>

                <p class="mt-4">
                    @if ($job->tags)
                        @foreach ($job->tags as $tag)
                            <span
                                class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">{{ $tag->name }}</span>
                        @endforeach
                    @endif
                </p>
            </a> --}}
        @endforeach
    </div>

    {{ $jobs->links() }}

</x-layout>
