$( document ).ready(function()
			{
				$('#login_wrapper').hide();
				$('#menu').hide();
			});
		function showLogin()
		{
		$('#login_wrapper').slideToggle('swing');
		}
		function showMenu()
		{
		$('#menu').slideToggle('swing');
		}