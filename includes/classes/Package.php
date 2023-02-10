<?php 
    class Package {
        private $con;
        private $errorArray = array();

        public function __construct($con) {
            $this->con = $con;
        }

        // public static function getPackage($con, $id, $order){
        //     $sql = "SELECT * FROM packages ";
        //     if($id != null){
        //         $sql .= "WHERE idUser=:id ";
        //     }
        //     $sql .= "ORDER BY RAND() LIMIT :limit";
    
        //     $query = $con->prepare($sql);
    
        //     if($categoryId != null) {
        //         $query->bindValue(":categoryId", $categoryId);
        //     }
        //     $query->bindValue(":limit", $limit, PDO::PARAM_INT);
        //     $query->execute();
    
        //     $result = array();
        //     while($row = $query->fetch(PDO::FETCH_ASSOC)){
        //         $result[] = new Entity($con, $row);
        //     }
    
        //     return $result;
    
        // }
    }
?>