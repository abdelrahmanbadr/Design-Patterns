<?php namespace App\Acme;

Interface Isubject{
    public function add(IObserver $user);
    public function remove(IObserver $user);
    public function notify();
    public function getMessage();
}