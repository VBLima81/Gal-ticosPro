<?php require_once('elenco/Connections/conecta.php'); ?>
<?php
$query = "SELECT * FROM players ORDER BY Numero";
$result=mysqli_query($conecta, $query);
$row_query = mysqli_fetch_assoc($result);
$totalRows_query = mysqli_num_rows($result);
?>







<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="apple-touch-icon" sizes="180x180" href="/image/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/image/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/image/favicon-16x16.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Antonio:wght@200&family=Montserrat:ital@1&family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@200&family=Montserrat:ital@1&family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Passion+One&display=swap" rel="stylesheet">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Galáticos PRO</title>

  <link rel="stylesheet" href="/style.css">
</head>

<body>
  <nav class="navbar">
    <div class="navbar-boxer boxer">
      <input type="checkbox" name="" id="">
      <div class="hamburger-lines">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
      </div>
      <ul class="menu-items">
        <li><a href="">Home</a></li>
        <li><a href="#about">História</a></li>
        <li><a href="#food">Torneios</a></li>
        <li><a href="#food-menu">Players</a></li>
        <li><a href="#testimonials">Diretoria</a></li>
        <li><a href="#contact">Contato</a></li>
        <li><?php echo " " ?></li>
      </ul>
      <h1 class="logo">GALÁTICOS PRO</h1>
    </div>
  </nav>
  <section class="showcase-area" id="showcase">
    <div class="showcase-boxer">
      <h1 class="main-title"></h1>
      <p class="subt"></p>
      <a href="#food-menu" class="btn btn-primary">Esquadrão</a>
    </div>
  </section>

  <section id="about">
    <div class="about-wrapper boxer">
      <div class="about-text">
        <p class="small">Nossa História</p><br>

        <p>
          O time nasceu no final do ano de 2022, inicialmente um grupo de amigos que jogava apenas pela diversão mas que em determinado momento resolveu entrar firmemente no cenário competitivo. O Galáticos Pro se tornou um clube, que se consolidou no cenário competitivo em pouco tempo através de princípios sólidos, zelando pela conduta esportiva respeitosa, honestidade e respeito com os membros da plataforma e organização. Buscando se aprimorar sempre como equipe sem deixar de lado o que nos moveu até aqui, continuamos almejando o crescimento da instituição em todas as camadas. Aqui nenhum player, manager ou CEO está acima da ideia, do projeto que se consolidou. Quando vencemos, vencemos como time, quando perdermos, perdemos como time.
        </p><br>
        <p class="small">Missão</p><br>
        <p>
          Competitividade e títulos. Sem trapaça, de forma respeitosa e honesta, contando sempre com a dedicação e esforços de cada player/membro do clube. Ultrapassar gerações, manter sempre o respeito pelos clubes adversários do cenário, contribuir para um ambiente mais justo e competitivo.
        </p>
      </div>
      <div class="about-img">
        <img src="/image/logo.png" alt="Escudo Galáticos Pro" />
      </div>
    </div>
  </section>

  <section id="food">
    <h2>Campeonatos</h2>
    <div class="food-boxer boxer">
      <div class="food-type fruite">
        <div class="img-boxer">
          <img src="/image/libert.jpg" alt="EFA">
          <div class="img-content">
            <h3>1</h3>
            <a href="https://www.efaesports.com/" class="btn btn-primary" target="blank">EFA</a>
          </div>
        </div>
      </div>
      <div class="food-type vegetable">
        <div class="img-boxer">
          <img src="/image/bras.jpg" alt="liga">
          <div class="img-content">
            <h3>2</h3>
            <a href="https://www.virtualproleague.com/portal/en/welcome" class="btn btn-primary" target="blank">Liga</a>
          </div>
        </div>
      </div>
      <div class="food-type grin">
        <div class="img-boxer">
          <img src="/image/mundo.jpg" alt="MOG">
          <div class="img-content">
            <h3>3</h3>
            <a href="https://www.ea.com/pt-br/games/fifa/fifa-23" class="btn btn-primary" target="blank">MOG</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="food-menu">
    <h2 class="food-menu-heading"><br></h2>

    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="/stylepla.css">


<div class="container">

