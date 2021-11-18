# Small Project Framework (SPF)

Stripped down version of the [HUGE](https://github.com/panique/huge) php framework. It should be used for smaller projects that don't require a database, users or mail capabilities.

It's made to not use composer for dependencies.

## Structure

- Everything in the `public` directory is directly served to the client. The CSS, JS and image files are all available there.
- Everything in the `application` directory is back-end code. Most of it should be PHP files.
  - In the `controller` directory are the controllers that render each page of the website.
  - In the `view` directory are the html components of each pages.

## Deployment on production server

- Change lines 8 and 9 of `application/config/config.php` to:
  ```php
  error_reporting(0);
  ini_set("display_errors", 0);
  ```
- Uncomment lines 9-10 of the `public/.htaccess` file.
- Upload all the files on the server directory. 

## Run with Docker

- Build and run the container
```sh
docker build -t spf .
docker run -ti -p 5001:80 spf:latest
```
- Open your web browser to `http://localhost:5001/`

## To edit a page

Go to `application/view/[name_of_page]/index.php` and edit the HTML and PHP content.

## License

This project uses the MIT license.
