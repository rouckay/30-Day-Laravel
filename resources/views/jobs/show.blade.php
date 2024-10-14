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

</x-layout>

@can('edit', $job)
    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>
@endcan