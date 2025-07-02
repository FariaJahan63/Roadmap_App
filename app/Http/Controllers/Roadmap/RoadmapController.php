<?php

namespace App\Http\Controllers\Roadmap;

use App\Http\Controllers\Controller;
use App\Models\Roadmap;
use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\Comment;
class RoadmapController extends Controller
{
    /**
     * Show the user's profile settings page.
     */
    public function show($id)
    {
        $roadmap = Roadmap::find($id);
        $selfVote = Vote::where('user_id',  auth()->user()->id)->where('roadmap_id', $id)->get();
        $selfVote = count($selfVote) > 0 ? true : false;
        //$voteCount = Vote::where('roadmap_id', $id)->get();
        $voteCount = Vote::where('roadmap_id', $id)->count();
        $comments = Comment::with(['user', 'replies.user'])
                   ->where('roadmap_id', $roadmap->id)
                   ->orderBy('created_at')
                   ->get();

        return view('roadmap.show')
            ->withRoadmap($roadmap)
            ->withSelfVote($selfVote)
            ->withVoteCount($voteCount)
            ->withComments($comments);

        
    }
   

    public function vote(Request $request)
    {
        $userId = auth()->id();
        $roadmapId = $request->input('vote');

        // Prevent duplicate votes
        $existingVote = Vote::where('user_id', $userId)
                            ->where('roadmap_id', $roadmapId)
                            ->first();

        if (!$existingVote) {
            Vote::create([
                'user_id' => $userId,
                'roadmap_id' => $roadmapId,
            ]);
        }

        return back()->with('success', 'Voted successfully.');
    }

    public function unvote(Request $request)
    {
        $userId = auth()->id();
        $roadmapId = $request->input('unvote');

        $vote = Vote::where('user_id', $userId)
                    ->where('roadmap_id', $roadmapId)
                    ->first();

        if ($vote) {
            $vote->delete();
        }

        return back()->with('success', 'Unvoted successfully.');
    }
    
   public function storeComment(Request $request)
    {
        $request->validate([
            'comment' => 'required|string',
            'roadmap_id' => 'required|exists:roadmaps,id',
        ]);

        $depth = 0;

        if ($request->filled('parent_id')) {
            $parent = Comment::find($request->parent_id);
            if (!$parent || $parent->depth >= 1) {
                return back()->withErrors('You can only reply up to one level deep.');
            }
            $depth = $parent->depth + 1;
        }

        Comment::create([
            'comment' => $request->comment,
            'roadmap_id' => $request->roadmap_id,
            'user_id' => auth()->id(),
            'parent_id' => $request->parent_id ?? null,
            'depth' => $depth,
        ]);

        return back()->with('success', 'Comment submitted successfully!');
    }



}