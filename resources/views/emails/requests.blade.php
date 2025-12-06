<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>New Appointment Request</title>
</head>
<body>
	<h2>New Appointment Request</h2>
	<p><strong>Name:</strong> {{ $appointment->first_name }} {{ $appointment->last_name }}</p>
	<p><strong>Email:</strong> {{ $appointment->email }}</p>
	<p><strong>Submitted At:</strong> {{ $appointment->created_at }}</p>
	<hr>
	<h4>Message</h4>
	<p>{!! nl2br(e($appointment->message)) !!}</p>
	<hr>
	<p>This message was generated automatically by RIDE-AIDE.</p>
</body>
</html>
