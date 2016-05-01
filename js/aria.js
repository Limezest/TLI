





$(document).ready(function(){

	

	 

  $("#username").focus(function(){

		$("#username-tip").attr("aria-hidden","false");

		$("#username-tip").removeClass("hidden");

		

  });

    $("#username").mouseover(function(){

		$("#username-tip").attr("aria-hidden","false");

		$("#username-tip").removeClass("hidden");

  });

   // repeat for the keyboard accessibility for all buttons, enter makes it click...

		 $("#username").blur(function(){

		$("#username-tip").attr("aria-hidden","true");

		$("#username-tip").addClass("hidden");

  });

  

    $("#username").mouseleave(function(){

		$("#username-tip").attr("aria-hidden","true");

		$("#username-tip").addClass("hidden");

  });

		

		$("#username").keydown(function(ev){

		if (ev.which ==27)  {

						 $("#username-tip").attr("aria-hidden","true");

						 $("#username-tip").addClass("hidden");

						 ev.preventDefault(); 

						 return false;

						 }

  });



  

  // input password

  

    $("#password").focus(function(){

		$("#password-tip").attr("aria-hidden","false");

		$("#password-tip").removeClass("hidden");

		

  });

    $("#password").mouseover(function(){

		$("#password-tip").attr("aria-hidden","false");

		$("#password-tip").removeClass("hidden");

  });

   // repeat for the keyboard accessibility for all buttons, enter makes it click...

		 $("#password").blur(function(){

		$("#password-tip").attr("aria-hidden","true");

		$("#password-tip").addClass("hidden");

  });

  

    $("#password").mouseleave(function(){

		$("#password-tip").attr("aria-hidden","true");

		$("#password-tip").addClass("hidden");

  });

		

		$("#password").keydown(function(ev){

		if (ev.which ==27)  {

						 $("#password-tip").attr("aria-hidden","true");

						 $("#password-tip").addClass("hidden");

						 ev.preventDefault(); 

						 return false;

						 }

  });

  

  

  // input password

  

    $("#password").focus(function(){

		$("#password-tip").attr("aria-hidden","false");

		$("#password-tip").removeClass("hidden");

		

  });

    $("#password").mouseover(function(){

		$("#password-tip").attr("aria-hidden","false");

		$("#password-tip").removeClass("hidden");

  });

   // repeat for the keyboard accessibility for all buttons, enter makes it click...

		 $("#password").blur(function(){

		$("#password-tip").attr("aria-hidden","true");

		$("#password-tip").addClass("hidden");

  });

  

    $("#password").mouseleave(function(){

		$("#password-tip").attr("aria-hidden","true");

		$("#password-tip").addClass("hidden");

  });

		

		$("#password").keydown(function(ev){

		if (ev.which ==27)  {

						 $("#password-tip").attr("aria-hidden","true");

						 $("#password-tip").addClass("hidden");

						 ev.preventDefault(); 

						 return false;

						 }

  });

  

  

  // input firstname incription

  

    $("#firstname").focus(function(){

		$("#firstname-tip").attr("aria-hidden","false");

		$("#firstname-tip").removeClass("hidden");

		

  });

    $("#firstname").mouseover(function(){

		$("#firstname-tip").attr("aria-hidden","false");

		$("#firstname-tip").removeClass("hidden");

  });

   // repeat for the keyboard accessibility for all buttons, enter makes it click...

		 $("#firstname").blur(function(){

		$("#firstname-tip").attr("aria-hidden","true");

		$("#firstname-tip").addClass("hidden");

  });

  

    $("#firstname").mouseleave(function(){

		$("#firstname-tip").attr("aria-hidden","true");

		$("#firstname-tip").addClass("hidden");

  });

		

		$("#firstname").keydown(function(ev){

		if (ev.which ==27)  {

						 $("#firstname-tip").attr("aria-hidden","true");

						 $("#firstname-tip").addClass("hidden");

						 ev.preventDefault(); 

						 return false;

						 }

  });

	  	 

		 

		 

		 // input lastname incription

  

    $("#lastname").focus(function(){

		$("#lastname-tip").attr("aria-hidden","false");

		$("#lastname-tip").removeClass("hidden");

		

  });

    $("#lastname").mouseover(function(){

		$("#lastname-tip").attr("aria-hidden","false");

		$("#lastname-tip").removeClass("hidden");

  });

   // repeat for the keyboard accessibility for all buttons, enter makes it click...

		 $("#lastname").blur(function(){

		$("#lastname-tip").attr("aria-hidden","true");

		$("#lastname-tip").addClass("hidden");

  });

  

    $("#lastname").mouseleave(function(){

		$("#lastname-tip").attr("aria-hidden","true");

		$("#lastname-tip").addClass("hidden");

  });

		

		$("#lastname").keydown(function(ev){

		if (ev.which ==27)  {

						 $("#lastname-tip").attr("aria-hidden","true");

						 $("#lastname-tip").addClass("hidden");

						 ev.preventDefault(); 

						 return false;

						 }

  });

  

  

  		 // input email incription

  

    $("#email").focus(function(){

		$("#email-tip").attr("aria-hidden","false");

		$("#email-tip").removeClass("hidden");

		

  });

    $("#email").mouseover(function(){

		$("#email-tip").attr("aria-hidden","false");

		$("#email-tip").removeClass("hidden");

  });

   // repeat for the keyboard accessibility for all buttons, enter makes it click...

		 $("#email").blur(function(){

		$("#email-tip").attr("aria-hidden","true");

		$("#email-tip").addClass("hidden");

  });

  

    $("#email").mouseleave(function(){

		$("#email-tip").attr("aria-hidden","true");

		$("#email-tip").addClass("hidden");

  });

		

		$("#email").keydown(function(ev){

		if (ev.which ==27)  {

						 $("#email-tip").attr("aria-hidden","true");

						 $("#email-tip").addClass("hidden");

						 ev.preventDefault(); 

						 return false;

						 }

  });

  

   // input password2 incription

  

    $("#password2").focus(function(){

		$("#password2-tip").attr("aria-hidden","false");

		$("#password2-tip").removeClass("hidden");

		

  });

    $("#password2").mouseover(function(){

		$("#password2-tip").attr("aria-hidden","false");

		$("#password2-tip").removeClass("hidden");

  });

   // repeat for the keyboard accessibility for all buttons, enter makes it click...

		 $("#password2").blur(function(){

		$("#password2-tip").attr("aria-hidden","true");

		$("#password2-tip").addClass("hidden");

  });

  

    $("#password2").mouseleave(function(){

		$("#password2-tip").attr("aria-hidden","true");

		$("#password2-tip").addClass("hidden");

  });

		

		$("#password2").keydown(function(ev){

		if (ev.which ==27)  {

						 $("#password2-tip").attr("aria-hidden","true");

						 $("#password2-tip").addClass("hidden");

						 ev.preventDefault(); 

						 return false;

						 }

  });

});
