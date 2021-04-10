# DataPatternSearching

**About**

The application provides a first-class user experience while delivering rich filters and a combination of filters to query the data in the database. 
We have followed MVC architecture using the following technologies tailwind CSS, Html, js, and Jquery to handle the backend and frontend.
The back end is PHP, and we created an API that serves the request of the users. 
The is well protected from SQL injection and malicious data, and wrong data. It protects from Cross-Site Request Forgery attacks. 


**How to run**
- install node js, composer, xampp, and laravel. Ignore if you already have it.
- Pull this git project from master branch, or if you already have this project the use it
- run "npm install" for laravel mix
- run "npm run dev" command for tailwind css
- create a database name in MySQL or MariaDB or any SQL server in xampp. 
- In the root folder of the project, edit the .env file. Provide database name, user name, and password of the database.
- run the migrate command to make tables required for laravel. Here is the command "php artisan migrate."
- run seeding command to set CSV data in database/seeds/csvs folder to the database. Use this command "php artisan db:seed"
- try this for seeding if the above command could not run "php artisan migrate:fresh --seed".
- run the laravel using "php atrisan serve" to run the project 
- make sure that the database is up and running. 
- your application is ready!!


**About application code**

###  

- Its is well protected for several attacks, like SQL injection, CSRF attack, brute force attack through malicious data to occupy the database. 
- Code is well organized and easy to edit. Particularly back end. Partly thanks to laravel
-  We preferred dom operations to change the tables as the execution cost does not fall on the server but on the client. We should have chosen vue or react, but due to time constraints, we preferred to go with dom operations using Jquery. 
- Wrong and malicious data entry in the front end are handled well 




