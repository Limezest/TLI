<!DOCTYPE html>
<html>
  <head>
    {include file='templates/head.tpl'}
  </head>

  <body>
    <header>
      {include file="templates/header.tpl"} 
    </header>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
     <script src="js/search.js"></script>
    <section>
      {if $error eq '1'}
        {include file="templates/error.tpl"} 
      {/if}
      {include file="templates/$container"} 
    </section>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
