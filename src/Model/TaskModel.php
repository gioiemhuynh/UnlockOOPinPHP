<?php

namespace Tlait\Unlock_OPPinPHP\Model;

class TaskModel
{
    /**
     * @var : define properties
     */
    protected $id;
    protected $name;
    protected $time;
    protected $description;

    /**
     * @param $id
     * @param $name
     * @param $time
     * @param $description
     */
    public function __construct($id, $name, $time, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->time = $time;
        $this->description = $description;
    }


}
