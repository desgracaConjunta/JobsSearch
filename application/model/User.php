<?php

class User
{

    private $user_id;
    private $user_name;
    private $user_email;
    
    public function __construct()
    {
        
    }
    
    public function __construct($user_id, $user_name,$user_email){
        $this->$user_id    = $user_id;
        $this->$user_name  = $user_name;
        $this->$user_email = $user_email;
    }
    
    /**
     * @return the $user_id
     */
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * @return the $user_name
     */
    public function getUser_name()
    {
        return $this->user_name;
    }

    /**
     * @return the $user_email
     */
    public function getUser_email()
    {
        return $this->user_email;
    }

    /**
     * @param field_type $user_id
     */
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @param field_type $user_name
     */
    public function setUser_name($user_name)
    {
        $this->user_name = $user_name;
    }

    /**
     * @param field_type $user_email
     */
    public function setUser_email($user_email)
    {
        $this->user_email = $user_email;
    }

    
}

