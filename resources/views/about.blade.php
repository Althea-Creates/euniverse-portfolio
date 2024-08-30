<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
    
    <link rel="icon" href="{{ asset('euniverse-logo-5.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/timeline.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
<body>
  @include('partials.header')
    <div class="card-container">
        <div class="row"> {{--first row--}}
            <div class="col">
              <img src="asset/pfp.png" alt="profile" class="profile-image rounded">
            </div>
            <div class="col-md-8">
                <img src="asset/banner3.png" alt="banner name" class="banner-image rounded">
                <div class="card-body">
                  {{-- <h5 class="card-title">Card title</h5> --}}
                  <p class="card-text ms-2">
                    I am a broadcasting student who loves to discover
                    more of my creative skills. My enthusiasm for pop
                    culture, literature, and music is what influences my
                    creativity. And because of my curiosity to learn, I
                    am eager to discover more of what I can bring to
                    the table when it comes to being visionary. 
                  </p>
                  <p class="card-text ms-2">
                    I am proficient in writing in both English and Filipino.
                    Apart from that, I have experience in photography
                    and video editing. I gained experience mainly from
                    school papers and university events. Hence,
                    creating content has never been new to me.
                  </p>
                </div>
            </div>
        </div> {{--end of first row--}}

        <div class="row"> {{-- 2nd row --}}
          <div class="col-md-4 mt-4 mb-1"> {{-- Left side: About cards - hardskills --}}
            <h2 class="text-shadow">About</h2>
            <div class="card shadow bg-about-card my-5 mx-0" style="max-width: 50rem;">
              <div class="card-body">
                <h5 class="card-title fw-bold"><i class="bi bi-gear-fill me-2"></i>Hard Skills</h5>
                <p class="card-text ms-0 fs-5"> {{-- Content of card --}}
                  <div class="row ms-0">
                    <div class="col-md-6">
                      <ul class="list-unstyled">
                        <li>Microsoft Office</li>
                        <li>Google</li>
                        <li>Canva</li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul class="list-unstyled">
                        <li>Filmora</li>
                        <li>Capcut</li>
                        <li>Adobe Photoshop</li>
                      </ul>
                    </div>
                  </div>
                </p>
              </div>
            </div>
            <div class="card shadow bg-about-card my-2 mx-0" style="max-width: 50rem;"> {{--soft skills--}}
              <div class="card-body">
                <h5 class="card-title fw-bold"><i class="bi bi-person-circle me-2"></i>Soft Skills</h5>
                <p class="card-text ms-0"> {{-- Content of card --}}
                  <div class="row ms-0 me-0">
                    <div class="col-md-6">
                      <ul class="list-unstyled">
                        <li>Organizational skills</li>
                        <li>Attention to detail</li>
                        <li>Collaboration</li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul class="list-unstyled">
                        <li>Adaptability</li>
                        <li>Critical Thinking</li>
                        <li>Work Ethic</li>
                      </ul>
                    </div>
                  </div>
                </p>
              </div>
            </div>
          </div> {{-- End of Left side: About cards --}}
          <div class="col-md-8 education-container"> {{-- Right side: Education --}}
            <h2 class="text-shadow">Education</h2>
              <div class="timeline"> 
                <div class="timeline__event  animated fadeInUp delay-3s timeline__event--type1">
                  <div class="timeline__event__icon ">
                    <i class="lni lni-graduation"></i>
                  </div>
                  <div class="timeline__event__date">
                    Sept 2023 - Present
                  </div>
                  <div class="timeline__event__content ">
                    <div class="timeline__event__title">
                      Polytechnic University of the Philippines
                    </div>
                    <div class="timeline__event__description text-dark">
                      <p class="ms-2">Bachelor of Arts Broadcasting</p>
                    </div>
                  </div>
                </div>
                <div class="timeline__event animated fadeInUp delay-2s timeline__event--type2">
                  <div class="timeline__event__icon">
                    <i class="lni lni-graduation"></i>
                  </div>
                  <div class="timeline__event__date">
                    Aug 2021 - May 2022
                  </div>
                  <div class="timeline__event__content">
                    <div class="timeline__event__title">
                      University of Santo Tomas
                    </div>
                    <div class="timeline__event__description text-dark" style="width: 22rem;">
                      <p class="ms-2">Bachelor of Arts Communication and Media Studies</p>
                    </div>
                  </div>
                </div>
                <div class="timeline__event animated fadeInUp delay-1s timeline__event--type3">
                  <div class="timeline__event__icon">
                    <i class="lni lni-graduation"></i>
                  </div>
                  <div class="timeline__event__date">
                    Aug 2019 - May 2021
                  </div>
                  <div class="timeline__event__content">
                    <div class="timeline__event__title">
                      University of Santo Tomas
                    </div>
                    <div class="timeline__event__description text-dark">
                      <p class="ms-2">Senior High School, Humanities and Social Sciences</p>
                    </div>
                  </div>
                </div>
                <div class="timeline__event animated fadeInUp timeline__event--type1">
                  <div class="timeline__event__icon">
                    <i class="lni lni-graduation"></i>
                  </div>
                  <div class="timeline__event__date">
                    June 2015 - Mar 2019
                  </div>
                  <div class="timeline__event__content">
                    <div class="timeline__event__title">
                      Manila Central University
                    </div>
                    <div class="timeline__event__description text-dark" style="width: 22rem;">
                      <p class="ms-2">Junior High School</p>
                    </div>
                  </div>
                </div>
              </div>
          </div> {{-- End of right side column --}}
        </div> {{-- End of Combined row --}}
    </div> {{--end of card container--}}
    @include('partials.footer')
</body>
</html>