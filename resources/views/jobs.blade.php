<x-layout>
    <x-slot:heading>Job Listings</x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}">
                <li>{{ $job['title'] }} pays: {{ $job['salary'] }}</li>
            </a>
        @endforeach
    </ul>
</x-layout>
