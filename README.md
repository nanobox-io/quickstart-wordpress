Quickstart Explanation
----------------------

The following is an explanation of how this Quickstart was created so you can use it as a guide in creating your own Quickstarts.

* Config File: Because Pagoda Box needs a different config file than a local version of the site, we created a new directory in the root of the project called "pagoda" and created a pagoda version of the config file there. Then we created an After Build deploy hook in the Boxfile that moved that file from pagoda/wp-config.php to wp-config.php. Also, in place of the static database credentials, we used the auto-created environment variables.

<pre>
    <code>
        after_build:
        - "mv pagoda/wp-config.php wp-config.php"
    </code>
</pre>  

* Boxfile.install: Because we made the full wp-content folder writable, we need to copy these files to the writable store folder before the deploy. We only need to do this the first time when you run the setup of this Quickstart. If you need to update this plugins, you cna always do this from the wp-adin interface.

<pre>
    <code>
		  before_deploy:
		    - "cp -R pagoda/wp-content/* wp-content/"
    </code>
</pre>  

* Database Component: An empty database was created by adding a db component to the Boxfile.

<pre>
    <code>
        db1:
            name: wp-db
            type: mysql
    </code>
</pre>