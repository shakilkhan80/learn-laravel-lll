<x-layout>
    <x-slot:heading>Job Details</x-slot:heading>
    <h1 class="text-lg font-bold">{{ $job->title }}</h1>
    <p>This job pays {{ $job->salary }} doller per month.</p>
    <p>
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>
</x-layout>
