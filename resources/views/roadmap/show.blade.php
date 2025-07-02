@extends('layout.main')

@section('content')
 <style>
   body {
      font-family: Arial, sans-serif;
      margin: 30px;
    }

    .comment-section {
      max-width: 600px;
      margin-top: 40px;
    }

    textarea, input[type="text"] {
      width: 100%;
      margin-bottom: 10px;
      padding: 10px;
      font-size: 14px;
    }

    button {
      padding: 5px 10px;
      margin-right: 5px;
    }

    .comment {
      background: #f0f0f0;
      padding: 10px;
      margin-top: 10px;
      border-radius: 5px;
    }

    .vote-section{
        margin-top: 10px;
        float: right;
    }

    .meta {
      font-size: 12px;
      color: #555;
    }

    .replies {
      margin-left: 30px;
    }
  </style>
<div class="section-body">
            <div class="container-fluid">
                   
                <div class="row clearfix">
                    <div class="col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{$roadmap->name}}</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <span>Description:</span> {{$roadmap->description}}<br>
                                    <span>Features:</span> {{$roadmap->features}}<br>
                                    <span>Milestones:</span> {{$roadmap->milestones}}<br>
                                    <span>Goals:</span> {{$roadmap->goals}}<br>
                                    <span>Status:</span>
                                
                                        @if($roadmap->status == 'done')
                                                    <span  class="tag tag-success">{{$roadmap->status}}</span>
                                                    @elseif($roadmap->status == 'draft')
                                                    <span  class="tag tag-warning">{{$roadmap->status}}</span>
                                                    @else 
                                                    <span  class="tag tag-orange">{{$roadmap->status}}</span>
                                                    @endif

                                 
  <div class="vote-section">
    @if ($selfVote)
        <form action="{{ route('roadmap.unvote') }}" method="POST">
            @csrf
            <button name="unvote" type="submit" value="{{ $roadmap->id }}">Unvote</button>
        </form>
    @else
        <form action="{{ route('roadmap.vote') }}" method="POST">
            @csrf
            <button name="vote" type="submit" value="{{ $roadmap->id }}" >Vote</button>
        </form>
    @endif

    <p id="vote-count">Votes: {{ $voteCount ?? 0 }}</p>
</div>

  
  <!-- Comment Section -->
<div class="comment-section">
    <h2>Leave a Comment</h2>

    {{-- Top-level comment form --}}
    <form action="{{ route('roadmap.comment') }}" method="POST">
        @csrf
        <input type="hidden" name="roadmap_id" value="{{ $roadmap->id }}">
        <textarea name="comment" rows="4" placeholder="Write your comment here..." required></textarea>
        <button type="submit">Submit Comment</button>
    </form>

    <div id="comments" class="mt-4">
        <h3>Comments:</h3>

        @foreach($comments->where('parent_id', null) as $comment)
            @include('components.comment', ['comment' => $comment])
        @endforeach
    </div>
</div>


 
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.reply-toggle').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                const id = this.dataset.commentId;
                const form = document.getElementById(`reply-form-${id}`);
                form.classList.toggle('hidden');
            });
        });
    });
</script>


                 
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop