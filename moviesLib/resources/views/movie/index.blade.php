<x-app-layout>
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-purple-300 font-semibold">Filmes Populares</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularMovies as $movie)
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150" src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="{{$movie['title']}}">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">{{$movie['title']}}</a>
                        <div class="flex items-center text-gray-400 mt-1">
                            <span class="iconify mt-1" data-icon="fluent-color:star-16"></span>
                            <span class="mx-2">{{$movie['vote_average'] * 10 . '%'}}</span>
                            <span class="mx-2">|</span>
                            <span>{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
                        </div>
                        <div class="text-gray-400">
                           @foreach ($movie['genre_ids'] as $genre)
                                 {{$genres->get($genre)}}@if (!$loop->last), @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="nowplayng">
            <h2 class="mt-5  uppercase tracking-wider text-purple-300 font-semibold">Vendo agora</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($nowPlayingMovies as $movie)
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150" src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="{{$movie['title']}}">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">{{$movie['title']}}</a>
                        <div class="flex items-center text-gray-400 mt-1">
                            <span class="iconify mt-1" data-icon="fluent-color:star-16"></span>
                            <span class="mx-2">{{$movie['vote_average'] * 10 . '%'}}</span>
                            <span class="mx-2">|</span>
                            <span>{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
                        </div>
                        <div class="text-gray-400">
                           @foreach ($movie['genre_ids'] as $genre)
                                 {{$genres->get($genre)}}@if (!$loop->last), @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>       
        </div>
        <div class="estreias">
            <h2 class="mt-5  uppercase tracking-wider text-purple-300 font-semibold">Estreias</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($estreias as $movie)
                <div class="mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150" src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="{{$movie['title']}}">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">{{$movie['title']}}</a>
                        <div class="flex items-center text-gray-400 mt-1">
                            <span class="iconify mt-1" data-icon="fluent-color:star-16"></span>
                            <span class="mx-2">{{$movie['vote_average'] * 10 . '%'}}</span>
                            <span class="mx-2">|</span>
                            <span>{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
                        </div>
                        <div class="text-gray-400">
                           @foreach ($movie['genre_ids'] as $genre)
                                 {{$genres->get($genre)}}@if (!$loop->last), @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>       
        </div>
        
    </div>
</x-app-layout>