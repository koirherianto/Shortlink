<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sort Link">
    <meta name="author" content="Your Name">
    <title>Shortlink</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<main>
    <form action="/" method="post">
        @csrf
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold">Shortlink</h1>
            
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control text-center" id="link" 
                            value="{{ old('link', isset($link) ? $link : '') }}" 
                            placeholder="example: www.facebook.com" name="link" autofocus>
                    </div>
                </div>
            </div>

            <p class="lead mb-4 mt-2">Enter the URL you want to shorten.</p>

            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control text-center" id="shortLink"
                            value="{{ isset($sortLink) ? $sortLink : '' }}" readonly>
                        <button class="btn btn-dark" type="button" onclick="copyText()">Copy Link</button>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-2">
                <button type="submit" class="btn btn-primary btn-lg px-4 gap-3">Shorten URL</button>
                @if (isset($sortLink))
                    <a href="{{ isset($sortLink) ? $sortLink . '/view' : '' }}" class="btn btn-outline-secondary btn-lg px-4">See Views</a>
                @endif
            </div>
        </div>
    </form>

    <div class="b-example-divider"></div>

    <div class="bg-dark text-secondary px-4 py-5 text-center">
        <div class="py-5">
            <h1 class="display-5 fw-bold text-white">Dark mode hero</h1>
            <div class="col-lg-6 mx-auto">
                <p class="fs-5 mb-4">Simple shortlink, can be used by everyone & fast. You can use for free.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="https://github.com/koirherianto/Shortlink" class="btn btn-outline-info btn-lg px-4 fw-bold">Github</button>
                    <a href="https://www.linkedin.com/in/koirherto/" class="btn btn-outline-light btn-lg px-4">About Me</a>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
function copyText() {  
    var copyText = document.querySelector("#shortLink");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    alert("Copied: " + copyText.value);
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
