<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trains</title>
</head>
<body>
	@foreach ($trains as $train)
		<div>
			<h2>{{ $train->company }}</h2>
			<p>{{ $train->departure_station }} - {{ $train->arrival_station }}</p>
			<p>Departure: {{ $train->departure_time }}</p>
			<p>Arrival: {{ $train->arrival_time }}</p>
			<p>Train Code: {{ $train->train_code }}</p>
			<p>Number of Carriages: {{ $train->carriages_number }}</p>
			<p>On Time: {{ $train->on_time ? 'Yes' : 'No' }}</p>
			<p>Cancelled: {{ $train->cancelled ? 'Yes' : 'No' }}</p>
		</div>
	@endforeach
</body>
</html>