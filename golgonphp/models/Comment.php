<?php

class Comment {
    private $commentid;
    private $comment;
    private $commenttime;
    private $commentuser;
    private $commentproduct;
    /*===================== Chức năng extends từ CommentDAO ================*/
    
    /*===================== Hàm khởi tạo và getters/setters ================*/
    function __construct() {
        $this->commentid = null;
        $this->comment = '';
    }
    
    function getCommentid() {
        return $this->commentid;
    }

    function getComment() {
        return $this->comment;
    }

    function getCommenttime() {
        return $this->commenttime;
    }

    function getCommentuser() {
        return $this->commentuser;
    }

    function getCommentproduct() {
        return $this->commentproduct;
    }

    function setCommentid($commentid) {
        $this->commentid = $commentid;
    }

    function setComment($comment) {
        $this->comment = $comment;
    }

    function setCommenttime($commenttime) {
        $this->commenttime = $commenttime;
    }

    function setCommentuser($commentuser) {
        $this->commentuser = $commentuser;
    }

    function setCommentproduct($commentproduct) {
        $this->commentproduct = $commentproduct;
    }

}