<?php

include_once "generate.php";
include_once "dancer.php";

class SquareDance
{
    use Generate;
    protected SplQueue $queueMale;
    protected SplQueue $queueFemale;


    public function __construct()
    {
        $this->queueMale = new SplQueue();
        $this->queueFemale = new SplQueue();
    }

    public function getRandomDancer()
    {
        $name = $this->getRandomName();
        $gender = rand(0,10)>5 ? GenderInterface::MALE : GenderInterface::FEMALE;
        $dancer = new dancer($name,$gender);
        return $dancer;

    }

    public function addDance($dance): void
    {
        if ($dance->getGender() === GenderInterface::MALE) {
            $this->queueMale->enqueue($dance);
        } else {
            $this->queueFemale->enqueue($dance);
        }
    }

    public function pairDance(): string
    {
        while (!$this->queueFemale->isEmpty() || !$this->queueMale->isEmpty()) {
            if ($this->queueMale->isEmpty()) {
                return count($this->queueFemale) . ' nữ đang chờ' . '<br>';
            }

            if ($this->queueFemale->isEmpty()) {
                return count($this->queueMale) . ' nam đang chờ' . '<br>';
            }

            echo 'cặp: ' . $this->queueMale->dequeue()->getName() . '-' . $this->queueFemale->dequeue()->getName() . '<br>';
        }
        return "";
    }
}
