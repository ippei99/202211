<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <?php
      mb_language("Japanese");
      mb_internal_encoding("UTF-8");
      $to = $_POST['your-email'];
      $title = $_POST['your-name'];
      $content = $_POST['your-message'];
      if(mb_send_mail($to, $title, $content)){
        echo "<p>メールを送信しましたヽ(´ー｀)ノ</p>";
      } else {
        echo "<p>メールの送信に失敗しました</p>";
      };
			echo "<a href='index.html'>戻る</a>";
    ?>
  </body>
</html>