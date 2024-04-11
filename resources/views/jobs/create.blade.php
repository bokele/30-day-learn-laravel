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
                    <div class="border-b border-gray-900/10 pb-12">
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
                                    <select id="job_location" name="job_location" autocomplete="job_location"
                                        @selected('job_location')
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option value="onsite">Onsite</option>
                                        <option value="remote">Remote</option>
                                        <option value="hybrid">Hybrid</option>
                                    </select>
                                    <x-input-error for='job_location' />
                                </div>
                            </div>
                            <div class="col-span-6">
                                <label for="contract_type" class="block text-sm font-medium leading-6 text-gray-900">
                                    Contract Type</label>
                                <div class="mt-2">
                                    <select id="contract_type" name="contract_type" autocomplete="contract_type"
                                        @selected('contract_type')
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm ">
                                        <option value="full time">Full Time</option>
                                        <option value="part time">Part Time</option>
                                        <option value="conatct">Contract</option>
                                    </select>
                                    <x-input-error for='contract_type' />
                                </div>
                            </div>

                            <div class="col-span-6">
                                <x-label for="salary" value="Salary" />
                                <div class="mt-2">
                                    <x-input id="salary" name="salary" type="text" autocomplete="salary"
                                        value="{{ old('salary') }}" class="block w-full   " />
                                    <x-input-error for='salary' />

                                </div>
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

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <x-label for="description" value="Description" />
                            <div class="mt-2">
                                <textarea id="description" name="description" rows="3"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                                {{ old('description') }}
                                </textarea>
                                <x-input-error for='description' />
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
