<!DOCTYPE html>
<html>
    <head>
        <title>Receives Message</title>
    </head>
    <body>
        <div class="container">
            <div class="title">Laravel 5</div>
        </div>
        <script src="http://local.dev:3000/socket.io/socket.io.js"></script>
        <script type="text/javascript">
        var socket = io('ws://local.dev:3000');
        socket.on('test-channel:App\\Events\\SomeEvent', function(message) {
            console.log(message);
        })
        </script>
    </body>
</html>
