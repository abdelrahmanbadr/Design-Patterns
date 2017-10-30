<?php namespace App\Acme;

Interface IObserver{
    public function update(IOperations $operation);
}