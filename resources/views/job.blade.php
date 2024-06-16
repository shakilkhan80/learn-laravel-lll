<x-layout>
    <x-slot:heading>Job Details</x-slot:heading>
    <h1 class="text-lg font-bold">{{ $job['title'] }}</h1>
    <p>This job pays {{ $job['salary'] }} doller per month.</p>
</x-layout>
