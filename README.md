## Introduction
Creating a blog site for a young start-up using Laravel framework. 

## Core Functionality
- Users who are logged-in should be able to see the posts on the landing page. 
- Register options requries: first name, last name, unique email address, password and a unique user name. 
- Login requires: email and password. 
- Once logged in successfully - user is directed to the landing page. 
- Important functions avaialble for the user: 
    - Create new post
    - edit previous posts
    - comment on their or others' posts. 

## Additional requirements
- User should be able to delete their posts. 
- Admins can assign user roles to the system as well as remove them.
- Admins can remove any post, deletion of posts should also delete the comments associated with the post.

## mysql instructions
- Database
    - To login to the server: `mysql -u user_name -p`. It prompts you to enter the password. User name and the password will be located in .env
    - To show the available databases: `SHOW DATABASES;`
    - Create a database:   `CREATE DATABASE database_name;`
    - Using a particular database: `USE database_name;`
    - See which database you are working in: `SELECT DATABASE();`
    - Exit the database: `EXIT;`

- Tables
    - `SHOW TABLES`: Lists all the tables that were crated. 
    - `SELECT * FROM table_name`: gives details of all rows and information in them.
    - `DESCRIBE table_name`: lists the table headings including their defualt value, uniqueness, etc. 

