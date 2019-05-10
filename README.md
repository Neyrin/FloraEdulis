# Flora

A theme created for a website listing edible plants. 

### Built with
+ [Wordpress](https://wordpress.org/)
+ [Wordplate](https://wordplate.github.io/)
+ [Advanced custom fields](https://www.advancedcustomfields.com/)

#### Requirements
- [x] Wordpress
- [x] Wordplate
- [x] ACF
- [x] CPT - Implementing ACF, listing all posts with links to single-pages
- [x] Page template

#### If you'd like to check this theme out
(_You'll need to have [php](https://www.php.net/downloads.php) and [composer](https://getcomposer.org/) installed on you machine_)
+ [Clone](https://github.com/Neyrin/FloraEdulis.git) or download the repo on you machine
+ Open you terminal and make sure you're in the root of the repo
+ Type 'composer install' (_this will download all the plugins used in this theme for you_)
+ Create a SQL-database 
+ Create a user that is granted all privileges on the database you just created (_Check out [Wordpress' guide](https://codex.wordpress.org/Installing_WordPress#Step_2:_Create_the_Database_and_a_User) if you need help with this_)
+ Open the project in your editor
+ In the root, create a _.env_ file and copy the content from _.env.example_ in there
+ In your _.env_ file replace the DB-credentials with you own
+ Follow the Wordplate link in the .env-file to generate your keys an paste those in instead of the old ones
+ Start your server in the public-folder, open a browser and type in your server-adress and port followed by _/wp-admin_ and follow the steps
+ Once you're logged in to your dashboard head to _apperance_ > _themes_ and activate the theme _Flora_ 
+ Create some _Plant_ posts and then check out your site in the browser by opening a new tab and typing in your server-adress and port

#### LICENSE
[MIT](LICENSE) @ [Neyrin](https://github.com/neyrin)
