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
                        <div class="font-bold text-xl mb-2">{{ $company->name }}</div>
                        <p class="text-gray-700 text-base">
                            {{ $company->short_description }}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2 flex justify-between">
                        <div>{{ $company->project_from }}</div>
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
                <div class="max-w-full w-full lg:max-w-full lg:flex">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                        style="background-image: url('{{ $company->avatar_url }}')" title="Woman holding a mug">
                    </div>
                    <div
                        class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <div class="flex justify-between">
                                <div class="text-gray-900 font-bold text-xl mb-2">{{ $company->name }}</div>
                                <div class="text-sm">
                                    <p class="text-gray-900 leading-none">{{ $company->project_from }}</p>
                                </div>
                            </div>

                            <p class="text-gray-700 text-base">L {{ $company->short_description }}</p>
                        </div>

                    </div>
                </div>
            @else
            @endif
        @endforeach
    </div>

</x-layout>
