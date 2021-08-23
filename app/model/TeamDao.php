<?php

    namespace App\Model;

    class TeamDao {

        public function create(Team $p){
            $sql = 'INSERT INTO pokemon (name, elem_first, elem_second) VALUES (?, ?, ?)';
            $stmt = Connection::getConn()->prepare($sql);
            
            $stmt->bindValue(1, $p->getName());
            $stmt->bindValue(2, $p->getElemFirst());
            $stmt->bindValue(3, $p->getElemSecond());

            $stmt->execute();
        }

        public function read(){
            $sql = 'SELECT * FROM pokemon';

            $stmt = Connection::getConn()->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0):
                $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
            endif;

        }

        public function update(Team $p){

        }

        public function delete($id){

        }
    }

?>
