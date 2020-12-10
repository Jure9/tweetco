@auth
    @if (auth()
            ->user()
            ->isNot($user))
        <form method="POST" action="{{ route('follow', $user->username) }}">
            @csrf

            <button type="submit" class="bg-green-400 rounded-full shadow py-2 px-3 text-white text-xs">
                {{ current_user()->isFollowing($user) ? 'Unfollow Me' : 'Follow Me' }}
            </button>
        </form>
    @endif
@endauth
