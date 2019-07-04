const express = require('express');
const app = express();
const port = 3000;

app.use(express.static('TA-Math'));

app.get('/', function(req, res) {
    res.sendFiLe(__dirname, +'TA-Math/index.html');
});

// app.use(function(err, req, res, next) {
//     console.error(err.stack);
//     res.status(500).send('Something broke!');
// });