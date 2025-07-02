<div class="comment border p-2 mb-3 ml-{{ $comment->depth * 4 }}">
    <p><strong>{{ $comment->user->name }}</strong>: {{ $comment->comment }}</p>

    {{-- Only allow reply if depth < 1 (i.e., allow one level deep) --}}
    @if ($comment->depth < 1)
        <a href="#" class="reply-toggle text-blue-600 text-sm" data-comment-id="{{ $comment->id }}">Reply</a>

        <form action="{{ route('roadmap.comment') }}" method="POST" class="reply-form mt-2 hidden" id="reply-form-{{ $comment->id }}">
            @csrf
            <input type="hidden" name="roadmap_id" value="{{ $comment->roadmap_id }}">
            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
            <textarea name="comment" rows="2" placeholder="Write your reply..." required></textarea>
            <button type="submit">Submit Reply</button>
        </form>
    @endif

    {{-- Show replies (depth = 1) --}}
    @foreach ($comment->replies as $reply)
        @include('components.comment', ['comment' => $reply])
    @endforeach
</div>
