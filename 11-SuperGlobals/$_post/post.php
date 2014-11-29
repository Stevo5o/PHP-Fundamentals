<!DOCTYPE html>
<!-- @author Stephen O'Connor -->
<html>
   <head>
      <link href="../../style.css" rel="stylesheet" type="text/css"/>
      <meta charset="UTF-8">
      <title>Print Post</title>
   </head>
   <body>  
      <div id="contentPost"> 
      <article id="panel">
         	<header></header>
          
      <?= "USERNAME: ",        
      filter_input(INPUT_POST, 'name'),      
      "<br />",
        "EMAIL: ",
      filter_input(INPUT_POST, 'email'),
      "<br />",
        "MESSAGE: ",
      filter_input(INPUT_POST, 'message');
      ?>
      </article>
      <script>
         alert(
              "<?= "USERNAME: ",        
      filter_input(INPUT_POST, 'name'),      
      '\n',
        'EMAIL: ',
      filter_input(INPUT_POST, 'email'),
      '\n',
        'MESSAGE: ',
      filter_input(INPUT_POST, 'message');
      ?>"
                );

      </script>

   </body>
</html>
