![index](https://github.com/user-attachments/assets/12bc55c8-4228-4163-a02e-1e07b0b4e159)
# MVC Blog Project

## Description
This project is a student exercise to build a blog using the MVC (Model-View-Controller) architecture. The blog is designed as a simple, functional web application that demonstrates the MVC pattern. The project is hosted locally.

## Project Status
- **Current State**: Functional, with potential for further development.
- **Planned Updates**: No scheduled updates, but enhancements could include user authentication, a commenting system, and admin panel improvements.

## Update
- **27/07/2022**: 1.0 Release
- **29/07/2024**: Fixed errors leading to a blank screen and changed the database name.
- **01/11/2024**: Rework of the ``README.md`` and adding a ``LICENSE.md``

## Features
- **Responsive Design**: Utilized Bootstrap 5 for responsiveness across devices.
- **MVC Architecture**: Organized code into Models, Views, and Controllers.
- **Basic Blog Functionality**: Users can read blog posts, and administrators can manage posts via the backoffice.

## Technologies Used
- **Frontend**: HTML, CSS, Bootstrap 5, jQuery 3.6.0
- **Backend**: PHP
- **Database**: MySQL (managed via phpMyAdmin 5.0.2)
- **Local Server**: WAMP Server

## Installation
1. **Download or clone the repository**

2. **Setup Database**
- Open **phpMyAdmin** and create a new database (e.g., ``mvc_blog``).
- Import the SQL file found at ``MVC/bdd/monsite.sql`` to set up tables and data.

3. **Update Database Connection**
- In ``MVC/controllers/Login.php``, make sure the database settings match yours:
  - **Host**: ``localhost``
  - **Database Name**: ``mvc_blog``
  - **User**: ``root``
  - **Password**: (leave blank unless specified)

4. **Start the Server**
- Run **WAMP** (or any local server that supports PHP/MySQL).
- Open ``http://localhost/project-folder/`` in your browser to view the site.

## Project Structure
``/media``: Root directory for images used on the site

``/icon``: Illustrations used throughout the site

``/articles``: Views of the articles

``/backoffice``: Complete backoffice for managing content

``/images``: View for the carousel

``/layout``: Homepage layout

``/main``: Page selection display

## Backoffice
- To access the backoffice, click on the copyright symbol © in the footer.
- **Portal Credentials**:
  - **Username**: admin
  - **Password**: password
> [!TIP]
> If you hover over the 'Se connecter' button, a tooltip appears displaying the password.


> [!NOTE]
> If an image is added without specifying a path, the default path will be ``/media``.

## Acknowledgments
Thanks to the collaborators and everyone who supported this student project.
- Laure.M - Technical Assistance

Thanks to [unDraw](https://undraw.co/illustrations) for providing free illustrations used in this project.
