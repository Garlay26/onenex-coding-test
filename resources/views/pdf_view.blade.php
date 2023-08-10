<div class="container mt-5">

    <table class="table table-bordered mb-5">
        <thead>
            <tr class="table-danger">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Summary</th>
                <th scope="col">Author</th>
                <th scope="col">Generes</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <th scope="row">{{ $movie['id'] }}</th>
                <td>{{ $movie['title'] }}</td>
                <td>{{ $movie['summary'] }}</td>
                <td>{{ $movie['author'] }}</td>
                <td>{{ $movie['genres'] }}</td>
            </tr>

        </tbody>
    </table>
</div>
