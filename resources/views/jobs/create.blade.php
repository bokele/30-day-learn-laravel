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
                                <x-input id="job_location" name="job_location" type="text"
                                    autocomplete="job_location" value="{{ old('job_location') }}"
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
                        <div class="col-span-full">
                            <x-label for="tags" value="Tags" />
                            <div class="mt-2">

                                <select @selected('tags') class="block w-full" multiple id="tags"
                                    name="tags[]">
                                    <option value="AlpineJS"> AlpineJS</option>
                                    <option value="Analyst">Analyst</option>
                                    <option ivalue="Angular">Angular</option>
                                    <option value="API">API</option>
                                    <option value="AWS">AWS</option>
                                    <option value="Backend">Backend</option>
                                    <option value="Bootstrap">Bootstrap</option>
                                    <option value="Cloud">Cloud</option>
                                    <option value="Consultant">Consultant</option>
                                    <option value="Contract">Contract</option>
                                    <option value="Craft CMS">Craft CMS</option>
                                    <option value="CSS">CSS</option>
                                    <option value="Customer Success">Customer Success
                                    </option>
                                    <option value="Customer Support">Customer Support
                                    </option>
                                    <option value="Design">Design</option>
                                    <option value="DevOps">DevOps</option>
                                    <option value="Engineer">Engineer</option>
                                    <option value="Frontend">Frontend</option>
                                    <option value="Fullstack">Fullstack</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Git">Git</option>
                                    <option value="Go">Go</option>
                                    <option value="JavaScript">JavaScript</option>
                                    <option value="Junior">Junior</option>
                                    <option value="LAMP">LAMP</option>
                                    <option value="Laravel">Laravel</option>
                                    <option value="Lead">Lead</option>
                                    <option value="Linux">Linux</option>
                                    <option value="Livewire">Livewire</option>
                                    <option value="MacOS">MacOS</option>
                                    <option value="Management">Management</option>
                                    <option value="Microsoft">Microsoft</option>
                                    <option value="MySQL">MySQL</option>
                                    <option value="Node.js">Node.js</option>
                                    <option value="Non-Tech">Non-Tech</option>
                                    <option value="Open Source">Open Source</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="PHP">PHP</option>
                                    <option value="Postgres">Postgres</option>
                                    <option value="QA">QA</option>
                                    <option value="React">React</option>
                                    <option value="Redis">Redis</option>
                                    <option value="SaaS">SaaS</option>
                                    <option value="Senior">Senior</option>
                                    <option value="SQL">SQL</option>
                                    <option value="Statamic">Statamic</option>
                                    <option value="Symfony">Symfony</option>
                                    <option value="TailwindCSS">TailwindCSS</option>
                                    <option value="TALL Stack">TALL Stack</option>
                                    <option value="TDD">TDD</option>
                                    <option value="Tech Support">Tech Support</option>
                                    <option value="Unix">Unix</option>
                                    <option value="VueJS">VueJS</option>
                                    <option value="WordPress">WordPress</option>
                                </select>
                                <x-input-error for='tags' />
                            </div>
                            <p class="text-gray-400  text-sm">Max of five tags
                            </p>
                        </div>

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

                        <div class="col-span-full mt-4">
                            <x-label for="application_form_link" value="Application form Link" />
                            <div class="mt-2">
                                <x-input id="application_form_link" name="application_form_link" type="text"
                                    autocomplete="application_form_link" value="{{ old('application_form_link') }}"
                                    class="block w-full
                                     " />
                                <x-input-error for='application_form_link' />
                            </div>
                        </div>
                        <div class="col-span-3 mt-4">
                            <div class="mt-2">
                                <label for="easy_apply" class="flex items-center">
                                    <span class="ms-2 text-sm text-gray-600 mr-4">{{ __('Easy Apply') }}</span>
                                    <x-checkbox id="easy_apply" name="easy_apply" />
                                </label>
                                <x-input-error for='easy_apply' />
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
