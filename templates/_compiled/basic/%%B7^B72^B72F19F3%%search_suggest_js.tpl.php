<?php /* Smarty version 2.6.19, created on 2012-01-08 12:54:16
         compiled from includes/pages/search/search_suggest_js.tpl */ ?>
<?php echo '
var req = null;
var hov = -1;
var origval = null;


function loadXMLDoc(input) {

	if(input == "") {
		document.getElementById(\'searchResult\').style.display = \'none\';
	} else {
		origval = input;
		url = "'; ?>
<?php echo $this->_tpl_vars['suggest_url']; ?>
<?php echo '&q=" + input;
		// Internet Explorer
		try { req = new ActiveXObject("Msxml2.XMLHTTP"); }
		catch(e) {
			try { req = new ActiveXObject("Microsoft.XMLHTTP"); }
			catch(oc) { req = null; }
		}
		// Mozailla/Safari
		if (req == null && typeof XMLHttpRequest != "undefined") {
			req = new XMLHttpRequest();
		}
		// Call the processChange() function when the page has loaded
		if (req != null) {
			req.onreadystatechange = processChange;
			req.open("GET", url, true);
			req.send(null);
		}
	}
}

function processChange(evt) {
	// The page has loaded and the HTTP status code is 200 OK
	if (req.readyState == 4) {
		if (req.status == 200) {
			document.getElementById(\'searchResult\').style.display = \'block\';
			// Write the contents of this URL to the searchResult layer
			if (origval == null) {
				document.getElementById(\'searchResult\').style.display = \'none\';
			}
			else
				getObject("searchResult").innerHTML = req.responseText;
		}
	}
}

function getObject(name) {
	var ns4 = (document.layers) ? true : false;
	var w3c = (document.getElementById) ? true : false;
	var ie4 = (document.all) ? true : false;

	if (ns4) return eval(\'document.\' + name);
	if (w3c) return document.getElementById(name);
	if (ie4) return eval(\'document.all.\' + name);
	return false;
}

function hideSearch() {
	document.getElementById(\'searchResult\').style.display = \'none\';
}

function hover(ev,val) {
	test = document.getElementById(\'searchResult\').getElementsByTagName(\'tr\');
	if(document.getElementById(\'q\').value == "") origval = null;
	if(ev == 38 && hov != -1){
		if(document.getElementById(\'searchResult\').style.display == \'none\')
			document.getElementById(\'searchResult\').style.display = \'block\';
		hov--;
		if(hov<0) {
			document.getElementById(\'q\').value = origval;
			document.getElementById(\'q\').select();
		}
		for (var i=0; i<test.length; i++) {
			if(i==hov) {
				test2 = test[i].getElementsByTagName(\'td\');
				document.getElementById(\'q\').value = test2[0].innerHTML +\' \'+ test2[1].innerHTML;
				test[i].style.background=\'orange\';
			} else {
				test[i].style.background=\'white\';
			}
		}
		document.getElementById(\'q\').select();
	}
	else if(ev == 40) {
		if(document.getElementById(\'searchResult\').style.display == \'none\')
			document.getElementById(\'searchResult\').style.display = \'block\';
		hov++;
		if(hov==test.length) hov=test.length-1;
		for (var i=0; i<test.length; i++) {

			if(i==hov) {
				test2 = test[i].getElementsByTagName(\'td\');
				document.getElementById(\'q\').value = test2[0].innerHTML +\' \'+ test2[1].innerHTML;
				test[i].style.background=\'orange\';
			} else {
				test[i].style.background=\'white\';
			}
		}
		document.getElementById(\'q\').select();
	}
	else if(ev == 13 && hov != -1) {
		document.getElementById(\'searchResult\').style.display = \'none\';
	}
	else if(ev == 27) {
		document.getElementById(\'searchResult\').style.display = \'none\';
		document.getElementById(\'q\').select();
	}
	else if(ev == "mouse") {
		for (var i=0; i<test.length; i++) {
			test[i].style.background=\'white\';
		}
		val.style.background=\'orange\';
	}
	else {
		loadXMLDoc(val);
		hov=-1;
	}
}

'; ?>
	