<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pin Generator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
        <style>
             * {
	box-sizing: border-box;
}
body {
	
}
.container {
	margin-top: 30px;
}

.half-width {
	padding: 30px;
	text-align: center;
	border-radius: 4px;
}
.generate-btn {
	margin-top: 140px;
	width: 180px;
	height: 180px;
	padding: 20px;
	border-radius: 50%;
	border: 8px solid #39458c;
	background-color: #495bc3;
	color: #ffffff;
	font-weight: bold;
	font-size: 20px;
	text-align: center;
	transition: 0s 0.1s;
}
.generate-btn:focus {
	outline: none;
	box-shadow: none;
}
.generate-btn:active {
	border-color: rgb(255 255 255 / 15%);
	transform: scale(1.01);
	transition: 0s;
}

input[type="text"] {
	background-color: #3d4153;
	padding: 10px 0px;
	color: #ffffff;
	width: 80%;
	margin: 0 auto;
	border: 2px solid #858299;
	height: 50px;
	padding: 10px;
	text-align: center;
}
input[type="text"]:focus {
	background-color: #2f3241;
	color: #fff;
	font-size: 20px;
	box-shadow: none;
}
.pin-generator .form-control:disabled,
.input-section .form-control:disabled {
	background-color: #2f3241;
	border-color: #565b76;
}
.pin-generator .form-control.active {
	font-size: 20px;
	color: #fff;
}

        </style>
    </head>
    <body class="antialiased">
    <div class="container">
	<h2 class="text-center display-4 text-secondary mb-5">
		Pin Generator
	</h2>
	<div class="row">
		<div class="col-md-12">
			<div class="pin-generator half-width">
				<input class="form-control" id="pin-text" type="text" value="{{$pin}}"/>
				<a href="{{route('getPin')}}" class="btn btn-primary generate-btn p-5"  role="button" id="generate-btn">Generate Pin</a>
			</div>
		</div>
		
		
	</div>
    </body>
</html>
