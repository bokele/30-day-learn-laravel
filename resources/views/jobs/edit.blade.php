<x-layout>
    <div class="lg:flex lg:items-center lg:justify-between">
        <div class="min-w-0 flex-1">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Edit
                Job</h2>
        </div>
    </div>

    <x-card>
        <form method="POST" action="{{ route('jobs.update', $job->id) }}">
            @csrf
            @method('PUT')
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">

                    <div class="mt-10 grid grid-cols-1 gap-x-3 gap-y-8 sm:grid-cols-12">
                        <div class="col-span-full">
                            <x-label for="title" value="Job Title" />
                            <div class="mt-2">
                                <x-input id="title" name="title" type="text" autocomplete="title"
                                    value="{{ $job->title }}" class="block w-full   " />
                                <x-input-error for='title' />
                            </div>
                        </div>
                        <div class="col-span-6">

                            <x-label for="job_location" value="Job Location" />
                            <div class="mt-2">
                                <x-input id="job_location" name="job_location" type="text"
                                    autocomplete="job_location" value="{{ $job->location }}"
                                    class="block w-full
                                     " />

                                <x-input-error for='job_location' />
                            </div>
                            <p class="text-gray-400  text-sm">Example: "Remote", "Remote / USA", "New York City",
                                "Remote GMT-5", etc..</p>
                        </div>
                        <div class="col-span-6">
                            <x-label for="employment_type" value="Employment Type" />

                            <div class="mt-2">
                                <select
                                    class="block w-full pl-3 pr-10 py-2 text-base leading-6 border-2  rounded-md border-gray-200 ring-gray-300 focus:outline-none focus:shadow-outline-blue focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-5"
                                    name="employment_type" id="employment_type">

                                    <option>Select Employment Type </option>
                                    <option value="FULL TIME" @selected('FULL TIME' == $job->type)>Full Time</option>
                                    <option value="PART TIME" @selected(old('employment_type') == $job->type)>Part Time</option>
                                    <option value="CONTRACTOR" @selected('PART TIME' == $job->type)>Contractor</option>
                                    <option value="TEMPORARY" @selected('TEMPORARY' == $job->type)>Temporary</option>
                                    <option value="INTERN" @selected('INTERN' == $job->type)>Intern</option>
                                    <option value="VOLUNTEER" @selected('VOLUNTEER' == $job->type)>Volunteer</option>
                                    <option value="PER DIEM" @selected('PER DIEM' == $job->type)>Per Diem</option>
                                    <option value="OTHER" @selected('OTHER' == $job->type)>Other</option>
                                </select>
                                <x-input-error for='employment_type' />
                            </div>
                        </div>

                        <div class="col-span-6">
                            <x-label for="salary" value="Salary" />
                            <div class="mt-2">
                                <x-input id="salary" name="salary" type="text" autocomplete="salary"
                                    value="{{ $job->salary }}" class="block w-full   " />
                                <x-input-error for='salary' />

                            </div>
                        </div>
                        <div class="col-span-6">
                            <x-label for="closing_date" value="Close Date" />
                            <div class="mt-2">
                                <x-input id="closing_date" name="closing_date" type="date"
                                    autocomplete="closing_date" value="{{ $job->closing_date }}"
                                    class="block w-full   " />
                                <x-input-error for='closing_date' />

                            </div>
                        </div>
                        <div class="col-span-full">
                            <x-label for="description" value="Description" />
                            <div class="mt-2">
                                <textarea id="description" name="description" rows="3"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                {{ $job->description }}
                                </textarea>
                                <x-input-error for='description' />
                            </div>
                        </div>
                        <div class="col-span-full mt-4">
                            <x-label for="application_form_link" value="Application form Link" />
                            <div class="mt-2">
                                <x-input id="application_form_link" name="application_form_link" type="text"
                                    autocomplete="application_form_link" value="{{ $job->application_form_link }}"
                                    class="block w-full
                                     " />
                                <x-input-error for='application_form_link' />
                            </div>
                            <p class="text-gray-400  text-sm">If empty the Easy Apply button will be visible</p>
                        </div>

                    </div>


                </div>
            </div>

            <div class="mt-6 flex items-center justify-between gap-x-6">
                <div class="flex items-center">
                    <button form="delete-form"
                        class="text-red-500 text-sm font-bold rounded-md  px-2 py-2 hover:border-2 hover:border-red-600">Delete</button>
                </div>

                <div class="flex items-center gap-x-6">

                    <x-link href="{{ route('jobs.show', $job->id) }}"
                        class="text-sm font-semibold leading-6 rounded-md  px-2 py-2  text-gray-900 hover:border-2 hover:border-red-600 hover:text-red-600">Cancel</x-link>
                    <div>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </x-card>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
