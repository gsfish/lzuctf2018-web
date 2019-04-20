<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>某网站</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="/css/jumbotron-narrow.css" rel="stylesheet">
    <script src="/js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="https://oss.lzu.edu.cn/">主页</a></li>
            <li role="presentation"><a href="https://oss.lzu.edu.cn/wiki/doku.php?id=aboutus">关于</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">某神秘组织</h3>
      </div>
      <div class="jumbotron">
        <div class="media">
          <div class="media-left media-middle">
            <img class="media-object" src="/image.php?url=<?php echo base64_encode('http://'.gethostbyname('nginx').'/images/oss-logo.png');?>">
          </div>
          <div class="media-body">
            <h4 class="media-heading">Lanzhou University Open Source Society</h4>
            <p>这是一段很随便的介绍</p>
            <p>BLABLABLABLABLABLABLABLABLABLA</p>
            <p>BLABLABLABLABLABLABLABLA...</p>
          </div>
        </div>
      </div>
      <footer class="footer">
        <p>&copy; 2018 LZU OSS.</p>
      </footer>
    </div>
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
