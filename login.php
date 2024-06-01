<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Signin Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    html,
body {
  height: 100%;
}

.form-signin {
  max-width: 330px;
  padding: 1rem;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <!-- /<link href="sign-in.css" rel="stylesheet"> -->
  </head>
  <body class="d-flex align-items-center py-4 bg-body-">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://th.bing.com/th/id/OIP.JvEbb3apDQbxq79aSQj75AHaEK?w=303&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://th.bing.com/th/id/OIP.vNEHk6Prhnth8i7lAGY1vAHaFj?w=239&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<main class="form-signin w-100 m-auto">
  <form>
    <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
  </form>
</main>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
