<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container-fluid">
        <div class="d-flex flex-wrap">
            @foreach ($movies as $movie)
            <div class="card m-2" style="width: 18rem;">
                <ul>
                    <li><strong>Title:</strong> {{$movie->title}}</li>
                    <li><strong>Original titile:</strong> {{$movie->original_title}}</li>
                    <li><strong>Nationality:</strong> {{$movie->nationality}}</li>
                    <li><strong>Date:</strong> {{$movie->date}}</li>
                    <li><strong>Vote:</strong> {{$movie->vote}}</li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>