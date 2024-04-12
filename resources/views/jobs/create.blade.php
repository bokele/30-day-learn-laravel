<x-layout>
    <div class="lg:flex lg:items-center lg:justify-between">
        <div class="min-w-0 flex-1">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Create New
                Job</h2>
        </div>
    </div>

    <x-card>
        <form method="POST" action="{{ route('jobs.store') }}">
            @csrf
            <div class="space-y-6">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class=" pb-12">
                        <div class="mt-10 grid grid-cols-1 gap-x-3 gap-y-8 sm:grid-cols-12">
                            <div class="col-span-full">
                                <x-label for="title" value="Job Title" />
                                <div class="mt-2">
                                    <x-input id="title" name="title" type="text" autocomplete="title"
                                        value="{{ old('title') }}"
                                        class="block w-full
                                     " />
                                    <x-input-error for='title' />
                                </div>
                            </div>
                            <div class="col-span-6">

                                <x-label for="job_location" value="Job Location" />
                                <div class="mt-2">
                                    <x-input id="job_location" name="title" type="text" autocomplete="job_location"
                                        value="{{ old('job_location') }}"
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
                                        name="employment_type" id="employment_type" @selected('employment_type')>

                                        <option value="FULL_TIME">Full Time</option>
                                        <option value="PART_TIME">Part Time</option>
                                        <option value="CONTRACTOR">Contractor</option>
                                        <option value="TEMPORARY">Temporary</option>
                                        <option value="INTERN">Intern</option>
                                        <option value="VOLUNTEER">Volunteer</option>
                                        <option value="PER_DIEM">Per Diem</option>
                                        <option value="OTHER">Other</option>
                                    </select>
                                    <x-input-error for='employment_type' />
                                </div>
                            </div>

                            <div class="col-span-6">
                                <x-label for="salary" value="Salary" />
                                <div class="mt-2">
                                    <x-input id="salary" name="salary" type="text" autocomplete="salary"
                                        value="{{ old('salary') }}" class="block w-full   " />
                                    <x-input-error for='salary' />
                                </div>
                                <p class="text-gray-400  text-sm">Examples: $120,000 – $145,000 USD, €80,000 — €102,000
                                </p>
                            </div>
                            <div class="col-span-6">
                                <x-label for="closing_date" value="Salary" />
                                <div class="mt-2">
                                    <x-input id="closing_date" name="closing_date" type="date"
                                        autocomplete="closing_date" value="{{ old('closing_date') }}"
                                        class="block w-full   " />
                                    <x-input-error for='closing_date' />

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-full">
                        <x-label for="tags" value="Tags" />
                        <div class="mt-2">
                            <x-input id="tags" name="tags" type="text" autocomplete="tags"
                                value="{{ old('tags') }}"
                                class="block w-full
                                     " />
                            <x-input-error for='tags' />
                        </div>
                        <p class="text-gray-400  text-sm">Max of five tags
                        </p>
                    </div>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <x-label for="description" value="Description/Application" />
                            <div class="mt-2">
                                <textarea id="description" name="description" rows="3"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                                {{ old('description') }}
                                </textarea>
                                <x-input-error for='description' />
                            </div>
                        </div>
                    </div>


                    <div class="col-span-full mt-10">
                        <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover
                            photo</label>
                        <div
                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <label for="file-upload"
                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <x-link href="{{ route('jobs.index') }}"
                    class="text-sm font-semibold leading-6 rounded-md  px-2 py-2  text-gray-900 hover:border-2 hover:border-red-600 hover:text-red-600">Cancel</x-link>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    </x-card>
</x-layout>
