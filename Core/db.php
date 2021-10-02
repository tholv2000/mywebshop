<?php 	
	class db{
		//ham lay tat ca cac ban ghi
		public function get_all($sql, $arr = NULL){
			//lay bien ket noi
			$conn = connection::getInstance();
			//chuan bi truy van
            $query = $conn->prepare($sql);
            //xac dinh kieu duyet phan tu
            $query->setFetchMode(PDO::FETCH_OBJ);
            //thuc thi truy van
            $query->execute($arr);
            //lay toan bo du lieu
            $result = $query->fetchAll();
            return $result;
		}
		//ham lay mot ban ghi
		public function get_one($sql, $arr = NULL){
			//lay bien ket noi
			$conn = connection::getInstance();
			//chuan bi truy van
            $query = $conn->prepare($sql);
            //xac dinh kieu duyet phan tu
            $query->setFetchMode(PDO::FETCH_OBJ);
            //thuc thi truy van
            $query->execute($arr);
            //lay toan bo du lieu
            $result = $query->fetch();
            return $result;
		}
		//ham dem so luong ban ghi
		public function count($sql, $arr = NULL){
			//lay bien ket noi
			$conn = connection::getInstance();
			//chuan bi truy van
            $query = $conn->prepare($sql);
            //xac dinh kieu duyet phan tu
            $query->setFetchMode(PDO::FETCH_OBJ);
            //thuc thi truy van
            $query->execute($arr);
            //lay toan bo du lieu
            $result = $query->rowCount();
            return $result;
		}
	}
 ?>