   $data = array (
       "0" => array (
  		"nama" => "Pelita",
  		"kelas" => "Laravel",
  		"alamat" => "Bandung",
  		"tanggal_lahir" => "1997-12-27",
  		"nilai" => 90
       ),
  	"1" => array (
  		"nama" => "Najmina",
  		"kelas" => "Vue JS",
  		"alamat" => "Jakarta",
  		"tanggal_lahir" => "1998-10-07",
  		"nilai" => 55
      ),
      "2" => array (
  		"nama" => "Anita",
  		"kelas" => "Design",
  		"alamat" => "Semarang",
  		"tanggal_lahir" => "1999-08-20",
  		"nilai" => 80
      ),
  	"3" => array (
  		"nama" => "Bayu",
  		"kelas" => "Digital Marketing",
  		"alamat" => "Bandung",
  		"tanggal_lahir" => "1990-01-01",
  		"nilai" => 65
  	),
  	"4" => array (
  		"nama" => "Nasa",
  		"kelas" => "UI/UX Designer",
  		"alamat" => "Bandung",
  		"tanggal_lahir" => "1995-04-10",
  		"nilai" => 70
  	),
  	"5" => array(
  		"nama" => "Rahma",
  		"kelas" => "Node JS",
  		"alamat" => "Yogyakarta",
  		"tanggal_lahir" => "1993-09-15",
  		"nilai" => 85
  	)
      );
      $json = json_encode($data);
      echo $json;
 $json = '[
 	{
 		"nama" : "Pelita",
 		"kelas" : "Laravel",
 		"alamat" : "Bandung",
 		"tanggal_lahir" : "1997-12-27",
 		"nilai" : 90
 	},
 	{
 		"nama" : "Najmina",
 		"kelas" : "Vue JS",
 		"alamat" : "Jakarta",
 		"tanggal_lahir" : "1998-10-07",
 		"nilai" : 55
 	},
 	{
 		"nama" : "Anita",
 		"kelas" : "Design",
 		"alamat" : "Semarang",
 		"tanggal_lahir" : "1999-08-20",
 		"nilai" : 80
 	},
 	{
 		"nama" : "Bayu",
 		"kelas" : "Digital Marketing",
 		"alamat" : "Bandung",
 		"tanggal_lahir" : "1990-01-01",
 		"nilai" : 65
 	},
 	{
 		"nama" : "Nasa",
 		"kelas" : "UI/UX Designer",
 		"alamat" : "Bandung",
 		"tanggal_lahir" : "1995-04-10",
 		"nilai" : 70
 	},
 	{
 		"nama" : "Rahma",
 		"kelas" : "Node JS",
 		"alamat" : "Yogyakarta",
 		"tanggal_lahir" : "1993-09-15",
 		"nilai" : 85
 	}
 ]';
 $data = json_decode($json, true);
     print_r($data);