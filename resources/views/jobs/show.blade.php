<x-layout>
    <x-slot:heading>
        {{ $job->title }}
    </x-slot:heading>

    <div class="lg:col-span-3 bg-white p-4">
        <p class="flex gap-x-3">
            <span>
                <strong class="font-semibold text-gray-900">Company : </strong>
                {{ $job->employer->name }}
            </span>
        </p>
        <p class="flex gap-x-3">
            <span>
                <strong class="font-semibold text-gray-900">Job Title : </strong>
                {{ $job->title }}
            </span>
        </p>
        <p class="flex gap-x-3">
            <span>
                <strong class="font-semibold text-gray-900">Salary : </strong>
                {{ $job->salary }}
            </span>
        </p>
        <p class="flex gap-x-3">
            <span>
                <strong class="font-semibold text-gray-900">Job Location : </strong>
                {{ $job->location }}
            </span>
        </p>
        <p class="flex gap-x-3">
            <span>
                <strong class="font-semibold text-gray-900">Job Type : </strong>
                {{ $job->type }}
            </span>
        </p>
        <p class="flex gap-x-3">
            <span>
                <strong class="font-semibold text-gray-900">Status: </strong>
                {{ $job->closing_date }}
            </span>
        </p>




        <p class="mt-4">
            {{ $job->description }} per year.
        </p>
    </div>
    <p class="mt-6">
        <x-link href="/jobs/{{ $job->id }}/edit">Edit Job</x-link>
    </p>






</x-layout>
