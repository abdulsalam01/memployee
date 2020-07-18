# General
- Programming languange: PHP (CI).
- PHP Version: 7.3.8.
- Database name is: **program_task_test**.
- Database located at: {root-project}/database/

# Installation
1. copy zip code and put into htdocs (XAMPP) or similar web server that has support php language and extract over there
2. open the <root-project>/application/config and changes 2 files:
- **config.php**, adjust _config['base_url']_ with your local url 
**(eg: http://localhost/programming_task/)**
- **database.php**, adjust the _hostname, username, and password_ field with yours
**(eg: hostname: localhost, username: root, password: root123 _(if have, leave blank if don't have)_)**
3. do import to sql file that attached to DBMS like mariadb, phpmyadmin and others (mine sqlyog)

# How to Access
1. to add employees, access this url:
- http://{hostname}:{port}/{root-project}/home/v_create
**(eg: http://localhost:8800/programming_task/home/v_create)**
2. the api that responsible to the process can be access by POST REQUEST at:
- http://{hostname}:{port}/{root-project}/home/create
**(eg: http://localhost:8800/programming_task/home/create)**
3. to display list of employees, access this url:
- http://{hostname}:{port}/{root-project}/home/employees/{order_by}{field}?{limit}&{offset}
- _order_by_ can be **-** (means ASC) and **+** (means DESC)
- _field_ can be **name, login or id**
- _limit_, just put in url **limit={number of limitation}**
- _offset_, just put in url **offset={number of starting point}**
**(eg: http://localhost:8800/programming_task/home/employees/-name?limit=10&offset=1)**
