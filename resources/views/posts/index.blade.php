@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">Posts</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
            @forelse($posts as $post)
                <div class="{{ $loop->first ? 'featured' : '' }}">
                    <x-post-card :post="$post" />
                </div>
            @empty
                <p class="text-gray-500 col-span-full">No posts yet.</p>
            @endforelse
        </div>
    </div>
@endsection

{{-- Controller code example:
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
--}}
