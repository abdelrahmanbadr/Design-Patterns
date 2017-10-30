<?php namespace App\Acme;
class UserObserver implements IObserver{

    public function update(Isubject $subject){
        echo  ("new Message : " .$subject->getMessage() ."<br>");

    }
}