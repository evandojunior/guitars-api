<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GuitarApi</title>
    {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}
    <link href="/css/app.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div id="app">
      <figure class="img-logo text-center">
        <img src="/img/telecaster.png" alt="">
      </figure>
      <h3 class="text-center">GuitarApi</h3>
      <guitar-list-component :title="tableTitle" :data="tableData"/>
    </div>
    </div>
  </body>
  <script type="text/javascript" src=/js/app.js></script>
</html>
