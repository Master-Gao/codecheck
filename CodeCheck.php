<?php
	session_start(); 
	header("content-type:text/html;charset=utf-8");
	if(isset($_POST['code_num_text'])){
		$code_num_text = trim($_POST['code_num_text']); 
		if($code_num_text == $_SESSION["code_num_text"]){ 
		   echo '1'; 
		}
	}else if(isset($_POST['code_char_text'])){
		$code_char_text = trim($_POST['code_char_text']); 
		if($code_char_text == $_SESSION["code_char_text"]){ 
		   echo '1'; 
		}
	}else if(isset($_POST['code_chinese_text'])){
		$code_chinese_text = $_POST['code_chinese_text']; 
		if($code_chinese_text == $_SESSION["code_chinese_text"]){ 
		   echo '1'; 
		}
	}else if(isset($_POST['code_google_text'])){
		$code_google_text = trim($_POST['code_google_text']); 
		if($code_google_text == $_SESSION["code_google_text"]){ 
		   echo '1'; 
		}
	}else if(isset($_POST['code_math_text'])){
		$code_math_text = trim($_POST['code_math_text']); 
		if($code_math_text == $_SESSION["code_math_text"]){ 
		   echo '1'; 
		}
	}
?>