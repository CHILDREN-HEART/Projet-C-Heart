<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Page de Form</title>
    <link rel="stylesheet" href="pagedeform.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.staticfile.org/foundation/5.5.3/css/foundation.min.css"
    />
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/foundation/5.5.3/js/foundation.min.js"></script>
    <script src="https://cdn.staticfile.org/foundation/5.5.3/js/vendor/modernizr.js"></script>
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

      <div id="footer">
        <div class="btn-group">
          <button class="Contacter">Contacter un admin</button>
          <button class="Ticket">Ticket</button>
          <button class="Forum">Forum</button>
          <button class="FAQ">FAQ</button>
        </div>
      </div>
    </div>
  </body>
</html>
