// Language switch
function refreshlang(value) {
	window.location.href = window.location.pathname + '?lang=' + value;
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