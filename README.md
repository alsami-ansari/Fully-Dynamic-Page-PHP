
# Fully Dynamic Single-Page Website with Admin Panel and CRUD

This project is a fully dynamic single-page website with an admin panel, featuring Create, Read, Update, and Delete (CRUD) functionalities. The website is built using the PHP (Linux, Apache, MySQL, PHP) and can be run locally using XAMPP.

(Click here for website)[http://taxi-service.kesug.com]
(Click here for Admin Panel)[http://taxi-service.kesug.com/backend]

## Features

- **Admin Panel**: Secure access to the admin panel for managing website content.
- **CRUD Operations**: Admins can create, read, update, and delete records dynamically through the interface.
- **Responsive Design**: The website is optimized for different screen sizes.
- **Database**: MySQL is used for storing and retrieving data.
_ **Secure Login System**: Password-protected admin area with session management.

## Technologies Used

- **PHP**: Server-side scripting language
- **MySQL**: Database management
- **HTML/CSS/JavaScript**: Frontend technologies
- **XAMPP**: Local development environment

## Installation and Setup

### Prerequisites

- **XAMPP** installed on your machine
- **Web browser** (Google Chrome, Firefox, etc.)

### Steps to Run on Localhost

1. **Clone the Repository**  
   Clone this repository or download the zip file from the repository.

   ```bash
   git clone https://github.com/samiansari01/Fully-Dynamic-Page-PHP.git
   ```

2. **Move Files to XAMPP**  
   Copy the project folder to the `htdocs` directory of your XAMPP installation. Usually, the path looks like:

   ```
   C:\xampp\htdocs\projectname
   ```

3. **Create a MySQL Database**  
   Open `phpMyAdmin` in your browser by visiting [http://localhost/phpmyadmin](http://localhost/phpmyadmin).  
   Create a new database for your project (`new_texi`).

4. **Import Database**  
   Import the provided SQL file (`new_texi.sql`) located in the project folder to the database you just created:
   
   - Click on the `Import` tab in `phpMyAdmin`
   - Choose the `nex_texi.sql` file
   - Click `Go`

5. **Update Database Configuration**  
   Open the project folder and locate the `config.php` file. Update the database credentials to match your local setup:

   ```php
   <?php
   $host = 'localhost';
   $db   = 'new_texi'; // Your database name
   $user = 'root';       // Your database username
   $pass = '';           // Leave empty if no password for XAMPP
   ?>
   ```

6. **Start XAMPP**  
   Launch XAMPP Control Panel and start both **Apache** and **MySQL**.

7. **Access the Website**  
   Open your web browser and go to:

   ```
   http://localhost/Fully-Dynamic-Page-PHP
   ```

   You should now see the homepage of your single-page website.

8. **Admin Panel**  
   To access the admin panel, go to:

   ```
   http://localhost/Fully-Dynamic-Page-PHP/backend
   ```

   Log in with the credentials provided in the project (`newtexi@gmail.com/12345` by default, or modify in the database).



## CRUD Functionality

- **Create**: Add new records through the admin panel.
- **Read**: View a list of records on the website.
- **Update**: Edit existing records.
- **Delete**: Remove records from the database.


## Security Considerations

- **SQL Injection Prevention**: All database queries are parameterized to prevent SQL injection attacks.
 
## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
