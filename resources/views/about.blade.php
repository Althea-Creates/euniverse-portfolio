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
    
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" />
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>

    <link rel="icon" href="{{ asset('euniverse-logo-5.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
<body>
  @include('partials.header')
    <div class="card-container">
        <div class="row"> {{--first row--}}
            <div class="col" data-aos="fade-right">
              <img src="asset/pfp.png" alt="profile" class="profile-image rounded">
            </div>
            <div class="col-md-8" data-aos="fade-left">
                <img src="asset/banner3.png" alt="banner name" class="banner-image rounded">
                <div class="card-body">
                  {{-- <h5 class="card-title">Card title</h5> --}}
                  <p class="card-text ms-2" data-aos="fade-up">
                    I am a broadcasting student who loves to discover
                    more of my creative skills. My enthusiasm for pop
                    culture, literature, and music is what influences my
                    creativity. And because of my curiosity to learn, I
                    am eager to discover more of what I can bring to
                    the table when it comes to being visionary. 
                  </p>
                  <p class="card-text ms-2" data-aos="fade-up">
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
          <div class="col-md-4 mt-4 mb-1"> {{-- Left side: About --}}
            <div class="card bg-about-card my-2 mx-0" style="max-width: 50rem;"> {{--soft skills--}}
              <div class="card-body">
                <h4 class="card-title fw-bold text-white" data-aos="fade-right"><i class="bi bi-person-circle me-2"></i>Soft Skills</h4>
                <p class="card-text ms-0"> {{-- Content of card --}}
                  <div class="row ms-0 me-0 text-white">
                    <div class="col-md-6" data-aos="fade-right">
                      <ul class="list-unstyled">
                        <li><i class="fa fa-check me-2"></i>Organized</li>
                        <li><i class="fa fa-check me-2"></i>Attention to detail</li>
                        <li><i class="fa fa-check me-2"></i>Collaboration</li>
                      </ul>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                      <ul class="list-unstyled">
                        <li><i class="fa fa-check me-2"></i>Adaptability</li>
                        <li><i class="fa fa-check me-2"></i>Critical Thinking</li>
                        <li><i class="fa fa-check me-2"></i>Work Ethic</li>
                      </ul>
                    </div>
                  </div>
                </p>
              </div>
            </div>
            <div class="card bg-about-card my-2 mx-0" style="max-width: 50rem;">
              <div class="card-body">
                  <h4 class="card-title fw-bold text-white" data-aos="fade-right"><i class="bi bi-mortarboard me-2"></i>Education</h4>
                  <p class="card-text ms-0">
                      <div class="row ms-0 me-0 text-white">
                          <div class="col-md-12">
                              <ul class="list-unstyled">
                                <li class="mb-2" data-aos="fade-left"><strong>Bachelor of Arts in Broadcasting</strong><br>Polytechnic University of the Philippines<br><span class="text-muted-white">2023-PRESENT</span></li>
                                <li class="mb-2" data-aos="fade-left"><strong>Bachelor of Arts in Communication</strong><br>University of Santo Tomas<br><span class="text-muted-white">2021-2022</span></li>
                                <li class="mb-2" data-aos="fade-left"><strong>Senior High School (HUMSS)</strong><br>University of Santo Tomas<br><span class="text-muted-white">2019-2021</span></li>
                              </ul>
                          </div>
                      </div>
                  </p>
              </div>
            </div>
          </div> {{-- End of Left side: About cards --}}
          <div class="col-md-8 technicalSkills-container"> {{-- Right side: tech skills --}}
            <hr class="my-1 ms-4" style="border: none; border-top: 2px solid #A3BAC3;">            
            <div class="card-container ms-2">
              <h4 class="mb-4 card-title fw-bold" data-aos="fade-right"><i class="bi bi-laptop me-2"></i>Technical Skills</h4>
              <div class="mb-3">
                <p class="fw-bold text-end" data-aos="fade-left">Microsoft Office</p>
                <div class="progress" style="height: 20px;" data-aos="fade-in">
                  <div class="progress-bar bg-primary" style="width: 95%;" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                </div>
              </div>
            
              <div class="mb-3">
                <p class="fw-bold text-end" data-aos="fade-left">Google Suites</p>
                <div class="progress" style="height: 20px;" data-aos="fade-in">
                  <div class="progress-bar bg-primary" style="width: 85%;" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                </div>
              </div>
            
              <div class="mb-3">
                <p class="fw-bold text-end" data-aos="fade-left">Canva</p>
                <div class="progress" style="height: 20px;" data-aos="fade-in">
                  <div class="progress-bar bg-primary" style="width: 80%;" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>
              </div>
            
              <div class="mb-3">
                <p class="fw-bold text-end" data-aos="fade-left">Adobe Photoshop Express</p>
                <div class="progress" style="height: 20px;" data-aos="fade-in">
                  <div class="progress-bar bg-primary" style="width: 80%;" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>
              </div>
            
              <div class="mb-3">
                <p class="fw-bold text-end" data-aos="fade-left">Filmora</p>
                <div class="progress" style="height: 20px;" data-aos="fade-in">
                  <div class="progress-bar bg-primary" style="width: 80%;" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>
              </div>
            
              <div class="mb-4">
                <p class="fw-bold text-end" data-aos="fade-left">Capcut</p>
                <div class="progress" style="height: 20px;" data-aos="fade-in">
                  <div class="progress-bar bg-primary" style="width: 80%;" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>
              </div>   

              <div class="text-end mt-4" data-aos="fade-in">
                {{-- <a href="{{ asset('asset/DE-LA-CRUZ-PORTFOLIO.pdf') }}" class="btn btn-light btn-lg">Download Resume</a> --}}
                <a href="{{ asset('asset/DE-LA-CRUZ-PORTFOLIO.pdf') }}" class="btn resume-btn shadow">Download Resume</a>
              </div>
            </div>
          </div> {{-- End of right side column --}}
        </div> {{-- End of Combined row --}}
    </div> {{--end of card container--}}
    @include('partials.footer')
</body>
<script>
  AOS.init({
      duration: 800, // Animation duration
  });
</script>
</html>