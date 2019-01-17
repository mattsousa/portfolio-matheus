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
      session_start();
     ?>
    <main>
      <div class="panel bg-primary text-center">
        <img src="/image/profile.png" alt="" class="img-thumbnail">
        <h2 class="text-light text-center">Hey, Eu sou o Matheus</h2>
        <p class="lead text-center container">
          <a class="btn btn-outline-dark btn-block" href="skills.php" role="button">Clique aqui para ver minhas habilidades</a>
          <a class="btn btn-outline-light btn-block" href="curriculo.pdf" role="button">Ou aqui para baixar o meu currículo</a>
        </p>
      </div>
      <hr>
      <div class="container jumbotron">
        <h2>Sobre mim</h2>
        <div class="jumbotron">
          <p>
            Me chamo Matheus Pinheiro de Sousa, natural de Belém do Pará, Brasil. Sou um desenvolvedor de softwares com um vasto conhecimento de computação, altamente criativo, proativo e sempre pronto para novos desafios. Criei este site para divulgar minhas habilidades e funcionará como um projeto pessoal para estudo e diversão também :D.
          </p>
          <p>
            Atualmente, sou estudante universitário matriculado no curso de Sistemas de Informação da Universidade do Estado do Amazonas(UEA). Já estudei em outras instituições em busca de mais conhecimento, mas sempre em cursos voltados ao desenvolvimento de softwares.
          </p>
          <p>
            Com 5 anos de computação, já tive experiências com várias plataformas de desenvolvimento e apesar de ter preferência com programação em Java, posso trabalhar com <em>qualquer</em> linguagem, tecnologia sem problema algum. Para saber dos detalhes, <a href="/works.php">clique aqui</a> e veja meus trabalhos mais recentes com seus próprios olhos.
          </p>
          <blockquote class="blockquote">
            <p class="mb-0">
              Sempre há um início para qualquer grande jornada. Mas sua continuação até que esteja completamente finalizada guarda a verdadeira glória
            </p>
            <footer class="blockquote-footer">
              Sir Francis Drake
            </footer>
          </blockquote>
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
