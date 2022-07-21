<!DOCTYPE html>
<html>
<head>
	<title>WEB GERALDI</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
		function c(){
			document.kalkulator.tampilan.value="";
		}
		function del(){
			document.kalkulator.tampilan.value+="";
		}
	</script>
</head>
<body>
	<div class="header">
		<h1 style="color: blue;">SELAMAT DATANG</h1>
		<p style="text-shadow: 7px 7px 10px; color: red;"> Web By : Geraldi Jari Assaji</p>
		<p style="text-shadow: 7px 7px 10px; color: red;"> NIM 2100018487</p>
	</div>
	<div class="link">
		<hr>
		<a href="gallery.html">Gallery</a>
		<a href="kalkulato">Kalkulator</a>
		<a href="#">Kalender</a>
	</div>
	<div class="kolom">
		<div class="justifycolumn">
			<div class="about2">
				<img src="./Gambar/uad4.jpg" style="width: 100%; border-radius: 0px 0px 10px 10px;">
			</div>
			<div class="about2">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim quis tortor vel laoreet. Integer id nunc nec felis tempor scelerisque. Morbi nunc lorem, porta bibendum leo at, efficitur fermentum nisl. Suspendisse elementum felis eu risus tincidunt, in malesuada mauris accumsan. Vivamus semper porta varius. Fusce hendrerit eget mi eu scelerisque. Suspendisse ut rhoncus elit. Quisque interdum felis in velit sagittis, id porttitor nisl suscipit. Nunc laoreet orci bibendum, gravida est nec, finibus elit.
				<br><br>
				Proin faucibus lacus non nisl condimentum aliquam. Nulla condimentum augue lorem, sed aliquet neque facilisis in. Duis ligula urna, ornare id sapien vitae, accumsan commodo erat. Curabitur a ante vel ex porttitor tincidunt. Donec pulvinar, arcu quis cursus laoreet, velit erat ornare mauris, sed consequat risus lacus in enim. Quisque et dui sit amet sem finibus placerat sed eu eros. Ut sed maximus dui. Integer nisi purus, mollis porta augue quis, vestibulum condimentum tellus. Ut varius eros id massa ultrices, vitae sagittis elit viverra. Donec mattis sed libero id euismod. Ut interdum ornare est vitae dignissim.</p>
			</div>
			<div class="about2">
				<img src="./Gambar/waifu.png" style="width: 550px; height: 300px;" class="img">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim quis tortor vel laoreet. Integer id nunc nec felis tempor scelerisque. Morbi nunc lorem, porta bibendum leo at, efficitur fermentum nisl. Suspendisse elementum felis eu risus tincidunt, in malesuada mauris accumsan. Vivamus semper porta varius. Fusce hendrerit eget mi eu scelerisque. Suspendisse ut rhoncus elit. Quisque interdum felis in velit sagittis, id porttitor nisl suscipit. Nunc laoreet orci bibendum, gravida est nec, finibus elit.
				<br><br>
				Proin faucibus lacus non nisl condimentum aliquam. Nulla condimentum augue lorem, sed aliquet neque facilisis in. Duis ligula urna, ornare id sapien vitae, accumsan commodo erat. Curabitur a ante vel ex porttitor tincidunt. Donec pulvinar, arcu quis cursus laoreet, velit erat ornare mauris, sed consequat risus lacus in enim. Quisque et dui sit amet sem finibus placerat sed eu eros. Ut sed maximus dui. Integer nisi purus, mollis porta augue quis, vestibulum condimentum tellus. Ut varius eros id massa ultrices, vitae sagittis elit viverra. Donec mattis sed libero id euismod. Ut interdum ornare est vitae dignissim.</p>
			</div>
		</div>
		<div class="leftcolumn">
			<div class="about1">
				<h3 style="text-align: center;">ABOUT ME</h3>
				<img src="./Gambar/sayadanayang.jpg" style="width: 550px; height: 300px;" class="img">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim quis tortor vel laoreet. Integer id nunc nec felis tempor scelerisque. Morbi nunc lorem, porta bibendum leo at, efficitur fermentum nisl. Suspendisse elementum felis eu risus tincidunt, in malesuada mauris accumsan. Vivamus semper porta varius. Fusce hendrerit eget mi eu scelerisque. Suspendisse ut rhoncus elit. Quisque interdum felis in velit sagittis, id porttitor nisl suscipit. Nunc laoreet orci bibendum, gravida est nec, finibus elit.
				<br><br>
				Proin faucibus lacus non nisl condimentum aliquam. Nulla condimentum augue lorem, sed aliquet neque facilisis in. Duis ligula urna, ornare id sapien vitae, accumsan commodo erat. Curabitur a ante vel ex porttitor tincidunt. Donec pulvinar, arcu quis cursus laoreet, velit erat ornare mauris, sed consequat risus lacus in enim. Quisque et dui sit amet sem finibus placerat sed eu eros. Ut sed maximus dui. Integer nisi purus, mollis porta augue quis, vestibulum condimentum tellus. Ut varius eros id massa ultrices, vitae sagittis elit viverra. Donec mattis sed libero id euismod. Ut interdum ornare est vitae dignissim.</p>
			</div>
			<div class="about1">
				<h3 style="text-align: center;">KOMENTAR</h3>
				<?php
				$name = $email = $comment = "";

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
				  $name = test_input($_POST["name"]);
				  $email = test_input($_POST["email"]);
				  $comment = test_input($_POST["comment"]);
				}
				function test_input($data) {
				  $data = trim($data);
				  $data = stripslashes($data);
				  $data = htmlspecialchars($data);
				  return $data;
				}
				?>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<table>
						<tr>
							<td>USERNAME:</td>
							<td><input type="text" name="name"></td>
						</tr>
						<tr>
							<td>EMAIL:</td>
							<td><input type="text" name="email"></td>
						</tr>
						<tr>
							<td>KOMENTAR:</td>
							<td><textarea name="comment" rows="5" cols="40"></textarea></td>
						</tr>
						<tr>
							<td><input type="submit" name="submit" value="Submit"></td>
						</tr>
					</table>  
				</form>
				<?php
					error_reporting(0);
					$fp= fopen("komentar.txt", "a+");
					$name = $_POST['name'];
					$email = $_POST['email'];
					$comment = $_POST['comment'];
					fputs($fp, "$name|$email|$comment\n");
					fclose($fp);
				?>
			</div>
			<div class="about2">
				<?php
				$fp = fopen("komentar.txt","r");
					while ($isi=fgets($fp,80)) {
						$get = explode("|", $isi);
						echo "<tr><td>Username </td><td>: $get[0]</td></tr><br>";
						echo "<tr><td>Email </td><td>: $get[1]</td></tr><br>";
						echo "<tr><td>Komentar </td><td>: $get[2]</td></tr><br><br>";
					}
				?>
			</div>
		</div>
		<div class="kolomkanan">
			<div class="about1" style="text-align: center; font-size: 30px; color: red;">
				<?php
					echo date('d F Y');
				?>
			</div>
			<div class="about1" style="display: flex; justify-content: center; align-items: center;">
			<?php
			$hari	= date("d");
			$bulan	= date ("m");
			$tahun	= date("Y");
			$jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
			?>
			<table style="border:2px solid #1E90FF">
			  <tr>
				  <td><font color="#FF0000">Sunday</font></td>
				  <td>Monday</td>
				  <td>Tuesday</td>
				  <td>Wednesday</td>
				  <td>thursday</td>
				  <td>Friday</td>
				  <td>Saturday</td>
			  </tr>
			  <?php
			$s=date ("w", mktime (0,0,0,$bulan,1,$tahun));
			 
			for ($ds=1;$ds<=$s;$ds++) {
			echo "<td></td>";
			}
			for ($d=1;$d<=$jumlahhari;$d++) {
			 
				if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) {
					echo "<tr>"; 
					}
			$warna="#000000"; 
			 
			if (date("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday") { $warna="#FF0000"; }
			echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>"; 
			if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6) { echo "</tr>"; }
			}
			echo '</table>'; 
			?>	
			</div>
			<div class="about1">
				<div class="container">
					<div style="text-align: left; color: white; font-weight: bold;">
						&ensp;KALKULATOR BY GERAL-KUN
					</div>
					<form name="kalkulator">
						<input type="text" class="tampilan" name="tampilan">
					</form>
					<table>
						<tr>
							<td><input type="button" class="button" value="7" onclick="kalkulator.tampilan.value+='7'"></td>
							<td><input type="button" class="button" value="8" onclick="kalkulator.tampilan.value+='8'"></td>
							<td><input type="button" class="button" value="9" onclick="kalkulator.tampilan.value+='9'"></td>
							<td><input type="button" class="button" value="+" onclick="kalkulator.tampilan.value+='+'"></td>
						</tr>
						<tr>
							<td><input type="button" class="button" value="4" onclick="kalkulator.tampilan.value+='4'"></td>
							<td><input type="button" class="button" value="5" onclick="kalkulator.tampilan.value+='5'"></td>
							<td><input type="button" class="button" value="6" onclick="kalkulator.tampilan.value+='6'"></td>
							<td><input type="button" class="button" value="-" onclick="kalkulator.tampilan.value+='-'"></td>
						</tr>
						<tr>
							<td><input type="button" class="button" value="1" onclick="kalkulator.tampilan.value+='1'"></td>
							<td><input type="button" class="button" value="2" onclick="kalkulator.tampilan.value+='2'"></td>
							<td><input type="button" class="button" value="3" onclick="kalkulator.tampilan.value+='3'"></td>
							<td><input type="button" class="button" value="x" onclick="kalkulator.tampilan.value+='*'"></td>
						</tr>
						<tr>
							<td><input type="button" class="button" value="0" onclick="kalkulator.tampilan.value+='0'"></td>
							<td><input type="button" class="button" value="00" onclick="kalkulator.tampilan.value+='00'"></td>
							<td><input type="button" class="button" value="/" onclick="kalkulator.tampilan.value+='/'"></td>
							<td><input type="button" class="button" value="." onclick="kalkulator.tampilan.value+='.'"></td>
						</tr>
						<tr>
							<td><input type="button" class="button_c" value="C" onclick="c()"></td>
							<td><input type="button" class="button_eval" value="=" onclick="document.kalkulator.tampilan.value=eval(kalkulator.tampilan.value)"></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="about1">
				<h3 style="color: red;">SOSMED</h3>
				<a href="https://www.instagram.com/geraldijari/?hl=id"><img src="./Gambar/ig.jpg" style="width:22px;height:22px;">Instagram</a><br>
				<a href="https://www.facebook.com/geraldi.jari"><img src="./Gambar/fb.png" style="width:22px;height:22px;">Facebook</a><br>
				<a href="https://www.instagram.com/geraldijari/?hl=id"><img src="./Gambar/yt.png" style="width:22px;height:22px;">Youtube</a>
			</div>
		</div>
	</div>
</body>
</html>