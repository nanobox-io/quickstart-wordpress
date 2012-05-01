Quickstart Explanation
----------------------

The following is an explanation of how this Quickstart was created so you can use it as a guide in creating your own Quickstarts.

* Config File: Because Pagoda Box needs a different config file than a local version of the site, we created a new directory in the root of the project called "pagoda" and created a pagoda version of the config file there. Then we created an After Build deploy hook in the Boxfile that moved that file from pagoda/wp-config.php to wp-config.php. Also, in place of the static database credentials, we used the auto-created environment variables.

<pre>
    <code>
        after_build:
        - "mv pagoda/wp-config.php wp-config.php"


        file: /Boxfile
    </code>
</pre>
    

* Database Component: An empty database was created by adding a db component to the Boxfile.

<pre>
    <code>
        db1:
            name: wp-db


        file: /Boxfile
    </code>
</pre>