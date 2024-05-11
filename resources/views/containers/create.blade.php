<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Container') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="block mb-8">
            <div class="grid grid-cols-1 gap-x-8 gap-y-8 pt-10 md:grid-cols-3">
                <div class="px-4 sm:px-0">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Container Information</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Fill in the blank fields with the container details .</p>
                </div>

                <form action="{{ route('containers.store') }}" method="POST" class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">
                @csrf
                    <div class="px-4 py-6 sm:p-8">
                        <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="vessel_type" class="block text-sm font-medium leading-6 text-gray-900">Vessel type</label>
                                <div class="mt-2">
                                    <select id="vessel_type" name="vessel_type" autocomplete="vessel_type" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" placeholder="Select" required>
                                        <option value="">select</option>
                                        <option value="Container vessel">Container vessel</option>
                                        <option value="Other container feeder vessel">Other container feeder vessel</option>
                                        <option value="Conventional vessel">Conventional vessel</option>
                                        <option value="Tanker">Tanker</option>
                                        <option value="Other vessels">Other vessels</option>
                                    </select>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="vessel_name" class="block text-sm font-medium leading-6 text-gray-900">Vessel name</label>
                                <div class="mt-2">
                                    <input type="text" name="vessel_name" id="vessel_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="schedule" class="block text-sm font-medium leading-6 text-gray-900">Schedule</label>
                                <div class="mt-2">
                                    <input type="text" name="schedule" id="schedule" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="call_sign" class="block text-sm font-medium leading-6 text-gray-900">Call sign</label>
                                <div class="mt-2">
                                    <input type="text" name="call_sign" id="call_sign" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="vessel_name" class="block text-sm font-medium leading-6 text-gray-900">Voyage In/Out</label>
                                <div class="mt-2">
                                    <input type="text" name="voyage_in_out" id="voyage_in_out" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-4">
                                <label for="eta" class="block text-sm font-medium leading-6 text-gray-900">Estimated Time of Arrival (ETA)</label>                             
                                <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                    <input datepicker datepicker-format="yyyy/mm/dd" name="eta" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                </div>
                            </div>

                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="loa" class="block text-sm font-medium leading-6 text-gray-900">LOA</label>
                                <div class="mt-2">
                                    <input type="text" name="loa" id="loa" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="draft" class="block text-sm font-medium leading-6 text-gray-900">Draft</label>
                                <div class="mt-2">
                                    <input type="text" name="draft" id="draft" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="agent" class="block text-sm font-medium leading-6 text-gray-900">Agent</label>
                                <div class="mt-2">
                                    <input type="text" name="agent" id="agent" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="disch" class="block text-sm font-medium leading-6 text-gray-900">DISCH</label>
                                <div class="mt-2">
                                    <input type="text" name="disch" id="disch" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="load" class="block text-sm font-medium leading-6 text-gray-900">LOAD</label>
                                <div class="mt-2">
                                    <input type="text" name="load" id="load" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="remarks" class="block text-sm font-medium leading-6 text-gray-900">Remarks</label>
                                <div class="mt-2">
                                    <textarea id="remarks" name="remarks" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">Additional information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                        <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>