<?php

return [

    /*
     * Define the path to your master view on your "resources/view" folder.
     */

    'template'  => 'store.template',


    /*
     * Define @yield( $content ) area where the forum views will be displayed on your app.
     */

    'content'   => 'content',

    /*
     * Define topics for the forum.
     *
     * Create the key for each topic and assign an array with the name and the icon
     * The icon can be anyone of your prefer css framework like glyphicon or Font Awesome
     * Also you can and the key color, with the value of the representative color of the topic.
     */

'topics' => [
    //'general' => ['name' => 'General', 'icon' => 'glyphicon glyphicon-ok', 'color' => 'rgb(78, 137, 218)'],
    
    'referencias' => ['name' => 'Referencias', 'icon' => 'glyphicon glyphicon-pencil', 'color' => 'rgb(149, 101, 209)'],
    //'general3' => ['name' => 'General 2', 'icon' => 'glyphicon glyphicon-film', 'color' => 'rgb(68, 199, 207)'],
    'sugerencias' => ['name' => 'Sugerencias', 'icon' => 'glyphicon glyphicon-star', 'color' => 'rgb(45, 140, 97)'],
    'dudas' => ['name' => 'Dudas', 'icon' => 'glyphicon glyphicon-user', 'color' => 'rgb(90, 193, 105)'],
],


    /**
     * User settings
     */
    
    'user' => [

        /**
         * Path to your user model.
         */

        'model'         => 'App\User',

        /**
         * Define the field on your table user that the forum will use to display the identify user.
         *
         *  examples:
         *
         *  username
         *  name
         *  full_name
         *  email
         *
         *  etc...
         */

        'username'    => 'name',

        /*
         * If you don't want to use gravatar
         * Place this key to true to use your own avatars.
         */

        'avatar'        => true,

        /**
         * Need avatars on your forum.
         */

        'user-avatar'  => 'avatar',

        /**
         * By default the forum uses gravatar.
         *
         * Set this to false to use your own avatars on the users table
         */

        'gravatar' => true,



        /**
         * Require links to user profile
         */

        'profile' => true,

        /**
         * Route name to user profile.
         * Has to accept one parameter > user ID.
         */

        'profile-route' => 'forum.user.profile',

    ],

    /**
     * User authentication
     */
    'auth' => [

        /**
         * Redirect to the login form.
         */
        'login-url' => 'auth/login'

    ],

    /**
     * Set your own icons of your prefer font
     * By default we use icons from bootstrap
     */
    'icons' => [
        'like'              => 'glyphicon glyphicon-thumbs-up',
        'correct-answer'    => 'glyphicon glyphicon-ok',
    ],

    /**
     * Send an email to the conversation owner each time someone left a reply
     */

    'emails' => [

        'fire' => true,

        /**
         * Set the email from
         */
        'from' => 'robertsilkro@hotmail.com',

        'from-name' => 'Roberto Figuera',

        'subject' => 'My app Forum - you have a new reply on your post'

    ],    

];
