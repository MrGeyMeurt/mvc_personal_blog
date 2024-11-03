![index](https://github.com/user-attachments/assets/12bc55c8-4228-4163-a02e-1e07b0b4e159)
# MVC Blog Project

## Description
This project is a student exercise to build a blog using the MVC (Model-View-Controller) architecture. The blog is designed as a simple, functional web application that demonstrates the MVC pattern using HTML, CSS, Bootstrap 5, PHP, MySQL, and jQuery. The project is hosted locally using WAMP Server with PHPMyAdmin for database management.

## Update
- **27/07/2022**: 1.0 Release
- **29/07/2024**: Fixed errors leading to a blank screen and changed the database name.
- **01/11/2024**: Rework of the ``README.mt`` and adding a ``LICENSE.mt``

## Project Structure
``/media``: Root directory for images used on the site

``/icon``: Illustrations used throughout the site

``/articles``: Views of the articles

``/backoffice``: Complete backoffice for managing content

``/images``: View for the carousel

``/layout``: Homepage layout

``/main``: Page selection display

## Features
- **Responsive Design**: Utilized Bootstrap 5 for responsiveness across devices.
- **MVC Architecture**: Organized code into Models, Views, and Controllers.
- **Basic Blog Functionality**: Users can read blog posts, and administrators can manage posts via the backoffice.

## Technologies Used
- **Frontend**: HTML, CSS, Bootstrap 5, jQuery 3.6.0
- **Backend**: PHP
- **Database**: MySQL (managed via phpMyAdmin 5.0.2)
- **Local Server**: WAMP Server

## Database Information
The SQL file for the database can be found at: ``MVC/bdd/monsite.sql``

Database connection is handled in: ``MVC/controllers/Login.php``
- **phpMyAdmin Credentials**:
  - **Username**: root
  - **Password**: (leave blank)
  - **Server**: MySQL

## Backoffice
- To access the backoffice, click on the copyright symbol © in the footer.
> [!TIP]
> If you hover over the 'Se connecter' button, a tooltip appears displaying the password.
- **Portal Credentials**:
  - **Username**: admin
  - **Password**: password
> [!NOTE]
> If an image is added without specifying a path, the default path will be ``/media``.

## License
This project is licensed under the [MIT License](https://choosealicense.com/licenses/mit/).

## Acknowledgments
Thanks to the collaborators and everyone who supported this student project.
- Laure.M - Technical Assistance

Special thanks to the resources used for illustrations: [unDraw](https://undraw.co/illustrations) (free illustrations).

## Project Status
- **Current State**: Functional, with potential for further development.
- **Future Updates**: No scheduled updates, but enhancements could include user authentication, a commenting system, and admin panel improvements.
