<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <form method="post" action="{{ route('contact.store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input class="form-control" id="name" value="{{ old('name') }}"
            type="text" name="name" class="@error('name') is-invalid @enderror">
            @error('name')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input class="form-control" id="email" value="{{ old('email') }}"
          type="email" name="email" class="@error('email') is-invalid @enderror">
            @error('email')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input class="form-control" id="password" value="{{ old('password') }}"
            type="password" name="password" class="@error('password') is-invalid @enderror">
            @error('password')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
