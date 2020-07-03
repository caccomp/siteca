<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>
  Sobre Nós | Centro Acadêmico de Ciência da Computação
  </title>

  <!-- Mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/site/plugins/bootstrap/bootstrap.min.css')}}">

  <!-- Slick slider -->
  <link rel="stylesheet" href="{{ asset('assets/site/plugins/slick/slick.css')}}">

  <!-- Themify icons -->
  <link rel="stylesheet" href="{{ asset('assets/site/plugins/themify-icons/themify-icons.css')}}">

  <!-- Main stylesheet -->
  <link href="{{ asset('assets/site/css/style.css')}}" rel="stylesheet">
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/site/images/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{ asset('assets/site/images/favicon.ico')}}" type="image/x-icon">

</head>

<body>

<header class="navigation fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand font-tertiary h3" href="index.html"><img src="{{ asset('assets/site/images/logo.png')}}" alt="CACCOMP"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/sobre">Sobre Nós</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/posts">Postagens</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/projetos">Projetos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contato">Contato</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<!-- Título da página -->
<section class="page-title-alt bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-white font-tertiary">Sobre nós</h1>
      </div>
    </div>
  </div>
</section>
<!-- /Título da página -->


<!-- jQuery -->
<script src="{{ asset('assets/site/plugins/jQuery/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/site/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- Slick slider -->
<script src="{{ asset('assets/site/plugins/slick/slick.min.js')}}"></script>
<!-- Filter -->
<script src="{{ asset('assets/site/plugins/shuffle/shuffle.min.js')}}"></script>
<!-- Main script -->
<script src="{{ asset('assets/site/js/script.js')}}"></script>

</body>
</html>