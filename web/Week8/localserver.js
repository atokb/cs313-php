let http = require("http");


let server = http.createServer((function onRequest(request, response) {
    response.writeHead(200, { "Content-Type": "text/plain" });
    if (request.url = '/home') {
        response.end("Welcome to the Home Page");
    } else if (request.url = '/getData') {
        response.end('{"name": "Kenneth Ato Brown", "class": "CS 313"}');
    } else {
        response.end('Page Not Found');
    }
}));

server.listen(5000);