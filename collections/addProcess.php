<?php
include "facility.php";

if(isset ($_POST['addC'])){
	
	//$msg=addNewFacility();
	header( "refresh:1; url=collectionList.php?msg=".$msg);

}else if(isset($_POST['deleteFacilityButton'])){
	//print_r($_POST);
	//$msg=deleteFacility();
	header( "refresh:1; url=facilityList.php?msg=".$msg);

}else if(isset($_POST['SaveFacilityButton'])){

	print_r($_POST);
	//$msg=UpdateFacilityInformation();
	header( "refresh:1; url=facilityList.php?msg=".$msg);
}
else if(isset($_POST['back'])){

	header("Location:collectionList.php");
}
?>
