<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
	<head>
	<title>Kalkulator</title>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script type="text/javascript">
			$(document).ready(function() {
			$("#tambah").click(function(){
			$("#h").val(parseInt($("#b1").val())+parseInt($("#b2").val()));
			});
			$("#kurang").click(function() {
            $("#h").val(parseInt($("#b1").val())-parseInt($("#b2").val()));
            });
            $("#kali").click(function() {
            $("#h").val(parseInt($("#b1").val())*parseInt($("#b2").val()));
            });
			$("#bagi").click(function() {
            $("#h").val(parseInt($("#b1").val())/parseInt($("#b2").val()));
            });
		});
		</script>
	</head>
	<body>
		<input type="number" name="b1" id="b1">
		<button id="tambah">+</button>
		<button id="kurang">-</button>
		<button id="kali">*</button>
		<button id="bagi">/</button>
		
		<input type="number" name="b2" id="b2">
		=
		<input type="text" name="h" id="h" readonly>
	</body>
</html>