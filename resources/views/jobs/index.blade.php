<x-layout>
<ul>
   @forelse ($jobs as $job)
       <li class="m-3 px-3"><a href="{{ route('jobs.show', $job->id) }}"> {{ $job->title }} - {{ $job->description }}</a></li>
       @empty
       <li>No jobs available.</li>
    @endforelse
</ul>
</x-layout>
