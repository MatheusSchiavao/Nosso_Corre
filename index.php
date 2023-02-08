<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Nosso Corre</title>
</head>
<body id="top">
 

<!-- scroll - progress -->
<progress id="progress-bar" class="progress-one" max="100">
  <span class="progress-container">
    <span class="progress-bar"></span>
  </span>
</progress>

<header>
  <!-- Navbar -->
  <nav class="main-nav navbar navbar-expand-lg hover-navbar dark-to-light fixed-top navbar-dark">
    <div class="container">
      <a class="navbar-brand main-logo" href="#">
        <img class="logo-light" src="#" alt="LOGO">
        <img class="logo-dark" src="#" alt="LOGO">
      </a>

      <button class="navbar-toggler" type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarTogglerDemo"
        aria-controls="navbarTogglerDemo"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- collapse menu -->
      <div class="collapse navbar-collapse" id="navbarTogglerDemo">
        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="navbarDropdown1">
              Início
            </a>
            <div class="dropdown-menu dropdown-md dropdown-menu-lg-center py-0" aria-labelledby="navbarDropdown1">
              <div class="row g-0">
                <div class="col-12 col-md-6">
                  <div class="dropdown-md-area">
                    <p class="dropdown-md-title">Corporação</p>
                    <a class="dropdown-item d-flex" href="#">
                      <div class="drop-icon bg-primary text-light rounded-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6h-1v6a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-6H0v6z"/>
                          <path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v2.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 6.884V4.5zM1.5 4a.5.5 0 0 0-.5.5v1.616l6.871 1.832a.5.5 0 0 0 .258 0L15 6.116V4.5a.5.5 0 0 0-.5-.5h-13zM5 2.5A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z"/>
                        </svg>
                      </div>
                      <div class="drop-text">
                        <p class="fw-medium">Agência</p>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex" href="#">
                      <div class="drop-icon bg-primary text-light rounded-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                          <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                        </svg>
                      </div>
                      <div class="drop-text">
                        <p class="fw-medium">Companhia</p>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex" href="#">
                      <div class="drop-icon bg-primary text-light rounded-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                        </svg>
                      </div>
                      <div class="drop-text">
                        <p class="fw-medium">Trablhos em conjunto</p>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex" href="#">
                      <div class="drop-icon bg-primary text-light rounded-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-easel" viewBox="0 0 16 16">
                          <path d="M8.473.337a.5.5 0 0 0-.946 0L6.954 2h2.092L8.473.337zM12.15 11h-1.058l1.435 4.163a.5.5 0 0 0 .946-.326L12.15 11zM8.5 11h-1v2.5a.5.5 0 0 0 1 0V11zm-3.592 0H3.85l-1.323 3.837a.5.5 0 1 0 .946.326L4.908 11z"/>
                          <path fill-rule="evenodd" d="M14 3H2v7h12V3zM2 2a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                        </svg>
                      </div>
                      <div class="drop-text">
                        <p class="fw-medium">Cursos</p>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex" href="#">
                      <div class="drop-icon bg-primary text-light rounded-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                          <path fill-rule="evenodd" d="M4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z"/>
                        </svg>
                      </div>
                      <div class="drop-text">
                        <p class="fw-medium">Portfolio</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-12 col-md-6 bg-light">
                  <div class="dropdown-md-area">
                    <p class="dropdown-md-title">App &amp; Outros</p>
                    <a class="dropdown-item d-flex" href="#">
                      <div class="drop-icon bg-primary text-light rounded-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-braces" viewBox="0 0 16 16">
                          <path d="M2.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C3.25 2 2.49 2.759 2.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6zM13.886 7.9v.163c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456V7.332c-1.114 0-1.49-.362-1.49-1.456V4.352C13.51 2.759 12.75 2 11.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6z"/>
                        </svg>
                      </div>
                      <div class="drop-text">
                        <p class="fw-medium">Default</p>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex" href="#">
                      <div class="drop-icon bg-primary text-light rounded-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-app-indicator" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"/>
                          <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        </svg>
                      </div>
                      <div class="drop-text">
                        <p class="fw-medium">App Mobile</p>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex" href="#">
                      <div class="drop-icon bg-primary text-light rounded-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z"/>
                          <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z"/>
                        </svg>
                      </div>
                      <div class="drop-text">
                        <p class="fw-medium">App Desktop</p>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex" href="#">
                      <div class="drop-icon bg-primary text-light rounded-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
                      </div>
                      <div class="drop-text">
                        <p class="fw-medium">Pessoal</p>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex" href="#">
                      <div class="drop-icon bg-primary text-light rounded-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-puzzle" viewBox="0 0 16 16">
                          <path d="M4.605 2.5V2v.5zM3.61 3.6l.498-.043V3.55l-.498.05zM7 2.5h.5A.5.5 0 0 0 7 2v.5zm-.676 1.454l.304.397-.304-.397zm3.352 0l-.304.397.304-.397zM9 2.5V2a.5.5 0 0 0-.5.5H9zm3.39 1.1l-.498-.05v.007l.498.043zM12.1 7l-.498-.043a.5.5 0 0 0 .498.543V7zm1.854-.676l.397.304-.397-.304zm0 3.352l.397-.304-.397.304zM12.1 9v-.5a.5.5 0 0 0-.498.542L12.1 9zm.29 3.4l-.498.043v.007l.498-.05zM9 13.5h-.5a.5.5 0 0 0 .5.5v-.5zm.676-1.454l-.304-.397.304.397zm-3.352 0l.304-.397-.304.397zM7 13.5v.5a.5.5 0 0 0 .5-.5H7zm-2.395 0V13v.5zm-.995-1.1l.498.05v-.007L3.61 12.4zM3.9 9l.498.042A.5.5 0 0 0 3.9 8.5V9zm-1.854.676l-.397-.304.397.304zm0-3.352l-.397.304.397-.304zM3.9 7v.5a.5.5 0 0 0 .498-.543L3.9 7zm.705-5a1.5 1.5 0 0 0-1.493 1.65l.995-.1A.5.5 0 0 1 4.605 3V2zM7 2H4.605v1H7V2zm.5.882V2.5h-1v.382h1zm-.872 1.469c.375-.287.872-.773.872-1.469h-1c0 .195-.147.42-.48.675l.608.794zM6.5 4.5l.001-.006a.113.113 0 0 1 .012-.025.459.459 0 0 1 .115-.118l-.608-.794c-.274.21-.52.528-.52.943h1zM8 5c-.491 0-.912-.1-1.19-.24a.86.86 0 0 1-.271-.194.213.213 0 0 1-.039-.063V4.5h-1c0 .568.447.947.862 1.154C6.807 5.877 7.387 6 8 6V5zm1.5-.5v.003a.213.213 0 0 1-.039.064.86.86 0 0 1-.27.193C8.91 4.9 8.49 5 8 5v1c.613 0 1.193-.123 1.638-.346.415-.207.862-.586.862-1.154h-1zm-.128-.15c.065.05.099.092.115.119.008.013.01.021.012.025L9.5 4.5h1c0-.415-.246-.733-.52-.943l-.608.794zM8.5 2.883c0 .696.497 1.182.872 1.469l.608-.794c-.333-.255-.48-.48-.48-.675h-1zm0-.382v.382h1V2.5h-1zm2.895-.5H9v1h2.395V2zm1.493 1.65A1.5 1.5 0 0 0 11.395 2v1a.5.5 0 0 1 .498.55l.995.1zm-.29 3.392l.29-3.4-.996-.085-.29 3.4.996.085zm.284-.542H12.1v1h.782v-1zm.675-.48c-.255.333-.48.48-.675.48v1c.696 0 1.182-.497 1.469-.872l-.794-.608zm.943-.52c-.415 0-.733.246-.943.52l.794.608a.459.459 0 0 1 .118-.115.113.113 0 0 1 .025-.012L14.5 6.5v-1zM16 8c0-.613-.123-1.193-.346-1.638-.207-.415-.586-.862-1.154-.862v1h.003l.01.003a.237.237 0 0 1 .053.036.86.86 0 0 1 .194.27c.14.28.24.7.24 1.191h1zm-1.5 2.5c.568 0 .947-.447 1.154-.862C15.877 9.193 16 8.613 16 8h-1c0 .491-.1.912-.24 1.19a.86.86 0 0 1-.194.271.214.214 0 0 1-.063.039H14.5v1zm-.943-.52c.21.274.528.52.943.52v-1l-.006-.001a.113.113 0 0 1-.025-.012.458.458 0 0 1-.118-.115l-.794.608zm-.675-.48c.195 0 .42.147.675.48l.794-.608c-.287-.375-.773-.872-1.469-.872v1zm-.782 0h.782v-1H12.1v1zm.788 2.858l-.29-3.4-.996.084.29 3.401.996-.085zM11.395 14a1.5 1.5 0 0 0 1.493-1.65l-.995.1a.5.5 0 0 1-.498.55v1zM9 14h2.395v-1H9v1zm.5-.5v-.382h-1v.382h1zm0-.382c0-.195.147-.42.48-.675l-.608-.794c-.375.287-.872.773-.872 1.469h1zm.48-.675c.274-.21.52-.528.52-.943h-1l-.001.006a.113.113 0 0 1-.012.025.459.459 0 0 1-.115.118l.608.794zm.52-.943c0-.568-.447-.947-.862-1.154C9.193 10.123 8.613 10 8 10v1c.492 0 .912.1 1.19.24.14.07.226.14.271.194a.214.214 0 0 1 .039.063v.003h1zM8 10c-.613 0-1.193.123-1.638.346-.415.207-.862.586-.862 1.154h1v-.003l.003-.01a.214.214 0 0 1 .036-.053.859.859 0 0 1 .27-.194C7.09 11.1 7.51 11 8 11v-1zm-2.5 1.5c0 .415.246.733.52.943l.608-.794a.459.459 0 0 1-.115-.118.113.113 0 0 1-.012-.025L6.5 11.5h-1zm.52.943c.333.255.48.48.48.675h1c0-.696-.497-1.182-.872-1.469l-.608.794zm.48.675v.382h1v-.382h-1zM4.605 14H7v-1H4.605v1zm-1.493-1.65A1.5 1.5 0 0 0 4.605 14v-1a.5.5 0 0 1-.498-.55l-.995-.1zm.29-3.393l-.29 3.401.996.085.29-3.4-.996-.086zm-.284.543H3.9v-1h-.782v1zm-.675.48c.255-.333.48-.48.675-.48v-1c-.696 0-1.182.497-1.469.872l.794.608zm-.943.52c.415 0 .733-.246.943-.52l-.794-.608a.459.459 0 0 1-.118.115.112.112 0 0 1-.025.012L1.5 9.5v1zM0 8c0 .613.123 1.193.346 1.638.207.415.586.862 1.154.862v-1h-.003a.213.213 0 0 1-.064-.039.86.86 0 0 1-.193-.27C1.1 8.91 1 8.49 1 8H0zm1.5-2.5c-.568 0-.947.447-1.154.862C.123 6.807 0 7.387 0 8h1c0-.492.1-.912.24-1.19a.86.86 0 0 1 .194-.271.213.213 0 0 1 .063-.039H1.5v-1zm.943.52c-.21-.274-.528-.52-.943-.52v1l.006.001a.112.112 0 0 1 .025.012c.027.016.068.05.118.115l.794-.608zm.675.48c-.195 0-.42-.147-.675-.48l-.794.608c.287.375.773.872 1.469.872v-1zm.782 0h-.782v1H3.9v-1zm-.788-2.858l.29 3.4.996-.085-.29-3.4-.996.085z"/>
                        </svg>
                      </div>
                      <div class="drop-text">
                        <p class="fw-medium">Eventos <span class="badge small bg-success ms-2">Novo</span></p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-12 border-top text-center">
                  <div class="p-3 small">Nosso Corre.</div>
                </div>
              </div>
            </div>
          </li>

          <!--dropdown submenu-->
          <li class="nav-item dropdown">
            <a id="navbarhome" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Páginas</a>
            <!--link-->
            <ul class="dropdown-menu dropdown-menu-lg-center" aria-labelledby="navbarhome">
              <!--submenu-->
              <li class="dropdown-submenu">
                <a id="sub2" class="dropdown-item dropdown-toggle" href="#">Páginas</a>
                <!--link-->
                <ul class="submenu dropdown-menu" aria-labelledby="sub2">
                  <li class="dropdown-submenu">
                    <a id="sub350" class="dropdown-item dropdown-toggle" href="#">
                    Básico</a>
                    <!--child submenu-->
                    <ul class="submenu dropdown-menu" aria-labelledby="sub350">
                      <li><a class="dropdown-item" href="#">Clássico</a></li>
                      <li><a class="dropdown-item" href="#">Em breve</a></li>
                      <li><a class="dropdown-item" href="#">FAQ</a></li>
                      <li><a class="dropdown-item" href="#">Termos de uso</a></li>
                    </ul>
                    <!--End child submenu-->
                  </li>
                  <li><a class="dropdown-item" href="#">Sobre nós</a></li>
                  <li><a class="dropdown-item" href="#">Carreira</a></li>
                  <li><a class="dropdown-item" href="#">Contatos</a></li>
                  <li><a class="dropdown-item" href="#">Portfolio</a></li>
                  <li><a class="dropdown-item" href="#">Preços</a></li>
                  <li><a class="dropdown-item" href="#">Serviços</a></li>
                </ul>
              </li>
              <!--end submenu-->
              <!--submenu-->
              <li class="dropdown-submenu">
                <a id="sub22" class="dropdown-item dropdown-toggle" href="#">Blog</a>

                <!--link-->
                <ul class="submenu dropdown-menu" aria-labelledby="sub22">
                  <li><a class="dropdown-item" href="#">Blog</a></li>
                  <li><a class="dropdown-item" href="#">Pesquisar</a></li>
                  <li><a class="dropdown-item" href="#">Autor</a></li>
                  <li><a class="dropdown-item" href="#">Artigo solo</a></li>
                  <li><a class="dropdown-item" href="#">Artigo Clássico</a></li>
                </ul>
              </li>
              <!--end submenu-->
              <!--submenu-->
              <li class="dropdown-submenu">
                <a id="sub221" class="dropdown-item dropdown-toggle" href="#">Usuário</a>

                <!--link-->
                <ul class="submenu dropdown-menu" aria-labelledby="sub221">
                  <li><a class="dropdown-item" href="#">Sing In</a></li>
                  <li><a class="dropdown-item" href="#">Sing Up</a></li>
                  <li><a class="dropdown-item" href="#">Esqueci minha senha</a></li>
                </ul>
              </li>
              <!--end submenu-->
            </ul>
            <!-- end link -->
          </li>

          <!--mega menu-->
            <div class="dropdown-menu dropdown-lg dropdown-menu-lg-center overflow-hidden p-0" aria-labelledby="navbarmega3">
              <div class="row g-0">
                <div class="col-lg-4">
                  <!-- header banner -->
                  <div class="position-relative d-none d-lg-block header-banner z-index-1" style="background-image: url('src/img-min/bg/bg-business.jpg');">
                    <!-- background overlay -->
                    <div class="overlay bg-gradient-primary opacity-90 z-index-n1"></div>
                    <!-- banner content -->
                    <div class="header-banner-content">
                      <div class="mb-4 px-lg-4">
                      </div>
                      <a class="btn btn-light btn-sm" href="index.html">
                        Overview 
                        <!-- <span class="fas fa-angle-right ms-2"></span> -->
                        <svg class="bi bi-arrow-right" width="1.5rem" height="1.5rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 01.708 0l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708-.708L12.793 8l-2.647-2.646a.5.5 0 010-.708z" clip-rule="evenodd"></path>
                          <path fill-rule="evenodd" d="M2 8a.5.5 0 01.5-.5H13a.5.5 0 010 1H2.5A.5.5 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                      </a>
                    </div>
                  </div><!-- end header banner -->
                </div>

                <div class="col-lg-8">
                  <div class="py-4 px-5">
                    <div class="row">
                      <div class="col-sm-6 col-lg-3">
                        <ul class="list-unstyled mb-3 mb-lg-0">
                          <li><a class="dropdown-item px-0" href="sections/blog.html">Blog</a></li>
                          <li><a class="dropdown-item px-0" href="sections/brand.html">Brand</a></li>
                          <li><a class="dropdown-item px-0" href="sections/collage.html">Collage</a></li>
                          <li><a class="dropdown-item px-0" href="sections/contact.html">Contact</a></li>
                          <li><a class="dropdown-item px-0" href="sections/content.html">Content</a></li>
                          <li><a class="dropdown-item px-0" href="sections/counter.html">Counter</a></li>
                          
                        </ul>
                      </div>

                      <div class="col-sm-6 col-lg-3">
                        <ul class="list-unstyled mb-3 mb-lg-0">
                          <li><a class="dropdown-item px-0" href="sections/cta.html">Cta</a></li>
                          <li><a class="dropdown-item px-0" href="sections/download.html">Download</a></li>
                          <li><a class="dropdown-item px-0" href="sections/faq.html">Faq</a></li>
                          <li><a class="dropdown-item px-0" href="sections/feature.html">Feature</a></li>
                          <li><a class="dropdown-item px-0" href="sections/footer.html">Footer</a></li>
                          <li><a class="dropdown-item px-0" href="sections/header.html">Header</a></li>

                        </ul>
                      </div>

                      <div class="col-sm-6 col-lg-3">
                        <ul class="list-unstyled mb-3 mb-lg-0">
                          <li><a class="dropdown-item px-0" href="sections/hero.html">Hero</a></li>
                          <li><a class="dropdown-item px-0" href="sections/newsletter.html">Newsletter</a></li>
                          <li><a class="dropdown-item px-0" href="sections/portfolio.html">Portfolio</a></li>
                          <li><a class="dropdown-item px-0" href="sections/pricing.html">Pricing</a></li>
                          <li><a class="dropdown-item px-0" href="sections/process.html">Process</a></li>
                          <li><a class="dropdown-item px-0" href="sections/progress.html">Progress</a></li>
                        </ul>
                      </div>

                      <div class="col-sm-6 col-lg-3">
                        <ul class="list-unstyled mb-3 mb-lg-0">
                          <li><a class="dropdown-item px-0" href="sections/review.html">Review</a></li>
                          <li><a class="dropdown-item px-0" href="sections/service.html">Service</a></li>
                          <li><a class="dropdown-item px-0" href="sections/slider.html">Slider</a></li>
                          <li><a class="dropdown-item px-0" href="sections/team.html">Team</a></li>
                          <li><a class="dropdown-item px-0" href="sections/video.html">Video</a></li>
                          <li><a class="dropdown-item px-0" href="sections/other.html">Other</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <!--medium menu with svg icon-->
          <li class="nav-item dropdown">
            <a id="navbarmd" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Documentos</a>

            <div class="dropdown-menu dropdown-menu-md dropdown-menu-lg-center p-4" aria-labelledby="navbarmd">
              <div class="list-group list-group-flush">
                <a class="list-group-item dropdown-item bg-tansparent d-flex align-item-center" href="">
                  <!-- Icon -->
                  <div class="align-self-center text-primary">
                    <svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' viewBox='0 0 512 512'><path stroke="currentColor" d='M416,221.25V416a48,48,0,0,1-48,48H144a48,48,0,0,1-48-48V96a48,48,0,0,1,48-48h98.75a32,32,0,0,1,22.62,9.37L406.63,198.63A32,32,0,0,1,416,221.25Z' style='fill:none;stroke-linejoin:round;stroke-width:32px'/><path stroke="currentColor" d='M256,56V176a32,32,0,0,0,32,32H408' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><line stroke="currentColor" x1='176' y1='288' x2='336' y2='288' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><line stroke="currentColor" x1='176' y1='368' x2='336' y2='368' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
                  </div>

                  <!-- Content -->
                  <div class="ms-4 align-self-center">
                    <h6 class="text-uppercase mb-1">
                      Documentação
                    </h6>
                    <p class="text-muted mb-0">
                      Guias para dev´s
                    </p>
                  </div>
                </a>

                <a class="list-group-item dropdown-item bg-tansparent d-flex align-item-center" href="#">
                  <!-- Icon -->
                  <div class="align-self-center text-primary">
                    <svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' viewBox='0 0 512 512'><rect stroke="currentColor" x='48' y='48' width='176' height='176' rx='20' ry='20' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><rect stroke="currentColor" x='288' y='48' width='176' height='176' rx='20' ry='20' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><rect stroke="currentColor" x='48' y='288' width='176' height='176' rx='20' ry='20' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><rect stroke="currentColor" x='288' y='288' width='176' height='176' rx='20' ry='20' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
                  </div>

                  <!-- Content -->
                  <div class="ms-4 align-self-center">
                    <h6 class="text-uppercase mb-1">
                      Componentes
                    </h6>
                    <p class="text-muted mb-0">
                      Lista de componentes
                    </p>
                  </div>
                </a>

                <a class="list-group-item dropdown-item bg-tansparent d-flex align-item-center" href="#">
                  <!-- Icon -->
                  <div class="align-self-center text-primary">
                    <svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' viewBox='0 0 512 512'><polyline stroke="currentColor" points='160 368 32 256 160 144' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><polyline stroke="currentColor" points='352 368 480 256 352 144' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><line stroke="currentColor" x1='304' y1='96' x2='208' y2='416' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
                  </div>

                  <!-- Content -->
                  <div class="ms-4 align-self-center">
                    <h6 class="text-uppercase mb-1">
                      Github
                    </h6>
                    <p class="text-muted mb-0">
                      Nosso códgios
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </li>
     
        </ul>
      </div>
    </div>
  </nav>
