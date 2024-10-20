<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Innoxia</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
    </style>
  </head>
  <body>
    <style>
      :root {
        font-family: "Poppins", sans-serif;
        --purple: rgb(19, 12, 102);
        --greenwhite: rgb(21, 202, 75);
        --blue: rgb(24, 88, 171);
        --btncolor: rgb(248, 35, 35);
        --termscolor: rgb(167, 212, 2);
      }
      .btn {
        background: var(--btncolor);
        border: none;
        border-radius: 5%;
        padding: 10%;
        color: white;
        font-weight: 549;
        font-size: 105%;
        cursor: pointer;
      }
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style: none;
      }
      body {
        background-repeat: no-repeat;
        overflow-x: hidden;
        user-select: none;
      }
      #container {
        align-items: center;
        height: min-content;
        padding: 1% 5%;
        background-color: var(--blue);
      }
      .main {
        height: 100vh;
        background: var(--purple);
      }
      #nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .logo {
        color: white;
        font-size: 2.5em;
        cursor: pointer;
      }

      .ul {
        display: flex;
        gap: 10%;
        position: relative !important;
        left: -3%;
      }
      #btnsstart {
        padding: 2% 10%;
        margin: 10%;
        align-items: center;
        justify-content: center;
      }

      .li a {
        color: white;
        align-items: center !important;
        font-size: 101%;
      }

      #lados {
        display: flex;
        gap: 10%;

        width: 100%;
      }

      #leftside > #info h1 {
        color: white;
        font-size: 2em;
        width: 90%;
        text-align: left;
      }
      #leftside > #info p {
        color: white;
        font-weight: 500;
        width: 90%;
        text-align: left;
      }
      .infoitem {
        margin-top: 10%;
        color: white;
      }

      #leftside {
        width: 130%;
        align-items: center;
        justify-content: center;
      }
      #btnsstart {
        padding: 2.5% 12%;
      }

      #fotofamily {
        height: 120%;
        width: 120%;
        align-items: right;
        border-radius: 5%;
      }
      main {
        margin: 3% 5.5%;
      }
      #image {
        height: 75%;

        width: 75%;
        position: relative;
      }
      #foot > #terms h4 {
        font-size: 1em;
      }
      footer {
        background: var(--termscolor);
        height: 100%;
        margin-top: -8%;
      }
      #containerfoot {
        color: white;
        padding: 1%;
      }
      #foot > #terms p {
        font-size: 1.5em;
        margin-top: 6%;
      }
      #foot > #terms h4 {
        font-size: 1.5em;
      }

      @media (max-width: 1300px) {
        footer {
          margin-top: -1%;
        }
        #foot > #terms h4 {
          font-size: 1.4em;
        }
        #foot > #terms p {
          font-size: 1.3em;
        }
      }

      @media (max-width: 800px) {
        #lados {
          display: block;
          text-align: center;
        }
        #leftside > #info h1 {
          font-size: 2em;
          width: 100%;
          margin-right: 0;
          text-align: center;
        }

        #foot > #terms p {
          font-size: 0.9em;
        }

        #fotofamily {
          margin-left: 10%;
        }

        #leftside > #info p {
          width: 100%;
          margin-right: 0%;
          text-align: center;
          font-weight: 500;
        }
        #leftside {
          position: relative;
          left: -13%;
          text-align: center;
        }
        .infoitem {
          margin-top: 5%;
          color: rgb(255, 0, 0);
        }
        #btnsstart {
          padding: 2% 10%;
          margin: 6%;
        }
      }

      @media (max-width: 400px) {
        .logo {
          font-size: 2em;
        }
        #container {
          padding: 1% 2%;
        }
        .ul {
          left: -6%;
          gap: 4.5%;
        }
        .btn {
          padding: 7% 5%;
        }
      }

      @keyframes btnanimation {
        0% {
          transform: scale(1);
        }
        50% {
          transform: scale(1.2);
        }
        100% {
          transform: scale(1);
        }
      }
      #btnsstart:hover {
        animation: btnanimation 2.5s infinite;
      }

      input {
        height: 40px;
        width: 60%;
        margin-top: 1%;
        margin-bottom: -0%;
        border-radius: 3%;
        border: none;
        outline: none;
        font-size: 1em;
        padding: 3%;
      }

      #divtasks {
        margin-top: 1%;
        margin-bottom: 5%;
      }

      #btn-send {
        padding: 1.1%;
        border: none;
        border-radius: 5%;
        margin-left:2%;
        cursor: pointer;
      }

      
    </style>

    <!--Start Main-->
    <section class="main">
      <div id="container">
        <div id="nav">
          <h1 class="logo">Innoxia</h1>
          <ul class="ul">
            <li class="li" class="lit"><a href="#">Remover</a></li>
            <li class="li" class="lit"><a href="#">Editar</a></li>
            <li class="li">
              <a href="#"><button class="btn" onclick="start()">Adicionar</button></a>
            </li>
          </ul>
        </div>
      </div>

      <main>
        <div class="cointainermain">
          <div id="lados">
            <div id="leftside">
              <div id="info">
                <h1 class="infoitem">
                  O Melhor Tarefador <br />
                  Do Brasil
                </h1>
                <p class="infoitem">A gente cuida de voçê</p>
                <button
                  class="btn"
                  class="infoitem"
                  id="btnsstart"
                  onclick="start()"
                >
                  Começar
                </button>
              </div>
            </div>
            <div id="rightside">
              <div id="image">
                <img src="fotofamily.jpg" alt="family" id="fotofamily" />
              </div>
            </div>
          </div>
        </div>
      </main>
    </section>
    <!--End Main-->

    <!--start footer-->
    <footer>
      <div id="containerfoot">
        <div id="foot">
          <div id="terms">
            <h4>
              Esses aqui são os termos desse site e tudo oque deve seguir para
              ter acesso otimo entre as pessoas deste servidor
            </h4>
            <p>
              Ao utilizar o FotoClick, você concorda com os presentes termos e
              condições, além de nossa política de privacidade. O acesso ao site
              implica a aceitação integral das regras aqui descritas. Se não
              concordar com qualquer uma delas, recomendamos que não continue
              utilizando nossos serviços. Para usar o FotoClick, é necessário
              criar uma conta com informações verdadeiras e atualizadas. Você é
              responsável pela segurança de suas credenciais e por todas as
              atividades realizadas em sua conta. Caso suspeite de uso não
              autorizado, entre em contato conosco imediatamente. O FotoClick
              deve ser utilizado de forma legal e responsável. Você não pode
              compartilhar conteúdos que violem leis ou sejam considerados
              ofensivos, difamatórios, ou que infrinjam direitos autorais.
              Qualquer comportamento que vá contra estas regras poderá resultar
              no encerramento da sua conta sem aviso prévio. Os direitos
              autorais de todo o conteúdo fornecido pelo FotoClick, incluindo
              textos, gráficos, e códigos, são protegidos por lei. Você não está
              autorizado a reproduzir, modificar ou distribuir qualquer material
              sem nossa permissão expressa. Todo o conteúdo que você enviar ou
              compartilhar em nossa plataforma permanece de sua propriedade,
              mas, ao fazer isso, você concede ao FotoClick uma licença limitada
              para usá-lo, exibi-lo e promovê-lo dentro da plataforma. Nós nos
              reservamos o direito de modificar esses termos a qualquer momento,
              com ou sem aviso prévio. A versão mais recente estará sempre
              disponível em nosso site, e recomendamos que você a revise
              periodicamente. O uso contínuo do FotoClick após quaisquer
              modificações será considerado como aceitação das novas condições.
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!--End Footer-->

    <script>
      var contagemBtn = 0;

      function start() {
        contagemBtn++;

        if (contagemBtn <= 1) {
          // chamar os elementos pelo id
          var bau = document.getElementById("info");

          // criar ao clicar
          var informations = document.createElement("p");
          var input = document.createElement("input");
          var div = document.createElement("div");
          var btn = document.createElement("button");


          div.id = "divtasks";
          informations.id = "informations";
          input.id = "input";
          btn.id = "btn-send";

          input.placeholder = "Escreva aqui sua tarefa!";
          informations.textContent = "Para adicionar uma tarefa escreva ela abaixo.";
          btn.textContent = "Enviar";

          // adicionar tudo
          bau.appendChild(div);
          div.append(btn);
          div.append(informations);
          div.append(input);
          div.append(btn);
        } else {
            alert("esse botão ja foi clicado!");
        }
      }
    </script>

    <?php 
    
    ?>
  </body>
</html>
