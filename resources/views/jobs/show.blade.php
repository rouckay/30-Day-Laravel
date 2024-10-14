<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <h2>
        {{ $job->title}}
    </h2>
    <p>
        This Job pays {{ $job->salary}}
    </p>

    @can('edit-job', $job)
        <x-button href="{{ route('jobs.edit', ['job' => $job->id])}}">
            Edit Job
        </x-button>
    @endcan
</x-layout>