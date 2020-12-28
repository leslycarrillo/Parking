<?php 
	const arr = [
		[
			"id" =>"1",
			"anio" =>"2015",
			"marca" =>" Toyota"
		],
		[
			"id" =>"2",
			"anio" =>"2019",
			"marca" =>" Nissan"
		],
		[
			"id" =>"3",
			"anio" =>"2020",
			"marca" =>" Keyton"
		],
		
	];
function index(){
	echo json_encode(arr);	
}
function view($id){
	foreach(arr as $key => $val){
		if($val["id"] == $id){
			return json_encode($val);
		}
	}	
}
if(isset($_GET["id"])){
	echo view($_GET["id"]);
}else{
	index();	
}

?>