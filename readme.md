reSlim-b2b
=======
[![Build](https://img.shields.io/badge/coverage-90%25-yellow.svg)](https://github.com/aalfiann/reSlim-b2b)
[![Version](https://img.shields.io/badge/beta-2.7.5-yellow.svg)](https://github.com/aalfiann/reSlim-b2b)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/aalfiann/reSlim-b2b/blob/master/license.md)

reSlim-b2b is Lightweight, Fast, Secure, Simple, Scalable and Powerful rest api.<br>
reSlim-b2b is based on [Slim Framework version 3](http://www.slimframework.com/).<br>
This is reSlim with extended feature for b2b.<br>

Features:
---------------
Reslim-b2b is already build with essentials of user management system in rest api way.

1. User register, login and logout
2. Auto generated token every login
3. User can revoke all active token
4. User can manage their API Keys
5. Included with default role for superuser, admin and member
6. Auto clear current token when logout,user deleted or password was changed
7. Change, reset, forgot password concept is very secure
8. Mailer for sending email or contact form
9. File management system
10. Pages management system
11. Pagination json response
12. Support Multi Language
13. Server Side Caching
14. Etc.

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


Getting Started
---------------
1. Get or download the project
2. Install it using Composer

Folder System
---------------
* resources
    * database
        * event_delete_all_expired_auth_scheduler.sql (An expired token will auto deletion in 7 Days after expired date)
        * reSlim-b2b.sql (Structure database in reSlim-b2b to work with default test)
    * postman
        * reSlim Main.postman_collection.json (Is the file to run main api with PostMan)
        * reSlim System.postman_collection.json (Is the file to run b2b system api with PostMan)
    * template
        * readme.md (You can get original html template here)
* src/
    * api/
    * app/
    * classes/
        * middleware/
            * ApiKey.php (For handling authentication api key)
            * index.php (Default forbidden page)
        * modules
            * index.php (Default forbidden page)
            * Pages.php (For pages management)
        * system
            * Company.php (For company data management)
            * index.php (Default forbidden page)
            * User.php (For manage user in external system)
            * Util.php (Utilities class to handle User into your company system)
        * Auth.php (For handling authentication)
        * BaseConverter.php (For encryption)
        * Cors.php (For accessing web resources)
        * CustomHandlers.php (For handle message)
        * index.php (Default forbidden page)
        * Logs.php (For handle Log Server)
        * Mailer.php (For sending mail)
        * Pagination.php (For pagination json response)
        * SimpleCache.php (For handle cache server side)
        * Upload.php (For user upload and management file)
        * User.php (For user management)
        * Validation.php (For validation)
    * logs/
    * routers/
	    * name.router.php (routes by functionalities)
* test/
    * app/ (This is a GUI for test)
    * assets/ (This is an assets used in GUI)

### api/
    
Here is the place to run the main api

### app/

Here is the place for slim framework

### classes/

Here is the place for reSlim classes

### classes/middleware

Add your middleware classes here
We are using PDO Driver for the Database

### classes/modules

reSlim modules for future update is always be putted here
You are allowed to create your own custom modules classes here.

### classes/system

Here is the place to run b2b system classes

### classes/system/{your-app}

You have to create new folder for your project app
All of your company system classes should be put here.


### logs/

Your custom log will be place in here as default.
You can add your custom log in your any container or router.

Example adding custom log in a router
```php
$app->post('/logger/test/new', function (Request $request, Response $response) {
    echo 'This is a POST route';
    $this->logger->addInfo("Response post is succesfully complete!!!");
});
```

### routers/

All the files with the routes. Each file contents the routes of an specific functionality.
It is very important that the names of the files inside this folder follow this pattern: name.router.php
Don't created new folder of your router unless you have already modify this >> src/app/app.php.

Example of router file:

user.router.php

```php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \classes\SimpleCache as SimpleCache;

    // POST example api to show all data user
    $app->post('/user', function (Request $request, Response $response) {
        $users = new classes\User($this->db);
        $datapost = $request->getParsedBody();
        $users->Token = $datapost['Token'];
        $body = $response->getBody();
        $body->write($users->showAll());
        return classes\Cors::modify($response,$body,200);
    });

    // Multiple router method example api to show profile user (for public is need an api key)
    $app->map(['GET','OPTIONS'],'/user/profile/{username}/', function (Request $request, Response $response) {
        $users = new classes\User($this->db);
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
        return classes\Cors::modify($response,$body,200,$request);
    })->add(new \classes\middleware\ApiKey());
```

### reSlim Configuration

Example Config.php
```php
/** 
 * Configuration App
 *
 * @var $config['displayErrorDetails'] to display error details on slim
 * @var $config['addContentLengthHeader'] should be set to false. This will allows the web server to set the Content-Length header which makes Slim behave more predictably
 * @var $config['limitLoadData'] to protect high request data load. Default is 1000.
 * @var $config['enableApiKeys'] to protect api from guest or anonymous. Guest which don't have api key can not using this service. Default is true.
 * 
 */
$config['displayErrorDetails']      = true;
$config['addContentLengthHeader']   = false;
$config['limitLoadData'] = 1000;
$config['enableApiKeys'] = true;

/** 
 * Configuration PDO MySQL Database
 *
 * @var $config['db']['host'] = where is database was hosted
 * @var $config['db']['user'] = username database to login
 * @var $config['db']['pass'] = pass database to login
 * @var $config['db']['dbname'] = the database name
 */
$config['db']['host']   = 'localhost';
$config['db']['user']   = 'root';
$config['db']['pass']   = 'root';
$config['db']['dbname'] = 'reSlim-b2b';

/**
 * Configuration SMTP for Mailer
 *
 * @var $config['smtp']['host'] is smtp host. example smtp.gmail.com
 * @var $config['smtp']['autotls'] is make smtp will send using tls protocol as default
 * @var $config['smtp']['auth'] will connect to smtp using authentication
 * @var $config['smtp']['secure'] this is type of smtp security. You can use tls or ssl
 * @var $config['smtp']['port'] this is port smtp
 * @var $config['smtp']['defaultnamefrom'] this is default name from. You can filled with yourname / yourwebsitetitle
 * @var $config['smtp']['username'] your username to login into smtp server
 * @var $config['smtp']['password'] the password to login into smtp server
 * @var $config['smtp']['debug'] get more information by set debug.
 *                               To work using rest api, You should set debug 1,
 *                               because other than 1, there is special characters that will broke json format. 
 */
$config['smtp']['host'] = 'smtp.gmail.com';
$config['smtp']['autotls'] = false;
$config['smtp']['auth'] = true;
$config['smtp']['secure'] = 'tls';
$config['smtp']['port'] = 587;
$config['smtp']['defaultnamefrom'] = 'reSlim admin';
$config['smtp']['username'] = 'youremail@gmail.com';
$config['smtp']['password'] = 'secret';
$config['smtp']['debug'] = 1;

// Configuration timezone
$config['reslim']['timezone'] = 'Asia/Jakarta';
```

Working with default example for testing
-----------------
I recommend you to use PostMan an add ons in Google Chrome to get Started with test.

1. Import reSlim-b2b.sql in your database then config your database connection in config.php inside folder "reSlim-b2b/src/"
2. Import file reSlim Main.postman_collection.json and reSlim System.postman_collection.json in your PostMan. This file is on resources/postman folder.
3. Edit the path in PostMan. Because the example test is using my path server which is my server is run in http://localhost:1337 
    The path to run reSlim-b2b is inside folder api.<br> 
    Example for my case is: http://localhost:1337/reSlim-b2b/src/api/<br><br>
    You don't have to do this if you change your php server port from 80 to 1337.    
4. Then you can do the test by yourself

Working with gui example for testing
-----------------
Note: Don't worry, this gui is already tested on our production environment.

1. Import reSlim-b2b.sql in your database then config your database connection in config.php inside folder "reSlim-b2b/src/"
2. Edit the config.php inside folder "reSlim-b2b/test/app"<br>
    $config['title'] = 'your title website';<br>
    $config['email'] = 'your default email address';<br>
    $config['basepath'] = 'url location of base path example';<br>
    $config['api'] = 'url location of base path of api';<br>
    $config['apikey'] = 'your api key, you can leave this blank and fill this later';
3. Visit yourserver/reSlim-b2b/test/app<br>
    For my case is http://localhost:1337/reSlim-b2b/test/app
4. You can login with default superuser account:<br>
    Username : reslim<br>
    Password : reslim
5. All is done

The concept authentication in reSlim-b2b
-----------------

1. Register account first
2. Then You have to login to get the generated new token

The token is always generated new when You relogin and the token is will expired in 7 days as default.<br>
If You logout or change password or delete user, the token will be clear automatically.<br>
Of course you can modify this by yourself later depends on your project.

Feels hard to use reSlim-b2b?
-----------------

1. You can try the very simple reSlim at here >> https://github.com/aalfiann/reSlim
2. Remember that reSlim-b2b is based on Slim Framework, so you can do everything if you already understand how Slim Framework way to code.

How to Contribute
-----------------
### Pull Requests

1. Fork the reSlim-b2b repository
2. Create a new branch for each feature or improvement
3. Send a pull request from each feature branch to the develop branch