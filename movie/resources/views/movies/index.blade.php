@extends('layouts.app')

@section('content')
    <h1>List of Movies</h1>
    <div class="table-container">
        <table class="movie-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Release Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <td>{{ $movie['title'] }}</td>
                        <td>{{ $movie['release_date'] }}</td>
                        <td>
                            <form action="{{ route('movies.favorite', $movie['id']) }}" method="POST">
                                @csrf
                                <input type="hidden" name="title" value="{{ $movie['title'] }}">
                                <input type="hidden" name="release_date" value="{{ $movie['release_date'] }}">
                                <button type="submit" class="button">Favorite</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ route('movies.showFavorites') }}" class="button">View Favorites</a>
@endsection