<?php 
$num=-1;
do{
$num++;
if(($num % 3)==0){
?>
<div class="row">
<?php } ?>    
        <div class="column">
          <div class="card">
          <div class="content">
          <div class="front">
            <img class="profile" width="100%" src=<?php echo "/elenco/IMG_ELENCO/{$row_query['Imagem']}"; ?> alt=<?php echo "{$row_query['Nome']}"; ?>>
            <h2><?php echo $row_query['Nome']; ?></h2>
          </div>
          <?php if(($num % 3)==0){ 
          ?>
          <div class="back from-left">
          <?php } ?>
          <?php if(($num % 3)==1){ 
          ?>
          <div class="back from-bottom">
          <?php } ?>
          <?php if(($num % 3)==2){ 
          ?>
          <div class="back from-right">
          <?php } ?>
            <h2><?php echo $row_query['POS']; ?></h2>
            <h3><?php echo $row_query['Numero']; ?></h3>
            <h3><?php echo 'TAG: '.$row_query['Nome']; ?></h3><br>
            <img class="tem-img" src=<?php echo "/image/{$row_query['Estado']}.png"; ?> alt=""> &nbsp;
            <img class="tem-img" src="/image/bra.png" alt="">  <br>
            <p class="des">
              <?php echo $row_query['Cidade'].' - '.$row_query['Estado']; ?><br><br>
              Aceleração  91<br>
              Finta       89<br>
              Chute       93
            </p>
            <ul class="social-icon">
              <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
					    <li><a href=""><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php
    if(($num % 3)==2){ 
    ?>
    </div></br>
<?php } ?>
    
    <?php } while ($row_query = mysqli_fetch_assoc($result)); ?>
</div><br><br><br>
<!--
  <div class="row">
   
    <div class="column">
        <div class="card">
            <div class="content">
                <div class="front">
                  <img class="profile" width="100%" src="/image/gui.png" alt="Guilherme">
                   <h2>Guilherme</h2>
                </div>
                <div class="back from-left">
                   <h2>GOLEIRO</h2>
                   <h3>10</h3>
                   <h3>TAG: Psycho sTT</h3><br>
                   <img class="tem-img" src="/image/sp.png" alt=""> &nbsp;
                   <img class="tem-img" src="/image/bra.png" alt="">  <br>
                   <p class="des">
                       SÃO PAULO - SP<br><br>
                       Aceleração  91<br>
                       Finta       89<br>
                       Chute       93
                    </p>
                    <ul class="social-icon">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
					    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="column">
      <div class="card">
        <div class="content">
          <div class="front">
            <img class="profile" width="100%" src="/image/rodrigo.png" alt="Rodrigo">
            <h2>Rodrigo</h2>
          </div>
          <div class="back from-bottom">
            <h2>ZAGUEIRO</h2>
            <h3>6</h3>
            <h3>TAG: RadRodrigobk</h3><br>
            <img class="tem-img" src="/image/sp.png" alt=""> &nbsp;
            <img class="tem-img" src="/image/bra.png" alt="">  <br>
            <p class="des">
              SÃO PAULO - SP<br><br>
              Aceleração  91<br>
              Finta       89<br>
              Chute       93
            </p>
            <ul class="social-icon">
              <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
					    <li><a href=""><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

        <div class="column">
      <div class="card">
        <div class="content">
          <div class="front">
            <img class="profile" width="100%" src="/image/wandrey.png" alt="Wandrey">
            <h2>Wandrey</h2>
          </div>
          <div class="back from-right">
            <h2>ZAGUEIRO</h2>
            <h3>4</h3>
            <h3>TAG: WANDREY GLT</h3><br>
            <img class="tem-img" src="/image/se.png" alt=""> &nbsp;
            <img class="tem-img" src="/image/bra.png" alt="">  <br>
            <p class="des">
              RIO GRANDE DO SUL - RS<br><br>
              Aceleração  91<br>
              Finta       89<br>
              Chute       93
            </p>
            <ul class="social-icon">
              <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
					    <li><a href=""><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div><br>

  <div class="row">
   
    <div class="column">
  <div class="card">
    <div class="content">
      <div class="front">
        <img class="profile" width="100%" src="/image/vitor.png" alt="Vitor">
        <h2>Vitor</h2>
      </div>
      <div class="back from-left">
        <h2>ZAG / GOL</h2>
        <h3>41</h3>
        <h3>TAG: VitorBRCook</h3><br>
        <img class="tem-img" src="/image/rj.png" alt=""> &nbsp;
        <img class="tem-img" src="/image/bra.png" alt="">  <br>
        <p class="des">
          RIO DE JANEIRO - RJ<br><br>
          Aceleração  91<br>
          Finta       89<br>
          Chute       93
        </p>
        <ul class="social-icon">
          <li><a href=""><i class="fab fa-tiktok"></i></a></li>
          <li><a href="https://www.instagram.com/vitorbrlima"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="column">
  <div class="card">
    <div class="content">
      <div class="front">
        <img class="profile" width="100%" src="/image/leo.png" alt="Léo Carvalho">
        <h2>Leo Carvalho</h2>
      </div>
      <div class="back from-bottom">
        <h2>ME / LE</h2>
        <h3>44</h3>
        <h3>TAG: LCM44#3024</h3><br>
        <img class="tem-img" src="/image/sp.png" alt=""> &nbsp;
        <img class="tem-img" src="/image/bra.png" alt="">  <br>
        <p class="des">
          TAUBATÉ - SP<br><br>
          Aceleração  91<br>
          Finta       89<br>
          Chute       93
        </p>
        <ul class="social-icon">
          <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
          <li><a href=""><i class="fab fa-instagram"></i></a></li>
          
        </ul>
      </div>
    </div>
  </div>
