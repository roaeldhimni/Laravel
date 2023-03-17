<x-layout>
    <div class="container py-md-5 container--narrow">
        <div class="text-center">
            <h2>Hello <strong>{{ Str::ucfirst(auth()->user()->username) }}</strong>
                <!-- @if (count($posts)==0)
                , You don't have any blog posts.
                @else
                , Your blog posts.
                @endif -->
            </h2>
        </div>
        <div class="list-group">
            <!-- @foreach ($posts as $post)
                <a href="/post/{{ $post->id }}" class="list-group-item list-group-item-action">
                    <img class="avatar-tiny" src="/blog-post.jpg" />
                    <strong>{{ $post->title }}</strong>, {{ $post->created_at->diffForHumans() }}
                </a>
            @endforeach -->
        </div>
    </div>
</x-layout>
