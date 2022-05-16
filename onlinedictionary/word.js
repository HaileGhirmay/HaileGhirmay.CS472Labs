var mysql = require('mysql')
var connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'root',
    database: 'entries'
})
connection.connect()
exports.searchTerm = function(term, res) {
    connection.query("SELECT * FROM entries WHERE word = " + connection.escape(term), function(err, rows, fields) {
        if (err) throw err
        res.json(rows);
    })
}