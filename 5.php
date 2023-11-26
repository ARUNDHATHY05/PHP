<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Sessional Examination Timetable</title>
</head>
<body>
  <div class="timetable">
    <div class="day">Time/Day</div>
    <div class="day">Monday</div>
    <div class="day">Tuesday</div>
    <div class="day">Wednesday</div>
    <div class="day">Thursday</div>
    <div class="day">Friday</div>
  </div>

  <div class="timetable">
    <div class="time">9:00 AM - 10:30 AM</div>
    <div class="subject">Math</div>
    <div class="subject">Physics</div>
    <div class="subject">Chemistry</div>
    <div class="subject">Biology</div>
    <div class="subject">History</div>
  </div>

  <!-- Add more rows for additional time slots -->

</body>
</html>
body {
  font-family: Arial, sans-serif;
}

.timetable {
  display: grid;
  grid-template-columns: 150px repeat(5, 1fr);
  border: 1px solid #ccc;
}

.day, .time {
  padding: 10px;
  text-align: center;
  font-weight: bold;
  background-color: #f0f0f0;
}

.subject {
  padding: 10px;
  border: 1px solid #ccc;
}
