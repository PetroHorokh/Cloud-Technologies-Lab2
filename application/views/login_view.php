<?php 	function get_content($data)	{		if(!isset($_SESSION['user']))		{			if($data=='false')			echo  '<div data-alert class="alert-box twelve column text-center">Incorrectly entered password or username<a href="#" class="close">&times;</a></div>';			$form = file_get_contents('application/views/templates/login_form.html');			$form = str_replace("##action##", baseaddress."/login/enter",$form);			echo $form;		}		else		{			echo "<script>window.location.assign('".baseaddress."/admin');</script>";		}	}		function buttons_content()	{		$button = file_get_contents('application/views/templates/button.html');		$button=str_replace("##title##","return to shop", $button);		$button=str_replace("##href##",baseaddress."/tovar/", $button);		echo $button;	}	function get_title()	{		return "Login";	}?>