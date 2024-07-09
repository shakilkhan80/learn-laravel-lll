<h2>{{ $job->title }} </h2>

<p>Congrats, Your job is live on our website.</p>

<a href="{{ url('/jobs/' . $job->id) }}">View Your Job Listings</a>
