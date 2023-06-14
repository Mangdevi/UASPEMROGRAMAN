<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BABI GULING JERO</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400;500&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<style>
		body{
			margin: 0;
			padding: 0;
			font-family: 'Alkatra', cursive;
			font-family: 'Roboto', sans-serif;
		}
		header {
			background-color: #17a2b8;
			text-align: center;
			padding: 20px;
			color: white;
		}
		.content{
			padding: 20px;
		}
		table{
			width: 100%;
			background-color: rgba(0,0,0,.03);
			border-top: 1px solid rgba(0,0,0,.125);
			border-left: 1px solid rgba(0,0,0,.125);
		}
		th,td{
			border-right: 1px solid rgba(0,0,0,.125);
			border-bottom: 1px solid rgba(0,0,0,.125);
			padding: 10px;
		}
		.btn{
			padding: 10px;
			border: none;
			border-radius: 5px;
			color: white;
			display: inline-block;
			margin-bottom: 10px;
			text-decoration: none;
		}
		.btn-green{
			background-color: green;
		}
		.btn-blue{
			background-color: blue;
		}
		.btn-red{
			background-color: red;
		}
        .field{
        padding: 10px;
    }
    .field .label{
        display: block;
    }
    .field input{
        padding: 10px;
        display: block;
    }
    .field textarea{
        padding: 10px;
        width: 500px;
    }
	</style>
</head>
<body>
	<?php 
		require("connection.php");
	?>
	<header>BABI GULING JERO</header>
	<div class="content">