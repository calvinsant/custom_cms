<?php
	function output_message($message=""){
		if(!empty($message)){
			return '<p class="message"{$message}</p>';
		}
	}else{
		return "";
	}
?>