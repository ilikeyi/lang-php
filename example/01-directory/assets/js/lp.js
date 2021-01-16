// Language switch
function qlang(value) {
	var days = '30';
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = "lang"+"="+value.toLowerCase()+expires+"; path=/";
	document.cookie = "lang"+"="+value.toLowerCase()+expires+"; domain="+"."+getDomain()+"; path=/";
	document.cookie = "remember_lang"+"="+value.toLowerCase()+expires+"; path=/";
	document.cookie = "remember_lang"+"="+value.toLowerCase()+expires+"; domain="+"."+getDomain()+"; path=/";
	window.location.href="../"; 
}

function getDomain() {
	url = location.href;
	var hostName = getHostName(url);
	var domain = hostName;
	
	if (hostName != null) {
		var parts = hostName.split('.').reverse();

		if (parts != null && parts.length > 1) {
			domain = parts[1] + '.' + parts[0];

			if (hostName.toLowerCase().indexOf('.co.uk') != -1 && parts.length > 2) {
			domain = parts[2] + '.' + domain;
			}
		}
	}
	
	return domain;
}

function getHostName(url) {
	var match = url.match(/:\/\/(www[0-9]?\.)?(.[^/:]+)/i);
	if (match != null && match.length > 2 && typeof match[2] === 'string' && match[2].length > 0) {
		return match[2];
	}
	else {
		return null;
	}
}

// favicon
var darkModeMediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
handleDarkmode(darkModeMediaQuery);
function handleDarkmode(e){
	var darkModeOn = e.matches;
	var favicon = document.querySelector('link[rel="shortcut icon"]');
	if(darkModeOn){
		favicon.href = '../assets/logo/logo-dark.ico';
	}else{
		favicon.href = '../assets/logo/logo.ico';
	}
}
darkModeMediaQuery.addListener(handleDarkmode);