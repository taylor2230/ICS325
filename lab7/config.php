<?php


class config
{
    protected $username = "root";
    protected $password;
    protected $site = "localhost";
    protected $database = "site";
    protected $local = true;

    public function __construct()
    {
        if(!$this->local) {
            $this->username = "ics325su2028";
            $this->password = "7223";
            $this->database = "ics325su2028";
        }
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }


}
