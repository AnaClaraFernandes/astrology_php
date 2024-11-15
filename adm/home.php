<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <link rel="stylesheet" href="./css/style1.css">
</head>
<body>    
    <main>
        <header id="header">
            <nav>
                <div class="logo">
                    <img src="img/logo-mysta.png" alt="Logo" style="width: 70px;">
                </div>
                <header id="header">
            <nav>
                <div class="logo">
                    <img src="img/logo-mysta.png" alt="Logo" style="width: 70px;">
                </div>
                <?php
                  session_start();
                  if(isset($_SESSION['login'])){
                      $login = $_SESSION['login'];
                      $nome = $_SESSION['nome'];
                      $nivel = $_SESSION['nivel'];

                      echo "Bem vindo, $nome | ";
                      if($nivel == 'adm'){
                        echo "<a href='../adm/adm.php'> Admin </a> | ";
                      }
                      echo "<a href='/astrology/adm/logout.php'> Logout </a>";
                  }else{
                    echo"
                        <a href='/astrology/adm/login.php'> LOGIN </a> |
                        <a href='/astrology/usuarios/usuarios.php'> Não Possuo Cadastro </a>
                    ";
                  }
              ?>
            </nav>
        </header>
        </header>

        <div class="main2">
            <div class="text-main">
                <h3>Faça uma pergunta gratuitamente</h3>
                <h1>Cartas de tarô e leitura de cristais</h1>
                <p>O futuro está sempre em movimento. Apenas lembre-se: você é um mestre do momento presente. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div id="button-main2"><a href="#" ><button>Começar</button></a></div>
            </div>
        </div>
        
        <section class="cards1">
            <div class="card-main">
                <img src="img/card1-1.png" alt="" style="width: 90px; margin-right: 20px;">
                <div class="text">
                    <h2>Privacidade</h2>
                    <p>As informações obtidas durante a consulta são privadas.</p>
                </div>
            </div>
        
            <div class="card-main">
                <img src="img/card1-2.png" alt="" style="width: 90px; margin-right: 20px;">
                <div class="text">
                    <h2>Garantia de resultado</h2>
                    <p>Nós fornecemos um resultado 100% garantido</p>
                </div>
            </div>
        
            <div class="card-main">
                <img src="img/card1-3.png" alt="" style="width: 90px; margin-right: 20px;">
                <div class="text">
                    <h2>Competência</h2>
                    <p>Nós só assumimos problemas que podemos resolver</p>
                </div>
            </div>
        </section>
    </main>

    <section class="section1">
        <div class="img-section1">
            <img src="img/Design sem nome (33).png" alt="" id="img-mao">
        </div>
        <div class="text-section1">
            <h3>O que fazemos?</h3>
            <h1> O tarô é uma ferramenta poderosa para a transformação</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mi Tellus, pulvinar vel tempus eget, finibus vitae ante. Fusce sit amet velit eleifend, iaculis velit quis, malesuada lacus. Vestibulum sodales magna a volutpat tempus. Mauris vestibulum id urna viverra ultrices. Nullam rhoncus elit eget libero varius dapibus.
            </p>
            <div class="button-section1"><a href="#"><button>Começar</button></a></div>
            
        </div>
    </section>
    

    <section class="section2">
        <div class="text-section2">
            <h3>Sobre Cartões</h3>
            <h1>Desvende os mistérios do universo</h1>
        </div>

        <div class="cont-section2">
            <div class="cards1-section2">
                <div class="c1">
                    <img src="img/lua-crescente.png" alt="">
                    <div class="cont-c1">
                        <h2>Clareza na vida</h2>
                        <p>Fusce sit amet velit eleifend, iaculis velit quis, malesuada</p>
                    </div>
                </div>
                <br> <br> <br> <br> <br> <br> <br>
                <div class="c1">
                    <img src="img/lua-crescente.png" alt="">
                    <div class="cont-c1">
                        <h2>Clareza na vida</h2>
                        <p>Fusce sit amet velit eleifend, iaculis velit quis, malesuada</p>
                    </div>
                </div>
                <br> <br> <br> <br> <br> <br> <br>
                <div class="c1">
                    <img src="img/lua-crescente.png" alt="">
                    <div class="cont-c1">
                        <h2>Clareza na vida</h2>
                        <p>Fusce sit amet velit eleifend, iaculis velit quis, malesuada</p>
                    </div>
                </div>
            </div>

            <div class="img-section2"><img src="img/ig-carta.png" alt=""></div>

            <div class="cards2-section2">
                <div class="c1">
                    <img src="img/lua-crescente.png" alt="">
                    <div class="cont-c1">
                        <h2>Clareza na vida</h2>
                        <p>Fusce sit amet velit eleifend, iaculis velit quis, malesuada</p>
                    </div>
                </div>
                <br> <br> <br> <br> <br> <br> <br>
                <div class="c1">
                    <img src="img/lua-crescente.png" alt="">
                    <div class="cont-c1">
                        <h2>Clareza na vida</h2>
                        <p>Fusce sit amet velit eleifend, iaculis velit quis, malesuada</p>
                    </div>
                </div>
                <br> <br> <br> <br> <br> <br> <br>
                <div class="c1">
                    <img src="img/lua-crescente.png" alt="">
                    <div class="cont-c1">
                        <h2>Clareza na vida</h2>
                        <p>Fusce sit amet velit eleifend, iaculis velit quis, malesuada</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <br> <br>

    <div class="section3">

        <div class="text1-section3">
            <h3>Nossos produtos</h3>
            <h1>Bem-vindo á nossa loja mística online</h1>
        </div>

        <div class="produtos">
    
            <article>
                <img src="img/Ametista.png" alt="">
                <div class="text-article">
                    <h4>Pedra escolhida</h4>
                    <p>$ 67,00</p>
                    <a href="#">
                        <button>
                            Adicionar ao carrinho
                        </button>
                    </a>
                </div>
            </article>
    
            <article>
                <img src="img/onix.png" alt="" style="width: 200px;">
                <div class="text-article">
                    <h4>Pedra escolhida</h4>
                    <p>$ 67,00</p>
                    <a href="#">
                        <button>
                            Adicionar ao carrinho
                        </button>
                    </a>
                </div>
            </article>
            
            <article>
                <img src="img/jasper.png" alt="" style="width: 300px;">
                <div class="text-article">
                    <h4>Pedra escolhida</h4>
                    <p>$ 67,00</p>
                    <a href="#">
                        <button>
                            Adicionar ao carrinho
                        </button>
                    </a>
                </div>
            </article>
    
            <article>
                <img src="img/quartzo rosa.png" alt="" style="width: 200px;">
                <div class="text-article">
                    <h4>Pedra escolhida</h4>
                    <p>$ 67,00</p>
                    <a href="#">
                        <button>
                            Adicionar ao carrinho
                        </button>
                    </a>
                </div>
            </article>
    
            <article>
                <img src="img/hematita.png" alt="" style="width: 150px;">
                <div class="text-article">
                    <h4>Pedra escolhida</h4>
                    <p>$ 67,00</p>
                    <a href="#">
                        <button>
                            <!-- <i class='bx bx-cart-alt'></i> -->
                            Adicionar ao carrinho
                        </button>
                    </a>
                </div>
            </article>
    
            <article>
                <img src="img/quartzo verde.png" alt="" style="width: 200px;">
                <div class="text-article">
                    <h4>Pedra escolhida</h4>
                    <p>$ 67,00</p>
                    <a href="#">
                        <button>
                            <!-- <i class='bx bx-cart-alt'></i> -->
                            Adicionar ao carrinho
                        </button>
                    </a>
                </div>
            </article>
    
        </div>
    </div>

    <section class="section4">
        <div class="text-section4">
            <h3>Primeira consulta</h3>
            <h1>Faça uma pergunta gratuitamente</h1>
            <p>O taro lhe dará o poder de transformar sua vida em algo magnifico e mágico</p>

            <a href="">
                <button>
                    Começar
                </button>
            </a>
        </div>

        <div class="img-section4">
            <img src="img/img-cartas.png" alt="">
        </div>

    </section>


    <script src="js/menu.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</body>
</html>