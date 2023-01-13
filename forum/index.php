<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>FAQ</title>
    <link rel="shortcut icon" href="./assets/Logo.png" />
    <link rel="stylesheet" href="../assets/styles/components/header.css">
    <link rel="stylesheet" href="../assets/styles/components/footer.css">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

    <header>
    <?php include('../header_footer/header1.php');?>
  </header>

      <div id="center">
        <span class="note-sujet"> Dernier sujet de discution </span>
        <div class="ligne1" style="border-bottom: 4px solid rgb(1, 1, 1)"></div>
        <span class="note-date">Dates</span>
        <span class="note-profil">Profil</span>
        <div class="col3" style="border-left: 3px solid rgb(1, 1, 1)"></div>
        <div class="col4" style="border-left: 3px solid rgb(1, 1, 1)"></div>
      </div>

      <div id="mid">
        <div id="left">
          <h3>Catégories</h3>
          <div
            class="ligne4"
            style="border-bottom: 4px solid rgb(1, 1, 1)"
          ></div>
          <div
            class="ligne5"
            style="border-bottom: 2px solid rgb(1, 1, 1)"
          ></div>
          <div
            class="ligne6"
            style="border-bottom: 2px solid rgb(1, 1, 1)"
          ></div>
          <div
            class="ligne7"
            style="border-bottom: 2px solid rgb(1, 1, 1)"
          ></div>
          <div
            class="ligne8"
            style="border-bottom: 2px solid rgb(1, 1, 1)"
          ></div>
          <div
            class="ligne9"
            style="border-bottom: 2px solid rgb(1, 1, 1)"
          ></div>
          <div
            class="ligne10"
            style="border-bottom: 2px solid rgb(1, 1, 1)"
          ></div>
          <div
            class="ligne11"
            style="border-bottom: 2px solid rgb(1, 1, 1)"
          ></div>
          <div
            class="ligne12"
            style="border-bottom: 2px solid rgb(1, 1, 1)"
          ></div>
        </div>
        <div id="right">
          <span class="sujet">Sujet de la discution</span>
          <span class="date">Dates</span>
          <span class="profil">Profil</span>
          <div
            class="ligne13"
            style="border-bottom: 4px solid rgb(1, 1, 1)"
          ></div>
          <div class="col1" style="border-left: 3px solid rgb(1, 1, 1)"></div>
          <div class="col2" style="border-left: 3px solid rgb(1, 1, 1)"></div>
          <div class="sujet2">
            <input
              type="text"
              id="sujet"
              name="sujet"
              placeholder="Ecrire le sujet ici s'il vous plait"
              style="width: 425px; height: 30px"
            />
          </div>
          <div class="date2">
            <input
              type="text"
              id="date"
              name="date"
              placeholder="  jj/mm/aaaa"
              style="width: 100px; height: 30px"
            />
          </div>
          <div class="profil2">
            <input
              type="text"
              id="profil"
              name="porfil"
              placeholder="     profil"
              style="width: 100px; height: 30px"
            />
          </div>
        </div>
      </div>

      <footer>
  <?php include('../header_footer/footer1.php');?>
</footer>
  </body>
</html>
