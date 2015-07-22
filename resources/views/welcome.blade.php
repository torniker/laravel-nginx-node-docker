<!DOCTYPE html>
<html>
    <head>
        <title>Receives Message</title>
    </head>
    <body>
        <div class="container">
            <div class="title">Laravel 5</div>
        </div>
        <script type="text/javascript">
        var socket = io('http://local.dev/socket');
        socket.on('test-channel:SomeEvent', function(message) {
            console.log(message);
        })
        </script>
    </body>
</html>
