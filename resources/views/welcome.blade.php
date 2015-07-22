<!DOCTYPE html>
<html>
    <head>
        <title>Receives Message</title>
    </head>
    <body>
        <div class="container">
            <div class="title">Laravel 5</div>
        </div>
        <script src="http://local.dev/socket/socket.io/socket.io.js"></script>
        <script type="text/javascript">
        var socket = io('ws://local.dev');
        socket.on('test-channel:SomeEvent', function(message) {
            console.log(message);
        })
        </script>
    </body>
</html>
