function splitLastPartURL(url)
{
	var partsOfURL = url.split('/');
	
	return partsOfURL[(partsOfURL.length - 1)];
}

function removeActiveFromAllItemsInNavBar()
{
	var tab = [];
	
	tab.push(document.getElementById("index"));
	tab.push(document.getElementById("inscription"));
	tab.push(document.getElementById("connexion"));
	tab.push(document.getElementById("deconnexion"));
	
	for(var i=0;i<tab.length;++i)
		tab[i].classList.remove("active");
}

window.onload = function ()
{
	removeActiveFromAllItemsInNavBar();
	
	const currentURL = window.location.href;
	
	var currentPage = splitLastPartURL(currentURL);
	
	var elem = document.getElementById(currentPage);
	
	elem.classList.add("active");
}
