@if (count($error) > 0)
    <div class="alert alert-danger">
        <strong>Whoops! Something went wrong!</strong>
        <br />
        <br />
        <ul>
            @foreach ($error->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif