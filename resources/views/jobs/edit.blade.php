<x-layout>
    <x-slot:heading>Edit Jobs: {{ $job->title }}</x-slot:heading>
    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="title" name="title" type="text" value="{{ $job->title }}"
                                required />
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="salary" name="salary" type="text" value="{{ $job->salary }}"
                                required />
                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>
                </div>

            </div>
        </div>

        <div class="mt-6 flex items-center justify-between">
            <div class="flex items-center gap-x-3">
                <button form="delete-form" class="text-sm font-bold leading-6 text-red-600">Delete</button>
            </div>
            <div class="flex items-center gap-x-3">
                <a href="/jobs/{{ $job->id }}" type="button"
                    class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <div>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                </div>
            </div>
        </div>
    </form>
    <form action="/jobs/{{ $job->id }}" method="POST" class="hidden" id="delete-form">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
