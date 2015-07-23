var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var Redis = require('ioredis');
var redis = new Redis(6379, 'redis');

redis.subscribe('test-channel', function (err, count) {
    console.log('subscribed to test-channel');
});

redis.on('message', function(channel, message) {
    console.log(message);

    message = JSON.parse(message);
    io.emit(channel + ':' + message.event, message.data);
});
http.listen(3000, function() {
    console.log('listening on *:3000')
});