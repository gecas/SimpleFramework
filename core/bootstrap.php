<?php

App::bind('config', require('config/database.php'));

// App::bind('database', new QueryBuilder(
// 	Connection::make(App::get('config')['database'])
// ));