<?php
if(!$_COOKIE['challenge']){
?>
<script type='text/javascript'>
if (window.XMLHttpRequest){	xmlhttp=new XMLHttpRequest();	}	else	{	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");	}
xmlhttp.open("GET","config.json",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseText;
var obj = JSON.parse(xmlDoc);
var uam = obj["security"];
function setCookie(name, value, maxAgeSeconds) {
	var maxAgeSegment = "; max-age=" + maxAgeSeconds;
	document.cookie = encodeURI(name) + "=" + encodeURI(value) + maxAgeSegment;
}
function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
if(uam === 'captcha'){
document.write("<head>");
document.write("<meta charset=\"UTF-8\"\/>");
document.write("<title>T13R - Captcha<\/title>");
document.write("<meta name=\"author\" content=\"L1nux Team\">");
document.write("<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">");
document.write("<\/head>");
document.write("<body>");
document.write("<h1 align=\"center\">Complete this Captcha to access to the site.. <\/h1>");
document.write("<\/body>");
<!--
document.write( '<form action=\"\" method=\"POST\" align=\"center\">' );
document.write( '<div class=\"col-xs-12\">' );
document.write( '<div class=\"h-captcha\" data-sitekey=\"8372c53b-22f4-4152-9b4c-248c65704ba3\" data-theme=\"dark\"></div>' );
document.write( '<script src=\"https://hcaptcha.com/1/api.js\" async defer></script>' );
document.write( '</form><br>' );
document.write( '<button type=\"submit\" name=\"captcha-check\" method=\"POST\">Check</button>' );
document.write( '</div>' );
//-->
} else if(uam === 'challenge'){

document.write("<head>");
document.write("<meta charset=\"UTF-8\">");
document.write("<meta name=\"author\" content=\"L1nux Team\">");<?php
if(!$_COOKIE['challenge']){
?>
<script type='text/javascript'>
if (window.XMLHttpRequest){	xmlhttp=new XMLHttpRequest();	}	else	{	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");	}
xmlhttp.open("GET","config.json",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseText;
var obj = JSON.parse(xmlDoc);
var uam = obj["security"];
function setCookie(name, value, maxAgeSeconds) {
	var maxAgeSegment = "; max-age=" + maxAgeSeconds;
	document.cookie = encodeURI(name) + "=" + encodeURI(value) + maxAgeSegment;
}
function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
if(uam === 'captcha'){
	document.write("<head>");
	document.write("<meta charset=\"UTF-8\"\/>");
	document.write("<title>T13R - Captcha<\/title>");
	document.write("<meta name=\"author\" content=\"L1nux Team\">");
	document.write("<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">");
	document.write("<\/head>");
	document.write("<body>");
	document.write("<h1 align=\"center\">Complete this Captcha to access to the site.. <\/h1>");
	document.write("<\/body>");
	<!--
	document.write( '<form action=\"\" method=\"POST\" align=\"center\">' );
	document.write( '<div class=\"col-xs-12\">' );
	document.write( '<div class=\"h-captcha\" data-sitekey=\"8372c53b-22f4-4152-9b4c-248c65704ba3\" data-theme=\"dark\"></div>' );
	document.write( '<script src=\"https://hcaptcha.com/1/api.js\" async defer></script>' );
	document.write( '</form><br>' );
	document.write( '<button type=\"submit\" name=\"captcha-check\" method=\"POST\">Check</button>' );
	document.write( '</div>' );
//-->
} else if(uam === 'challenge'){
	document.write("<head>");
	document.write("<meta charset=\"UTF-8\">");
	document.write("<meta name=\"author\" content=\"L1nux Team\">");
	document.write("<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">");
	document.write("<title>T13R - Challenge<\/title>");
	document.write("<\/head>");
	document.write("<body>");
	document.write("<br><\/br><br><h1 align=center>Checking your browser before accessing... <\/h1>");
	document.write("<h3 align=center>This process is automatic. Your browser will redirect to your requested content shortly.<\/h3>");
	document.write("<h4 align=center>Please allow up to 3 seconds...<\/h4>");
	document.write("<h6 align=center>DDoS protection by T13R<\/a><\/h6>");
	document.write("<\/body>");
switch(readCookie('challenge')) {
  default:
	setTimeout(function(){ 
		setCookie('challenge', 'passed', 30);
		location.reload();
	}, 1500);
	break;
}


}
</script>

<?php
		if(isset($_POST['captcha-check'])){
			define('hcaptcha_secretkey', ''); # HCAPTCHA SECRET ANAHTARINIZI GiRiN
			$verifyResponse = file_get_contents('https://hcaptcha.com/siteverify?secret='.hcaptcha_secretkey.'&response='.$_POST['h-captcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR']);
			$responseData = json_decode($verifyResponse);
			if($responseData->success) {
			?>
			<script type='text/javascript'>
				setTimeout(function(){ 
					setCookie('challenge', 'passed', 180);
					location.reload();
				}, 500);
			</script>
			<?php
			exit;
			}
		}
die();
}
?>
document.write("<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">");
document.write("<title>T13R - Challenge<\/title>");
document.write("<\/head>");
document.write("<body>");
document.write("<br><\/br><br><h1 align=center>Checking your browser before accessing... <\/h1>");
document.write("<h3 align=center>This process is automatic. Your browser will redirect to your requested content shortly.<\/h3>");
document.write("<h4 align=center>Please allow up to 3 seconds...<\/h4>");
document.write("<h6 align=center>DDoS protection by T13R<\/h6>");
document.write("<\/body>");
switch(readCookie('challenge')) {
  default:
	setTimeout(function(){ 
		setCookie('challenge', 'passed', 30);
		location.reload();
	}, 1500);
	break;
}


}
</script>

<?php
		if(isset($_POST['captcha-check'])){
		define('hcaptcha_secretkey', ''); # INSERT YOUR HCAPTCHA SECRET KEY
		$verifyResponse = file_get_contents('https://hcaptcha.com/siteverify?secret='.hcaptcha_secretkey.'&response='.$_POST['h-captcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success) {
		?>
		<script type='text/javascript'>
			setTimeout(function(){ 
				setCookie('challenge', 'passed', 180);
				location.reload();
			}, 500);
		</script>
		<?php
		exit;
		}
		}
die();
}
?>
