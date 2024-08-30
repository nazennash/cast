<x-layout heading="Jobs">
    <h1>Jobs</h1>

    @foreach ($jobs as $job )
        <a href="/jobs/{{ $job['id'] }}">
            <li>{{ $job['title'] }}: Pays {{ $job['salary'] }}</li>
        </a>
    @endforeach
</x-layout>