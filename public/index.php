<?php

use app\Classes\DeadlineTask;
use app\Classes\TaggedDeadlineTask;

include 'autoloader.php';

$task1 = new TaggedDeadlineTask("Task 1", "This is a task type of TaggedDeadlineTask", "2020-01-01", "2020-01-02");


$task1->addTag('Frontend');
$task1->addTag('Backend');

$task1->addAssignee('John');
$task1->addAssignee('Rakib');

$task1->markAsCompleted();


$task2 = new DeadlineTask("Task 2", "This is a task type of DeadlineTask", "2020-01-01", "2020-01-02");

$task2->addAssignee('mehedi');
$task2->addAssignee('joye');



$tasks = [$task1, $task2];


foreach ($tasks as $task) {
	echo 'Title:'. $task->getTitle() . PHP_EOL;
	echo 'Description:'. $task->getDescription() . PHP_EOL;
	echo 'Priority:'. $task->getPriority() . PHP_EOL;
	echo 'Completed:'. ($task->getCompleted() ? 'Yes' : 'No') . PHP_EOL;
	echo 'Due Date:'. $task->getDueDate() . PHP_EOL;
	echo 'Start Date:'. $task->getStartDate() . PHP_EOL;

	if($task instanceof TaggedDeadlineTask){
		echo 'Tags: '. implode(', ', $task->getTags()) . PHP_EOL;
	}

	echo 'Assignees: '. implode(', ', $task->getAssignees()) . PHP_EOL;

	echo PHP_EOL;
}






?>