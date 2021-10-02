<?php
	trait contact{
		public function get_information(){
			$name = $_POST["customerName"];
			$email = $_POST["customerEmail"];
			$subject = $_POST["contactSubject"];
			$message = $_POST["contactMessage"];
			$conn = connection::getInstance();
			$query = $conn->prepare("insert into tbl_message set name=:name,email=:email,subject=:subject,message=:message,date=now()");
			$query->execute(array("name"=>$name,"email"=>$email,"subject"=>$subject,"message"=>$message));
		}
	}
 ?>