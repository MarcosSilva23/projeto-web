<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="José Rafael">

    <title>Bolão Copa do Mundo 2014 FIFA - Brasil</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

    <!-- Scripts -->
    <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="js/cadastro.js"></script> 
    <script type="text/javascript" src="js/login.js"></script>
    <script type="text/javascript" src="js/cadastrar.js"></script>
    <script type="text/javascript" src="js/preparaPagina.js"></script>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="#match-table"><span class="glyphicon glyphicon-list-alt"></span> Tabela dos Jogos</a></li>
            <li><a href="#bet"><span class="glyphicon glyphicon-pencil"></span> Aposte!</a></li>
            <li><a href="#ranking"><span class="glyphicon glyphicon-sort-by-attributes"></span> Ranking</a></li>
            <!-- <li><a href="#bet">Ranking</a></li> --> <!-- Aqui da pra adicionar mais botões -->
          </ul>
          <div class="navbar-form navbar-right" id="divFormLogin" >
            <form id="formLogin" class="pull-left navbar-form" role="form" action="php/userauthentication.php" action="post">
              <div class="form-group">
                <input type="text" placeholder="Email" class="form-control" name="inputEmail" id="inputEmail" required>
              </div>
              <div class="form-group">
                <input type="password" placeholder="Password" class="form-control" name="inputPassword" id="inputEmail" required>
              </div>
              <button id="btnLogin" type="button" class="btn btn-success">
                <span class="glyphicon glyphicon-log-in "></span> Log in
              </button>
            </form>
            <div id="divSignup" class="pull-right navbar-form">
              <button id="btnSignup" class="btn btn-info"> 
                <span class="glyphicon glyphicon-plus-sign"></span> Sign Up
              </button>
            </div>
            <div id="divLogout">
              <div class="form-group">
                <p id="pLogout">Qualquer texto</p>
              </div>
              <button id="btnLogout" type="button" class="btn btn-info">
                <span class="glyphicon glyphicon-log-out"></span> Log out
              </button>
            </div>
          </div><!--/.navbar-collapse -->
        </div>
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div id="jumboWelcome" class="jumbotron">
      <div class="container">
        <h1 id="welcome">Seja bem vindo</h1>
        <div id="ack"></div>
        <p>Aqui você poderá fazer suas apostas nos jogos da Copa do Mundo.</p>
        <p><a class="btn btn-primary btn-lg" id="aposte" role="button">Aposte agora &raquo;</a></p>
      </div>
    </div> <!-- /Jumbotron Welcome -->

    <div id="jumboSignup" class="jumbotron">
      <div class="container">
        <form id="formCadastro" class="form-horizontal" action="php/cadastro.php" method="post">
          <fieldset>
            <legend>Crie sua conta</legend>
            <div class="form-group">
              <label for="inputName" class="col-lg-2 control-label">Nome</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="cadInputName" name="name" placeholder="Nome" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputLastName" class="col-lg-2 control-label">Sobrenome</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="cadInputLastName" name="lastname" placeholder="Sobrenome" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="cadInputEmail" name="login" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword1" class="col-lg-2 control-label">Senha</label>
              <div class="col-lg-10">
                <input type="password" class="form-control" id="cadInputPassword1" name="password" placeholder="Senha" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPasswordRepeated" class="col-lg-2 control-label">Repita a senha</label>
              <div class="col-lg-10">
                <input type="password" class="form-control" id="cadInputPassword2" placeholder="Senha" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button id="btnCancelar" class="btn btn-danger">Cancelar</button>
                <button id="btnLimpar" class="btn btn-warning">Limpar</button>
                <button id="btnCadastrar" class="btn btn-success">Enviar</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div> <!-- /Jumbotron Sign up -->

    <div id="jumboRegistered" class="jumbotron">
      <div class="container">
        <h3 id="registered"></h3>
      </div>
    </div> <!-- /Jumbotron Registered -->

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div id="top3" class="col-md-4">
          <h2>Top 3 apostadores</h2>
          <p>Aqui ficam os três apostaores mais bem pontuados. </p>
          <ol id="listaNomes">
                <?php include 'php/consulta_top3.php' ?>
          </ol>
          <p><a class="btn btn-default" id="btnSaibaMais">Confira a lista completa &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Resultado do &uacute;ltimo jogo</h2>
          <p>Aqui ficará o resultado do &uacute;ltimo jogo da Copa, ou os três &uacute;ltimos jogos. </p>
          <p><a class="btn btn-default" href="#" role="button">Veja todos os jogos &raquo;</a></p>
        </div>
      </div>
      <hr>

      <footer>
        <p align="center">&copy; UNISC - Análise e Desenvolvimento de Sistemas - 2014</p>
      </footer>
    </div> <!-- /container -->
  </body>
</html>
