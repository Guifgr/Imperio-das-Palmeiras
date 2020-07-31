<head>
  <link href="./css/contato.css" rel="stylesheet" type="text/css" />
</head>

<h1 style="text-align:center">Sobre nós</h1>
<br />
<div class="row">
  <div class="column ">
    <div class="card zoom">
      <img src="<?php echo $imagem1?>" style="width:100%">
      <div class="container">
        <h2><?php echo $nome1?></h2>
        <p class="title"><?php echo $cargo1?></p>
        <p><?php echo $texto1?></p>
        <p><a target="_top" class="email" href="mailto:<?php echo $email1?>"><?php echo $email1?></a></p>
        <a href="<?php echo $link1?>"><p><button class="button">Contato</button></p></a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card zoom">
      <img src="<?php echo $imagem2?>" style="width:100%">
      <div class="container">
        <h2><?php echo $nome2?></h2>
        <p class="title"><?php echo $cargo2?></p>
        <p><?php echo $texto2?></p>
        <p><a target="_top" class="email" href="mailto:<?php echo $email2?>"><?php echo $email2?></a></p>
        <a href="<?php echo $link2?>"><p><button class="button">Contato</button></p></a>
      </div>
    </div>
  </div>
  
  <div class="column ">
    <div class="card zoom">
      <img src="<?php echo $imagem3?>" style="width:100%">
      <div class="container">
        <h2><?php echo $nome3?></h2>
        <p class="title"><?php echo $cargo3?></p>
        <p><?php echo $texto3?></p>
        <p><a target="_top" class="email" href="<?php echo $email3?>"><?php echo $email3?></a></p>
        <a href="mailto:<?php echo $link3?>"><p><button class="button">Contato</button></p></a>
      </div>
    </div>
  </div>
</div>
