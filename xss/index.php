<!doctype html>
<html>
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
        <title>hacked by licco</title>
        <style>
            *{
              margin: 0;
              padding: 0;
            }
            body{
              background-color: #010A19;
              padding-top: 20px;
            }
            .logo{
              height: 20vh;
              float: left;
            }
            .box{
              background: #AAAAAA;
              height: 100px;
              width: 55vw;
              float: left;
              margin-top: 10px;
              border-radius: 20px;
              display: grid;
              padding-top: 10px;
              padding-left: 10px;
            }
            .sorry,.tip{
              color: red;
              margin-top: 150px;
              padding: 10px;
              background: white;
              width: 280px;
              border-radius: 20px;
              box-shadow: 3px 3px 8px white;
            }
            .xssdxf{
              background-image:-webkit-linear-gradient(#00FF00,black);
              -webkit-background-clip:text;
              -webkit-text-fill-color:transparent;
              float: left;
            }
            .about{
              padding: 10px;
              padding-top: 20px;
              background: white;
              width: 280px;
              border-radius: 20px;
              box-shadow: 3px 3px 8px white;
              margin-top: 100px;
              height:250px;
            }
            .about p{
              float: left;
            }
        </style>
    </head> 
    <body>
        <img src='logo.png' class='logo'/>
        <div class='box'>
          <p>访问IP: <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
          <p>当前日期: <?php echo date('Y-m-d'); ?></p>
          <p>我们的QQ群: 243561399</p>
          <p>您的浏览器: <?php echo get_broswer(); ?></p>
        </div>
        <br>
        <center>
          <p class='sorry'>很抱歉，您的网站已被我们重定向<br><-- 请尽快解决 --></p>
          
          <div style="width:180px;margin-top:20px;">
            <h3 class='xssdxf' style="font-size:50px;">XSS</h3><p class='xssdxf' style="margin-top:25px;margin-left:20px;">待修复...</p>
          </div>
          
          <div class='about'>
            <p><b>QQ群聊:</b> 243561399</p>
            <p><b>TG群聊:</b> https://t.me/liccohack</p>
            <br><br><br>
            <p><b>关于XSS漏洞:</b></p><br>
            <p>跨站脚本攻击（Cross-Site Scripting，简称XSS）是一种常见的网络应用安全漏洞，它允许攻击者将恶意脚本注入到网页中，进而由受害者的浏览器执行。这些脚本可以窃取用户的会话凭证、篡改网页内容、重定向用户至恶意站点，甚至进行钓鱼攻击。</p>
            <p style="color:red;">我们并无恶意</p>
          </div>
          <p class='tip' style="margin-top:20px;">Hacked by licco.</p>
        </center>
    </body>

<script>
  if (window.orientation == 90 || window.orientation == -90 ){ 
    logo=document.querySelector('.logo')
    logo.style.height='50vh'
    logo.style.marginLeft='30px'
  } 
</script>
    
<?php

function get_broswer()
{
    $sys = $_SERVER['HTTP_USER_AGENT'];  //获取用户代理字符串  
    if (stripos($sys, "Firefox/") > 0) {  
        preg_match("/Firefox\/([^;)]+)+/i", $sys, $b);  
        $exp[0] = "Firefox";  
        $exp[1] = $b[1];  	//获取火狐浏览器的版本号  
    } elseif (stripos($sys, "Maxthon") > 0) {  
        preg_match("/Maxthon\/([\d\.]+)/", $sys, $aoyou);  
        $exp[0] = "傲游";  
        $exp[1] = $aoyou[1];  
    } elseif (stripos($sys, "MSIE") > 0) {  
        preg_match("/MSIE\s+([^;)]+)+/i", $sys, $ie);  
        $exp[0] = "IE";  
        $exp[1] = $ie[1];  //获取IE的版本号  
    } elseif (stripos($sys, "OPR") > 0) {  
        preg_match("/OPR\/([\d\.]+)/", $sys, $opera);  
        $exp[0] = "Opera";  
        $exp[1] = $opera[1];    
    } elseif(stripos($sys, "Edge") > 0) {  
        //win10 Edge浏览器 添加了chrome内核标记 在判断Chrome之前匹配  
        preg_match("/Edge\/([\d\.]+)/", $sys, $Edge);  
        $exp[0] = "Edge";  
        $exp[1] = $Edge[1];  
    } elseif (stripos($sys, "Chrome") > 0) {  
        preg_match("/Chrome\/([\d\.]+)/", $sys, $google);  
        $exp[0] = "Chrome";  
        $exp[1] = $google[1];  //获取google chrome的版本号  
    } elseif(stripos($sys,'rv:')>0 && stripos($sys,'Gecko')>0){  
        preg_match("/rv:([\d\.]+)/", $sys, $IE);  
        $exp[0] = "IE";  
        $exp[1] = $IE[1];  
    }else {  
        $exp[0] = "未知浏览器";  
        $exp[1] = "";   
    }  
    return $exp[0].'('.$exp[1].')';  
}


?>

</html>