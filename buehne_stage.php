<?php
$bundesliga = simplexml_load_file('bundesliga.xml');

$folder_spaort = array(array());
$k=0;

foreach($bundesliga->team as $team){
	
	$folder_spaort [$k]['trainer'] 			= $team->trainer;
	$folder_spaort [$k]['name']   			= $team->name;
	$folder_spaort [$k]['verein_id']   		= $team["id"];		
	

	echo $folder_spaort [$k]['name']."\t\t\t";
	echo $team = $folder_spaort [$k]['verein_id']."\t\t\t";
	echo $folder_spaort [$k]['trainer']."\n";
	$k++;
}





// require_once('../buchkritik_backend/dbconnect.php');  
// $db       = connection();
// $database ='temp_kulturkritik';
// mysql_select_db($database) or die('Error conecting to db.');
// $sql = ' SELECT ID, titel from kunst';
// $result = mysql_query($sql);
// echo'<ul>';
// while($row = mysql_fetch_assoc($result)){
	
// 	echo'<li><ul>';
// 	echo'<li> OLD_KUNST : '.$row['ID'].'</li>';
// 	echo'<li> TITEL : '.$row['titel'].'</li>';
// 	foreach($folder_kunst as $kunst){
		
// 		if(utf8_decode($kunst['TITEL']) == $row['titel']){
// 			$new_id = $kunst['ID'];
// 			break;
// 		}
// 	}
// 	echo'<li> NEW_KUNST: '.$new_id.'</li>';
// 	echo'</ul></li>';
// 	// $sql_insert = 'insert into tmp_kunst_newkunst (OLD_ID,  TITEL ,NEW_ID) VALUES ("'.$row['ID'].'","'.$row['titel'].'","'.$new_id.'")';
// 	// mysql_query($sql_insert);
// }
// echo'</ul>';
?>