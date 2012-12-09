Add the Twitter Share button App-Block to AlphaLemon CMS
========================================================

The Twitter Share button App-Block adds the twitter share button on your website.

Installation
------------

You can add the **Twitter Share button App-Block** to the application managed by AlphaLemon 
CMS, adding it to the **composer.json** of your Symfony2 application:

.. code-block:: text

    {
        "name": "alphalemon/alphalemon-cms-sandbox",

        [...]

        "require": {

            [...]        

            "alphalemon/app-twitter-share-button-bundle": "dev-master",        
        }
    }

Be sure that there is declared the reference to **http://apps.alphalemon.com** repository,
under the **repositories** option:

.. code-block:: text

    "repositories": [

        [...]

        {
            "type": "composer",
            "url": "http://apps.alphalemon.com/"
        }
    ],

then run the composer's update command:

.. code-block:: text

    php composer.phar update alphalemon/app-twitter-share-button-bundle

To have the new block available in the AlphaLemon CMS' add blocks menu, you have to 
clear the cache as follows:

.. code-block:: text

    app/console cache:clear --env=alcms

Usage
-----
The block's editor contains a form that requires you to choose the aspect of the button.

While the options are pretty intuitive, you might want to learn more at `twitter`_, choosing
the **Share a link** option.

.. _`twitter`: https://twitter.com/about/resources/buttons

.. note::

    Open Graph require you to specify the **admins** options: you can retrieve this
    information at `facebook`_, in the **Step 2 - Get Open Graph Tags** section.