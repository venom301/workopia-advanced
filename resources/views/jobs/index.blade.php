@extends('layout')

@section('content')
<ul>
   @forelse ($jobs as $job)
       <li>{{ $job }}</li>
       @empty
       <li>No jobs available.</li>
    @endforelse
</ul>
@endsection