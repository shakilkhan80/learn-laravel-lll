<x-layout>
    <x-slot:heading>Job Listings</x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}">
                <li class="text-blue-500 hover:underline"><strong>{{ $job['title'] }}</strong> pays: {{ $job['salary'] }}
                </li>
            </a>
        @endforeach
    </ul>
</x-layout>
