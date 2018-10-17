<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style/amamentar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.2/css/bulma.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <title>Amamente!</title>
</head>
<body>
  <!-- NAVBAR -->
    <?php
    require_once('navbar.php');
  ?>
    <!-- FIM NAVBAR -->

  <!--  -->
  <div class="block">
    <div class="columns">
      <div class="column is-1"></div>
      <div class="column is-10">
        <div class="texto-titulo">
          <p>Entenda os benefícios do leite materno comparado com os produtos industrializados.</p>
        </div>
        <div class="sub-texto">
          <p>
            Ele contém uma mistura de nutrientes perfeita para o desenvolvimento
            da criança, não apenas entre os humanos, mas em todos os mamíferos existentes.
          </p>
        </div>
      </div>
    </div>
    <div class="columns">
      <div class="column is-1"></div>
      <div class="column is-10 sub-texto">
        <p>O leite humano é muito diferente do leite adaptado (leite em pó).<br>
          O <strong>leite materno</strong> contém todas as proteínas, açúcar, gordura, vitaminas e água
          que o seu bebé necessita para ser saudável.<br>
          Além disso, contém determinados elementos que o leite em pó não consegue
          incorporar, tais como anticorpos e glóbulos brancos. É por isso que o leite
          materno protege o bebé de certas doenças e infecções como: Otites, alergias,
          vómitos, diarreia, pneumonias, bronquiolites e meningites.<br> <br></p>
          <h1 class="title is-2"><strong>Quer dicas do que fazer para melhorar a produção de leite materno?</strong></h1>
          <h1 class="title is-4">Fazer todos os dias garante a produção de mais de 50 ml de leite por dia.</h1>
          <p><br>
          <strong>&#8226;Beber água</strong>: A ingestão de 3 a 4 litros de líquidos por dia como água, sucos e
          sopas garante uma boa produção de leite. Deve-se sempre tomar 1 copo de
          água, chá ou suco, antes de depois de dar de mamar.<br>
           <strong>&#8226;Olhar para o bebê</strong>: Ficar olhando para o bebê enquanto ele mama libera
          mais hormônios na corrente sanguínea e consequentemente aumenta a
          produção de leite. <br>
           <strong>&#8226;Alimentação adequada</strong>: Coma alimentos ricos em água como a gelatina e
          frutas como laranja, melão e melancia e também alimentos que fornecem
          bastante energia como canjica, castanha e bacalhau. <br>
           <strong>&#8226;Relaxe</strong>: Descansar sempre que possível garante que o corpo tenha energia
          para produção de leite. Aproveite para ficar sentada no cadeirão da
          amamentação quando acabar de amamentar e evite as tarefas domésticas.
          Veja boas dicas em: Como relaxar depois do parto para produzir mais leite. <br>
           <strong>&#8226;Ajuda extra</strong>: Tomar um suplemento chamado Silimarina, à base de cardomariano,
          de 3 a 5 vezes por dia, pode ajudar a produzir mais leite. Converse
          com o pediatra sobre esta possibilidade. O chá de hortelã também ajuda a
          produzir mais leite.
          O bebê mamou tudo que podia e ainda sobrou muito leite ao ponto que o seio
          continua dolorido, inchado e vazando? Que tal doar? </p>
          <div id="disqus_thread"></div>
            <script>
            
            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://doeleite.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
    </div>
      </div>
      
  </div>
  <div class="columns paginacao">
    <div class="column is-1"></div>
    <div class="column is-10">
      <div class="block">
        <nav class="pagination">
          <a href="amamentar.php" class="pagination-previous" >
            Post anterior
          </a>
          <a href="pode-doar.php" class="pagination-next" >
            Próximo post
          </a>
          <ul class="pagination-list">
            <li>
              <a href="amamentar.php" class="pagination-link">1</a>
              <a href="" class="pagination-link is-current">2</a>
              <a href="pode-doar.php" class="pagination-link">3</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <article class="message"> <!-- RODAPÉ // FOOTER -->
    <div class="message-header">
      <p>Sobre nós</p>
    </div>
    <div class="message-body" style="text-align: center;">
      Projeto idealizado pela turma de Ciência da Computação, quarto período - manhã, da Universidade da Amazônia - UNAMA
    </div>
  </article>

</body>
</html>