</div>

    <div class="column">
  <div class="card">
    <div class="content">
      <div class="front">
        <img class="profile" width="100%" src="/image/gabriel.png" alt="Gabriel Henrique">
        <h2>Gabriel Henrique</h2>
      </div>
      <div class="back from-right">
        <h2>VOL / MD</h2>
        <h3>8</h3>
        <h3>TAG: Justiceblack664</h3><br>
        <img class="tem-img" src="/image/sp.png" alt=""> &nbsp;
        <img class="tem-img" src="/image/bra.png" alt="">  <br>
        <p class="des">
          SÃO PAULO - SP<br><br>
          Aceleração  91<br>
          Finta       89<br>
          Chute       93
        </p>
        <ul class="social-icon">
          <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
          <li><a href=""><i class="fab fa-instagram"></i></a></li>
          
        </ul>
      </div>
    </div>
  </div>
</div>

</div><br>
  
<div class="row">
   
  <div class="column">
<div class="card">
  <div class="content">
    <div class="front">
      <img class="profile" width="100%" src="/image/rodriguez.png" alt="João Victor">
      <h2>João Victor</h2>
    </div>
    <div class="back from-left">
      <h2>VOL / ZAG</h2>
      <h3>10</h3>
      <h3>TAG: RodrigueZ#8814</h3><br>
      <img class="tem-img" src="/image/sp.png" alt=""> &nbsp;
      <img class="tem-img" src="/image/bra.png" alt="">  <br>
      <p class="des">
        SANTANA DE PARNAÍBA - SP<br><br>
        Aceleração  91<br>
        Finta       89<br>
        Chute       93
      </p>
      <ul class="social-icon">
        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
        <li><a href=""><i class="fab fa-instagram"></i></a></li>
      </ul>
    </div>
  </div>
</div>
</div>

<div class="column">
<div class="card">
  <div class="content">
    <div class="front">
      <img class="profile" width="100%" src="/image/biel.png" alt="Gabriel">
      <h2>Gabriel</h2>
    </div>
    <div class="back from-bottom">
      <h2>VOLANTE</h2>
      <h3>9</h3>
      <h3>TAG: bielrei70</h3><br>
      <img class="tem-img" src="/image/pr.png" alt=""> &nbsp;
      <img class="tem-img" src="/image/bra.png" alt="">  <br>
      <p class="des">
        SÃO MATEUS DO SUL - PR<br><br>
        Aceleração  91<br>
        Finta       89<br>
        Chute       93
      </p>
      <ul class="social-icon">
        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
        <li><a href=""><i class="fab fa-instagram"></i></a></li>
      </ul>
    </div>
  </div>
