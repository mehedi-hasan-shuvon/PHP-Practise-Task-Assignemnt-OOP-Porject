<?php

namespace app\Classes;

use app\Classes\Task;
use app\Traits\HasAssigneeTrait;
use app\Interfaces\HasDueDateInterface;
use app\Interfaces\HasStartDateInterface;

class DeadlineTask extends Task implements HasDueDateInterface, HasStartDateInterface {


	use HasAssigneeTrait;
    protected $startDate;
    protected $dueDate;

    //Methods

    public function __construct( $title, $description, $startDate, $dueDate ) {
        parent::__construct( $title, $description );
        $this->startDate = $startDate;
        $this->dueDate = $dueDate;
    }

    public function getPriority() {
        return "Low";
    }

	public function markAsCompleted(){
		$this->completed = true;
	}

    //Getters
    public function getStartDate() {
        return $this->startDate;
    }

    public function getDueDate() {
        return $this->dueDate;
    }

}

?>