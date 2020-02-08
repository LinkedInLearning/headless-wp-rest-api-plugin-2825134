<?php
/**
 * Register a new "Task Logger" role and grant capabilities for various roles.
 *
 * Called from taskbook.php.
 * 
 * @package  Taskbook
 * @link     https://developer.wordpress.org/plugins/users/roles-and-capabilities/
 */

function taskbook_register_role() {
    add_role( 'task_logger', 'Task Logger' );
}

function taskbook_remove_role() {
    remove_role( 'task_logger' );
}