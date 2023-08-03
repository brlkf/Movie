<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Laravel Movies App</title>
    <!-- Common meta tags, stylesheets, scripts, etc. -->
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

        .movie-table th, .movie-table td {
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
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
