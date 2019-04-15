<?php
class CommentDAO {
    public static function addComment() {
        
    }
    public static function deleteComment() {
        
    }
    public static function updateComment() {
        
    }
    public static function getListCommentsByProduct($productid) {
        $mysqli = Database::getConnection();
        $query = "select * from comments where cproduct = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("i", $productid);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = null;
        while($row = $result->fetch_assoc()){
            $data[]=$row;
        }
        $mysqli->close();
        return $data;
    }
}
