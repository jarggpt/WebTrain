<!DOCTYPE html>
  <head>
    <title>FajarAlfa</title>
  </head>
  <body>
    <marquee width = 43% direction><b>Jangan Lupa Unsubrek</b></marquee>
<p>Hai, ini adalah website latihan saya,<br>  terima kasih telah berkunjung :)</p>
<ul>
<li>Channel Youtube Saya : <a href="https://youtube.com/channel/UCC0-sEscb2BtFwc9pGs0Cng">FajarAlfa</a></li>
<li>GitHub : <a href="https://github.com/jarggpt">jarggpt</a></li>
<li>Test : <a href=/tentang.php>link</a></li>
</ul>

<?php
$file=fopen("ggpt.txt", "r") or die("file not found");
while(!feof($file)){
  echo fgets($file)."<br>";
}
fclose($file);
?>

<br>
TimeLapse Rakit PC :<br>
<iframe src="https://www.youtube.com/embed/9QbSKT2YeYg"></iframe>
  </body>
</html>