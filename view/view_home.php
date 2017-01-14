<?php session_start(); ?>

  <!DOCTYPE html>
  <html>

  <head>
    <title>Home Page</title>
    <?php include_once('import_materialize.php'); ?>
  </head>

  <?php // calls the showSnippet controller?>

    <body>

      <?php include_once("import_navbar.php"); ?>

        <!--<div class="container section">
<div class="right fixed-action-btn toolbar">
<a class="btn-floating btn-large red">
<i class="large material-icons">menu</i>
</a>
</div>
</div>-->

        <div class="container">
          <div class="center">
            <h2>Welcome to the secret society</h2>
            <a class="btn waves-effect waves-light" href="#modal">Add note</a>
          </div>

          <div id="modal" class="modal bottom-sheet">
            <div class="modal-content">
                 <form action="../controller/controller_home_addSnippet.php" method="post">
                    <label><b><i>New Note: </i></b></label>
                    <input type="text" name="snippet" placeholder="Enter new note here">
                    <!-- Add input to submit a public/private snippet -->
                    <p>
                        <input name="isPublic" type="radio" id="test1" value="1" />
                        <label for="test1">Public Note</label>
                    </p>
                    <p>
                        <input name="isPublic" type="radio" id="test2" value="0" />
                        <label for="test2">Private Note</label>
                    </p>
                    <?php $_SESSION['token'] = md5(uniqid(mt_rand(), true)); ?>
                    <input type="hidden" name="csrf" value="<?php echo $_SESSION['token']; ?>">
                    <input class="btn waves-effect waves-light" type="submit" value="Add Note" />
                  </form>
            </div>
          </div>

          <input type="button" value="button name" onclick="window.open('http://localhost:8888/Scenario3/Bad-Guys/')" />

          <div class="section">
            <h4>Your Notes:</h4>
            <div class="section">
              <ul class="collapsible popout" data-collapsible="accordion">
                <?php include_once("../controller/controller_home_showSnippets.php"); ?>
              </ul>
            </div>
          </div>

        </div>

        <?php //for each element in the variable "$snippets" do stuff?>

          <!--Import jQuery before materialize.js-->
          <?php include_once("import_js.php"); ?>
            <script language="Javascript">
              $(".dropdown-button").dropdown();
            </script>
            <script language="Javascript">
              $(document).ready(function() {
                // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal').modal();
              });
            </script>
    </body>

  </html>
