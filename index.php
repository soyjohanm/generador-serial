<?php
  $cadena = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
  $serial = '';
  for ($i=0; $i < 29; $i++) {
    $indice = rand(0, (strlen($cadena)-1));
    if ($i==5 || $i==11 || $i==17 || $i==23) { $serial .= '-'; }
    else { $serial .= $cadena[$indice]; }
  }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Generador de seriales">
    <title>Generador de seriales</title>
    <style media="screen">
      html {
        line-height: 1.15;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
      }
      body {
        margin: 0;
      }
      a {
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
      }
      button, input, optgroup, select, textarea {
        font-family: sans-serif;
        font-size: 100%;
        line-height: 1.15;
        margin: 0;
      }
      button, input {
      overflow: visible;
      }
      html {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
      }
      *, *:before, *:after {
        -webkit-box-sizing: inherit;
        box-sizing: inherit;
      }
      button, input, optgroup, select, textarea {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
      }
      a {
        color: #039be5;
        text-decoration: none;
        -webkit-tap-highlight-color: transparent;
      }
      .z-depth-1, nav, .card-panel, .card, .toast, .btn, .btn-large, .btn-small, .btn-floating, .dropdown-content, .collapsible, .sidenav {
        -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
      }
        .z-depth-1-half, .btn:hover, .btn-large:hover, .btn-small:hover, .btn-floating:hover {
        -webkit-box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.14), 0 1px 7px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -1px rgba(0, 0, 0, 0.2);
        box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.14), 0 1px 7px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -1px rgba(0, 0, 0, 0.2);
      }
      .row {
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 20px;
      }
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      .row .col {
        float: left;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 0 0.75rem;
        min-height: 1px;
      }
      .row .col.s2 {
        width: 16.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto;
      }
      .row .col.s10 {
        width: 83.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto;
      }
      a {
        text-decoration: none;
      }
      html {
        line-height: 1.5;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        font-weight: normal;
        color: rgba(0, 0, 0, 0.87);
      }
      @media only screen and (min-width: 0) {
        html {
          font-size: 14px;
        }
      }
      @media only screen and (min-width: 992px) {
        html {
          font-size: 14.5px;
        }
      }
      @media only screen and (min-width: 1200px) {
        html {
          font-size: 15px;
        }
      }
      .btn, .btn-large, .btn-small, .btn-flat {
        border: none;
        border-radius: 2px;
        display: inline-block;
        height: 36px;
        line-height: 36px;
        padding: 0 16px;
        text-transform: uppercase;
        vertical-align: middle;
        -webkit-tap-highlight-color: transparent;
      }
      .btn, .btn-large, .btn-small, .btn-floating, .btn-large, .btn-small, .btn-flat {
        font-size: 14px;
        outline: 0;
      }
      .btn, .btn-large, .btn-small {
        text-decoration: none;
        color: #fff;
        background-color: #0000ff;
        text-align: center;
        letter-spacing: .5px;
        -webkit-transition: background-color .2s ease-out;
        transition: background-color .2s ease-out;
        cursor: pointer;
      }
      .btn:hover, .btn-large:hover, .btn-small:hover {
        background-color: #0000ff;
      }
      .btn-flat {
        -webkit-box-shadow: none;
        box-shadow: none;
        background-color: transparent;
        color: #343434;
        cursor: pointer;
        -webkit-transition: background-color .2s;
        transition: background-color .2s;
      }
      .btn-flat:focus, .btn-flat:hover {
        -webkit-box-shadow: none;
        box-shadow: none;
      }
      input:not([type]), input[type=text]:not(.browser-default), input[type=password]:not(.browser-default), input[type=email]:not(.browser-default), input[type=url]:not(.browser-default),
      input[type=time]:not(.browser-default), input[type=date]:not(.browser-default), input[type=datetime]:not(.browser-default), input[type=datetime-local]:not(.browser-default), input[type=tel]:not(.browser-default),
      input[type=number]:not(.browser-default), input[type=search]:not(.browser-default), textarea.materialize-textarea {
        background-color: transparent;
        border: none;
        border-bottom: 1px solid #9e9e9e;
        border-radius: 0;
        outline: none;
        height: 3rem;
        width: 100%;
        font-size: 16px;
        margin: 0 0 8px 0;
        padding: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        -webkit-transition: border .3s, -webkit-box-shadow .3s;
        transition: border .3s, -webkit-box-shadow .3s;
        transition: box-shadow .3s, border .3s;
        transition: box-shadow .3s, border .3s, -webkit-box-shadow .3s;
      }
      input:not([type]):focus:not([readonly]), input[type=text]:not(.browser-default):focus:not([readonly]), input[type=password]:not(.browser-default):focus:not([readonly]),
      input[type=email]:not(.browser-default):focus:not([readonly]), input[type=url]:not(.browser-default):focus:not([readonly]), input[type=time]:not(.browser-default):focus:not([readonly]),
      input[type=date]:not(.browser-default):focus:not([readonly]), input[type=datetime]:not(.browser-default):focus:not([readonly]), input[type=datetime-local]:not(.browser-default):focus:not([readonly]), input[type=tel]:not(.browser-default):focus:not([readonly]),
      input[type=number]:not(.browser-default):focus:not([readonly]), input[type=search]:not(.browser-default):focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]) {
        border-bottom: 1px solid #0000ff;
        -webkit-box-shadow: 0 1px 0 0 #0000ff;
        box-shadow: 0 1px 0 0 #0000ff;
      }
      .input-field {
        position: relative;
        margin-top: 1rem;
        margin-bottom: 1rem;
      }
    </style>
  </head>
  <body>
    <div style="width: 40%">
      <div class="row" style="margin: 5% 5%">
        <div class="input-field col s10">
          <input type="text" id="serial" value="<?php echo $serial; ?>" readonly>
        </div>
        <div class="col s2">
          <a class="btn btn-flat" href="./">Generar</a>
          <a class="btn btn-flat" onclick="copiar('serial')">Copiar</a>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
    function copiar(id) {
      var aux = document.createElement("input");
      aux.setAttribute("value", document.getElementById(id).value);
      document.body.appendChild(aux);
      aux.select();
      document.execCommand("copy");
      document.body.removeChild(aux);
    }
  </script>
</html>
