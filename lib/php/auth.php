<?php 


function MYSQLIAuth(){
	return [

	 "localhost", // mysql host
	 "classoutline", //mysql user name
	 "1234567", //mysql user password
	 "tian_class" //mysql database name

		// "localhost", // mysql host
		// "wnm608outline", // mysql username
		// "Wazy0129", // mysql user password
		// "wnm608_outline" // mysql database name

	];
};


function PDOAuth(){
	return [
		"mysql:host=localhost;dbname=tian_class",
		"classoutline", //mysql user name
		"1234567", //mysql user password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]


	];
}


?>