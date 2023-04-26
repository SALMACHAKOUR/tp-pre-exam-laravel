<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>notes</title>
	<style type="text/css">

		input[type="search"] {
			padding: 10px;
			font-size: 16px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 20px;
		}

		th {
			font-weight: bold;
			text-align: left;
			background-color: #ccc;
			padding: 8px;
		}

		td {
			padding: 8px;
			border: 1px solid #ccc;
		}
		.bad{
			background-color: #ff195144;
		}
		.warning{
			background-color: #ff995144;
		}
		.good{
			background-color: #1951ff44;
		}
	</style>
</head>
<body>

	@include("layouts/header", ["showImg" => true])

	<form action={{route("searchMarks")}}>
		@csrf
		<label>search</label>
		<input type="search" name="q" value={{$q ?? null}}>
	</form>
	<br>
	<a href="/mark/stats">show stats</a>
	<table>
	@foreach($marks as $student => $mark)
		@php
		if($stats ?? false){
			$class = "bad";
			if($mark > 8)
				$class = "warning";
			if($mark > 10)
				$class = "good";
		}
		@endphp

		<tr class={{$class ?? ""}}>
			<td>{{$student}}</td>
			<td>{{$mark}}</td>
		</tr>
	@endforeach
	</table>
</body>
</html>