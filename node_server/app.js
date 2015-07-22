/*var http = require('http');

http.createServer(function (req, res) {
    res.writeHead(200, {'Content-Type': 'text/plain'});
    res.end('Hello World\n');
}).listen(3000, "0.0.0.0");
console.log('Server running at http://127.0.0.1:3000/');*/

var express = require('express'),
    io = require('socket.io').listen(server),
    server = require('http').createServer(app),
    bodyParser = require('body-parser');

var app = express();
server.listen(3000);
app.use(bodyParser.json());
app.post('/', function(request, response) {
    response.send('OK');
    io.emit('MessageForAll', request.body);
});
io.on('connection', function (socket){});
console.log('Server running on port 3000.');