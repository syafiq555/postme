@push('styles')
  <link rel="stylesheet" href="{{ asset('css/post_index.css') }}">
@endpush
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Posts') }}
    </h2>
  </x-slot>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="d-flex justify-content-end mb-2">
        <button class="btn btn-success">Create</button>
      </div>
      @foreach ($data as $post)
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200 post-title d-flex justify-content-between">
            <div>
              {{ $post->title }}
            </div>
            <div>
              <button class="btn btn-primary">edit</button>
              <button class="btn btn-danger">delete</button>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</x-app-layout>
