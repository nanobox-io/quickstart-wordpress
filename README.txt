Quickstart Explanation
----------------------

* Config File: Because Pagoda Box needs a different config file than a local version of the site, we created a new directory in the root of the project called "pagoda" and created a pagoda version of the config file there. Then we created an After Build deploy hook in the Boxfile that moved that file from pagoda/wp-config.php to wp-config.php. Also, in place of the static database credentials, we used the auto-created environment variables.
    after_build:
        - "mv pagoda/wp-config.php wp-config.php"

* Database Component: An empty database was created by adding a db component to the Boxfile.
    db1:
        name: wp-db