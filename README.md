# stockeduwebsite
Template for a stock education website

This project provides a template for a stock website using html, css, javascript, php, and mysql.

You will need to download XAMPP in order to run the code because a server is required to run the php code. It also provides database to hold user information and messages for a chat room used to exchange stock info. SQL will be used to access information from the database.

If you are unfamiliar with backend or server side development then you should learn more about it in order to understand the code. PHP will be used to connect to the database. You can use Node.js instead of PHP instead if you want, but PHP is esier to pick up if are new to both. Javascript will used for AJAX (Asynchronous JavaScript and XML is a set of web development techniques using many web technologies on the client side to create asynchronous web applications.) purposes. AJAX is used so you can make request to the backend without reloading the page. You can incorporate JQuery (JavaScript library designed to simplify HTML DOM tree traversal and manipulation, as well as event handling, CSS animation, and Ajax.) into the project, it is not necessary.

If you don't like to use these languages, then you can use your preferred language as a substitute as long as you can translate the code over to your preferred language. React.js can be a preferred way of writing but it will take more skill and expereince with JS if you want to develop with react.js. 

Make sure to put all of your code inside the htdocs folder in order for the project to run.

How to use XAMPP. I am using a Mac so the set up is based off of that. 
1. Download XAMPP for your operating system. 
2. Open up the application and click start to run the program under the general page.
3. Go to services and start the Apache and MySQL or click start all.
4. Under network, enable the local host. This will be the link to your server.
5. Under Volume, click mount. 
6. Once you click mount, you will be able to access the volume. Go to your finders, adn you will find a folder with your IP address. Click on that. Click on the lampp folder. Then go to the htdocs folder. Inside the htdocs folder, you will need to create a folder for your project. The code will not run on the local server if it is not stored in the htdocs folder.

To run the program, go to your localhost. 
Ex: localhost:8080/folder_name/file_name

To access your database:
Go to your local server and click phpmyadmin on the top right corner. 
Ex: localhost:8080
Create a new database by clicking New on the left side of the screen.

In the code, I already named my database with certain names but you can call it whatever you prefer but you must change the name of the database in the php code to correspond with the database name or it will not connect.

You can use any program you prefer to run and edit the code. I used Visual Studio Code for this project.
Some of the files are incomplete so you can add on to it. Make sure you understand the code before you start editing. Have fun coding. 
