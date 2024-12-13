<?php

class Comment
{
    private $id;
    private $commentText;
    private $userId;

    public function __construct($commentText, $userId)
    {
        $this->commentText = $commentText;
        $this->userId = $userId;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }
        

    public function getCommentText()
    {
        return $this->commentText;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

}