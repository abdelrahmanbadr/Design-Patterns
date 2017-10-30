<?php namespace App\Acme;

 class PostOffice implements Isubject{
    private $message ;
    private $observers = array();
    function __construct($message) {
        $this->message = $message;
    }

    public function add(IUsers $user)
    {
        $this->observers[] = $user;
    }
    public function remove(IUsers $user)
    {
        $key = array_search($user, $this->observers);
        unset($this->observers[$key]);
    }
    public function notify()
    {
        foreach($this->observers as $obs) {
            $obs->update($this);
        }
    }
     public function getMessage(){
        return $this->message;
     }
     public function setMessage($msg){
          $this->message=$msg;
     }

}