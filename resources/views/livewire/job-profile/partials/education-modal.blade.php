@php
    $employmentTypes = [
        [
            'id' => 'FULL TIME',
            'name' => 'Full Time',
        ],
        [
            'id' => 'PART TIME',
            'name' => 'Part Time',
        ],
        [
            'id' => 'Contractor',
            'name' => 'Contractor',
        ],
        [
            'id' => 'TEMPORARY',
            'name' => 'Temporary',
        ],
        [
            'id' => 'INTERN',
            'name' => 'Intern',
        ],
        [
            'id' => 'VOLUNTEER',
            'name' => 'Volunteer',
        ],
        [
            'id' => 'PER DIEM',
            'name' => 'Per Diem',
        ],
        [
            'id' => 'OTHER',
            'name' => 'Other',
        ],
    ];
@endphp
<x-mary-modal title="Add Education" icon="o-plus" separator wire:model="educationModal" persistent class="backdrop-blur ">

    <div class="relative w-full max-w-full max-h-full" style=" max-width: 80rem;">

        <x-mary-form wire:submit="save">
            <div class="overflow-y-auto">

                <div class="mt-4 grid grid-cols-1 gap-x-3 gap-y-4 sm:grid-cols-12">
                    <div class="col-span-full">
                        <x-mary-input label="Job Title" wire:model="form.job_title" />
                    </div>
                    <div class="col-span-full">
                        <x-mary-input label="Company Name" wire:model="form.company_name" />
                    </div>
                    <div class="col-span-6">
                        <x-mary-input label="Job Location" wire:model="form.job_location" />
                    </div>
                    <div class="col-span-6">
                        <x-mary-select label="Employment Type" :options="$employmentTypes" wire:model="form.employment_type" />
                    </div>
                    <div class="col-span-6">
                        <x-mary-datetime label="Start Date" wire:model="form.started_date" />
                    </div>
                    <div class="col-span-6">
                        <x-mary-datetime label="End Date" wire:model="form.ended_date" />
                    </div>
                    <div class="col-span-full">
                        <x-mary-input label="Description" wire:model="form.description" />
                    </div>









                </div>

            </div>
            <x-slot:actions>
                <x-mary-button label="Cancel" @click="$wire.educationModal = false" />
                <x-mary-button :label="$editMode ? 'Save change' : 'Save'" class="btn-primary" type="submit" spinner="save" />
            </x-slot:actions>
        </x-mary-form>
    </div>


</x-mary-modal>
