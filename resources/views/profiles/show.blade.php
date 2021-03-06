@component('components.app')

    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg" class="mb-2" alt="">

            <img src="{{ $user->avatar }}" alt="avatar"
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" style="left:50%;"
                width="150px">
        </div>

        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can('edit', $user)
            <a href="{{ $user->path('edit')}}" class="rounded-full border border-gray-400 py-2 px-4 text-black mr-2 text-xs">
                        Edit Profile
                    </a>
                @endcan

                @component('components.follow-button', ['user' => $user])

                @endcomponent
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur consequuntur ipsum omnis a et nam quos
            corporis distinctio adipisci. Ipsa et perferendis laboriosam repellendus unde numquam consequatur, consectetur
            deleniti nesciunt!
        </p>

    </header>

    @include('_timeline', [
    'tweets' => $tweets
    ])

@endcomponent
