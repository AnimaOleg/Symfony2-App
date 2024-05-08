<?php
namespace AppBundle;
 
class Task
{
    // descripci�n de la tarea
    protected $task;
 
    // fecha en la que debe estar completada
    protected $dueDate;
 
    public function getTask()
    {
        return $this->task;
    }
    public function setTask($task)
    {
        $this->task = $task;
    }
 
    public function getDueDate()
    {
        return $this->dueDate;
    }
 
    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
    }
}