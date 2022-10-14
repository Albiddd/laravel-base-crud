<header>
    <div class="container">
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/dc-logo.png') }}" alt="Dc Comics logo">
            </a>
        </div>

        @php
            $links =
            [
                [
                    'text' => 'CHARACTERS',
                    'url' => 'characters',
                ],
                [
                    'text' => 'COMICS',
                    'url' => 'comics.index',
                ],
                [
                    'text' => 'ADD COMIC',
                    'url' => 'comics.create',
                ],
                [
                    'text' => 'TV',
                    'url' => 'tv',
                ],
                [
                    'text' => 'GAMES',
                    'url' => 'games',
                ],
                [
                    'text' => 'COLLECTIBLES',
                    'url' => 'collectibles',
                ],
                [
                    'text' => 'VIDEOS',
                    'url' => 'videos',
                ],
                [
                    'text' => 'FANS',
                    'url' => 'fans',
                ],
                [
                    'text' => 'NEWS',
                    'url' => 'news',
                ],
                [
                    'text' => 'SHOP',
                    'url' => 'shop',
                ],
            ];
        @endphp

        <nav class="nav">
            <ul>
                @foreach ($links as $link)
                
                <li class="{{ Route::currentRouteName() === $link['url'] ? 'active' : '' }}">
                    <a href="{{isset($link['url']) ? route($link['url']) : '/' }}">{{ $link['text']}}</a>
                </li>
                @endforeach

            </ul>

        </nav>
    </div>
    <div class="hero">
    </div>
</header>
