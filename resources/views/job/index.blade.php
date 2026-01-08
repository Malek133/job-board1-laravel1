<x-layout title="all job">

<div>
    <h1>Job Listings</h1>
    <p>Welcome to the job board! Here are the latest job listings.</p>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <h2>{{ $job['title'] }}</h2>
                <h3>{{  $job['salary']}}</h3>
                <p><strong>Location:</strong> {{ $job['location'] }}</p>
            </li>
        @endforeach
</div>

</x-layout>
