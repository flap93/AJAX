# AJAX - PHP

# https://www.youtube.com/watch?v=82hnvUYY6QA&list=PL5r0ozJqYXnsnre1QCNHGOCNS-NuXuwiY
# SPANISH
This a repository to practice this technologies

# AJAX

AJAX means Asynchronous Javascript And XML.

Ajax is a technology that allows web pages to be updated asynchronously by exchanging data with a server behind the scenes.

JSON has replaced XML for the most part

# CLIENT AND SERVER

client : The browser, which sends requests and receives responses from the server. It is responsible for sending data

client send the request to the server with the xmlHttpRequest . the server sends data back usually in JSON format and when you receive back your receive a HTML response

#XHR

El objeto XHR permite realizar solicitudes HTTO para intercambiar datos con un servidor sin necesidad de recargar.
para usarlo solo tienes que crear un objeto XMLHttpRequest()
var xhr = new XMLHttpRequest();

// para ver todas las propiedades y metodos que contiene el objeto
console.log(xhr);

# TIPOS DE HTTP STATUS
// 200: OK    quiere decir que la peticion fue la realizada correctamente
// 403: FORBIDDEN   esta prohibida
// 404: NOT FOUND   no fue encontrada

# ONREADYSTATECHANGE

0: req. not initialized
1: server connection established
2: req. received
3: processing request
4: req. finished and response is ready

# ONERROR 

permite lanzar errores

# ONPROGRESS

Este es el paso 3

#JSON

Para obtner informacion de nuestro JSON file 
se hace a traves del metodo JSON.parse
para recorrer un JSON file se utilizaran metodos como for in o for each 

#ENGLISH 


