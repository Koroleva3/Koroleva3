<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title></title>
		<style> div {
			background-image: linear-gradient(#EEB5C9, #FFDAB9);
			width: 1500px;
			height: 0px;
			opacity:0.8;
		} </style>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
		<meta charset="utf-8">
		<meta charset="utf-8">
		<style> body {
			background: url(457.jpg) no-repeat center fixed;  
			overflow-x: hidden;
		} </style>
	</head>
	<body>
		<p><a href="index.php"><img src="p.jpg" width="100" height="100" border="0"></a>
		<input type="text" id="text-to-find" value=""> 
		<input type="button" onclick="javascript: FindOnPage('text-to-find'); return false;" value="Искать"/> </p>
		<style> input{
			float: right;
			margin-top: 50;
		}</style>
		<marquee behavior="scroll" direction="left"> 
		<span style="color:#660033">Девушки, следите за своей красотой! Вы у себя одна! А наш сайт сможет помочь Вам облегчить задачу!</span> </marquee>
		<h1>Уход за волосами</h1>
		<div id="menu">
			<div>
				<br> <a href="zaa soboi.html">Уход за собой</a>
				<a href="kojia.php">Уход за кожей</a>
				<a href="volosi.php">Уход за волосами</a>
				<a href="nogti.php">Уход за ногтями</a> 
				<a href="galery.html">Фотогалерея</a> </br>
			</div>
		</div> 
		<div id = "ots">
	 	 <?php
  $mysqli=new mysqli("localhost", "koroleva3", "", "Personal"); 
  $query = "select text from text";
  $mysqli->query("set names utf8;");   
  $result = $mysqli->query($query); 
   while($row = $result->fetch_array(MYSQLI_ASSOC)) {?>
  <p > <?php echo $row['text']; ?> </p>
     <?php
  }
  ?>
	</div>
	</body>
</html>