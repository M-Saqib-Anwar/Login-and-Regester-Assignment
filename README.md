To run the Code, First install Xampp on your system to create a server 

After creating the server, place the PHP login system folder in the htdocs folder ( htdocs folder will be in the Xampp Folder where it is installed 

After that, open Xampp controller and create a new Database named (user_db). And place the  given SQL code in SQL tab and hit Enter to create a SQL server 

Sql code
CREATE TABLE IF NOT EXISTS user_form (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    user_type VARCHAR(10) NOT NULL
);

And now open the given link in any Browser 

http://localhost/php_login_system/

Great! Its Working
