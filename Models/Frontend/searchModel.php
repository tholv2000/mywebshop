<?php 
	trait search{
		function search_execute($key){
			$conn = connection::getInstance();
			$query = $conn ->prepare("select * from tbl_product where name like '%$key%' or category_name like '%$key%' ");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}
		function total($key){
			$conn = connection::getInstance();
			$query = $conn ->prepare("select * from tbl_product where name like '%$key%' or  category_name like '%$key%'  ");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			$count = 0;
			foreach($result as $rows){
				$count=$count+1;
			}
			return $count;
		}
	}
 ?>