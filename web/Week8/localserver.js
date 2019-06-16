let http = require("http");


let server = http.CreateServer((function onRequest(req, res) {
    request.writeHead(200, { "Content-Type": "text/plain" });
    if (request.path = "/home") {
        response.write("<h1>Welcome to the Home Page<h1>");
    } else if (request.path = "/getData") {
        response.write('{"name": "Kenneth Ato Brown", "class": "CS 313"}');
    } else {
        response.end("Page Not Found");
    }
}));

server.listen(5000);