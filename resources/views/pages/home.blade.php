<x-layout>

    <x-slot:hero>
        @include('layouts.partials.hero')
    </x-slot:hero>
    <div class="mx-auto mt-8 grid max-w-2xl grid-cols-1 gap-x-10 gap-y-16   lg:max-w-full lg:grid-cols-2">

        @foreach ($companies as $company)
            @if ($company->top)
                <div class="max-w-full w-full  rounded overflow-hidden shadow-lg">
                    {{-- <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains"> --}}

                    @if ($company->video_url)
                        {!! $company->video_html !!}
                    @endif

                    <div class="px-6 py-4">
                        <div class="flex justify-between mb-2">
                            <div class="font-bold text-xl ">{{ $company->name }}</div>
                            <div><span class="tex-md">Project form :</span> {{ $company->project_from }}</div>
                        </div>
                        <p class="text-gray-700 text-base">
                            {{ $company->short_description }}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2 flex justify-between">

                        <div>
                            <a href="{{ $company->company_website_url }}" target="_blank" class="text-indigo-600 font-md"
                                rel="noopener noreferrer">{{ $company->company_website_url }}</a>

                        </div>

                    </div>
                </div>
            @else
            @endif
        @endforeach


    </div>
    <div class="mx-auto mt-8 grid max-w-2xl grid-cols-1 gap-x-10 gap-y-8   lg:max-w-full lg:grid-cols-1">

        @foreach ($companies as $company)
            @if (!$company->top)
                <div
                    class="flex group justify-between items-center rounded border border-zinc-900 shadow-2xl px-2 md:px-6 py-2   hover:border-accent">
                    <a wire:key="andrew-reddin-software-consultant-project-manager"
                        href="https://larajobs.com/laravel-consultants/andrew-reddin-software-consultant-project-manager"
                        class="w-full job-link group block px-6 md:px-0 hover:border-indigo-800">

                        <div class="relative px-2 md:px-6 flex items-center md:space-x-3" style="min-height:110px;">

                            <div
                                class="hidden md:block flex-shrink-0 mb-2 md:mb-0 md:absolute rounded-lg md:p-4 md:bg-black md:shadow-lg md:-left-16">
                                <img src="{{ asset('logo.png') }}" class="h-10 w-10 rounded object-contain">
                            </div>

                            <div class=" flex flex-col md:flex-row w-full">
                                <div class="flex-1 min-w-0 px-2 md:pl-6 mb-2 md:mb-0 w-full">
                                    <div class="flex items-center justify-between w-full">
                                        <p class="text-lg font-bold text-gray-900 mb-1 group-hover:text-accent">
                                            {{ $company->name }}</p>
                                        <div class="text-gray-900 text-sm">
                                            {{ $company->project_from }}
                                        </div>
                                    </div>
                                    <div class="text-gray-900 line-clamp-2">
                                        {{ $company->short_description }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- <div class="max-w-full w-full lg:max-w-full lg:flex">
                    <div class=" h-10 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                        style="background-image: url('')" title="Woman holding a mug">
                    </div>
                    <div
                        class=" border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <div class="flex justify-between">
                                <div class="text-gray-900 font-bold text-xl mb-2"></div>
                                <div class="text-sm">
                                    <p class="text-gray-900 leading-none">/p>
                                </div>
                            </div>

                            <p class="text-gray-700 text-base">/p>
                        </div>

                    </div>
                </div> --}}
            @else
            @endif
        @endforeach
    </div>

</x-layout>
