<?php
// Establish database connection
class db
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbname = 'webtechw10';
    public function connect()
    {
        $mysql_connect_str = "mysql:host=$this->host;dbname=$this->dbname";
        $dbConnection = new PDO($mysql_connect_str, $this->user, $this->password);
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConnection;
    }
}


function addNewCollections()
{
	//print_r($_POST);
	//echo '<br>in addNewCar() function';
	//1.connect to mysql
	$con = mysqli_connect("localhost","web2021","web2021","webtechw10");
	if(!$con)
		{
		echo mysqli_connect_error();
		}	
	else
	{
		//echo 'connected<br>';
		//2.construct sql statement
		$kategori=$_POST['kategori'];
		$nama=$_POST['nama'];
		$desc=$_POST['desc'];
		$date=$_POST['date'];
		
		$sql = "insert into collections(kategori,nama,desc,date)
		       values('$kategori','$nama','$desc','$date')";
	    echo $sql;
		//3.run insert query
		if(!mysqli_query($con,$sql))
		{
			//echo mysqli_error($con);
			return mysqli_error($con);
		}
		else
			{
			//echo "Record has been successfully added";
			return "Record has been successfully added";
			}
	}
	
}
	



$db = new db();

$conn->close();
?>
