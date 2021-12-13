<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reciever 1</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.socket.io/4.4.0/socket.io.min.js"></script>
</head>

<body>

    <script>
        var socket = io.connect('http://localhost:3001', {
            transports: ['websocket']
        })
        socket.on('chat-message', function(data) {
            console.log(data);
        })
    </script>
</body>

</html>