</div>
</div>

  <div class="column">
<div class="card">
  <div class="content">
    <div class="front">
      <img class="profile" width="100%" src="/image/erik.png" alt="Erik">
      <h2>Erik</h2>
    </div>
    <div class="back from-right">
      <h2>VOLANTE / MC</h2>
      <h3>99</h3>
      <h3>TAG: Erik R99 GLT</h3><br>
      <img class="tem-img" src="/image/mg.png" alt=""> &nbsp;
      <img class="tem-img" src="/image/bra.png" alt="">  <br>
      <p class="des">
        FRONTERA - MG<br><br>
        Aceleração  91<br>
        Finta       89<br>
        Chute       93
      </p>
      <ul class="social-icon">
        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
        <li><a href=""><i class="fab fa-instagram"></i></a></li>
      </ul>
    </div>
  </div>
</div>
</div>

</div><br>

<div class="row">
   
  <div class="column">
<div class="card">
  <div class="content">
    <div class="front">
      <img class="profile" width="100%" src="/image/nathan.png" alt="Nathan">
      <h2>Nathan</h2>
    </div>
    <div class="back from-left">
      <h2>MEI</h2>
      <h3>27</h3>
      <h3>TAG: nhzinsk</h3><br>
      <img class="tem-img" src="/image/sp.png" alt=""> &nbsp;
      <img class="tem-img" src="/image/bra.png" alt="">  <br>
      <p class="des">
        RIO DE JANEIRO - RJ<br><br>
        Aceleração  91<br>
        Finta       89<br>
        Chute       93
      </p>
      <ul class="social-icon">
        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
        <li><a href=""><i class="fab fa-instagram"></i></a></li>
      </ul>
    </div>
  </div>
</div>
</div>

<div class="column">
<div class="card">
  <div class="content">
    <div class="front">
      <img class="profile" width="100%" src="/image/matheus.png" alt="Matheus Stefanuto">
      <h2>Matheus Stefanuto</h2>
    </div>
    <div class="back from-bottom">
      <h2>ATACANTE</h2>
      <h3>9</h3>
      <h3>TAG: Matheusst2000</h3><br>
      <img class="tem-img" src="/image/sp.png" alt=""> &nbsp;
      <img class="tem-img" src="/image/bra.png" alt="">  <br>
      <p class="des">
        SÃO PAULO - SP<br><br>
        Aceleração  91<br>
        Finta       89<br>
        Chute       93
      </p>
      <ul class="social-icon">
        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
        <li><a href=""><i class="fab fa-instagram"></i></a></li>
      </ul>
    </div>
  </div>
</div>
</div>

  <div class="column">
<div class="card">
  <div class="content">
    <div class="front">
      <img class="profile" width="100%" src="/image/jabulani.png" alt="Jabulani">
      <h2>Jabulani</h2>
    </div>
    <div class="back from-right">
      <h2>ATACANTE</h2>
      <h3>15</h3>
      <h3>TAG: Jabulani3552</h3><br>
      <img class="tem-img" src="/image/rj.png" alt=""> &nbsp;
      <img class="tem-img" src="/image/bra.png" alt="">  <br>
      <p class="des">
        NOVA IGUAÇU - RJ<br><br>
        Aceleração  91<br>
        Finta       89<br>
        Chute       93
      </p>
      <ul class="social-icon">
        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
        <li><a href=""><i class="fab fa-instagram"></i></a></li>
      </ul>
    </div>
  </div>
</div>
</div>

</div><br>

<!--
<div class="row">
   
  <div class="column">
<div class="card">
  <div class="content">
    <div class="front">
      <img class="profile" width="100%" src="/image/" alt="">
      <h2></h2>
    </div>
    <div class="back from-left">
      <h2></h2>
      <h3></h3>
      <h3>TAG: </h3><br>
      <img class="tem-img" src="/image/rj.png" alt=""> &nbsp;
      <img class="tem-img" src="/image/bra.png" alt="">  <br>
      <p class="des">
        NOVA IGUAÇU - RJ<br><br>
        Aceleração  91<br>
        Finta       89<br>
        Chute       93
      </p>
      <ul class="social-icon">
        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
        <li><a href=""><i class="fab fa-instagram"></i></a></li>
      </ul>
    </div>
  </div>
