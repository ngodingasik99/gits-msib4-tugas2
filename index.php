
<?php require_once 'semidinamis.php';?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="image/logo1.jpeg">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>Me</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-navbar shadow fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-diamond-fill" viewBox="0 0 16 16">
            <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L4.047 3.339 8 7.293l3.954-3.954L9.049.435zm3.61 3.611L8.708 8l3.954 3.954 2.904-2.905c.58-.58.58-1.519 0-2.098l-2.904-2.905zm-.706 8.614L8 8.708l-3.954 3.954 2.905 2.904c.58.58 1.519.58 2.098 0l2.905-2.904zm-8.614-.706L7.292 8 3.339 4.046.435 6.951c-.58.58-.58 1.519 0 2.098l2.904 2.905z"/>
          </svg>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#experience">Experience</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#education">Education</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#skill">Skill</a>
            </li>
          </ul>    
        </div>
      </div>
    </nav>

    <!-- Jumbotron -->
    <section class="jumbotron">
      <div class="container">
        <div class="row justify-content-md-center gy-5">
          <div class="col-md-6">
            <h1 class="judul-jumbotron">AMIRUDIN</h1>
            <p class="content-jumbotron">
              <?php  
                echo jumbotron; 
              ?>
            </p><br>
            <a href="#contact" class="btn btn-jmb">Contact</a>
          </div>
          <div class="col-md-6 text-center">
            <img src="image/foto.jpg" class="img-fluid" width="400">
          </div>
        </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00C2CB" fill-opacity="1" d="M0,256L48,224C96,192,192,128,288,122.7C384,117,480,171,576,165.3C672,160,768,96,864,85.3C960,75,1056,117,1152,144C1248,171,1344,181,1392,186.7L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <!-- Jumbotron -->

    <!-- Experince -->
    <section class="experince" id="experience">
      <div class="container">
        <h2 class="text-center judul-info">Experience</h2>
        <hr class="garis"><br><br>
        <div class="row justify-content-md-center gy-5">
            <?php foreach($data as $kata ) : ?>
                <div class="col-md-6">
                  <ul class="ul">
                    <li class="fw-bold"><?= $kata['nama']?></li>
                    <li><?= $kata['jabat']?></li>
                  </ul>
                </div>
            <?php endforeach ?>
            <div class="col-md-6">
            </div>
        </div>
      </div>
      <br>
      <br>
      <br>
    </section>
    <!-- Experince -->

    <!-- Education -->
    <section class="education" id="education">
      <div class="container">
        <h2 class="text-center judul-info">Education</h2>
        <hr class="garis"><br><br>
        <div class="row justify-content-md-center gy-5">
          <?php foreach($school as $sekolah) :?>
          <div class="col-md-6">
            <ul class="ul">
              <li class="fw-bold"><?= $sekolah['pendidikan']?></li>
              <li><?= $sekolah['institusi']?></li>
            </ul>
          </div>
          <?php endforeach ?>
          <div class="col-md-6">
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
    </section>
    <!-- Education -->

    <!-- Skill -->
    <section class="education" id="skill">
      <div class="container">
        <h2 class="text-center judul-info">Skill</h2>
        <hr class="garis"><br><br>
        <div class="row justify-content-md-center gy-5">
          <?php foreach($mampu as $skil) : ?>
          <div class="col-md-4">
            <ul class="ul">
              <li class="fw-bold"><?= $skil['nama']?></li>
              <li><?= $skil['kemampuan']?></li>
            </ul>
          </div>
          <?php endforeach ?>
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
          </div>
        </div>
      </div>
    </section>
    <!-- Skill -->

    <!-- Contact -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00C2CB" fill-opacity="1" 
      d="M0,288L48,256C96,224,192,160,288,154.7C384,149,480,203,576,192C672,181,768,107,864,85.3C960,64,
      1056,96,1152,128C1248,160,1344,192,1392,208L1440,224L1440,320L1392,320C1344,320,1248,320,1152,
      320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>  
    <section class="contact" id="contact">
        <div class="container">
          <h2 class="judul-jumbotron text-center">Contact</h2><br><br>
          <div class="row justify-content-md-center gy-5">
              <div class="col-md-6">
              <?php foreach($judul as $judull) : ?>
                <h5 class="judul-contact-bawah"><?= $judull['address']?></h5>
                  <p class="content-contact">
                    <?= $judull['addres']?>
                  </p>
              <?php endforeach ?>
              </div>
              <div class="col-md-6">
                <div class="ratio ratio-4x3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15838.7333229601!2d113.74378022266812!3d-7.0464491728499405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9ddfb3ea84eb7%3A0x7024e8a52a5d99ba!2sLembung%20Bar.%2C%20Kec.%20Lenteng%2C%20Kabupaten%20Sumenep%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1672451352718!5m2!1sid!2sid"></iframe>
                </div>
              </div>
              </div>
          </div>
          </div>
          
        <br>
        <br>
    </section>
    <!-- Contant -->
    
    <!-- Sosmed -->
    <section class="sosmed">
      <div class="container">
        <div class="row justify-content-md-center gy-5">
          <div class="col-md-12 text-center">
            <h5 class="text-center judul-contact-bawah">FOLLOW US</h5><br>
            <a href="https://www.facebook.com/amir.vanjava.73?mibextid=ZbWKwL" target="_blank" class="a-medsos">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg>
            </a>
            <a href="https://workspace.google.com/intl/id_id/lp/gmail/?utm_source=google&utm_medium=cpc&utm_campaign=1605214-Workspace-APAC-ID-id-BKWS-EXA-Gmail&utm_content=text-ad-none-none-DEV_c-CRE_614316344301-ADGP_Hybrid+%7C+BKWS+-+EXA+%7C+Txt+~+Gmail_New-KWID_43700072427607189-kwd-321479832425&userloc_1007715-network_g&utm_term=KW_gmail%20baru&gclid=CjwKCAiAl9efBhAkEiwA4ToriqzZZHw24ph14yJowpkGCilvvcCvJoJFyfCxwE1GATUUGYwumYU9zRoCS30QAvD_BwE&gclsrc=aw.ds" target="_blank" class="a-medsos">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
              </svg>
            </a>
            <a href="https://youtube.com/@user-nx5bb8nm8j" target="_blank" class="a-medsos">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
              </svg>
            </a>
            <a href="https://instagram.com/amirudin.new_?igshid=ZDdkNTZiNTM=" target="_blank" class="a-medsos">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
              </svg>
            </a><br><br>
            <p class="text-center footer-p">
              <!-- JavaScript -->
              Copyright &copy; <script>document.write(new Date().getFullYear());</script> By Amirudin.
            </p>
          </div>
        </div>
      </div>
      <br>
    </section>
    <!-- Sosmed -->
        


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


        <!-- <script>
                    /*!
          * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
          * Copyright 2011-2022 The Bootstrap Authors
          * Licensed under the Creative Commons Attribution 3.0 Unported License.
          */

          (() => {
            'use strict'

            const storedTheme = localStorage.getItem('theme')

            const getPreferredTheme = () => {
              if (storedTheme) {
                return storedTheme
              }

              return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
            }

            const setTheme = function (theme) {
              if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-bs-theme', 'dark')
              } else {
                document.documentElement.setAttribute('data-bs-theme', theme)
              }
            }

            setTheme(getPreferredTheme())

            const showActiveTheme = theme => {
              const activeThemeIcon = document.querySelector('.theme-icon-active')
              const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
              const iconOfActiveBtn = btnToActive.querySelector('i').dataset.themeIcon

              document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                element.classList.remove('active')
              })

              btnToActive.classList.add('active')
              activeThemeIcon.classList.remove(activeThemeIcon.dataset.themeIconActive)
              activeThemeIcon.classList.add(iconOfActiveBtn)
              activeThemeIcon.dataset.iconActive = iconOfActiveBtn
            }

            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
              if (storedTheme !== 'light' || storedTheme !== 'dark') {
                setTheme(getPreferredTheme())
              }
            })

            window.addEventListener('DOMContentLoaded', () => {
              showActiveTheme(getPreferredTheme())

              document.querySelectorAll('[data-bs-theme-value]')
                .forEach(toggle => {
                  toggle.addEventListener('click', () => {
                    const theme = toggle.getAttribute('data-bs-theme-value')
                    localStorage.setItem('theme', theme)
                    setTheme(theme)
                    showActiveTheme(theme)
                  })
                })
            })
          })()
        </script> -->

  </body>
</html>