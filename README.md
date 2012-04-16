### Project Overview

This project provides support for a scavenger hunt environment to run on top of Layar. Using the project, Layar points of interest can be mapped to scavenger hunt questions, that when answered correctly award the answering party points. Includes support for Layar Vision, where users can be awarded points for scanning Layar Vision images in the real world. Also includes a leaderboard so different teams competing in the hunt can see how they are doing compared to others.

### Installation

Scavenger-Hunt-Layar can be installed on any server that is able to run PHP and MySQL. Just upload or git clone the source code to your server, and then follow the instructions below.

Using MySQL or PHPMyAdmin, import db_schemas/db_schemas.sql to your database.

To connect the system to your database, copy application/config/database-sample.php to application/config/database.php. Open up this new file and set the database server / name, username, and password for you database server:

  $ $db['default']['hostname'] = 'localhost';
  $ $db['default']['username'] = 'my-username';
  $ $db['default']['password'] = 'my-password';
  $ $db['default']['database'] = 'my-db-name';

You can now start using the system by accessing the admin interface at your-server/admin. The default admin password is 'admin'. You should change the admin password (via the admin interface) the first time you log in to make the system more secure.

### Extending the Platform

Scavenger-Hunt-Layar is built on the CodeIgniter framework, and so additions / changes to the project can easily be made using the CodeIgniter APIs. CodeIgniter documentation here: http://codeigniter.com/