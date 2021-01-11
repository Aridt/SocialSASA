<?php
class Publicacion{

private $userId;
private $id;
private $title;
private $body;

public function __construct($userId, $id, $title, $body ){
    $this->userId = $userId;
    $this->id = $id;
    $this->title = $title;
    $this->body = $body;
  }


public function getUserId()
{
return $this->userId;
}


public function setUserId($userId)
{
$this->userId = $userId;

return $this;
}


public function getId()
{
return $this->id;
}


public function setId($id)
{
$this->id = $id;

return $this;
}

public function getTitle()
{
return $this->title;
}

public function setTitle($title)
{
$this->title = $title;

return $this;
}

public function getBody()
{
return $this->body;
}


public function setBody($body)
{
$this->body = $body;

return $this;
}
}