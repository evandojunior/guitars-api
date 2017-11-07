<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="app">
      <h1>Hi</h1>
      <h1>@{{msg}}</h1>
      <example-component :title="title" :data="dadosDaTabela"/>
    </div>
  </body>
  <script type="text/javascript" src={{asset('js/app.js')}}></script>
</html>
