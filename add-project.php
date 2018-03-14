<!DOCKTYPE html>
<html>
<head>
    <meta charset="utf8"/>
    <title>HomePage</title>
</head>
<body>
    <div id="bord">
		<form method="POST" action="create-project.php">
		<div class="text">
			Project name: <input type="text" name="name" class="input" />
		</div>
		<div class="text">
			Student name: <input type="text" name="student_name" class="input" />
		</div>
			
			<div class="text">
			Browse: <input type="file" id="file" name="file" multiple>
		</div>
		
		<div class="btndiv">
			<button type="submit"  id="btn">Add</button>
		</div>
		</form>
	</div>
</body>
</html>