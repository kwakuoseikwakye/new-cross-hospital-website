<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
</head>
<body>
      <p>Dear Customer Service Team,</p>
      <p>An appointment has been scheduled through the hospital booking form. Below are the details of the appointment.  </p>
      <p>Patient Name : {{$data['name']}}</p>
      <p>Patient Email : {{$data['email']}}</p>
      <p>Patient Phone : {{$data['phone']}}</p>
      <p>Appointment Date : {{$data['date']}}</p>
      <p>Service : {{$data['service']}}</p>
      <p>Message : {{$data['message']}}</p>
</body>
</html>