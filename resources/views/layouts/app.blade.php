<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Customer Manager')</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
</head>
<body class="d-flex flex-column min-vh-100">

  <header class="bg-dark text-white py-4 mb-2">
    <div class="container text-center">
      <h1 class="mb-0">Ryan Lemons DWC Project</h1>
    </div>
  </header>

  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a class="navbar-brand" href="https://www.dwc-k.com/" target="_blank">Dealers Warehouse</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link" href="https://leodigital.io/resume" target="_blank">Resume</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="https://capstone.leodigital.io/" target="_blank">Capstone</a>
            </li>
        </ul>
        </div>
    </div>
  </nav>

  <main class="flex-grow-1 container my-5">
    @yield('content')
  </main>

  <footer class="bg-dark text-white text-center py-3 mt-5">
    <div class="container">
      <small>&copy; {{ date('Y') }} Ryan Lemons | Built with Bootstrap & Laravel Blade</small>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
