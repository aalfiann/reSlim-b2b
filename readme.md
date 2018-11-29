reSlim-b2b
=======
[![Coverage](https://img.shields.io/badge/coverage-100%25-green.svg)](https://github.com/aalfiann/reSlim-b2b)
[![reSlim](https://img.shields.io/badge/reslim-1.22.0-green.svg)](https://github.com/aalfiann/reSlim-b2b/src)
[![App](https://img.shields.io/badge/app-2.22.0-green.svg)](https://github.com/aalfiann/reSlim-b2b/test/app)
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
12. Easy horizontal scale because cache support multiserver
13. Load Balancer with multiple database server (master to master or master to slave)
14. Etc

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
5. Apache or NGINX Server


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
1. Create Database name **reslim-b2b** in your MySQL/MariaDB
2. Execute or restore **reSlim-b2b.sql** which is located at **resources/database/** folder
3. Edit **config.php** which is located at **src/** folder  
    Just only this part,
    ```
    $config['db']['host']   = 'localhost';
    $config['db']['user']   = 'root';
    $config['db']['pass']   = 'root';
    $config['db']['dbname'] = 'reSlim-b2b';
    ```
    You can set the rest config later

4. Done

### III. Test
1. Open your browser and visit >> http://localhost:1337/reslim-b2b/src/api/

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
Folder System
---------------
* resources
    * database
        * event_delete_all_expired_auth_scheduler.sql (An expired token will auto deletion in 7 Days after expired date)
        * reSlim-b2b.sql (Structure database in reSlim-b2b to work with default test)
    * postman
        * reSlim Dev Test.postman_collection.json (Is the file to run main api with PostMan)
        * reSlim Main.postman_collection.json (Is the file to run main api with PostMan)
        * reSlim Enterprise.postman_collection.json (Is the file to run b2b system api with PostMan)
    * template
        * readme.md (You can get original html template here)
* src/
    * api/
    * app/
    * classes/
        * middleware/
            * ApiKey.php (For handling authentication api key)
            * index.php (Default forbidden page)
            * ValidateParam.php (For handling validation in body form request)
            * ValidateParamJSON.php (For handling validation in JSON request)
            * ValidateParamURL.php (For handling validation in query parameter url)
        * Auth.php (For handling authentication)
        * BaseConverter.php (For encryption)
        * Cors.php (For accessing web resources)
        * CustomHandlers.php (For handle message)
        * index.php (Default forbidden page)
        * JSON.php (For handle JSON in better way)
        * LazyPDO.php (For create database connection)
        * Logs.php (For handle Log Server)
        * Mailer.php (For sending mail)
        * Pagination.php (For pagination json response)
        * ParallelRequest.php (For send request in parallel/non blocking)
        * SimpleCache.php (For handle cache server side)
        * UniversalCache.php (For handle cache with json format key-value only)
        * Upload.php (For user upload and management file)
        * User.php (For user management)
        * Validation.php (For validation)
    * logs/
        * app.log (Log data will stored in here)
        * index.php (Default forbidden page)
    * modules
        * backup/ (Default module backup for database)
        * enterprise/ (Default module package for b2b system)
        * flexibleconfig/ (Default module flexibleconfig for extend the app config)
        * packager/ (Default module package for app management)
        * pages/ (Default module package for pages management)
        * index.php (Default forbidden page)
    * routers/
	    * index.php (Default forbidden page)
        * index.router.php
        * logs.router.php
        * mail.router.php
        * maintenance.router.php
        * test.router.php (For tester only)
        * user.router.php
* test/
    * app/ (This is a GUI for test)
    * assets/ (This is an assets used in GUI)

### api/
    
Here is the place to run your application as public place

### app/

Here is the place for reslim framework<br>
Connection database and other dependencies are here.

### classes/

Here is the place for reSlim classes

### classes/middleware

reSlim middleware classes are here

### logs/

Your custom log will be place in here as default.<br>
You can add your custom log in your any container or router.

Example adding custom log in a router
```php
$app->post('/custom/log/new', function (Request $request, Response $response) {
    $this->logger->addInfo(
        '{"message":"Response post is succesfully complete!!!"}',
        [
            'type'=>'customlog',
            'created_by'=>'yourname',
            'IP'=>$this->visitorip
        ]
    );
});
```

### modules/{your-module}

You have to create new folder for each different module project.

How to create new reSlim modules?<br>
You can learn from documentation here >> [Tutorial Create Module](https://github.com/aalfiann/reSlim/wiki/Tutorial-Create-Module).  
Or learn directly from this very simple project on [Github.com](https://github.com/aalfiann/reSlim-modules-first_mod).

### routers/

All the files with the routes. Each file contents the routes of an specific functionality.<br>
It is very important that the names of the files inside this folder follow this pattern: name.router.php<br>
Don't created new folder of your router unless you have already modify this >> src/app/app.php.

Example of router file:

user.router.php

```php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \classes\SimpleCache as SimpleCache;
use \classes\User as User;
use \classes\Cors as Cors;
use \classes\middleware\ApiKey as ApiKey;

    // POST example api to show all data user
    $app->post('/user', function (Request $request, Response $response) {
        $users = new User($this->db);
        $datapost = $request->getParsedBody();
        $users->Token = $datapost['Token'];
        $body = $response->getBody();
        $body->write($users->showAll());
        return Cors::modify($response,$body,200);
    });

    // Multiple router method example api to show profile user (for public is need an api key)
    $app->map(['GET','OPTIONS'],'/user/profile/{username}/', function (Request $request, Response $response) {
        $users = new User($this->db);
        $users->Username = $request->getAttribute('username');
        $body = $response->getBody();
        
        // Use Http Cache Control and ETag
        $response = $this->cache->withEtag($response, $this->etag30min.'-'.trim($_SERVER['REQUEST_URI'],'/'));
        
        // Working with server side cache.
        if (SimpleCache::isCached(600,["apikey"])){
            $datajson = SimpleCache::load(["apikey"]);
        } else {
            $datajson = SimpleCache::save($users->showUserPublic(),["apikey"]);
        }
        $body->write($datajson);
        return Cors::modify($response,$body,200,$request);
    })->add(new ApiKey());
```


Working with default example for testing (Postman)
-----------------
I recommend you to use PostMan an add ons in Google Chrome to get Started with test.

1. Import **reSlim-b2b.sql** in your database then config your database connection in **config.php** inside folder **reslim-b2b/src/**
2. Import file **reSlim Main.postman_collection.json** and **reSlim Enterprise.postman_collection.json** in your PostMan. This file is on **resources/postman** folder.
3. Edit the request path in PostMan. Because the example test is using my path server which is my server is run in http://localhost:1337 
    The path to run **reslim-b2b** is inside folder api.<br> 
    Example for my case is: http://localhost:1337/reslim-b2b/src/api/<br><br>
    You don't have to do this if you change your php server port from 80 to 1337.    
4. Then you can do the test by yourself

Working with gui example for testing
-----------------
Note: Don't worry, this gui is already tested on our production environment.

1. Import reSlim-b2b.sql in your database then config your database connection in config.php inside folder **reslim-b2b/src/**
2. Edit the config.php inside folder "reslim-b2b/test/app"<br>
    $config['title'] = 'your title website';<br>
    $config['email'] = 'your default email address';<br>
    $config['basepath'] = 'url location of base path';<br>
    $config['homepath'] = 'url location of home path';<br>
    $config['assetspath'] = 'url location of assets path';<br>
    $config['api'] = 'url location of base path of api';<br>
    $config['apikey'] = 'your api key, you can leave this blank and fill this later';
3. Visit yourserver/reslim-b2b/test/app<br>
    For my case is http://localhost:1337/reslim-b2b/test/app
4. You can login with default superuser account:  
    Username : reslim  
    Password : reslim
5. All is done

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