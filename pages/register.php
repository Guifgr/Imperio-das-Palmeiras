<head>
    <link href="./css/register.css" rel="stylesheet" type="text/css" />
</head>
<div class="row ">
    <div class="column">
        <h1 style="text-align:center">Registrar!</h1>
        <div class="card">
        <form action="login.php" method="post">
            <label for="email">E-mail</label>
            <input required type="email" name="email" id="email">
            <br />
            <br />
            
            <label for="password">Senha</label>
            <input required type="password" name="password" id="password">
            <br />
            <br />
            
            <label for="repassoword">Repita Senha</label>
            <input required oninput="compare()" type="password" name="repassword" id="repassword">
            
            <label for="mostrar">Mostrar senha</label>
            <input onclick="checkAddress(this)" type="checkbox" id="mostrar" name="mostrar">
            <br />
            <br />
            <button type="submit" class="button littleZoom">Registrar</button>
            <br />
            <a href=""><button type="submit" class="littleZoom logar">Já tenho conta!</button></a>
            
        </form>        
      </div>
    </div>
  </div>
  <script src="./js/register.js"></script>
  
