<html>
<head>
	<title>Aplikasi Menentukan Skor</title>
</head>
<body>
<h1>Skor Murid</h1>
<form method="post">
  <label for="nama1">Siswa Ke-1 :</label>
  <input type="text" id="fname1" name="fname1" value="<?php echo isset($_POST['fname1']) ? $_POST['fname1'] : '' ?>">
  <label for="lname">Nilai :</label>
  <input type="number" id="nilai1" name="nilai1" value="<?php echo isset($_POST['nilai1']) ? $_POST['nilai1'] : '' ?>">
  <label for="skor1">Skor :</label>
  <label>
  	<?php if ($_POST) {
    $nilai1 = $_POST['nilai1'];
    if($nilai1 == "")
    {
    	$skor1 = "";
    }elseif($nilai1 < 0)
    {
    	$skor1 = "Nilai tidak boleh negatif";
    }
    elseif($nilai1 < 40)
    {
    	$skor1 = "D";
    }elseif($nilai1 <= 59)
    {
    	$skor1 = "C";
    }elseif($nilai1 <= 79)
    {
    	$skor1 = "B";
    }elseif($nilai1 <= 100)
    {
    	$skor1 = "A";
    }else
    {
    	$skor1 = "Nilai tidak boleh lebih dari 100";
    }
    echo ($skor1);
	}; ?>	
	</label><br><br>
	<label for="nama2">Siswa Ke-2 :</label>
  <input type="text" id="fname2" name="fname2" value="<?php echo isset($_POST['fname2']) ? $_POST['fname2'] : '' ?>">
  <label for="lname">Nilai :</label>
  <input type="number" id="nilai2" name="nilai2" value="<?php echo isset($_POST['nilai2']) ? $_POST['nilai2'] : '' ?>">
  <label for="skor2">Skor :</label>
  <label>
  	<?php if ($_POST) {
    $nilai2 = $_POST['nilai2'];
    if($nilai2 == "")
    {
    	$skor2 = "";
    }elseif($nilai1 < 0)
    {
    	$skor1 = "Nilai tidak boleh negatif";
    }
    elseif($nilai2 < 40)
    {
    	$skor2 = "D";
    }elseif($nilai2 <= 59)
    {
    	$skor2 = "C";
    }elseif($nilai2 <= 79)
    {
    	$skor2 = "B";
    }elseif($nilai2 <= 100)
    {
    	$skor2 = "A";
    }else
    {
    	$skor2 = "Nilai tidak boleh lebih dari 100";
    }
    echo ($skor2);
	}; ?>	
	</label><br><br>
  <label for="nama3">Siswa Ke-3 :</label>
  <input type="text" id="fname3" name="fname3" value="<?php echo isset($_POST['fname3']) ? $_POST['fname3'] : '' ?>">
  <label for="lname">Nilai :</label>
  <input type="number" id="nilai3" name="nilai3" value="<?php echo isset($_POST['nilai3']) ? $_POST['nilai3'] : '' ?>">
  <label for="skor3">Skor :</label>
  <label>
  	<?php if ($_POST) {
    $nilai3 = $_POST['nilai3'];
    if($nilai3 == "")
    {
    	$skor3 = "";
    }elseif($nilai1 < 0)
    {
    	$skor1 = "Nilai tidak boleh negatif";
    }
    elseif($nilai3 < 40)
    {
    	$skor3 = "D";
    }elseif($nilai3 <= 59)
    {
    	$skor3 = "C";
    }elseif($nilai3 <= 79)
    {
    	$skor3 = "B";
    }elseif($nilai3 <= 100)
    {
    	$skor3 = "A";
    }else
    {
    	$skor3 = "Nilai tidak boleh lebih dari 100";
    }
    echo ($skor3);
	}; ?>	
	</label><br><br>
	<label for="nama4">Siswa Ke-4 :</label>
  <input type="text" id="fname4" name="fname4" value="<?php echo isset($_POST['fname4']) ? $_POST['fname4'] : '' ?>">
  <label for="lname">Nilai :</label>
  <input type="number" id="nilai4" name="nilai4" value="<?php echo isset($_POST['nilai4']) ? $_POST['nilai4'] : '' ?>">
  <label for="skor4">Skor :</label>
  <label>
  	<?php if ($_POST) {
    $nilai4 = $_POST['nilai4'];
    if($nilai4 == "")
    {
    	$skor4 = "";
    }elseif($nilai1 < 0)
    {
    	$skor1 = "Nilai tidak boleh negatif";
    }
    elseif($nilai4 < 40)
    {
    	$skor4 = "D";
    }elseif($nilai4 <= 59)
    {
    	$skor4 = "C";
    }elseif($nilai4 <= 79)
    {
    	$skor4 = "B";
    }elseif($nilai4 <= 100)
    {
    	$skor4 = "A";
    }else
    {
    	$skor4 = "Nilai tidak boleh lebih dari 100";
    }
    echo ($skor4);
	}; ?>	
	</label><br><br>
	<label for="nama5">Siswa Ke-5 :</label>
  <input type="text" id="fname5" name="fname5" value="<?php echo isset($_POST['fname5']) ? $_POST['fname5'] : '' ?>">
  <label for="lname">Nilai :</label>
  <input type="number" id="nilai5" name="nilai5" value="<?php echo isset($_POST['nilai5']) ? $_POST['nilai5'] : '' ?>">
  <label for="skor5">Skor :</label>
  <label>
  	<?php if ($_POST) {
    $nilai5 = $_POST['nilai5'];
    if($nilai5 == "")
    {
    	$skor5 = "";
    }elseif($nilai1 < 0)
    {
    	$skor1 = "Nilai tidak boleh negatif";
    }
    elseif($nilai5 < 40)
    {
    	$skor5 = "D";
    }elseif($nilai5 <= 59)
    {
    	$skor5 = "C";
    }elseif($nilai5 <= 79)
    {
    	$skor5 = "B";
    }elseif($nilai5 <= 100)
    {
    	$skor5 = "A";
    }else
    {
    	$skor5 = "Nilai tidak boleh lebih dari 100";
    }
    echo ($skor5);
	}; ?>	
	</label><br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>