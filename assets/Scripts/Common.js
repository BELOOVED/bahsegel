//popitup was replaced of OpenInNewWindow
//open links in new window
function OpenInNewWindow(link) {
	var href = $(link).attr('href');
	var w = window.innerWidth * 0.7;
	var h = window.innerHeight * 0.7;
	var t = window.innerHeight * 0.15 + window.screenY;
	var l = window.innerWidth * 0.15 + window.screenX;
	var newwindow = window.open(href, 'name', "height=" + h + ",width=" + w + ",top=" + t + ",left=" + l);
	if (window.focus) {
		newwindow.focus();
	}

	return false;
}


function onRoundBalanceDecimals(bal, handl) {
	if (typeof bal === 'undefined' || bal.innerText === '') {
		return;
	}
		
	bal.removeEventListener("DOMSubtreeModified", window[handl]);

	var b = bal.innerText;
	b = b.split(' ');
	b[0] = b[0].replace(/,/g, '');
	b[0] = Math.round(b[0]);
	b[0] = b[0].toLocaleString();
	bal.innerText = b[0] + ' ' + b[1];

	bal.addEventListener("DOMSubtreeModified", window[handl]);
}
