<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>


    @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}"
            class="flex  flex-col rounded-2xl justify-center px-6 py-12 lg:px-8 bg-white mt-4 hover:bg-gray-200
        dark:bg-gray-900 dark:text-gray-300 dark:hover:bg-gray-700 text-blue-500 hover:bg-gray-700 hover:text-white">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm ">
                <div class="flex flex-col">
                    <p><span class="font-bold"> Position : </span> {{ $job['title'] }}</p>
                    <p><span class="font-bold">Pays : </span>{{ $job['salary'] }} per year.</p>
                </div>


            </div>

        </a>
    @endforeach


</x-layout>
