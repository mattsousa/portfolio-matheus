<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Portfólio do Matheus</title>
    <meta lang="pt-br">
    <meta name="author" name="Matheus Sousa">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <?php
      include_once 'include/header.php';
    ?>
    <hr>
    <main class="container">
      <h2 class="display-4">Trabalhos</h2>
      <br>
      <div class="jumbotron">
        <h3>Mas antes... meu setup</h3>
        <div class="row">
          <div class="card col-md-12 col-lg-8 mb-2">
            <img class="card-img-top" src="/image/setup_3.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Detalhando o Desktop</h5>
              <h6 class="card-subtitle mb-2 text-muted">2 monitores para maior produtividade</h6>
              <p class="card-text">
                Meu desktop tem um monitor de 14 polegadas e uma tv de 30 polegadas, um teclado retroiluminado abnt-2 da A4Tech, um mouse Sharkoon com palm grip e 4 botões.
              </p>
              <p>
                Esse desktop foi montado para desenvolvimento de softwares e foi focado na produtividade. Por esse motivo, não há muitos periféricos gamers que afetaria o custo benefício.
              </p>
            </div>
          </div>
          <div class="card col-md-12 col-lg-4 mb-2">
            <img class="card-img-top" src="/image/setup_1.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Por fora do Computador</h5>
              <h6 class="card-subtitle mb-2 text-muted">Nada melhor que você mesmo montar seu pc :D</h6>
              <p class="card-text">
                O gabinete é da Corsair(esqueci o modelo) que possui uma ventoinha de 15 cm com leds brancos. É recomendado que se compre filtros para evitar que se acumule muita poeira no interior.
              </p>
            </div>
          </div>
          <div class="card col-md-12 col-lg-4 mb-3">
            <img class="card-img-top" src="/image/setup_2.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Por dentro do Computador</h5>
              <h6 class="card-subtitle mb-2 text-muted">Nada melhor que você mesmo montar seu pc :D</h6>
              <p class="card-text">
                Para desenvolvimento, uso um processador intel Pentium G4560, Placa-mãe ASUS Prime B250M-C, duas memórias RAM HyperX Fury de 4GB e 2400 GHz cada, uma fonte Corsair 450 W, 1 SSD Kingstom 120 GB e um HDD Barracuda 1TB.
              </p>
            </div>
          </div>
          <div class="card col-md-12 col-lg-8 mb-3">
            <img class="card-img-top" src="/image/setup_4.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Para fora do ambiente</h5>
              <h6 class="card-subtitle mb-2 text-muted">Um notebook!</h6>
              <p class="card-text">
                Um notebook Dell Inspiron 15 Intel i5-5100U, 8 GB de memória RAM, 1 TB e tela de 15 polegadas touchscreen. Sem processador de vídeo externo, é um bom notebook para rodar alguns testes caso esteja longe do seu desktop ou precisa fazer uma alteração em algum trecho de código rapidamente sem ter uma dor de cabeça com lentidão(se estiver lento, você que fez besteira).
              </p>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php
      include_once 'include/footer.php';
    ?>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/popper.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  </body>
</html>
