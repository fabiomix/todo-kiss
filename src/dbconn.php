<?php

  // for PHP SQLite3 class methods, see...
  // https://www.php.net/manual/en/class.sqlite3.php

  // try to open database
  $sq = new SQLite3($todo_settings['database_file']);

  // https://stackoverflow.com/a/11589902
  $table_exist_sql = "
    SELECT count(*) as count FROM sqlite_master
    WHERE type='table' AND name='task_todo';
  ";

  $init_table_sql = "
    CREATE TABLE task_todo (
      id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
      done BOOLEAN DEFAULT 0,
      title VARCHAR(255),
      create_date DATETIME DEFAULT CURRENT_TIMESTAMP
    );
  ";

  // check if database is initialized
  $database_created = False;
  $table_exist_result = $sq->querySingle($table_exist_sql);

  // eventually, inizialize it now!
  if ($table_exist_result == 0) {
    $sq->exec($init_table_sql);
    $database_created = True;
  }

?>
