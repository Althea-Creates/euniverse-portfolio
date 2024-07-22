<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
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

    {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    @include('partials.header')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <section class="portfolio" id="portfolio">
        <div class="container-fluid">
            <div class="row">

                <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="gallery-title">Gallery</h1>
                </div>

                <div class="galler-filters" align="center">
                    <button class="filter-button" data-filter="all">All</button>
                    <button class="filter-button" data-filter="category1">Designing</button>
                    <button class="filter-button" data-filter="category2">Development</button>
                    <button class="filter-button" data-filter="category3">Graphics</button>
                </div>
                
                <br/>

                <div class="gallery_product col-sm-3 col-xs-6 filter category1">
                    <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=122">
                        <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=122" />
                        <div class='img-info'>
                            <h4>Image Title 1</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </a>
                </div>

                <div class="gallery_product col-sm-3 col-xs-6 filter category2">
                    <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=526">
                        <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=526" />
                        <div class='img-info'>
                            <h4>Image Title 2</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </a>
                </div>

                <div class="gallery_product col-sm-3 col-xs-6 filter category3">
                    <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=626">
                        <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=626" />
                        <div class='img-info'>
                            <h4>Image Title 3</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </a>
                </div>

                <div class="gallery_product col-sm-3 col-xs-6 filter category1">
                    <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=626">
                        <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=626" />
                        <div class='img-info'>
                            <h4>Image Title 4</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </a>
                </div>

                <div class="gallery_product col-sm-3 col-xs-6 filter category2">
                    <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=486">
                        <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=486" />
                        <div class='img-info'>
                            <h4>Image Title 5</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </a>
                </div>

                <div class="gallery_product col-sm-3 col-xs-6 filter category3">
                    <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=846">
                        <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=846" />
                        <div class='img-info'>
                            <h4>Image Title 6</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </a>
                </div>

                <div class="gallery_product col-sm-3 col-xs-6 filter category1">
                    <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=1066">
                        <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=1066" />
                        <div class='img-info'>
                            <h4>Image Title 7</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </a>
                </div>

                <div class="gallery_product col-sm-3 col-xs-6 filter category2">
                    <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=506">
                        <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=506" />
                        <div class='img-info'>
                            <h4>Image Title 8</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </a>
                </div>

                <div class="gallery_product col-sm-3 col-xs-6 filter category3">
                    <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=1026">
                        <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=1026" />
                        <div class='img-info'>
                            <h4>Image Title 9</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </a>
                </div>

                <div class="gallery_product col-sm-3 col-xs-6 filter category1">
                    <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=1077">
                        <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=1077" />
                        <div class='img-info'>
                            <h4>Image Title 10</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </a>
                </div>

                <div class="gallery_product col-sm-3 col-xs-6 filter category2">
                    <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=102">
                        <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=102" />
                        <div class='img-info'>
                            <h4>Image Title 11</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </a>
                </div>

                <div class="gallery_product col-sm-3 col-xs-6 filter category3">
                    <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=106">
                        <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=106" />
                        <div class='img-info'>
                            <h4>Image Title 12</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
	<script src="js/js.js"></script>


    @include('partials.footer')
</body>
</html>