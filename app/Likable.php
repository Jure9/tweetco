<?php

namespace App;

trait Likable
{
    public function isLikedBy(User $user)
    {
        // return true;
        return (bool) $user->likes
            ->where('tweet_id', $this->id)
            ->where('liked', true)
            ->count();
    }


    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function isDislikedBy(User $user)
    {
        return (bool) $user->likes->where('tweet_id', $this->id)->where('liked', false)->count();
    }

    public function like($user= null, $liked= true)
    {
        $this->likes()->updateOrCreate(
            [
                'user_id' => $user ? $user->id : auth()->id()
            ],
            [
                'liked' => $liked,
            ]
        );
    }

    public function dislike($user= null)
    {
        return $this->like($user, false);
    }
}