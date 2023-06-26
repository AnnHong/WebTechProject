<!DOCTYPE html>
<html>
<head>
  <title>Collection List </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;

}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}

#design1,#design5{
  background-color: blue;
  border-color: black;
  color: white;
  padding: 12px 24px;
  text-decoration: none;
  margin: 2px 2px;
  cursor: pointer;
}

#design2,#design3{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 12px 24px;
  text-decoration: none;
  margin: 2px 2px;
  cursor: pointer;
}

#design4{
 background-color: red;
  border: none;
  color: white;
  padding: 12px 24px;
  text-decoration: none;
  margin: 2px 2px;
  cursor: pointer;
}


</style>
</head>
<body>
<div class="w3-container">
	<div><h1>List of Collections.</h1></div>
<form action="AddNewCollection.php" methos="POST">
	<input type="submit" value="Add new collection" id="design1">
</form>
<br>

<?php
include "addFunction.php";
// displaySearchOption();

// 	if(isSet($_POST['searchByKemudahanButton']))
// 		//echo 'serach by brand';
// 		$qryFacilityList = searchByKemudahan();

// 	else if (isset($_POST['searchByKapasitiButton']))
// 		$qryFacilityList = searchByKapasiti();
// 	else 
 		$qryCollectionList = getListOfCollection();

echo "<br>There are ". mysqli_num_rows($qryCollectionList). " collection record" ;
	echo '<table  id="customers">';
			echo '<tr>
						<th>No</th>
						<th>Category</th>
						<th>Name</th>
						<th>Description</th>
						<th>Date</th>		
						<th>Picture</th>	
						<th>Delete Collection</th>
						<th>Update</th>
				</tr>';
			
			while($row = mysqli_fetch_assoc($qryCollectionList))
				{
				 	echo '<tr>';
					echo'<td>'.$row['id'].'</td>';
					echo '<td>'.$row['kategori'].'</td>';
					echo '<td>'.$row['nama'].'</td>';
					echo '<td>'.$row['desc'].'</td>';
					
					echo '<td style="text-align:center;">'.$row['date'].' </td>';
						
						  
					echo '<td>'."<img src='./images/'".$row['gambar']."'>'".'</td>';
						
					$idSelected=$row['id'];
					echo '<td style="text-align:center;"><form action=".php" method="POST">';
						echo '<input type="hidden" name="idToDelete" 
							value="'.$idSelected.'" >';

						echo '<input type="submit" value="Delete" 
						name="deleteButton" id="design4">';
					echo '</form>';
					
					echo '<td style="text-align:center;"><form action=".php" method="POST">';
						echo '<input type="hidden" name="idToUpdate" 
							value="'.$idSelected.'" >';

						echo '<input type="submit" value="Update" 
						name="UpdateFacilityButton" id="design5">';

					echo '</form></td>';
					//echo '<td>'.$row['regDate'].'</td>';
					 
				 echo '</tr>';
				 
				}
	echo '</table></div>
<br><form action="addProcess.php" method="POST">
		<button type="submit" name="backBtn" id=design5>Back</button></form>';


?>

<?php
?>
</div>
</body>
</html>