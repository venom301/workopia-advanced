<x-layout>
    <x-slot name="title">create job Listing</x-slot>
    <div class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl">
        <h2 class="text-4xl text-center font-bold mb-4">
            Create Job Listing
        </h2>
        <form method="POST" action="{{ route('jobs.store') }}" enctype="multipart/form-data">
            @csrf
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Job Info
            </h2>

            {{-- call the components --}}

            <x-input.text id="title" name="title" label="Job Title" placeholder="Software Engineer" />

            <x-input.text-area id="description" name="description" label="Job Description"
                placeholder="We are seeking a skilled and motivated Software Developer to join our growing development team..." />

            <x-input.text id="salary" name="salary" label="Annaul Salary" placeholder="90000" />

            <x-input.text-area id="requirements" rows="3" name="requirements" label="Requirements"
                placeholder="Bachelor's degree in Computer Science" />
            <x-input.text-area id="benefits" rows="3" name="benefits" label="Benefits"
                placeholder="Health insurance, 401k, paid time off" />

            <x-input.text id="tags" name="tags" label="Tags (comma-separated)"
                placeholder="development, coding, java, python" />

            <x-input.select id="job_type" name="job_type" label="Job Type" value="{{ old('job_type') }}"
                :options="['full-time' => 'Full-Time', 'part-time' => 'Part-Time', 'contract' => 'Contract', 'temporary' => 'Temporary', 'internship' => 'Internship', 'volunteer' => 'Volunteer', 'on-call' => 'On-Call']" />

            <x-input.select id="remote" name="remote" label="Remote" :options="[0 => 'No', 1 => 'Yes']" />

            <x-input.text id="address" name="address" label="Address" placeholder="123 Main St" />
            <x-input.text id="city" name="city" label="City" placeholder="Albany" />
            <x-input.text id="state" name="state" label="State" placeholder="NY" />
            <x-input.text id="zipcode" name="zipcode" label="ZIP Code" placeholder="12201" />

            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Company Info
            </h2>

            <x-input.text id="company_name" name="company_name" label="Company Name" placeholder="Enter Company Name" />

            <x-input.text-area id="company_description" rows="3" name="company_description" label="Company Description"
                placeholder="Company Description" />

            <x-input.text id="company_website" name="company_website" label="Company Website"
                placeholder="Enter Website" type="url" />
            <x-input.text id="contact_phone" name="contact_phone" label="Contact Phone" placeholder="Enter phone" />

            <x-input.text id="contact_email" name="contact_email" label="Contact Email"
                placeholder="Email where you want to receive applications" />

            <x-input.file id="company_logo" name="company_logo" label="Company Logo" />

            <button type="submit"
                class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">
                Save
            </button>
        </form>
    </div>
</x-layout>