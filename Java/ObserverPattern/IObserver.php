<?php namespace App\Acme;

Interface IObserver{
    public function update(Isubject  $operation);
}
