<!DOCTYPE html>
<html>
  <head>
    {include file='templates/head.tpl'}
  </head>

  <body>
    <header>
      {include file="templates/header.tpl"} 
    </header>
    <section>
      {include file="templates/$container"} 
    </section>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
