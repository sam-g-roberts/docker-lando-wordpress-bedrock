# Lando/Bedrock/Sage Wordpress Base

This is a modern code base for wordpress development that should be used as the base for all new wordpress projects. It implements:

*  Lando (docker) for easy local site setup on any OS. https://docs.devwithlando.io/
*  Bedrock for dependancy management of wordpress and plugins. https://roots.io/bedrock/
*  Sage for a modern theme development setup using bootstrap, scss and blade templating. https://roots.io/sage/

Please leave this repo as you would wish to find it and when starting a new project first make any relevant updates to the base before branching off and creating your own project.



## Installation

This installation guide already assumes that you have both Docker and Lando installed. To install both of these please Visit:
*  https://hub.docker.com/signup
*  https://docs.devwithlando.io/installation/macos.html
*  https://docs.devwithlando.io/installation/linux.html
*  https://docs.devwithlando.io/installation/windows.html



### Download the repo
First off your going to need to download the repository localy. Open up your terminal and Head to whichever folder you would like the project to be created.
```
git clone git@git.xigen.co.uk:xigen/wordpress-bedrock-sage-lando.git
cd docker-lando-wordpress-bedrock
```

if you need to make changes to the core repo before creating your new project do it now. Otherwise do.
```
git remote remove origin
```



### Spin up lando
You might want to now go into the .lando.yml in the root and change the name as this is what your local url will be based off of.

Now lets get your site running locally on lando. There's alot of work involved in this one...
```
lando start
```

Done. to see all lando commands just type and enter the below into the terminal
```
lando
```



### Add your site and connection details
First off go to the root of the repo and copy .env.example into a new file called .env This is an enviroment variables file.

Your going to need to add some database details and also the url for your site. To find out the url and your database connection details type and enter the below into the terminal.
```
lando info
```

you'll notice database connections has internal and external. You would use the external details for somehting like sequel pro and internal details on your local

Add these connection details to your env AND change the WP_HOME to the url from your lando info

```
DB_NAME=wordpress
DB_USER=wordpress
DB_PASSWORD=wordpress
DB_HOST=database
```


### Install dependencies
Now lets start getting the guts installed

To install wordpress the plugins and any other php dependencies run
```
lando composer install
```

Now lets head into the theme folder and install their dependencies as well
```
cd web/app/themes/sage
lando composer install
lando yarn
```


### Compiling assets and watching them
Run the below to get your assets compiling
```
lando yarn build
lando yarn start
```

### Visit your site and setup the db
Final Step!! Now you just need to go to /wp-admin on the site url that lando has created for you and setup your WP site creds

Once that is done please active the theme and plugins

## Fini!!!





# Production considerations
For using on production you should setup git hooks to compile the assets on deployment using the same methods above, lando is irrelevant on production though so exclude the lando prefix on all the commands

You could also setup post isntall scripts in the composer .json so you only need to deploy the code to the server then run the compoaser install (server will also need to be running node)

You'll also need to make /web the public root the traffice goes to this should already have an .htaccess in it

The server will also need enviroment variables setup like local.


