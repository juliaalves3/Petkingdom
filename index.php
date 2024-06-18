<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Drool</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
           
          </a>
          <div class="" id="">
            <div class="User_option">
              
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="#contatos">Contatos</a>
                <a href="login.html">Comprar</a>
                <a href="login.html">Login</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    
                    <h1>
                     Pet <br>
                      <span>
                        Kingdom
                      </span>
                    </h1>
                    <p>
                      O paraíso real dos pets.
                    </p>
                    <div class="btn-box">
                      <a href="login.html" class="btn-1">
                        Login
                      </a>
                      <a href="#cadastro" class="btn-2">
                        Cadastre-se
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          
  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="detail-box">
        <div class="heading_container">
          <img src="images/heading-img.png" alt="">
          <h2>
            Sobre nós
          </h2>
        </div>
        <p>
          Bem-vindo ao Pet Kingdom, o lugar onde seu pet é tratado como realeza. Nosso objetivo é proporcionar qualidade, oferecendo os melhores produtos para o bem-estar do seu amigo de quatro patas. No Pet Kingdom, você encontrará uma ampla variedade de rações premium, acessórios elegantes e brinquedos inovadores que garantem a diversão e a saúde do seu pet. Clique em saber mais para conhecer alguns dos produtos que oferecemos.
        </p>
        <div class="btn-box">
          <a href="#saber">
            <span>
              Saber mais
            </span>
            <img src="images/link-arrow.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- animal section -->

  <section class="animal_section layout_padding" id="saber">
    <div class="container">
      <div class="animal_container">
        <div class="box b1">
          <div class="img-box">
            <img src="images/brinquedo.jpg" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Brinquedos
            </h5>
            <p>
              Dos educativos aos mais divertidos,para todas as espécies, garantindo assim a diversão do seu pet.
            </p>
          </div>
        </div>
        <div class="box b2">
          <div class="img-box">
            <img src="images/ração.jpg" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Ração
            </h5>
            <p>
              Para todas as espécies desde os pássaros aos gatos, oferecemos nutrição de exelência para seu melhor amigo.
            </p>
          </div>
        </div>
        <div class="box b1">
          <div class="img-box">
            <img src="images/shampoo.jpg" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Produtos de higiene
            </h5>
            <p>
              Temos tudo que precisa para a limpeza e a higiene do seu pet.
            </p>
          </div>
        </div>
        <div class="box b2">
          <div class="img-box">
            <img src="images/coleira.jpg" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Guias
            </h5>
            <p>
              Temos variedade de guias para que não falte na rotina do seu pet um bom e seguro passeio.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end animal section -->

 

  <!-- contact section -->

  <section class="contact_section layout_padding-top" id="cadastro">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form_container">
            <div class="heading_container">
              <img src="images/heading-img.png" alt="">
              <h2>
                Cadastre-se
              </h2>
            </div>
              <form action="receber_cadastro.php" method="post">
              <div>
                  <input type="text" placeholder="Nome completo " name="nome" />
              </div>
              <div>
                  <input type="text" placeholder="Telefone" name="telefone" />
              </div>
              <div>
                  <input type="email" placeholder="Email" name="email" />
              </div>
              <div>
                  <input type="text"  placeholder="Senha" name="senha" />
              </div>
              <div class="d-flex ">
                <button>
                   Cadastrar
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->


  <!-- info section -->
  <section class="info_section " id="contatos">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="info_contact">
            <h5>
              Contatos
            </h5>
            <div>
              <img src="images/call.png" alt="" />
              <p>
                +55 (61) 996365107
              </p>
            </div>
            <div>
              <img src="images/mail.png" alt="" />
              <p>
                petkingdom@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_time">
            <h5>
              Horário de funcionamento
            </h5>
            <div>
              <p>
                Segunda a sexta
              </p>
            </div>
            <div>
              <p>
                07:30 a 18:00 
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="info_social">
            <h5>
              Redes Sociais
            </h5>
            <div class="social_container">
              <div>
                <a href="https://pt-br.facebook.com/login/device-based/regular/login/">
                  <img src="images/fb.png" alt="" />
                </a>
              </div>
              <div>
                <a href="https://x.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoicHQifQ%3D%3D%22%7D">
                  <img src="images/twitter.png" alt="" />
                </a>
              </div>
              <div>
                <a href="https://www.linkedin.com/home">
                  <img src="images/linkedin.png" alt="" />
                </a>
              </div>
              <div>
                <a href="https://www.instagram.com/accounts/login/?hl=pt-br">
                  <img src="images/instagram.png" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section ">
    <p>
      &copy; 2024 Produzido por Júlia Alves e Fernanda Faria. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- end  footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width")
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
  </script>

</body>

</html>
