<x-layout>
    <x-slot:heading>
        Job Pages
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)

            <a href="/jobs/{{ $job->id}}" class=" block px-4 py-6 border border-gray-200">
                <div class="font-bold text-blue-500 text-sm">
                    {{ $job->employer->name }}
                </div>
                {{ $job['title'] }}
                : ${{$job['salary'] }}
            </a>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>