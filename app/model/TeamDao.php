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

        }

        public function update(Team $p){

        }

        public function delete($id){

        }
    }

?>
