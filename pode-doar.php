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
          <p>Descubra se você pode ou não doar seu leite materno.</p>
        </div>
        <div class="sub-texto">
          <p>
            Existem alguns requisitos que a mulher deve cumprir antes de realizar
            as doações, entenda-os agora.
          </p>
        </div>
      </div>
    </div>
    <div class="columns">
      <div class="column is-1"></div>
      <div class="column is-10 sub-texto">
        <h1 class="title is-2">Saiba quem pode ser doadora de leite humano</h1>
          <p>Algumas mulheres quando estão amamentando produzem um volume de leite
            além da necessidade do bebê, o que possibilita que sejam doadoras de um
            Banco de Leite Humano. <br>
            Teoricamente, toda mulher teria condições de produzir leite e doar, porém de
            acordo com a legislação que regulamenta o funcionamento dos Bancos de
            Leite no Brasil (RDC Nº 171) a doadora, além de apresentar excesso de leite,
            deve ser saudável, não usar medicamentos que impeçam a doação e se dispor
            a ordenhar e a doar o excedente. <br>
            O cheiro do cigarro, bem como os medicamentos, passa para o leite materno,
            influenciando no gosto do leite. “Os remédios que a mãe toma podem causar
            um cruzamento com os medicamentos usados nos bebês prematuros,
            comprometendo o tratamento. A mulher que quer doar, antes de fazer a
            coleta em casa, deve entrar em contato com os bancos de leite e pedir
            orientações”, afirma a especialista em aleitamento materno e coordenadora
            do banco de leite do HC/UFPR, Maria Celestina Bonzanini Grazziotin. <br>
            </p>
            <h1 class="title is-3">Quantas vezes uma mulher, enquanto produz, pode doar leite humano?</h1>
            <p>
              Não há uma quantidade específica de vezes em que a mulher pode doar,
              sabendo que isso varia de pessoa para pessoa. Sempre que quiser, a mulher
              em fase de amamentação pode doar leite humano, pois, quanto mais a mama
              é estimulada (seja para doção ou para alimentação do bebê), mais leite ela
              será capaz de produzir.
            </p>
            <h1 class="title is-3">
              Qual quantidade deve ser doada?
            </h1>
            <p>Não há quantidade mínima para fazer a doação. Toda mulher precisa saber
                que 1 litro de leite humano, por exemplo, pode alimentar até 10 bebês
                internados. Por isso, não deve haver preocupação com a quantidade mínima
                para doação</p>

            <h1 class="title is-3">
              Eu posso doar esse leite para uma amiga que também tem um bebê?
            </h1>
            <ul>
              <li><p>&#8226; Para o seu bebê;</p></li>
              <li><p>&#8226;Doado para um Banco de Leite Humano que fará a triagem, seleção e os
                  exames necessários para ter certeza que o seu leite poderá ser doado para
                  qualquer pessoa com segurança, ou seja, sem riscos de que o leite poderá
                  transmitir alguma doença.</p></li>
            </ul>
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
  </div>
  <div class="columns paginacao">
    <div class="column is-1"></div>
    <div class="column is-10">
      <div class="block">
        <nav class="pagination">
          <a href="leite-materno.php" class="pagination-previous" >
            Post anterior
          </a>
          <ul class="pagination-list">
            <li>
              <a href="amamentar.php" class="pagination-link">1</a>
              <a href="leite-materno.php" class="pagination-link">2</a>
              <a href="" class="pagination-link is-current">3</a>
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
