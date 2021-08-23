<?php

    namespace App\Model;

    class Team {
        private $id, $name, $elem_first, $elem_second;

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }
        
        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function getElemFirst() {
            return $this->elem_first;
        }

        public function setElemFirst($elem_first) {
            $this->elem_first = $elem_first;
        }

        public function getElemSecond() {
            return $this->elem_second;
        }

        public function setElemSecond($elem_second) {
            $this->elem_second = $elem_second;
        }
    }

?>