<!DOCTYPE html>
<html>
  <head>
    {include file='templates/head.tpl'}
    <script src="http://code.jquery.com/jquery.js"></script>
  </head>

  <body>
    <header>
      {include file="templates/header.tpl"} 
    </header>
    <section>
      {if $error eq '1'}
        {include file="templates/error.tpl"} 
      {/if}
      {include file="templates/$container"} 
    </section>
    <script src="js/aria.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