</header>

<main id="content">
  <div id="hero" class="section bg-gradient-primary py-6 py-lg-7 overflow-hidden">
    
    <!-- icon SVG do landing page -->
    <div class="particle">
      <div class="particle-move-up d-none d-lg-block particle-move-up-1 text-light z-index-n1 opacity-60">
        <img src="./src/images/svg/icons_Hero/graduation-cap.svg" alt="Graduação">  
      </div> 
      <div class="particle-move-up particle-move-up-2 text-light z-index-n1 opacity-60">
        <img src="./src/images/svg/icons_Hero/restaurant.svg" alt="Restaurante"> 
      </div> 
      <div class="particle-move-up d-none d-sm-block particle-move-up-3 text-light z-index-n1 opacity-60">
        <img src="./src/images/svg/icons_Hero/music-alt.svg" alt="Música"> 
      </div> 
      <div class="particle-move-up d-none d-xl-block particle-move-up-4 text-light z-index-n1 opacity-60">
        <img src="./src/images/svg/icons_Hero/headset.svg" alt="Headset">
      </div> 
      <div class="particle-move-up d-none d-sm-block particle-move-up-5 text-light z-index-n1 opacity-60">
        <img src="./src/images/svg/icons_Hero/football.svg" alt="Futebol">
      </div> 
      <div class="particle-move-up border-success text-light particle-move-up-6 z-index-n1 opacity-60">
        <img src="./src/images/svg/icons_Hero/books.svg" alt="Livros">
      </div> 
      <div class="particle-move-up particle-move-up-7 z-index-n1 text-light opacity-60">
        <img src="./src/images/svg/icons_Hero/world.svg" alt="Terra">
      </div> 
      <div class="particle-move-up particle-move-up-8 z-index-n1 text-light opacity-60">
        <img src="./src/images/svg/icons_Hero/gamepad.svg" alt="Game">
      </div> 
      <div class="particle-move-up particle-move-up-9 z-index-n1 text-light opacity-60">
        <img src="./src/images/svg/icons_Hero/hat-chef.svg" alt="Chef">
      </div> 
    </div>

    <!-- scribble -->
    <figure class="scribble scale-4 opacity-10 top-50 start-0 z-index-n1" data-aos="fade-up-right" data-delay-aos="300">
    <svg class="text-secondary" width="200" height="200" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
        <path fill="#009c3b" d="M42.5,-66.2C57.1,-56.7,72.5,-48.4,81.1,-35.3C89.8,-22.2,91.8,-4.4,89.6,13C87.3,30.4,80.7,47.4,69.5,60.1C58.3,72.9,42.4,81.5,25.9,84.6C9.5,87.8,-7.4,85.4,-22.7,79.8C-37.9,74.1,-51.5,65.2,-60.9,53.3C-70.4,41.4,-75.8,26.6,-79,10.8C-82.1,-5,-83.1,-21.7,-77.7,-36.4C-72.4,-51,-60.7,-63.7,-46.7,-73.5C-32.7,-83.3,-16.4,-90.1,-1.2,-88.2C13.9,-86.3,27.8,-75.7,42.5,-66.2Z" transform="translate(100 100)" />
    </svg>
    </figure>

    <!-- scribble -->
    <figure class="scribble scale-5 opacity-10 top-50 start-0 z-index-n1" data-aos="fade-up-right" data-delay-aos="200">
    <svg class="text-secondary" width="200" height="200" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
        <path fill="#009c3b" d="M42.5,-66.2C57.1,-56.7,72.5,-48.4,81.1,-35.3C89.8,-22.2,91.8,-4.4,89.6,13C87.3,30.4,80.7,47.4,69.5,60.1C58.3,72.9,42.4,81.5,25.9,84.6C9.5,87.8,-7.4,85.4,-22.7,79.8C-37.9,74.1,-51.5,65.2,-60.9,53.3C-70.4,41.4,-75.8,26.6,-79,10.8C-82.1,-5,-83.1,-21.7,-77.7,-36.4C-72.4,-51,-60.7,-63.7,-46.7,-73.5C-32.7,-83.3,-16.4,-90.1,-1.2,-88.2C13.9,-86.3,27.8,-75.7,42.5,-66.2Z" transform="translate(100 100)" />
    </svg>
    </figure>

    <!-- scribble -->
    <figure class="scribble scale-6 opacity-10 top-50 start-0 z-index-n1" data-aos="fade-up-right" data-delay-aos="100">
    <svg class="text-secondary" width="200" height="200" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
          <path fill="#ffdf00" d="M42.5,-66.2C57.1,-56.7,72.5,-48.4,81.1,-35.3C89.8,-22.2,91.8,-4.4,89.6,13C87.3,30.4,80.7,47.4,69.5,60.1C58.3,72.9,42.4,81.5,25.9,84.6C9.5,87.8,-7.4,85.4,-22.7,79.8C-37.9,74.1,-51.5,65.2,-60.9,53.3C-70.4,41.4,-75.8,26.6,-79,10.8C-82.1,-5,-83.1,-21.7,-77.7,-36.4C-72.4,-51,-60.7,-63.7,-46.7,-73.5C-32.7,-83.3,-16.4,-90.1,-1.2,-88.2C13.9,-86.3,27.8,-75.7,42.5,-66.2Z" transform="translate(100 100)" />
    </svg>
    </figure>

    <!-- scribble -->
    <figure class="scribble scale-7 opacity-10 top-50 start-0 z-index-n1" data-aos="fade-up-right">
    <svg class="text-secondary" width="200" height="200" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
        <path fill="#ffdf00" d="M42.5,-66.2C57.1,-56.7,72.5,-48.4,81.1,-35.3C89.8,-22.2,91.8,-4.4,89.6,13C87.3,30.4,80.7,47.4,69.5,60.1C58.3,72.9,42.4,81.5,25.9,84.6C9.5,87.8,-7.4,85.4,-22.7,79.8C-37.9,74.1,-51.5,65.2,-60.9,53.3C-70.4,41.4,-75.8,26.6,-79,10.8C-82.1,-5,-83.1,-21.7,-77.7,-36.4C-72.4,-51,-60.7,-63.7,-46.7,-73.5C-32.7,-83.3,-16.4,-90.1,-1.2,-88.2C13.9,-86.3,27.8,-75.7,42.5,-66.2Z" transform="translate(100 100)" />
    </svg>
    </figure>

    <div class="container">
      <!-- row -->
      <div class="row justify-content-center">
        <!-- hero content -->
        <div class="col-md-9 col-lg-4 align-self-center pe-lg-5" data-aos="flip-up">
          <div class="text-center text-lg-start mt-2 mt-lg-0 ms-1 my-1 px-5">
            <div class="mb-3">
              <span class="text-light ms-1">Sejam Bem-Vindo(a)</span>
            </div>
            <div class="mb-5">
              <h1 class="display-5 fw-bold text-white mb-3"><span class="text-warning">Se identifique.</span><span data-toggle="typed" data-options='{"strings": ["StartUp", "Apps", "Company", "Portfolio"]}'></span>
              </h1>
              <p class="lead text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia qui laborum fuga dignissimos, corporis sapiente!</p>
            </div>
            <a class="btn btn-white hover-button-up" href="#performance">
              <i class="fas fa-desktop"></i>
              <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="1.2rem" height="1.2rem" fill="currentColor" viewBox="0 0 512 512">
                <path d="M315.27,33,96,304H224L192.49,477.23a2.36,2.36,0,0,0,2.33,2.77h0a2.36,2.36,0,0,0,1.89-.95L416,208H288L319.66,34.75A2.45,2.45,0,0,0,317.22,32h0A2.42,2.42,0,0,0,315.27,33Z" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/>
                </svg> Descubra
            </a>
          </div>
        </div>
        <!-- hero image -->
        <div class="col-md-9 col-lg-8 align-self-center">
          <div class="px-2 px-sm-7 px-md-2 px-xl-7 mt-5 mt-lg-0 mb-n7" data-aos="fade-up" data-aos-delay="100">
            <img class="img-fluid animated-up-down" src="./src/images/svg/vetor_animation/Caramelo(NB).svg" alt="imagem Caramelo">
          </div>
        </div>
      </div><!-- end row -->
    </div>

    <!-- waves start -->
    <figure class="waves-bottom-center text-light mb-lg-n4 z-index-n1">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path class="opacity-20 translate-top-2" fill="currentColor"  fill-opacity="1" d="M0,160L60,186.7C120,213,240,267,360,245.3C480,224,600,128,720,106.7C840,85,960,139,1080,149.3C1200,160,1320,128,1380,112L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        <path class="opacity-30 translate-top-1" fill="currentColor"  fill-opacity="1" d="M0,160L60,186.7C120,213,240,267,360,245.3C480,224,600,128,720,106.7C840,85,960,139,1080,149.3C1200,160,1320,128,1380,112L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        <path fill="currentColor" fill-opacity="1" d="M0,160L60,186.7C120,213,240,267,360,245.3C480,224,600,128,720,106.7C840,85,960,139,1080,149.3C1200,160,1320,128,1380,112L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
      </svg>
    </figure>
  </div><!-- end hero -->

  <div id="performance" class="section py-6 py-md-7 bg-white">
        <div class="container">
          <!-- row -->
          <div class="row text-center">
            <div class="col-12">
              <div class="mb-5">
                <h2 class="h3 fw-bold">Tópicos</h2>
                <hr class="divider my-4 mx-auto bg-warning border-warning">
                <p class="lead text-muted">Alguns tópicos abordados</p>
              </div>
            </div>
          </div>
 
          <!-- showcase 1 -->
          <div class="row mb-5 mb-lg-7">
            <div class="col-lg-6 align-self-center">
              <div class="px-5 px-md-7 mb-5 mb-lg-0" data-aos="fade-right" data-aos-delay="100">
                <img src="./src/images/svg/vetor_animation/Futebol(NB).svg" class="img-fluid" alt="landing page">
              </div>
            </div>
            <div class="col-lg-6">
              <!-- processs vertical -->
              <ol class="process-vertical ps-0" data-aos="flip-up">
                <li class="process-vertical-item">
                  <div class="process-vertical-icon">
                    <div class="process-vertical-icon-bg me-auto rounded-circle p-2">
                      <span>
                      <img src="./src/images/svg/icons_Hero/football.svg" alt="Futebol">
                      </span>
                    </div>
                  </div>

                  <div class="process-vertical-content ms-lg-4">
                    <h3 class="h5">Futebol</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, dolor.</p>
                  </div>
                </li>

                <li class="process-vertical-item">
                  <div class="process-vertical-icon">
                    <div class="process-vertical-icon-bg me-auto rounded-circle p-2">
                      <span>
                        <svg class="bi bi-lightning text-primary" width="1.5rem" height="1.5rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M11.251.068a.5.5 0 01.227.58L9.677 6.5H13a.5.5 0 01.364.843l-8 8.5a.5.5 0 01-.842-.49L6.323 9.5H3a.5.5 0 01-.364-.843l8-8.5a.5.5 0 01.615-.09zM4.157 8.5H7a.5.5 0 01.478.647L6.11 13.59l5.732-6.09H9a.5.5 0 01-.478-.647L9.89 2.41 4.157 8.5z" clip-rule="evenodd"></path>
                        </svg>
                      </span>
                    </div>
                  </div>

                  <div class="process-vertical-content ms-lg-4">
                    <h3 class="h5">Dança</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione, sit?.</p>
                  </div>
                </li>

                <li class="process-vertical-item">
                  <div class="process-vertical-icon">
                    <div class="process-vertical-icon-bg me-auto rounded-circle p-2">
                      <span>
                      <img src="./src/images/svg/icons_Hero/basketball.svg" alt="Basquete">
                      </span>
                    </div>
                  </div>

                  <div class="process-vertical-content ms-lg-4">
                    <h3 class="h5">Basquete</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, quisquam..</p>
                  </div>
                </li>
              </ol><!-- end processs vertical -->
            </div>
          </div>
          
          <!-- showcase 2 -->
          <div class="row mb-5 mb-lg-7">
            <div class="col-lg-6 order-lg-2  align-self-center">
              <div class="px-5 px-md-7 mb-5 my-lg-0" data-aos="fade-left" data-aos-delay="100">
                <img src="./src/images/svg/vetor_animation/Culinaria(NB).svg" class="img-fluid" alt="landing page">
              </div>
            </div>

            <div class="col-lg-6 order-lg-1">
              <!-- processs vertical -->
              <ol class="process-vertical ps-0" data-aos="flip-up">
                <li class="process-vertical-item">
                  <div class="process-vertical-icon">
                    <div class="process-vertical-icon-bg me-auto rounded-circle p-2">
                      <span>
                        <svg class="bi bi-bootstrap text-primary" width="1.5rem" height="1.5rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M12 1H4a3 3 0 00-3 3v8a3 3 0 003 3h8a3 3 0 003-3V4a3 3 0 00-3-3zM4 0a4 4 0 00-4 4v8a4 4 0 004 4h8a4 4 0 004-4V4a4 4 0 00-4-4H4z" clip-rule="evenodd"></path>
                          <path fill-rule="evenodd" d="M8.537 12H5.062V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396zM6.375 4.658v2.467h1.558c1.16 0 1.764-.428 1.764-1.23 0-.78-.569-1.237-1.541-1.237H6.375zm1.898 6.229H6.375V8.162h1.822c1.236 0 1.887.463 1.887 1.348 0 .896-.627 1.377-1.811 1.377z" clip-rule="evenodd"></path>
                        </svg>
                      </span>
                    </div>
                  </div>

                  <div class="process-vertical-content ms-lg-4">
                    <h3 class="h5">Feijoada</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, a?</p>
                  </div>
                </li>

                <li class="process-vertical-item">
                  <div class="process-vertical-icon">
                    <div class="process-vertical-icon-bg me-auto rounded-circle p-2">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="2rem" height="2rem" viewBox="5.006 23.881 199.987 95.238"><title>W3C Logo</title><desc>W3C is a trademark (registered in numerous countries) of the World Wide Web Consortium; marks of W3C are registered and held by its host institutions MIT, ERCIM, and Keio. For more information see: http://www.w3.org/</desc><path d="M52.352 24.412l16.955 57.643L86.26 24.412h45.965v5.73l-17.308 29.816c6.08 1.949 10.679 5.498 13.795 10.641 3.119 5.146 4.681 11.184 4.681 18.121 0 8.578-2.283 15.787-6.845 21.632-4.562 5.844-10.465 8.768-17.713 8.768-5.458 0-10.211-1.732-14.262-5.201-4.054-3.469-7.054-8.164-9.002-14.09l9.585-3.975c1.404 3.586 3.256 6.412 5.556 8.475 2.299 2.066 5.009 3.1 8.125 3.1 3.271 0 6.041-1.832 8.302-5.494 2.262-3.664 3.393-8.065 3.393-13.215 0-5.691-1.209-10.096-3.623-13.213-2.811-3.662-7.215-5.496-13.216-5.496h-4.674V64.4l16.367-28.297H95.63l-1.124 1.914-24.031 81.087h-1.169l-17.54-58.69-17.536 58.69h-1.168L5.006 24.408h12.276l16.953 57.643 11.46-38.815-5.611-18.826h12.273v-.004l-.005.006z" fill="currentColor"></path><path fill="currentColor" d="M196.02 24.412c-2.41 0-4.574.869-6.215 2.535-1.74 1.768-2.709 4.051-2.709 6.412s.922 4.549 2.611 6.266c1.717 1.74 3.928 2.686 6.314 2.686 2.334 0 4.6-.945 6.36-2.658 1.688-1.641 2.611-3.828 2.611-6.289a8.944 8.944 0 0 0-2.584-6.289c-1.7-1.745-3.94-2.663-6.38-2.663h-.008zm7.78 9.024c0 2.064-.799 3.979-2.26 5.393-1.543 1.494-3.457 2.289-5.569 2.289-1.986 0-3.949-.818-5.418-2.311-1.466-1.494-2.287-3.406-2.287-5.443 0-2.039.846-4.027 2.36-5.566 1.416-1.443 3.328-2.211 5.416-2.211 2.14 0 4.051.799 5.543 2.311 1.45 1.438 2.22 3.373 2.22 5.538h-.005zm-7.53-5.321h-3.826v10.143h1.914v-4.324h1.892l2.063 4.324h2.137l-2.264-4.621c1.465-.301 2.312-1.293 2.312-2.734.01-1.84-1.391-2.788-4.221-2.788h-.007zm-.35 1.244c1.789 0 2.609.498 2.609 1.74 0 1.191-.82 1.617-2.563 1.617h-1.616v-3.357h1.57zM180.971 23.881l1.987 12.09-7.039 13.469s-2.701-5.715-7.19-8.875c-3.781-2.664-6.246-3.244-10.101-2.449-4.948 1.021-10.562 6.938-13.01 14.234-2.931 8.727-2.959 12.953-3.063 16.832-.164 6.223.816 9.896.816 9.896s-4.275-7.906-4.234-19.486c.027-8.268 1.328-15.764 5.152-23.16 3.365-6.504 8.367-10.408 12.807-10.867 4.59-.473 8.215 1.738 11.021 4.131 2.94 2.516 5.916 8.01 5.916 8.01l6.92-13.825h.018zM181.84 92.289s-3.111 5.562-5.049 7.705c-1.939 2.145-5.408 5.918-9.691 7.807-4.283 1.887-6.529 2.24-10.764 1.836-4.229-.406-8.16-2.854-9.537-3.877-1.377-1.021-4.898-4.029-6.889-6.836-1.992-2.807-5.102-8.416-5.102-8.416s1.731 5.623 2.819 8.01c.623 1.375 2.541 5.576 5.267 9.232 2.541 3.41 7.475 9.283 14.973 10.609 7.498 1.328 12.65-2.041 13.926-2.855 1.273-.814 3.961-3.066 5.664-4.889 1.775-1.896 3.457-4.32 4.385-5.773.682-1.062 1.789-3.215 1.789-3.215l-1.79-9.331-.001-.007z"></path></svg>
                      </span>
                    </div>
                  </div>

                  <div class="process-vertical-content ms-lg-4">
                    <h3 class="h5">Brigadeiro</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium, laboriosam!.</p>
                  </div>
                </li>

                <li class="process-vertical-item">
                  <div class="process-vertical-icon">
                    <div class="process-vertical-icon-bg me-auto rounded-circle p-2">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="1.5rem" height="1.5rem" fill="currentColor" viewBox="0 0 512 512"><line x1="48" y1="112" x2="336" y2="112" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="192" y1="64" x2="192" y2="112" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><polyline points="272 448 368 224 464 448" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><line x1="301.5" y1="384" x2="434.5" y2="384" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><path d="M281.3,112S257,206,199,277,80,384,80,384" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/><path d="M256,336s-35-27-72-75-56-85-56-85" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/></svg>
                      </span>
                    </div>
                  </div>

                  <div class="process-vertical-content ms-lg-4">
                    <h3 class="h5">Coxinha</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, quod!</p>
                  </div>
                </li>
              </ol><!-- end processs vertical -->
            </div>
          </div>

          <!-- showcase 3 -->
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="px-5 px-md-7 mb-5 my-lg-0" data-aos="fade-right" data-aos-delay="100">
                <img src="./src/images/svg/vetor_animation/Music(NB).svg" class="img-fluid" alt="landing page">
              </div>
            </div>
            <div class="col-lg-6">
              <!-- processs vertical -->
              <ol class="process-vertical ps-0" data-aos="flip-up">
                <li class="process-vertical-item">
                  <div class="process-vertical-icon">
                    <div class="process-vertical-icon-bg me-auto rounded-circle p-2">
                      <span>
                        <svg class="bi bi-arrows-fullscreen text-primary" width="1.5rem" height="1.5rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M1.464 10.536a.5.5 0 01.5.5v3h3a.5.5 0 010 1h-3.5a.5.5 0 01-.5-.5v-3.5a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
                          <path fill-rule="evenodd" d="M5.964 10a.5.5 0 010 .707l-4.146 4.147a.5.5 0 01-.707-.708L5.257 10a.5.5 0 01.707 0zm8.854-8.854a.5.5 0 010 .708L10.672 6a.5.5 0 01-.708-.707l4.147-4.147a.5.5 0 01.707 0z" clip-rule="evenodd"></path>
                          <path fill-rule="evenodd" d="M10.5 1.5A.5.5 0 0111 1h3.5a.5.5 0 01.5.5V5a.5.5 0 01-1 0V2h-3a.5.5 0 01-.5-.5zm4 9a.5.5 0 00-.5.5v3h-3a.5.5 0 000 1h3.5a.5.5 0 00.5-.5V11a.5.5 0 00-.5-.5z" clip-rule="evenodd"></path>
                          <path fill-rule="evenodd" d="M10 9.964a.5.5 0 000 .708l4.146 4.146a.5.5 0 00.708-.707l-4.147-4.147a.5.5 0 00-.707 0zM1.182 1.146a.5.5 0 000 .708L5.328 6a.5.5 0 00.708-.707L1.889 1.146a.5.5 0 00-.707 0z" clip-rule="evenodd"></path>
                          <path fill-rule="evenodd" d="M5.5 1.5A.5.5 0 005 1H1.5a.5.5 0 00-.5.5V5a.5.5 0 001 0V2h3a.5.5 0 00.5-.5z" clip-rule="evenodd"></path>
                        </svg>
                      </span>
                    </div>
                  </div>

                  <div class="process-vertical-content ms-lg-4">
                    <h3 class="h5">Sim</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, pariatur!</p>
                  </div>
                </li>

                <li class="process-vertical-item">
                  <div class="process-vertical-icon">
                    <div class="process-vertical-icon-bg me-auto rounded-circle p-2">
                      <span>
                        <svg class="bi bi-image text-primary" width="1.5rem" height="1.5rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M14.002 2h-12a1 1 0 00-1 1v10a1 1 0 001 1h12a1 1 0 001-1V3a1 1 0 00-1-1zm-12-1a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V3a2 2 0 00-2-2h-12z" clip-rule="evenodd"></path>
                          <path d="M10.648 7.646a.5.5 0 01.577-.093L15.002 9.5V14h-14v-2l2.646-2.354a.5.5 0 01.63-.062l2.66 1.773 3.71-3.71z"></path>
                          <path fill-rule="evenodd" d="M4.502 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" clip-rule="evenodd"></path>
                        </svg>
                      </span>
                    </div>
                  </div>

                  <div class="process-vertical-content ms-lg-4">
                    <h3 class="h5">Não</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, incidunt.</p>
                  </div>
                </li>

                <li class="process-vertical-item">
                  <div class="process-vertical-icon">
                    <div class="process-vertical-icon-bg me-auto rounded-circle p-2">
                      <span>
                        <svg class="bi bi-filter text-primary" width="1.5rem" height="1.5rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M6 10.5a.5.5 0 01.5-.5h3a.5.5 0 010 1h-3a.5.5 0 01-.5-.5zm-2-3a.5.5 0 01.5-.5h7a.5.5 0 010 1h-7a.5.5 0 01-.5-.5zm-2-3a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5z" clip-rule="evenodd"></path>
                        </svg>
                      </span>
                    </div>
                  </div>

                  <div class="process-vertical-content ms-lg-4">
                    <h3 class="h5">Talvez</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, dolor.</p>
                  </div>
                </li>
              </ol><!-- end processs vertical -->
            </div>
          </div>
        </div>
      </div><!-- End Performance -->
      
  <!-- Require com os links externos -->
  <?php require("sources.html"); ?>
  
  <script src="./src/js/main.js"></script>
</body>
</html>