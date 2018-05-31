reSlim-b2b
=======
[![Coverage](https://img.shields.io/badge/coverage-100%25-green.svg)](https://github.com/aalfiann/reSlim-b2b)
[![Version](https://img.shields.io/badge/stable-2.10.2-green.svg)](https://github.com/aalfiann/reSlim-b2b)
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
        * Logs.php (For handle Log Server)
        * Mailer.php (For sending mail)
        * Pagination.php (For pagination json response)
        * SimpleCache.php (For handle cache server side)
        * Upload.php (For user upload and management file)
        * User.php (For user management)
        * Validation.php (For validation)
    * logs/
        * app.log (Log data will stored in here)
        * index.php (Default forbidden page)
    * modules
        * backup/ (Default module backup for database)
        * enterprise/ (Default module package for b2b system)
        * packager/ (Default module package for app management)
        * pages/ (Default module package for pages management)
        * index.php (Default forbidden page)
    * routers/
	    * name.router.php (routes by functionalities)
* test/
    * app/ (This is a GUI for test)
    * assets/ (This is an assets used in GUI)

### api/
    
Here is the place to run the main api

### app/

Here is the place for slim framework<br>
We are using PDO Driver for the Database

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
Please look at this very simple project on [Github.com](https://github.com/aalfiann/reSlim-modules-first_mod).

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
 * @var $config['httpVersion'] The protocol version used by the Response object. Default is '1.1'. 
 * @var $config['responseChunkSize'] Size of each chunk read from the Response body when sending to the browser. Default is 4096
 * @var $config['outputBuffering'] If false, then no output buffering is enabled. If 'append' or 'prepend', then any echo or print statements are captured and are either appended or prepended to the Response returned from the route callable. Default is 'append'
 * @var $config['determineRouteBeforeAppMiddleware'] When true, the route is calculated before any middleware is executed. This means that you can inspect route parameters in middleware if you need to. Default is false.
 * 
 */
$config['displayErrorDetails']                  = true;
$config['addContentLengthHeader']               = false;
$config['limitLoadData']                        = 1000;
$config['enableApiKeys']                        = true;
$config['httpVersion']                          = '1.1';
$config['responseChunkSize']                    = 4096;
$config['outputBuffering']                      = 'append';
$config['determineRouteBeforeAppMiddleware']    = false;

/**
 * Configuration Router Cache
 * 
 * @var $config['router']['enableCache'] If set to true, this will make your router performance faster. If you in development mode, just set to false. The exist file cache will automatically deleted from server.
 * @var $config['router']['folderCache'] To set the folder of router cache. Don't leave this blank.  
 * @var $config['router']['fileCache'] To set the filename of router cache. Don't leave this blank.
 * 
 */
$config['router']['enableCache']    = false;
$config['router']['folderCache']    = 'cache-router';
$config['router']['fileCache']      = 'routes.cache.php';

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
$config['smtp']['host']             = 'smtp.gmail.com';
$config['smtp']['autotls']          = false;
$config['smtp']['auth']             = true;
$config['smtp']['secure']           = 'tls';
$config['smtp']['port']             = 587;
$config['smtp']['defaultnamefrom']  = 'reSlim admin';
$config['smtp']['username']         = 'youremail@gmail.com';
$config['smtp']['password']         = 'secret';
$config['smtp']['debug']            = 1;

// Configuration timezone
$config['reslim']['timezone'] = 'Asia/Jakarta';
```

Working with default example for testing
-----------------
I recommend you to use PostMan an add ons in Google Chrome to get Started with test.

1. Import reSlim-b2b.sql in your database then config your database connection in config.php inside folder "reSlim-b2b/src/"
2. Import file reSlim Main.postman_collection.json and reSlim Enterprise.postman_collection.json in your PostMan. This file is on resources/postman folder.
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