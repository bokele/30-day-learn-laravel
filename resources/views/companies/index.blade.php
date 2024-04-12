<x-layout>
    <div class="lg:flex lg:items-center lg:justify-between">
        <div class="min-w-0 flex-1">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">You Company
                Infromation</h2>
        </div>
        <div class="mt-5 flex lg:ml-4 lg:mt-0">

            <span class="sm:ml-3">
                <a href="{{ $company ? route('companies.edit', $company->id) : route('companies.create') }}"
                    class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    {{ $company ? 'Edit Company Infromation' : 'Add Company Infromation' }}
                </a>
            </span>
        </div>
    </div>
    <x-card>
        <div class="mt-10 grid grid-cols-1  ">
            <table class="table-auto">
                <tbody>
                    <tr class="  ">
                        <th class="border px-4 py-2">Company Name</th>
                        <td class="border px-4 py-2">{{ $company->name }}</td>
                    </tr>
                    <tr class="">
                        <th class="border px-4 py-2">Phone Number</th>
                        <td class="border px-4 py-2">{{ $company->phone_number }}</td>
                    </tr>
                    <tr class="">
                        <th class="border px-4 py-2">Email</th>
                        <td class="border px-4 py-2">{{ $company->email }}</td>
                    </tr>
                    <tr class="">
                        <th class="border px-4 py-2">Address</th>
                        <td class="border px-4 py-2">{{ $company->address }}</td>
                    </tr>
                    <tr class="">
                        <th class="border px-4 py-2">Website URL</th>
                        <td class="border px-4 py-2">
                            <a href="{{ $company->company_website_url }}" target="_blank"
                                rel="noopener noreferrer">{{ $company->website_url }}</a>

                        </td>
                    </tr>
                    <tr class="">
                        <th class="border px-4 py-2">Video URL</th>
                        <td class="border px-4 py-2">
                            <a href="{{ $company->video_url }}" target="_blank"
                                rel="noopener noreferrer">{{ $company->video_url }}</a>
                        </td>
                    </tr>
                    <tr class="">
                        <th class="border px-4 py-2">Project From Amount</th>
                        <td class="border px-4 py-2">{{ $company->project_from }}</td>
                    </tr>
                    <tr class="">
                        <th class="border px-4 py-2">Logo</th>
                        <td class="border px-4 py-2">
                            @if ($company->company_logo)
                                <img src=" {{ asset($company->company_logo) }}" alt="{{ $company->name }}">
                            @endif


                        </td>
                    </tr>
                    <tr class="">
                        <th class="border px-4 py-2">Short Description</th>
                        <td class="border px-4 py-2">{{ $company->short_description }}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </x-card>


</x-layout>
