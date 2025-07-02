@extends('layout.main')

@section('content')
 <style>
   body {
      font-family: Arial, sans-serif;
      margin: 30px;
    }

    #comment-section {
      max-width: 600px;
      margin: auto;
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

                                 
  <div id="vote-section">
    <button id="vote-button">Vote</button>
    <button id="unvote-button" disabled>Unvote</button>
    <p id="vote-count">Votes: 0</p>
  </div> 
  
  <!-- Comment Section -->
  <div id="comment-section">
    <h2>Leave a Comment</h2>
    <input type="text" id="name-input" placeholder="Your Name" />
    <textarea id="comment-input" rows="4" placeholder="Write your comment here..."></textarea>
    <button id="submit-comment">Submit Comment</button>

    <div id="comments">
      <h3>Comments:</h3>
    </div>
  </div>
    <script>
    let votes = 0;
    let hasVoted = false;

    const voteBtn = document.getElementById('vote-button');
    const unvoteBtn = document.getElementById('unvote-button');
    const voteDisplay = document.getElementById('vote-count');

    voteBtn.addEventListener('click', function () {
      if (!hasVoted) {
        votes++;
        hasVoted = true;
        voteDisplay.textContent = `Votes: ${votes}`;
        voteBtn.disabled = true;
        unvoteBtn.disabled = false;
      }
    });

    unvoteBtn.addEventListener('click', function () {
      if (hasVoted) {
        votes--;
        hasVoted = false;
        voteDisplay.textContent = `Votes: ${votes}`;
        voteBtn.disabled = false;
        unvoteBtn.disabled = true;
      }
    });
const nameInput = document.getElementById('name-input');
    const commentInput = document.getElementById('comment-input');
    const submitBtn = document.getElementById('submit-comment');
    const commentsDiv = document.getElementById('comments');

    function createCommentElement(name, text, timestamp = new Date(), isReply = false) {
      const commentEl = document.createElement('div');
      commentEl.className = 'comment';

      const metaEl = document.createElement('div');
      metaEl.className = 'meta';
      metaEl.textContent = `${name} • ${timestamp.toLocaleString()}`;

      const textEl = document.createElement('p');
      textEl.textContent = text;

      const buttonsDiv = document.createElement('div');

      // Edit button
      const editBtn = document.createElement('button');
      editBtn.textContent = 'Edit';
      editBtn.addEventListener('click', () => {
        const newText = prompt('Edit your comment:', textEl.textContent);
        if (newText !== null) {
          textEl.textContent = newText;
        }
      });

      // Delete button
      const deleteBtn = document.createElement('button');
      deleteBtn.textContent = 'Delete';
      deleteBtn.addEventListener('click', () => {
        if (confirm('Are you sure you want to delete this comment?')) {
          commentEl.remove();
        }
      });

      // Reply button
      const replyBtn = document.createElement('button');
      replyBtn.textContent = 'Reply';
      replyBtn.addEventListener('click', () => {
        const replyName = prompt('Your Name:');
        if (!replyName) return;
        const replyText = prompt('Your Reply:');
        if (!replyText) return;
        const reply = createCommentElement(replyName, replyText);
        repliesContainer.appendChild(reply);
      });

      buttonsDiv.appendChild(editBtn);
      buttonsDiv.appendChild(deleteBtn);
      buttonsDiv.appendChild(replyBtn);

      const repliesContainer = document.createElement('div');
      repliesContainer.className = 'replies';

      commentEl.appendChild(metaEl);
      commentEl.appendChild(textEl);
      commentEl.appendChild(buttonsDiv);
      commentEl.appendChild(repliesContainer);

      return commentEl;
    }

    submitBtn.addEventListener('click', () => {
      const name = nameInput.value.trim();
      const text = commentInput.value.trim();

      if (name === '' || text === '') {
        alert('Please enter both name and comment.');
        return;
      }

      const comment = createCommentElement(name, text);
      commentsDiv.appendChild(comment);

      // Clear inputs
      nameInput.value = '';
      commentInput.value = '';
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