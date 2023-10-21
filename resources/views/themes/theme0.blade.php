<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="title">{{ $invitation->title }}</div>
    <div id="subtitle">{{ $invitation->subtitle }}</div>
    <div id="location">{{ $invitation->location }}</div>
    <div id="date">{{ $invitation->date }}</div>
    <div id="time">{{ $invitation->time }}</div>
    <div id="url">{{ $invitation->url }}</div>
    <div id="music">{{ $invitation->music }}</div>
</body>

</html>