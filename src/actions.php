<?php

  // asking to save new task
  if (isset($_POST['new_task'])) {

    // no empty messages
    if ($_POST['new_task'] !== '') {

      $action_sql = "
        INSERT INTO task_todo('title')
        VALUES(:xtitle);
      ";

      $statement = $sq->prepare($action_sql);
      $statement->bindValue(':xtitle', $_POST['new_task']);
      $statement->execute();
      $statement->close();
    }
  }

  // --------------------------------------------

  $action_sql = False;
  $xid = False;

  // we have completed a task
  if (isset($_POST['set_done'])) {

    $xid = intval($_POST['set_done']);
    $action_sql = "UPDATE task_todo SET done=1 WHERE id=:xid";

  }

  // we 'undo' a completed task
  if (isset($_POST['set_todo']) and $todo_settings['allow_undo']) {

    $xid = intval($_POST['set_todo']);
    $action_sql = "UPDATE task_todo SET done=0 WHERE id=:xid";

  }

  // we want to delete a completed task
  if (isset($_POST['delete_task'])) {

    $xid = intval($_POST['delete_task']);
    $action_sql = "DELETE FROM task_todo WHERE id=:xid";

  }

  // an action is required...
  if ($action_sql and $xid) {
    $statement = $sq->prepare($action_sql);
    $statement->bindValue(':xid', $xid);
    $statement->execute();
    $statement->close();
  }

  // --------------------------------------------

  $task_list_sql = "
    SELECT * FROM task_todo
    ORDER BY done desc, id asc;
  ";

  // finally get the updated tasks list
  $results = $sq->query($task_list_sql);

?>
