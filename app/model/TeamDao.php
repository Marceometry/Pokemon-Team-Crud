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

        public function readOnce(Team $p){
            $sql = 'SELECT * FROM pokemon WHERE id = ?';

            $stmt = Connection::getConn()->prepare($sql);
            $stmt->bindValue(1, $p->getId());
            $stmt->execute();

            if($stmt->rowCount() > 0):
                $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
            endif;
        }

        public function update(Team $p){
            $sql = 'UPDATE pokemon SET `name` = ?, elem_first = ?, elem_second = ? WHERE id = ?';

            $stmt = Connection::getConn()->prepare($sql);
            $stmt->bindValue(1, $p->getName());
            $stmt->bindValue(2, $p->getElemFirst());
            $stmt->bindValue(3, $p->getElemSecond());
            $stmt->bindValue(4, $p->getId());

            $stmt->execute();
        }

        public function delete($id){
            $sql = 'DELETE FROM pokemon WHERE id = ?';
            
            $stmt = Connection::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }
    }

?>
