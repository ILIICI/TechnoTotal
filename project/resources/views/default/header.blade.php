<header>
   <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="TechnoTotal" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
         <i class="fa fa-bars" style="color:#000; font-size:28px;"></i>
        </span>
      </button>
      <div class="navigation collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">Acasa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">Despre Noi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contactus">Contacte</a>
          </li>
        </ul>
        <div class="sign_btn"><a href="{{ url('login') }}">DEALERI</a></div>
      </div>
    </nav>
    @include('default.backbutton')
    @if (Request::url() == 'http://192.168.0.12:8000/products' || Request::url() == 'http://192.168.0.12:8000/search')

    @else
    <section class="container-fluid banner_main">
      <div class="row d_flex">
         <div class="col-md-5">
            <div class="text-bg">
               <h1>Service centru si <br>magazin</h1>
               <strong>Desktop, Laptop, Imprimante</strong>
               <span>si multe altele...</span>
               <a href="/products?page=1">Catalog Produse</a>
            </div>
         </div>
         <div class="col-md-7 padding_right1">
            <div class="text-img">
               <figure><img src="{{ asset('assets/images/top_img.png') }}" alt="#"/></figure>
               <h3>TechnoTotal</h3>
            </div>
         </div>
      </div>
   </section>
    @endif
</header>