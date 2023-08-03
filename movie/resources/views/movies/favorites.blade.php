@extends('layouts.app')

@section('content')
    <h1>Favored Movies</h1>
    <div class="table-container">
        <table class="movie-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Release Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($favoredMovies as $movie)
                    <tr>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->release_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $favoredMovies->links() }} <!-- Add pagination links -->
@endsection

<style>
    /* ... Your existing styles ... */

    /* Hide the arrows in the pagination */
    .pagination a, .pagination span {
        font-size: 0; /* Set font size to 0 to hide the arrows */
        line-height: 0; /* Set line height to 0 to remove any extra spacing */
        display: none; /* Hide the element completely */
    }
</style>


<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .table-container {
        overflow-x: auto;
    }

    .movie-table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .movie-table th,
    .movie-table td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .movie-table th {
        background-color: #f5f5f5;
    }

    .movie-table tr:hover {
        background-color: #f9f9f9;
    }

    .movie-table button {
        padding: 6px 12px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .movie-table button:hover {
        background-color: #0056b3;
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        margin: 10px; /* Add spacing around the button */
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .button:hover {
        background-color: #0056b3;
    }

    .button:active {
        background-color: #004080;
    }

.pagination a, .pagination span {
    font-size: 0; /* Set font size to 0 to hide the arrows */
    line-height: 0; /* Set line height to 0 to remove any extra spacing */
    display: none; /* Hide the element completely */
}

</style>
