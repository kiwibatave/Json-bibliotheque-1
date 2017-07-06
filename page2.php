<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>AJAX</title>
        <script src="jquery.js"></script>
        <script src="jquery-ui.min.js"></script>
    </head>
    <body>
      <button id="butt" name="button">Afficher JS</button>
      <ul id="zone">

      </ul>
       <script>

        $.ajax ({
         url :'list.json',
         type :'get',
         dataType :'json',

         success: function(data) {

           for(var i=0; i < data.books.length; i++) {
            $('#zone').append('<p>Titre :' + data.books[i].title + '</p><p>Auteur :' + data.books[i].author + '</p><img src=' + data.books[i].cover+ ' width="100px"><p>Genre :' + data.books[i].genre +'</p><hr>');
             $('#zone').hide()
            };
          },
            error : function() {
             $('#zone').html('Erreur');
            }
          });
           $('#butt').click(function() {
            $('#zone').toggle(500);
           });
        </script>
      <button type="button" name="button"><a href="index.html">Retour</a></button>
    </body>
  </html>
