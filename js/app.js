$(document).foundation();

(function()
{
	"use strict";

	//---SMOOTH SCROLL SECTION---
	
	//Variables

	var topMenu = document.querySelector("#top-menu");
	var navLinks = topMenu.querySelectorAll("a");

	for (var i = 0; i < navLinks.length; i++)
		{
			navLinks[i].addEventListener("click", scrollto, false);
		}
	
	//Function
	
	function scrollto(e)
	{
		//console.log("click");
		var idNum = e.currentTarget.id;
		console.log(idNum);
		TweenLite.to(window, 1,{scrollTo:{y:"#lifeSec"+idNum, offsetY:70}});
	}


})();
