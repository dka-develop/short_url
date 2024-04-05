<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Laravel 8 URL Shortener</title>
    </head>
    <body>
        <div class="container my-5">
            <div class="row">
                <h1 class="my-2 fs-4 fw-bold text-center">Laravel URL Shortener</h1>
                <form action="{{ route('url.shorten') }}" method="POST" class="my-2">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="url" class="form-control" placeholder="URL Shortener">
                        <button class="btn btn-outline-secondary" type="submit">Shorten</button>
                    </div>
                </form>
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">URL Key</th>
                            <th scope="col">URL Destination</th>
                            <th scope="col">Short URL</th>
                            <th scope="col">Visitors</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($urls as $key => $item)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $item->url_key }}</td>
                            <td>{{ $item->destination_url }}</td>
                            <td>{{ $item->default_short_url }}</td>
                            <td>{{ $item->visits->count() }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $key }}">
                                Edit
                                </button>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal-{{ $key }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('update', $item->id) }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="key" class="form-label">URL Key</label>
                                                <input type="text" name="url" value="{{ $item->url_key }}" class="form-control" id="key">
                                            </div>
                                            <div class="mb-3">
                                                <label for="destination" class="form-label">Destination URL</label>
                                                <input type="text" name="destination" value="{{ $item->destination_url }}" class="form-control" id="destination">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach  
                    </tbody>
                </table>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>