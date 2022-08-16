<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sort Link">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Shortlink</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/heroes/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="css/heroes.css" rel="stylesheet">
  </head>
  <body>
    
<main>
  <form action="/" method="post">
    @csrf
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">Shortlink</h1>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="input-group mb-3">
              <input type="url" class="form-control text-center" id="link" value="{{ isset($link) ? $link : '' }}" placeholder="example: www.facebook.com" name="link" autofocus>
            </div>
          </div>
      </div>
        {{-- <div class="col-lg-6 mx-auto"> --}}
        <p class="lead mb-4 mt-2">Enter the url you want short.</p>
        <div class="row justify-content-center">
            <div class="col-md-5">
              <div class="input-group mb-3">
                <input type="text" class="form-control text-center" value="{{ isset($sortLink) ? $_ENV['THIS_WEBSITE'] .'/'. $sortLink : '' }}" id="hasil" placeholder="Result be here" name="hasil">
                <button class="btn text-white btn-outline-secondary btn-dark" type="button" id="button-addon2" onclick="copyText()">Copy Link</button>
              </div>
            </div>
        </div>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-2">
            <button type="submit" class="btn btn-primary btn-lg px-4 gap-3">Sorten Url</button>
            @if (isset($sortLink))    
              <a href="{{ isset($sortLink) ? $_ENV['THIS_WEBSITE'] .'/'. $sortLink : '' }}/view"> <button type="button" class="btn btn-outline-secondary btn-lg px-4">See Views</button></a>
            @endif
        </div>
        </div>
    </div>
   </form>

  <div class="b-example-divider"></div>

  <div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-white">Dark mode hero</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">simple shortlink, can be used by everyone & fast. you can use API for free.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Short Link API</button>
          <button type="button" class="btn btn-outline-light btn-lg px-4" >About Me</button>
        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider mb-0"></div>
</main>
<script>
  const title = document.querySelector('#link');
  const hasil = document.querySelector('#hasil');

  function copyText() {  
    var copyText = hasil;  
    copyText.select();  
    document.execCommand("copy");
    alert("Copy Success");
}
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  </body>
</html>
