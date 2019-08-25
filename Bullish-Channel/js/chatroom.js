/*
AJAX is a developer's dream, because you can:

Update a web page without reloading the page
Request data from a server - after the page has loaded
Receive data from a server - after the page has loaded
Send data to a server - in the background

AJAX = Asynchronous JavaScript And XML.

AJAX is not a programming language.

A browser built-in XMLHttpRequest object (to request data from a web server)
JavaScript and HTML DOM (to display or use the data)
AJAX allows web pages to be updated asynchronously by exchanging data with a web server behind the scenes. 

This means that it is possible to update parts of a web page, without reloading the whole page.

1. An event occurs in a web page (the page is loaded, a button is clicked)
2. An XMLHttpRequest object is created by JavaScript
3. The XMLHttpRequest object sends a request to a web server
4. The server processes the request
5. The server sends a response back to the web page
6. The response is read by JavaScript
7. Proper action (like page update) is performed by JavaScript
*/


var xhttp; 

function postMessage() {
    const message = document.getElementById("message").value;
    // XMLHttpRequest object is created
    xhttp = new XMLHttpRequest(); // ready state: 0
    xhttp.onreadystatechange = alertContents; 
 // sends a request to a web server
 var url = "postmsg.php" + "?msg=" + message;
 xhttp.open("POST", url, true); // ready state: 1
 xhttp.send(message); // ready state: 2
}


function getMessages() {
    // XMLHttpRequest object is created
    xhttp = new XMLHttpRequest(); // ready state: 0
    xhttp.onreadystatechange = alertGetContents; 
    
 // sends a request to a web server
 var url = "getmsg.php";
 xhttp.open("GET", url, true); // ready state: 1
 xhttp.send(); // ready state: 2
}


function setTime() {
var d = new Date();
document.getElementById("chatbox").innerHTML= d.toLocaleTimeString();
}

// using JQUIERY
function post_message() {
    $.ajax({
        url:"postmsg.php",
        method: "POST",
        success: function(data) {
            $('#user_details').html(data);
        },
        error:function(error){
            document.write("Error");
        }

    })
}


// for the post method
function alertContents() {
    try {
        //readystate should be 4 and status should be 200
      if (xhttp.readyState === XMLHttpRequest.DONE) {
        if (!xhttp.status === 200) {
          alert('There was a problem with the request.');
        }
      }
    }
    catch( e ) {
      alert('Caught Exception: ' + e.description);
    }
  }

  //for the get method
  function alertGetContents() {
    try {
        //readystate should be 4 and status should be 200
      if (xhttp.readyState === XMLHttpRequest.DONE) {
        if (xhttp.status === 200) {
            document.getElementById("chatbox").innerHTML= xhttp.responseText;
            
        } else {
            alert('There was a problem with the request.');
        }
      }
    }
    catch( e ) {
      alert('Caught Exception: ' + e.description);
    }
  }

  // clear form text
  function clearForm() {
      document.getElementById("chatForm").reset();
  }