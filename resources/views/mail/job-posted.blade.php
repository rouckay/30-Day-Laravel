<h2>
    {{ $job->title}}
</h2>
Congrats! your job is ready check it right now

<a href="{{url("/jobs/" . $job->id)}}">View Your Job here</a>
