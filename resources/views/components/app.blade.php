@component('components.master')
    <section class="px-8 py-4">
        <main class="container mx-auto m-auto">
            <div class="lg:flex bg:mx-32 lg:justify-between">
                @if (auth()->check())
                    <div class="lg:w-32">
                        @include('_sidebar-links')
                    </div>
                @endif

                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
                    {{ $slot }}
                </div>

                @if (auth()->check())
                    <div class="lg:w-1/6">
                        @include('_friends-list')
                    </div>
                @endif
            </div>
        </main>
    </section>
@endcomponent
