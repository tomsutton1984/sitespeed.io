
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Testing...
        </title> 
  <meta name="description" content="An executive summary.">
  <meta name="robots" content="noindex" />
  <link rel="stylesheet" href="/report/css/bootstrap.min.css">

  <style type="text/css">
    body {
        padding-top: 55px;
        padding-bottom: 40px;
    }
    .navbar .nav > li > a {
      font-weight: bold;
      color:white;
    }
    footer p {
    text-align: center;
    }
    .large {
      font-family: Tahoma,Impact,Verdana,sans-serif;
      font-size: 32px;
      line-height: 38px;
      font-weight:bold;
    }
    .nobreak {
    word-wrap: break-word;
    }

    .logo {
      padding: 0px; 
      float: left; 
      margin-left: -20px; 
      border:0px;
    }

  a.alert-success:hover {
  text-decoration: none;
  color: #468847;
  cursor:pointer;
  }

  a.alert-error:hover {
  text-decoration: none;
  color: #B94A48;
  cursor:pointer;
  }

    a.alert-warning:hover {
  text-decoration: none;
  color: #C09853;
  cursor:pointer;
  }

  a.alert-warning {
  text-decoration: none;
  color: #C09853;
  cursor:pointer;
  }

    </style>

  <link rel="shortcut icon" href="/report/img/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">

        <img src="/report/img/sitespeed-logo.gif" class="logo"/>
         <!-- <a class="brand" href="#" title="How speedy is your site?">sitespeed.io</a>-->
        <div class="nav-collapse">
          <ul class="nav">
            <li>
              <a href="/">Home</a>
            </li>
            <li>
              <a href="/sitespeed-result/">All tests</a>
            </li>
                      </ul>
        </div>
        <!--/.nav-collapse --> </div>
    </div>
  </div>
  <!--/.navbar -->

  <div class="container">



<script>
setInterval(function(){
    $.get('test-result.html', function(data) {
        $('.result').html(data);
    });
}, 1000); // 1 seconds
</script>

<div id="result" class="result"></div>


  <footer>
    <hr/>  
    <p>
      <a href="http://sitespeed.io">Sitespeed.io</a>
      written by
      <a href="https://twitter.com/soulislove">@soulislove</a>
      design and layout created with
      <a href="http://twitter.github.com/bootstrap/" target="_blank">Bootstrap</a>.
    </p>
  </footer>

  </div>
  <!-- /container -->  
  <script src="/report/js/jquery-1.8.2.min.js"></script>
  <script src="/report/js/bootstrap.min.js"></script>
  <script src="/report/js/jquery.tablesorter.min.js"></script>

</body>
</html>