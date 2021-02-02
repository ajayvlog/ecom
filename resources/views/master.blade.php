<!DOCTYPE html>
<html>
<head>
	<title> E com project</title>
  <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style type="text/css">
	
.custlogin
{
	height: 500px;box-shadow:solid 5px red;
	width: auto;background-color: #fa932b;

}
.abc
{
 	padding: 70px;
	margin-left: 32%;
}

.fo
{
	height: 40px;width: auto;background-color: #9a6611;
	color:white;
	text-align: center;
}

</style>
</head>
<body>
{{View::make('header')}}

@yield('content')



 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


{{View::make('footer')}}

<script type="text/javascript">
	$(document).ready(function () {
 
			//alert('this is ok');
 	});
</script>
</body>
</html>