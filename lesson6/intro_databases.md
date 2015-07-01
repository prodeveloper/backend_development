---
title: Introduction to databases
author: Chencha Jacob <jacob[at]chenchatech.com>
header-includes:
    - \usepackage{fancyhdr}
    - \pagestyle{fancy}
---

\newpage

##What databases can do

- Read and write data
- Store more data
- Better organized
- Faster access to data
- Easier to manipulate
- Relate data to other data
\newpage

##Why databases

- Manage large datasets
- Updating our dataset
- Maintaining fedility of data
- Keep data secure
- Manage redundancy
\newpage

##Common databases

- MySQL 
- Postgres
- SQLite
- Cassandra
- MongoDB
\newpage

##Why MySQL

- It's free
- Easy to install and use
- Popular
- General purpose. This makes it especially good for teaching
\newpage

##Sample data

![](https://dl.dropboxusercontent.com/u/56723580/blog/sample_spreadsheet.png)

Do note that a database provides more features than a typical spreadsheet

- Define and query relations
- Issue commands to a database
- Optimized for data can do only rudimentary calculations
\newpage

##Common terms

*Database*

- Set of related tables
- What holds our data
- Permissions and relations defined at this level

*Tables*

- Set of columns and rows
- Holds entities in our application
- Eg users table to hold the collection of user entities
- They can hold foreign relations to other tables

*Column*

- Set of data of a single type
- eg column of first names

*Row*

- Single entry of data
- eg row with first names, last names, age etc 

*Field*

- Intersection of column and row

*Index*

- Metadata meant to increase speed of lookup

*Foreign key*
 
 - Table column whose values references rows in another table

\newpage

##Login into MySQL

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/login_screen.png)
![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/post_login_mysql.png)
\newpage

##Check databases

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/show_databases.png)
\newpage

##Create database

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/create_database.png)
\newpage

##Granting privileges

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/granting_priveleges.png)

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/grant_privileges.png)
\newpage

##Specific user

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/logging_in_new_user.png)
\newpage

##Checking tables

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/show_tables.png)
\newpage

##Creating table

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/create_table_syntax.png)
\newpage

##Simple users table 

Let us create a simple users table with the columns

- name
- password
- email
- created
\newpage

##Simple users table sql

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/simple_users_table.png)
\newpage

##Checking tables after

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/show_tables_after_create.png)
\newpage

##Checking columns

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/show_columns_after_creation.png)
\newpage

##CRUD with MySQL
\newpage

##What is CRUD

- Create
- Read
- Update
- Delete
\newpage

##SQL Select 

This is the read part

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/select_sql.png)
\newpage

##SQL Insert

This is the create part

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/create_sql.png)

- Note columns and values must match
- It is not a must we look into all columns
\newpage

##SQL Update

This is the update part

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/update_sql.png)
\newpage

##SQL Delete

This is the most dangerous component

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/delete_sql.png)
\newpage

##Add data to SQL Database

```sql
INSERT INTO `users` (`id`, `name`, `password`, `email`, `created`) VALUES
(1, 'Jacob', 'secret', 'jacob@chenchatech.com', '2015-06-23');

INSERT INTO `users` (`id`, `name`, `password`, `email`, `created`) VALUES
(2, 'Rand', 'bb', 'info@chenchatech.com', '2015-06-24');

INSERT INTO `users` (`id`, `name`, `password`, `email`, `created`) VALUES
(3, 'To be deleted', 'password', 'someone@chenchatech.com', '2015-06-24');
```
\newpage

##Show users

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/show_all_users.png)
\newpage

##Order users

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/change_ordering_users.png)
\newpage

##Get a specific user

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/specific_user.png)
\newpage

##Updating users

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/update_rows.png)
\newpage

##Deleting users

![](https://dl.dropboxusercontent.com/u/56723580/blog/akirachix/deleting_users.png)

\newpage

##Assignment

Write SQL that does the following

1. Creates a database called Shop
2. Creates a table called products in the database
3. The table should have the columns (id, item, price)
4. The id should be auto populated

Submit as a document
