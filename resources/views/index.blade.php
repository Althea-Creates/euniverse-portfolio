<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Euniverse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="icon" href="{{ asset('euniverse-logo.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
</head>
<body style="background-image: url('asset/landing-1.png')">
    <!-- Background Images -->
    {{-- <img src="asset/universe.png" class="bg-image-universe img-fluid" alt="bg gif">
    <img src="asset/stars.gif" class="bg-image-stars img-fluid" alt="bg gif"> --}}
    {{-- <img src="asset/landing 1.png" class="bg-image-landing img-fluid" alt="background image"> --}}

    @include('partials.header')

    <!-- Content Section -->
    <div class="container text-center text-white my-5">
        <h1 class="display-1">EUNIVERSE</h1>
        <div class="row mt-4">
            <div class="col-lg-12 col-md-12 col-sm-12 mx-auto">
                <p>A Communication-student with proven leadership capabilities and creative skills 
                    shared through writing. A person who would persevere in sharing creative vision 
                    through available mediums, and openness to learning new skills in various pursuits.</p>
                <a href="/about" class="btn-link text-decoration-underline">Get to know me</a>
            </div>
        </div>
        <div class="d-flex justify-content-left align-items-center mx-5">
            <img src="asset/euniverselogo5.png" id="linkable-logo" class="image-logo rounded-circle" alt="logo">
            <div class="caption-text ms-2">
                <caption><i>designed & created by ayet</i></caption>
            </div>
        </div>
    </div>

    @include('partials.footer')
    <script>
        document.getElementById('linkable-logo').addEventListener('click', function() {
            window.location.href = '/';
        });
    </script>
</body>
</html>