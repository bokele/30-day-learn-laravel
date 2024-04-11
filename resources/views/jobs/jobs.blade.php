<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">


        <section aria-labelledby="products-heading" class="pb-24 pt-6">
            <h2 id="products-heading" class="sr-only">Products</h2>

            <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                <!-- Filters -->
                <form class="hidden lg:block bg-white justify-center p-4 rounded-md">
                    <h3 class="sr-only">Categories</h3>
                    <ul role="list" class="space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">
                        <li>
                            <a href="#">Totes</a>
                        </li>
                        <li>
                            <a href="#">Backpacks</a>
                        </li>
                        <li>
                            <a href="#">Travel Bags</a>
                        </li>
                        <li>
                            <a href="#">Hip Bags</a>
                        </li>
                        <li>
                            <a href="#">Laptop Sleeves</a>
                        </li>
                    </ul>

                    <div class="border-b border-gray-200 py-6">
                        <h3 class="-my-3 flow-root">
                            <!-- Expand/collapse section button -->
                            <button type="button"
                                class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                aria-controls="filter-section-1" aria-expanded="false">
                                <span class="font-medium text-gray-900">Category</span>
                                <span class="ml-6 flex items-center">
                                    <!-- Expand icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                    </svg>
                                    <!-- Collapse icon, show/hide based on section open state. -->
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>
                        </h3>
                        <!-- Filter section, show/hide based on section state. -->
                        <div class="pt-6" id="filter-section-1">
                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <input id="filter-category-0" name="category[]" value="new-arrivals" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-category-0" class="ml-3 text-sm text-gray-600">New
                                        Arrivals</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="filter-category-1" name="category[]" value="sale" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-category-1" class="ml-3 text-sm text-gray-600">Sale</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="filter-category-2" name="category[]" value="travel" type="checkbox"
                                        checked
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-category-2" class="ml-3 text-sm text-gray-600">Travel</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="filter-category-3" name="category[]" value="organization" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-category-3"
                                        class="ml-3 text-sm text-gray-600">Organization</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="filter-category-4" name="category[]" value="accessories" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-category-4"
                                        class="ml-3 text-sm text-gray-600">Accessories</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>

                <!-- Product grid -->
                <div class="lg:col-span-3">
                    @foreach ($jobs as $job)
                        <a href="/jobs/{{ $job['id'] }}"
                            class="flex  flex-col rounded-2xl justify-center px-6 py-6 lg:px-8 bg-white mt-4 hover:bg-gray-200
        text-blue-500 hover:bg-gray-700 hover:text-white">
                            <div class="sm:mx-auto sm:w-full sm:max-w-sm ">
                                <div class="flex flex-col">
                                    <p><span class="font-bold"> Position : </span> {{ $job['title'] }}</p>
                                    <p><span class="font-bold">Pays : </span>{{ $job['salary'] }} per year.</p>
                                </div>


                            </div>

                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    </main>






</x-layout>
