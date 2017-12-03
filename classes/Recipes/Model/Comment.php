<?php

namespace Recipes\Model;

/**
 * Description of Comment
 *
 * @author Coyote
 */
class Comment {
    
    var $page;
    var $user;
    var $comment;
    var $timestamp;
    var $dateAndTime;
    
    public function __construct(string $pagename, string $author, string $comment) {
        date_default_timezone_set("Europe/Stockholm");
        $this->comment = $comment;
        $this->page = $pagename;
        $this->user = $author;
        $this->timestamp = time();
        $this->dateAndTime = date("Y/m/d/ H:i:s");
    }
    
    public function getCommenttext() {
        return $this->comment;
    }
    
    public function getPageName() {
        return $this->page;
    }
    
    public function getAuthor() {
        return $this->user;
    }
    
    public function getTimestamp() {
        return $this->timestamp;
    }
    
    public function getDateAndTime() {
        return $this->dateAndTime;
    }
    
    public function setDateAndTimestamp(string $dateAndTime, string $timestamp) {
        $this->dateAndTime = $dateAndTime;
        $this->timestamp = $timestamp;
    }
}
