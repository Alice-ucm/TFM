const express = require('express')
const app = express()

app.get('/', function (req, res) {
  res.send('Bienvenido a tu chat bot')
})

app.listen(3000,()=>{
    console.log("Estamos probando");
})