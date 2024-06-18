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
  <link href="css/login.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="">
          </a>
          

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
                <a href="index.php">Início</a>
                <a href="#contato">Contatos</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- contact section -->

  <section class="contact_section layout_padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form_container">
            <div class="heading_container">
              <img src="images/heading-img.png" alt="">
              <h2>
                Login
              </h2>
              <p>
                Inicie sua sessão para efetuar compras.
              </p>
            </div>
              <form action="controle_sessao.php" method="post">
             
              <div>
                  <input type="email" placeholder="Email" name="email" />
              </div>

              <div>
                  <input type="password" placeholder="Senha" name="senha" />
              </div>
             
              <div class="d-flex ">
                <button>
                  Entrar
                </button>
              </div>
            </form>
          </div>
        </div>

        <div class="col-md-6">
          <div class="img-box">
            <img src="images/slider-img.png" alt="">
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <!-- end contact section -->


  <!-- info section -->
  <section class="info_section " id="contato">
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
              Redes sociais
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