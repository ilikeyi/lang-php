// Language switch
function lang(value) {
	var days = '30';
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = "lang"+"="+value.toLowerCase()+expires+"; path=/";
	document.cookie = "lang"+"="+value.toLowerCase()+expires+"; domain="+"."+getDomain()+"; path=/";

	var rurl = window.location.toString();
	rurl = rurl.split("#")[0];

	if(location.href.indexOf("?")==-1 || location.href.indexOf(name+'=')==-1) {
		skip(rurl);
	} else {
		skip(delQueStr(rurl, "lang"));
	}
}

function skip(url) {
	if (navigator.userAgent.match(/MSIE\s(?!9.0)/)) {
		var referLink = document.createElement("a");
		referLink.href = url;
		document.body.appendChild(referLink);
		referLink.click();
	} else {
		window.location.replace(url);
	}
}

function delQueStr(url, ref)
{
	var str = "";
	if (url.indexOf('?') != -1)
		str = url.substr(url.indexOf('?') + 1);
	else
		return url;
	var arr = "";
	var returnurl = "";
	var setparam = "";
	if (str.indexOf('&') != -1) {
		arr = str.split('&');
		for (i in arr) {
			if (arr[i].split('=')[0] != ref) {
				returnurl = returnurl + arr[i].split('=')[0] + "=" + arr[i].split('=')[1] + "&";
			}
		}
		return url.substr(0, url.indexOf('?')) + "?" + returnurl.substr(0, returnurl.length - 1);
	}
	else {
		arr = str.split('=');
		if (arr[0] == ref)
			return url.substr(0, url.indexOf('?'));
		else
			return url;
	}
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
		favicon.href = 'assets/logo/logo-dark.ico';
	}else{
		favicon.href = 'assets/logo/logo.ico';
	}
}
darkModeMediaQuery.addListener(handleDarkmode);