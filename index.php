<!DOCTYPE html>
  <head>
    <title>FajarAlfa</title>
  </head>
  <body style="font-size:14px;">
    <marquee width = 43% direction><b><i>Jangan Lupa Unsubrek</i></b></marquee>
<p>Hai, ini adalah website latihan saya,<br>  terima kasih telah berkunjung :)</p>
<p>
<a href="https://youtube.com/channel/UCC0-sEscb2BtFwc9pGs0Cng"><img src="images/youtube-icon.png" height="23px"></a>
<a href=https://gitlab.com/fajaralfrzi><img src="images/gitlab-icon.png" height="23px"></a>
<a href="https://github.com/jarggpt"><img src="images/github-icon.png" height=23px></a><br></p>
<p>
<?php
$file=fopen("ggpt.txt", "r") or die("file not found");
echo "<ul>";
while(!feof($file)){
  echo "<li>".fgets($file)."<br></li>";
}
echo "</ul>";
fclose($file);
?>

<br>
Time Lapse Rakit PC :<br>
<iframe src="https://www.youtube.com/embed/9QbSKT2YeYg"></iframe>
</p>
  </body>
</html>