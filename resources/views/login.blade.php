<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ecart</title>
</head>
<body>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://img.freepik.com/free-vector/mobile-login-concept-illustration_114360-83.jpg?t=st=1723631593~exp=1723635193~hmac=5a2a1bfdd09152b1d0e943f1e410f4e7f179e0938f547f87fc712cf76b227eb3&w=740"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          @if(session('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
          @endif
        <form method="post" action="{{route('dologin')}}">
            @csrf
          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="form1Example13" name='username' class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13">username</label>
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="password" id="form1Example23" name="password" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Password</label>
          </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
      </div>
    </div>
  </div>
</section>
</body>
</html>