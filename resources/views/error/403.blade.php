<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carveda | 403 </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('404/style.css') }}">
    <link rel="icon" href="{{ asset('frontend/assets/img/favicon.png') }}" type="image/png" sizes="16x16" />
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">
                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto d-flex flex-column align-items-center">
                        <img src="{{ asset('images/404.svg') }}" class="img-fluid mb-2" alt="404">
                        <h1 class="fw-bolder mb-22 mt-2 tx-80 text-muted">403</h1>
                        <h4 class="mb-2">USER DOES NOT HAVE THE RIGHT PERMISSIONS. </h6>
                        </h4>
                        <h6 class="text-muted mb-3 text-center">Oopps!! The page you were looking for doesn't exist.
                        </h6>
                        <a href="javaScript:void(0);" onclick="window.history.back()">Back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>