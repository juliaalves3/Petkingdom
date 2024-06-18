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
  <link href="css/comprar.css" rel="stylesheet" />
  <link href="css/comprar-form.css" rel="stylesheet" />
 

  <!-- responsive style -->
  <link href="css/comprar-form.css" rel="stylesheet" />
  

  
  
</head>

<body class="sub_page">
    <?php
        // Início da sessão (deve ser chamado em todas as páginas que precisam da sessão)
    session_start();

    // Verifique se o cliente está logado (exemplo básico de verificação de login)
    if (!isset($_SESSION['idCLIENTE'])) {
        // Redireciona para a página de login se não estiver logado
        header('Location: login.html');
        exit;
    }

    // Agora $_SESSION['idCLIENTE'] contém o ID do cliente logado
    $idClienteLogado = $_SESSION['idCLIENTE'];
?>

  <div class="hero_area ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
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
                <a href="logout.php">Sair</a>
                <a href="#contatos">Contatos</a>
              </div>
            </div>
        </nav>
    </header>
    <!-- end header section -->

  <!-- us section -->

  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <img src="images/heading-img.png" alt="">
        <h2>
          Sessões de compra
        </h2>
        <p>
          Escolha a sessão que desejar.
        </p>
      </div>
      <div class="us_container">
        <div class="box">
          <div class="img1-box">
            <img src="images/pet1.png" alt="">
          </div>
          <div class="img2-box">
            <img src="images/dog.png" alt="">
          </div>
          <div class="detail-box">
              <a href="#brinquedo">
                <h6>Brinquedos</h6>
              </a>
          </div>
        </div>
        <div class="box">
          <div class="img1-box">
            <img src="images/pet2.png" alt="">
          </div>
          <div class="img2-box">
            <img src="images/dog.png" alt="">
          </div>
          <div class="detail-box">
              <a href="#alimentacao">
                  <h6>Alimentação</h6>
              </a>
          </div>
        </div>
        <div class="box">
          <div class="img1-box">
            <img src="images/pet1.png" alt="">
          </div>
          <div class="img2-box">
            <img src="images/dog.png" alt="">
          </div>
          <div class="detail-box">
             <a href="#higiene">
               <h6> Higiene</h6>
             </a>
          </div>
        </div>
      </div>

  <!-- end us section -->

   <!-- food section -->
   <section class="food_section layout_padding" id="alimentacao">
        <div class="container">
            <div class="heading_container">
                <img src="images/heading-img.png" alt="">
                <h2>Alimentação</h2>
            </div>
            <div class="food_container">
                <div class="box">
                    <div class="img-box">
                        <img src="images/f1.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>Ração para pequeno porte</h6>
                        <h3><span>R$</span>130,00</h3>
                        <a href="#form" class="comprar-link">Comprar</a>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="images/f2.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>Ração para grande porte</h6>
                        <h3><span>R$</span>200,00</h3>
                        <a href="#form" class="comprar-link">Comprar</a>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="images/f3.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>Kit ração G/P porte</h6>
                        <h3><span>R$</span>300,00</h3>
                        <a href="#form" class="comprar-link">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- end food section -->
   
  <!-- brinquedo section -->
  
  <section class="brinquedo_section layout_padding" id="brinquedo" >
    <div class="container">
      <div class="heading_container">
        <img src="images/heading-img.png" alt="">
        <h2>
          Brinquedos
        </h2>
      </div>
        <div class="brinquedo_container" >
        <div class="box">
          <div class="img-box">
            <img src="images/pelucia.png" alt="">
          </div>
          <div class="detail-box">
            <h6>Pelúcia</h6>
            <h3><span>R$</span>30,00</h3>
           <a href="#form" class="comprar-link">Comprar</a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/bola.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Bola
            </h6>
            <h3>
              <span>R$</span>19,90
            </h3>
            <a href="#form" class="comprar-link">Comprar</a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/coleira .png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Coleira
            </h6>
            <h3>
              <span>R$</span>25,00
            </h3>
            <a href="#form" class="comprar-link">Comprar</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end brinquedo section -->
  
  
  <!-- higiene section -->
  
  <section class="higiene_section layout_padding" id="higiene" >
    <div class="container">
      <div class="heading_container">
        <img src="images/heading-img.png" alt="">
        <h2>
          Higiene
        </h2>
      </div>
        <div class="higiene_container" >
        <div class="box">
          <div class="img-box">
            <img src="images/shampoo.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Kit shampoo
            </h6>
            <h3>
              <span>R$</span>60,00
            </h3>
           <a href="#form" class="comprar-link">Comprar</a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/tapete.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Tapete higiênico
            </h6>
            <h3>
              <span>R$</span>30,90
            </h3>
            <a href="#form" class="comprar-link">Comprar</a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/bucal.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Kit bucal
            </h6>
            <h3>
              <span>R$</span>40,00
            </h3>
            <a href="#form" class="comprar-link">Comprar</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end higiene section -->
<!-- Modal de Compra -->
<div id="modal" class="modal" style="display: none;">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Formulário de Compra</h2>
    <form id="compraForm" action="pedido.php" method="post">
      <label for="produto">Produto:</label>
      <input type="text" id="produto" name="produto" readonly>
      
      <label for="quantidade">Quantidade:</label>
      <input type="number" id="quantidade" name="quantidade" min="1" value="1">
      
      <label for="valorTotal">Valor Total (R$):</label>
      <input type="text" id="valorTotal" name="valorTotal" readonly>
      
      <div class="pagamento_container">
        <div class="pagamento_item">
          <input type="radio" id="cartao_debito" name="forma_pagamento" value="cartao_debito">
          <label for="cartao_debito">Cartão de Débito</label>
        </div>
        <div class="pagamento_item">
          <input type="radio" id="cartao_credito" name="forma_pagamento" value="cartao_credito">
          <label for="cartao_credito">Cartão de Crédito</label>
        </div>
      </div>
      
      <button type="submit" id="finalizar-compra">Finalizar Compra</button>
    </form>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const comprarLinks = document.querySelectorAll('.comprar-link');
    const produtoInput = document.getElementById('produto');
    const quantidadeInput = document.getElementById('quantidade');
    const valorTotalInput = document.getElementById('valorTotal');
    const modal = document.getElementById('modal');
    const closeButton = modal.querySelector('.close');

    let precoAtual = 0;

    // Event listener para cada link "comprar"
    comprarLinks.forEach(link => {
      link.addEventListener('click', (event) => {
        event.preventDefault(); // Previne o comportamento padrão do link

        // Captura os dados do produto
        const detailBox = link.closest('.detail-box');
        const produto = detailBox.querySelector('h6').innerText;
        const precoText = detailBox.querySelector('h3').innerText;
        precoAtual = parseFloat(precoText.replace('R$', '').replace(',', '.'));

        // Preenche o formulário com os dados do produto
        produtoInput.value = produto;
        calcularValorTotal(precoAtual);
        modal.style.display = 'block'; // Mostra o modal
      });
    });

    // Event listener para calcular o valor total ao alterar a quantidade
    quantidadeInput.addEventListener('input', () => {
      calcularValorTotal(precoAtual);
    });

    // Event listener para fechar o modal ao clicar no botão de fechar (X)
    closeButton.addEventListener('click', () => {
      modal.style.display = 'none';
    });

    // Função para calcular o valor total com base na quantidade e preço
    function calcularValorTotal(preco) {
      const quantidade = parseInt(quantidadeInput.value) || 1;
      const valorTotal = (preco * quantidade).toFixed(2);
      valorTotalInput.value = valorTotal;
    }
  });
</script>




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
