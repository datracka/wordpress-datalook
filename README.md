##About

This package is aiming to host the Data Look Wordpress custom files.
Even the blog is not so heavily edited as datalook.io,  neverthless in case there is some contribution it mimic the development structur of dalook.io

Following this the blog is divided in 2 repositories which both are needed to run the application on localhost. Below I guide you how to archive this.

##Developer Setup up

I assume you have already install a LAMP stack in your local machine. otherwise more info here: (https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu) 

First fork your own copy of https://github.com/opendataforgood/WordPress This forked is regular basis updated with wordpress upstream.

Once you did it clone your forked in your local machine and create a new branch:

```sh
git clone https://github.com/<your_account>/WordPress.git

git checkout -b data-look

sudo git push origin data-look
```

Now get the repository with all the custom code for Data Look 

As before first fork it from https://github.com/opendataforgood/wordpress-datalook.git and clone i in your local machine https://github.com/<your_account>/wordpress-datalook.git

Now we have to link both the custom content to the wordpress Repository so
go to your Wordpress working copy folder and from there run the following 
command: 

```sh
ln -s /path/to/your/wordpress-datalook/wp-content wp-content
```

then we only left ignore some files (only if you have a Mac) 

```sh
.DS_Store
wp-content/uploads/
```

and create the following directory in your working copy for uploading images

```sh
cd wp-content/
mkdir uploads 
```

this command creates a symlink on your Wordpress working copy to the custom datebook files that you already has checked out. So, Wordpress folder contains already all the files for running Wordpress.
Well, not still. If you want to run it in your computer we have to do the following steps Config wordpress settings (TODO)




