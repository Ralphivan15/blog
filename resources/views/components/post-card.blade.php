@props(['post'])

<div class="bg-white rounded-lg shadow p-4">
    <h3 class="text-lg font-semibold text-gray-900">{{ $post->title }}</h3>
    <p class="text-gray-600">{{ $post->price }}</p>
</div>
