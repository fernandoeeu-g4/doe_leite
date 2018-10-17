<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.2/css/bulma.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <title></title>
</head>
<body>

    <!-- Navbar -->
  <?php
    require_once('navbar.php');
  ?>

  <!-- Hero Principal -->
  <div class="block">
    <section class="hero hero-home">
      <div class="hero-body">
        <div class="columns coluna-inicio-p">
          <div class="column is-12">
            <p id="slogan">
              <br>Doe leite. Salve vidas.<br><br>

            </p>
            <p id="sub-slogan">
              "Cada litro de leite doado pode alimentar até 10 bebês prematuros
               em um único dia. A doação pode salvar vidas."
            </p>
            <br><br><br><br><br><br><br><br>
          </div>
        </div>
      </div>
    </section> <!-- FIM HERO-HOME -->

    <section class="hero hero-leite">
      <div class="hero-body body-leite">
        <div class="columns">
          <div class="column is-2"></div>
          <div class="column is-8">
            <h1 class="title is-2">
              Acesse o nosso quiz sobre amamentação!
            </h1>
            <div style="width: auto; text-align:center" class="box-img">
              <a href="https://pt.quizur.com/trivia/mitos-sobre-amamentacao-3iNk" target="_blank">
                <img style="width: auto" src="images/quiz.jpg">
              </a>
            </div>
          </div>
          <div class="column is-2"></div>
        </div>
        <div class="columns">
          <div class="column is-4">
            <h1 class="title is-2">
              Por que amamentar?
            </h1>
            <div class="box-img">
              <a href="amamentar.php">
                <img src="images/amamentar.jpg" alt="">
              </a>
            </div>
            <div class="text-img">
              <br>
              O leite materno é uma parte excencial no crescimento das crianças, negligencia-lo prejuda diretamente o seu desenvolvimento.
              <br>
            </div> 

            <!-- <ul class="list lista-leite">
              <h1 class="title is-4">Vantagens para a criança</h1>
              <li>- Melhora o desenvolvimento mental do bebé;</li> 
              <li>- É melhor digerido;</li>
              <li>- Aumenta a imunidade da criança;</li>
              <li>- Estipula a respiração, facilitando a sua oxigenação;</li>
              <li>- Fortalece o relacionamente do bebê com a mãe.</li>
            </ul> --> 
          </div> 
          <div class="column is-4">
            <h1 class="title is-2">O leite materno</h1>
            <div class="box-img">
              <a href="leite-materno.php">
                <img src="images/leite-materno.jpg" alt="">
              </a>
            </div>
            <div class="text-img">
              <br>
              <p>Entendendo os motivos do leite materno ser tão importante para o bebê.</p>
            </div>
          </div>
          <div class="column is-4">
            <h1 class="title is-2">Quem pode doar?</h1>
            <div class="box-img">
              <a href="pode-doar.php">
                <img src="images/doe-leite-materno.jpg" alt="">
              </a>
            </div>
            <div class="text-img">
              <br>
              Existem alguns requisitos que a mulher deve cumprir antes de realizar as doações, entenda-os agora.
            </div>
          </div>
        </div>

      </div>
    </section> <!-- FIM HERO-LEITE -->

    <section class="hero hero-contato"> <!-- HERO-CONTATO -->

      <div class="hero-body">
        <h1 class="title is-2">Onde doar?</h1>
        <div class="columns">
          <div class="column is-1">

          </div>
          <div class="column is-10">
            <table class="table is-striped table-contatos">   <!-- INICIO TABELA -->
              <thead>
                <tr>
                  <th>Nome do Local</th>
                  <th>Endereço</th>
                  <th>Contato</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Fundação Santa Casa de Misericórdia do Pará</td>
                  <td><strong>Belém</strong> - Rua Oliveira Belo, 935, Umarizal</td>
                  <td>0800-7272057 / 91-4009-2318 / blhu.fscmpa@gmail.com</td>
                </tr>
                <tr>
                  <td>Hospital Divina Providência</td>
                  <td><strong>Marituba</strong> - Av. João Paulo II, 71	, Dom Aristides</td>
                  <td>91-4005-6100 / blh@hdpmarituba.com.br</td>
                </tr>
                <tr>
                  <td>Hospital Materno Infantil de Marabá</td>
                  <td><strong>Marabá</strong> - Rua 05 de Abril, 00	, Velha Marabá</td>
                  <td>94-3322-5751 / blhmba.hmi@gmail.com</td>
                </tr>
                <tr>
                  <td>Hospital Municipal de Santarém</td>
                  <td><strong>Santarém</strong> - Avenida Barão do Rio Branco, 850	, Santa Clara</td>
                  <td>93-3523-3904 / ksadacrianca@gmail.com</td>
                </tr>
                <tr>
                  <td>Hospital Santo Antônio Maria Zaccaria</td>
                  <td><strong>Bragança</strong> - Avenida Nazeazeno Ferreira, 100	, Padre Luiz</td>
                  <td>91-3425-2177 / blh@hsamz.com.br</td>
                </tr>
              </tbody>
            </table>   <!-- FIM TABELA -->
          </div>
        </div>
      </div>


    </section>  <!-- FIM HERO-CONTATO -->
    <div class="block">

      <article class="message"> <!-- RODAPÉ // FOOTER -->
        <div class="message-header">
          <p>Sobre nós</p>
        </div>
        <div class="message-body" style="text-align: center;">
          Projeto idealizado pela turma de Ciência da Computação, quarto período - manhã, da Universidade da Amazônia - UNAMA
        </div>
      </article>

  </div>

</body>
</html>
