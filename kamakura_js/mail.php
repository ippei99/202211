<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <?php
      mb_language("Japanese");
      mb_internal_encoding("UTF-8");
      $to = $_POST['your-name'];
      $title = $_POST['title'];
      $content = $_POST['content'];
      if(mb_send_mail($to, $title, $content)){
        echo "<p style=\"color:red;\">メールを送信しました</p>";
      } else {
        echo "メールの送信に失敗しました";
      };
    ?>
  </body>
</html>
