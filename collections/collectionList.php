<!DOCTYPE html>
<html>
<head>
  <title>FACILITY LIST </title>
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
	<div><h1>List of Facility for Rental.</h1></div>
<form action="a.php" methos="POST">
	<input type="submit" value="Add new facility" id="design1">
</form>
<br>

<?php
include "";
// displaySearchOption();

// 	if(isSet($_POST['searchByKemudahanButton']))
// 		//echo 'serach by brand';
// 		$qryFacilityList = searchByKemudahan();

// 	else if (isset($_POST['searchByKapasitiButton']))
// 		$qryFacilityList = searchByKapasiti();
// 	else 
// 		$qryFacilityList = getListOfFacility();

echo "<br>There are ". mysqli_num_rows($qryFacilityList). " facility record" ;
	echo '<table  id="customers">';
			echo '<tr>
						<th>No</th>
						<th>ID No</th>
						<th>Facility</th>
						<th>Kapasiti(orang)</th>
						<th>Kemudahan</th>
						<th>Kadar Sewa(RM)</th>				
						<th>Delete Facility</th>
						<th>Update</th>
				</tr>';
			$count=1;
			while($row = mysqli_fetch_assoc($qryFacilityList))
				{
				 echo '<tr>';
					echo'<td>'.$count.'</td>';
					echo '<td>'.$row['id'].'</td>';
					echo '<td>'.$row['ruang'].'</td>';
					echo '<td>'.$row['kapasiti'].'</td>';
					echo '<td>'.$row['kemudahan'].'</td>';
					echo '<td style="text-align:center;">'.$row['kadarSewaHour'].' Sejam
						<br>'.$row['kadarSewaHalfDay'].' 1/2 Hari
						<br>'.$row['kadarSewaOneDay'].' Sehari <br>
						</td>';
					

					$idSelected=$row['id'];

					echo '<td style="text-align:center;"><form action="processFacility.php" method="POST">';
						echo '<input type="hidden" name="idToDelete" 
							value="'.$idSelected.'" >';

						echo '<input type="submit" value="Delete" 
						name="deleteFacilityButton" id="design4">';
					echo '</form>';
					
					echo '<td style="text-align:center;"><form action="UpdateFacilityForm.php" method="POST">';
						echo '<input type="hidden" name="idToUpdate" 
							value="'.$idSelected.'" >';

						echo '<input type="submit" value="Update" 
						name="UpdateFacilityButton" id="design5">';

					echo '</form></td>';
					//echo '<td>'.$row['regDate'].'</td>';
					 
				 echo '</tr>';
				 $count++;
				}
	echo '</table></div>
<br><form action="processCustomer.php" method="POST">
		<button type="submit" name="backBtn" id=design5>Back</button></form>';


?>

<?php
function displaySearchOption()
{
	echo '<form action="" method="POST">';

		echo '<fieldset style="border-color:blue;"><legend >Search Option</legend>';
			echo '<input type="text" name="searchKey" 
				placeholder="Enter search value:">';

			echo '<br><br><input type="submit" value="Search By Kapasiti"
					name="searchByKapasitiButton" id="design2">';

echo '<input type="submit" value="Search By Kemudahan"
					name="searchByKemudahanButton" id="design3">';

			echo '<br><br><input type="submit" value="Display All"
					name="displayAllButton">';

			
					
		echo '</fieldset>';
	echo '</form><br>';
	
}
?>
</div>
</body>
</html>