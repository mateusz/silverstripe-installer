<?php

global $project;
$project = 'mysite';

global $database;
$database = 'SS_coredev31';

require_once('conf/ConfigureFromEnv.php');

// Set the site locale
i18n::set_locale('en_US');