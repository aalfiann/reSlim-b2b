reSlim-b2b
=======
[![Coverage](https://img.shields.io/badge/coverage-100%25-green.svg)](https://github.com/aalfiann/reSlim-b2b)
[![reSlim](https://img.shields.io/badge/reslim-1.12.0-green.svg)](https://github.com/aalfiann/reSlim-b2b/src)
[![App](https://img.shields.io/badge/app-2.11.3-green.svg)](https://github.com/aalfiann/reSlim-b2b/test/app)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/aalfiann/reSlim-b2b/blob/master/license.md)

reSlim-b2b is Lightweight, Fast, Secure, Simple, Scalable, Flexible and Powerful rest api.<br>
reSlim-b2b is based on [Slim Framework version 3](http://www.slimframework.com/).<br>
This is reSlim with extended feature for b2b.<br>

Features:
---------------

1. User management system
2. File management system
3. Pages management system
4. Backup management system
5. Package management system
6. Token and API Key management system
7. Auto log and trace error message
8. Pagination json response
9. Support Multi Language
10. Server Side Caching to handle high traffic
11. Scalable architecture with modular concept
12. Load Balancer with multiple database server (master to master or master to slave)
13. Etc

B2B Features:
---------------
Extended with basic skeleton for b2b design.

1. Data Branch
2. Data User Branch
3. User with role master can manage their user on same branch
4. Mostly page is created using ajax jquery
5. Responsive modern theme with Bootstrap 4 (beta version)
6. Etc.

System Requirements
---------------

1. PHP 5.5 or newer
2. MySQL 5.6 or MariaDB
3. Web server with URL rewriting
4. Web server with mcrypt extension
5. Apache Server (Better to use Apache + Reverse Proxy NGINX)


---
Getting Started
---------------

### I. Installation
1. Get or download the project
2. Extract then rename folder **reSlim-b2b-master** to **reslim-b2b**
3. Open shell or CMD then go to **src** folder
    ```
    cd reslim-b2b/src
    ```
    
4. Install it using Composer  
    ```
    composer install
    ```
5. Done

### II. Connection Database
1. Create Database name reslim-b2b in your MySQL/MariaDB
2. Execute or restore **reSlim-b2b.sql** which is located at **resources/database/** folder
3. Edit **config.php** which is located at **src/** folder  
    Just only this part,
    ```
    $config['db']['host']   = 'localhost';
    $config['db']['user']   = 'root';
    $config['db']['pass']   = 'root';
    $config['db']['dbname'] = 'reSlim';
    ```
    You can set the rest config later

4. Done

### III. Test
1. Open your browser and visit >> http://localhost:1337/reslim/src/api/

Note: 
    - My apache server is run on port 1337.

### IV. Development
**How to create new app or modules?**  
You can learn from documentation here >> [Tutorial Create Module](https://github.com/aalfiann/reSlim/wiki/Tutorial-Create-Module).  
Or learn directly from this very simple project on [Github.com](https://github.com/aalfiann/reSlim-modules-first_mod).

### V. Deployment
1. Upload all files inside folder src to your server
2. Backup local database and then restore to your server database online
3. Done

---
Documentation
-----------------
reSlim documentation is available on [Wiki](https://github.com/aalfiann/reslim/wiki).

How to Contribute
-----------------
### Pull Requests

1. Fork the reSlim-b2b repository
2. Create a new branch for each feature or improvement
3. Send a pull request from each feature branch to the develop branch