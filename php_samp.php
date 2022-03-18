<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HTMLファイルを確認する</title>
  </head>
  <body>
    世界に一人 かけがえのないあなた<br>

    <?php
    $br= getenv("HTTP_USER_AGENT");
    if (stristr($br,"Edge")){
      print("あなたのブラウザはEdgeですね");
    } elseif (stristr($br,"Chrome")) {
      print("あなたのブラウザはChromeですね");
    }elseif (stristr($br,"Firefox")) {
      print("あなたのブラウザはFIrefoxですね");
    }elseif (stristr($br,"Safari")) {
      print("あなたのブラウザはSafariですね");
    }else{
      print("あなたのブラウザは知りません");
    }
    ?>
  </body>
</html>
