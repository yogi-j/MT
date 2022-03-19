<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Net Web</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
	<div class="container mt-4 mb-4">
		<div class="row justify-content-center">
			<div class="col-md-10">
		        <div class="card">
		            <div class="card-header">
		            	<ul style="list-style-type: none;">
							<li style="float: left; margin-right: 10px;"><a href="/students">All Students</a></li>
							<li style="float: left; margin-right: 10px;"><a href="/students/create">Create Students</a></li>
						</ul>	
		            </div>
		        </div>
        	</div>
		</div>
	</div>
	@yield('content')
</body>
</html>