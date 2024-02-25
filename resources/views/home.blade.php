<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @foreach ($post as $posts)
        <h1>{{ $posts->title }}</h1>
        <h3>{{ $posts->description }}</h3>
    @endforeach
</x-app-layout>