</div>
</div>

<div class="column">
<div class="card">
  <div class="content">
    <div class="front">
      <img class="profile" width="100%" src="/image/" alt="">
      <h2></h2>
    </div>
    <div class="back from-bottom">
      <h2></h2>
      <h3></h3>
      <h3>TAG: </h3><br>
      <img class="tem-img" src="/image/sp.png" alt=""> &nbsp;
      <img class="tem-img" src="/image/bra.png" alt="">  <br>
      <p class="des">
        SÃO PAULO - SP<br><br>
        Aceleração  91<br>
        Finta       89<br>
        Chute       93
      </p>
      <ul class="social-icon">
        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
        <li><a href=""><i class="fab fa-instagram"></i></a></li>
      </ul>
    </div>
  </div>
</div>
</div>

  <div class="column">
<div class="card">
  <div class="content">
    <div class="front">
      <img class="profile" width="100%" src="/image/" alt="">
      <h2></h2>
    </div>
    <div class="back from-right">
      <h2></h2>
      <h3></h3>
      <h3>TAG: </h3><br>
      <img class="tem-img" src="/image/rn.png" alt=""> &nbsp;
      <img class="tem-img" src="/image/bra.png" alt="">  <br>
      <p class="des">
        NATAL - RN<br><br>
        Aceleração  91<br>
        Finta       89<br>
        Chute       93
      </p>
      <ul class="social-icon">
        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
        <li><a href=""><i class="fab fa-instagram"></i></a></li>
      </ul>
    </div>
  </div>
</div>
</div>


</div>
</div><br><br><br>-->

  </section>

<section id="testimonials">
  <h2>DIRETORIA</h2><br><br>

  <div class="boxers">
    <div class="card">
      <div class="face front">
        <div class="content">
          <img src="/image/eri.png" alt="Presidente" />
        </div>
      </div>
      <div class="face back">
        <div class="content"><br>
          <p>
            Fundador dos galáticos há 12 meses. "Em busca de títulos e atrás dos melhores jogadores."
          </p>
          <a href="https://www.instagram.com/erik.rezende.santos/"><button>PRESIDENTE</button></a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="face front">
        <div class="content">
          <img src="/image/wan.png" alt="Diretor" />
        </div>
      </div>
      <div class="face back">
        <div class="content"><br>
          <p>
            Manager/Olheiro dos galáticos há 12 meses. "Não existe vitória sem luta!"
          </p>
          <a href="https://www.instagram.com/wandreyol_"><button>DIRETOR</button></a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="face front">
        <div class="content">
          <img src="/image/trofeu.png" alt="Sala de Troféus" />
        </div>
      </div>
      <div class="face back">
        <div class="content"><br>
          <p>
            Nessa seção você pode acompanhar nossa trajetória e ver os títulos conquistados em vários campeonatos disputados!
          </p>
          <a href="sala.html"><button>Sala de Troféus</button></a>
        </div>
      </div>
    </div>
  </div>
</section><br><br><br>

  <section id="contact">
    <div class="contact-container container">
      <div class="contact-img">
        <img src="image/logo.png" alt="amistoso">
      </div>

      <div class="form-container">
        <h2>Agende seu amistoso</h2>
        <input type="text" placeholder="Nome">
        <input type="text" placeholder="Clube">
        <input type="email" placeholder="E-mail">
        <textarea cols="30" rows="6" placeholder="Menssagem"></textarea>
        <a href=mailto:wandrey.academico20@gmail.com class="btn btn-primary">ENVIAR</a>
      </div>
    </div>
  </section>

  <footer id="footer">
    <h2>GaláticosPro &copy; All rights reserved<br>Developed by Vitor Lima</h2>
    
  </footer>
</body>

<!-- 
    .................../ JS Code for smooth scrolling /...................... -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $(document).ready(function () {
    // Add smooth scrolling to all links
    $("a").on("click", function (event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $("html, body").animate(
          {
            scrollTop: $(hash).offset().top,
          },
          800,
          function () {
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          }
        );
      } // End if
    });
  });
</script>

</html>