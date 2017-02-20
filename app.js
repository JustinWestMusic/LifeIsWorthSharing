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
		TweenMax.to(window, 1,{scrollTo:{y:"#lifeSec"+idNum, offsetY:70}});
	}


	//---FADE IN SECTION ELEMENTS---

	//Variables
	var ourMission = document.querySelector("#info");
	var stories = document.querySelector("#stories");
	var facts = document.querySelector("#facts");
	var register = document.querySelector("#register");

	var windowPos;
	var spacing;

	//Functions
	function fadeSec1()
	{
		windowPos = window.scrollY;
		spacing = ourMission.offsetTop;

		if(windowPos+300>spacing)
		{
			TweenMax.from("#lifeSec1", 2, {opacity:0});
			TweenMax.to("#lifeSec1", 2, {opacity:1});
			window.removeEventListener("scroll", fadeSec1, false);
		}
	}

	function fadeSec2()
	{
		windowPos = window.scrollY;
		spacing = stories.offsetTop;

		if(windowPos+200>spacing)
		{
			TweenMax.from("#lifeSec2", 2, {opacity:0});
			TweenMax.to("#lifeSec2", 2, {opacity:1});
			window.removeEventListener("scroll", fadeSec2, false);
		}
	}

	function fadeSec3()
	{
		windowPos = window.scrollY;
		spacing = facts.offsetTop;

		if(windowPos+200>spacing)
		{
			TweenMax.from("#lifeSec3", 2, {opacity:0});
			TweenMax.to("#lifeSec3", 2, {opacity:1});
			window.removeEventListener("scroll", fadeSec3, false);
		}
	}

	function fadeSec4()
	{
		windowPos = window.scrollY;
		spacing = register.offsetTop;

		if(windowPos+300>spacing)
		{
			TweenMax.from("#lifeSec4", 2, {opacity:0});
			TweenMax.to("#lifeSec4", 2, {opacity:1});
			window.removeEventListener("scroll", fadeSec4, false);
		}
	}

	//Event Listeners
	window.addEventListener("scroll", fadeSec1, false);
	window.addEventListener("scroll", fadeSec2, false);
	window.addEventListener("scroll", fadeSec3, false);
	window.addEventListener("scroll", fadeSec4, false);


})();
