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
      <h2 class="display-4">Contate me</h2>
      <div class="jumbotron">
        <form class="form-row" action="/include/inc.email.php" method="post">
          <div class="col-12 form-group">
            <label for="fullname_input">Nome Completo</label>
            <input type="text" class="form-control" name="fullname_input" id="fullname_input" placeholder="Ex: Matheus Pinheiro de Sousa" required>
          </div>
          <div class="col-md-12 col-lg-6 form-group">
            <label for="email_input">Email válido</label>
            <input type="email" class="form-control" name="email_input" id="email_input" placeholder="Ex: matheus@mattsousa.com.br" required>
          </div>
          <div class="col-md-12 col-lg-6 form-group">
            <label for="email_ok_input">Confirme o email</label>
            <input type="email" class="form-control" name="email_ok_input" id="email_ok_input" placeholder="Ex: matheus@mattsousa.com.br" required>
          </div>
          <div class="col-12 form-group">
            <select class="custom-select" name="select_reason" required>
              <option value="">Selecione o motivo do contato</option>
              <option value="1">Contratar para fazer um website</option>
              <option value="2">Contratar para fazer um app android</option>
              <option value="3">Mapear requisitos de um serviço</option>
              <option value="0">Outro motivo</option>
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
          </div>
          <div class="col-12 form-group">
            <label for="description_text">Mensagem</label>
            <textarea class="form-control" name="description_text" id="description_text" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary col-12">Enviar</button>
        </form>
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
