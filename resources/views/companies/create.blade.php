<x-layout>
    <div class="lg:flex lg:items-center lg:justify-between">
        <div class="min-w-0 flex-1">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                Add Company Information
            </h2>
        </div>
    </div>

    <x-card>
        <form method="POST" action="{{ route('companies.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="space-y-6">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class=" pb-12">
                        <div class="mt-10 grid grid-cols-1 gap-x-3 gap-y-8 sm:grid-cols-12">
                            <div class="col-span-6">
                                <x-label for="name" value="Company Name" />
                                <div class="mt-2">
                                    <x-input id="name" name="name" type="text" autocomplete="name"
                                        value="{{ old('name') }}"
                                        class="block w-full
                                     " />
                                    <x-input-error for='name' />
                                </div>
                            </div>
                            <div class="col-span-6">
                                <x-label for="project_from" value="Project From" />
                                <div class="mt-2">
                                    <x-input id="project_from" name="project_from" type="text"
                                        autocomplete="project_from" value="{{ old('project_from') }}"
                                        class="block w-full
                                     " />
                                    <x-input-error for='project_from' />
                                </div>
                                <p class="text-gray-400  text-sm">Examples: $120,000 – $145,000 USD, €80,000 — €102,000
                                </p>
                            </div>
                            <div class="col-span-6">

                                <x-label for="phone_number" value="Phone Number" />
                                <div class="mt-2">
                                    <x-input id="phone_number" name="phone_number" type="text"
                                        autocomplete="phone_number" value="{{ old('phone_number') }}"
                                        class="block w-full
                                     " />

                                    <x-input-error for='phone_number' />
                                </div>

                            </div>
                            <div class="col-span-6">
                                <x-label for="email" value="Email" />

                                <div class="mt-2">
                                    <x-input id="email" name="email" type="text" autocomplete="email"
                                        value="{{ old('email') }}"
                                        class="block w-full
                                     " />
                                    <x-input-error for='email' />
                                </div>
                            </div>
                            @if (auth()->user()->subscribedToProduct('price_1P5Vp7EeQ3YObL4sqPSEQbu0', 'default'))
                                <div class="col-span-6">
                                    <x-label for="video_url" value="Video Url" />
                                    <div class="mt-2">
                                        <x-input id="video_url" name="video_url" type="text" autocomplete="video_url"
                                            value="{{ old('video_url') }}" class="block w-full   " />
                                        <x-input-error for='video_url' />
                                    </div>

                                </div>
                            @endif

                            <div class="col-span-6">
                                <x-label for="website_url" value="Website Url" />
                                <div class="mt-2">
                                    <x-input id="website_url" name="website_url" type="text"
                                        autocomplete="website_url" value="{{ old('website_url') }}"
                                        class="block w-full   " />
                                    <x-input-error for='website_url' />

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-full">
                        <x-label for="address" value="Address" />
                        <div class="mt-2">
                            <x-input id="address" name="address" type="text" autocomplete="address"
                                value="{{ old('address') }}"
                                class="block w-full
                                     " />
                            <x-input-error for='address' />
                        </div>

                    </div>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <x-label for="short_description" value="Short Description" />
                            <div class="mt-2">
                                <textarea id="short_description" name="short_description" rows="3"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                                {{ old('short_description') }}
                                </textarea>
                                <x-input-error for='short_description' />
                            </div>
                        </div>
                    </div>


                    <div class="col-span-full mt-10">
                        <label for="company_logo" class="block text-sm font-medium leading-6 text-gray-900">
                            Company Logo
                        </label>
                        <x-input type="file" id="company_logo" name="company_logo" class="block w-full" />
                        <x-input-error for='company_logo' />
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
