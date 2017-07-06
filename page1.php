<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>AJAX</title>
        <script src="jquery.js"></script>
        <script src="jquery-ui.min.js"></script>
    </head>
    <body>
      <button id="ajax" name="button">Afficher mon AJAX</button>
      <ul id="zone">

      </ul>
       <script>
        $.ajax({
          url :'list.json',
          type :'get',
          dataType :'json',

          success: function(data) {
           $.each(data.books, function(key, value) {
            $('#zone').append('<p>Titre :' + value.title + '</p><p>Auteur :' + value.author + '</p><img src=' + value.cover+ ' width="100px"><p>Genre :' + value.genre +'</p><hr>');
             $('#zone').hide()
              });
             },
              error : function () {
               $('#zone').html('ERROR');
              }
            });
             $('#ajax').click(function(){
               $('#zone').toggle(500);
              });
       </script>
         <button type="button" name="button"><a href="index.html">Retour</a></button>
    </body>
</html>
