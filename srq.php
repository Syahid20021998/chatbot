<!DOCTYPE html>
<?php
	//menampung nilai komponen ke dalam variabel
	session_start();
	session_destroy();

	$tanya1 = @$_POST['tanya1'];
	$tanya2 = @$_POST['tanya2'];
	$tanya3 = @$_POST['tanya3'];
	$tanya4 = @$_POST['tanya4'];
	$tanya5 = @$_POST['tanya5'];
	$tanya6 = @$_POST['tanya6'];
	$tanya7 = @$_POST['tanya7'];
	$tanya8 = @$_POST['tanya8'];
	$tanya9 = @$_POST['tanya9'];
	$tanya10 = @$_POST['tanya10'];
	$tanya11 = @$_POST['tanya11'];
	$tanya12 = @$_POST['tanya12'];
	$tanya13 = @$_POST['tanya13'];
	$tanya14 = @$_POST['tanya14'];
	$tanya15 = @$_POST['tanya15'];
	$tanya16 = @$_POST['tanya16'];
	$tanya17 = @$_POST['tanya17'];
	$tanya18 = @$_POST['tanya18'];
	$tanya19 = @$_POST['tanya19'];
	$tanya20 = @$_POST['tanya20'];
	$submit = @$_POST['submit'];
	$tampung = @$_POST['tampung'];
	$hasil = @$_POST['hasil'];
	$temp = @$_POST['temp'];	
?>
<html>
<head>
	<title>SRQ-20</title>
</head>
<body>

<form method="post" name="form1" id="form1">
	<table align="center">
		<tr>
			<td colspan="3" bgcolor="#33CCFF" align="center"><b>SRQ-20</b> </td>
		</tr>
		<tr>
			<td colspan="3"> <hr> </td>
		</tr>
		<tr>
			<td colspan="3" bgcolor="#DCDCDC" align="center"> Sebelum memulai konsultasi, silahkan jawab pertanyaan Self-Reporting Questionnare (SRQ-20) berikut!</td>
		</tr>
		<tr>
			<td colspan="3"> <hr> </td>
		</tr>
		
		<tr>
			<td>1. Apakah anda sering merasa sakit kepala?		
			<br>			
				<input type="radio" name="tanya1" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya1 =="Ya")?  : "") ?>  > Ya

				<input type="radio" name="tanya1" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya1 =="Tidak")?  : "") ?> > Tidak
			</td>			
		</tr>
		
		<tr>
			<td>2. Apakah anda kehilangan nafsu makan?		
			<br>			
				<input type="radio" name="tanya2" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya2 =="Ya")?  : "") ?>  > Ya

				<input type="radio" name="tanya2" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya2 =="Tidak")? : "") ?> > Tidak
			</td>			
		</tr>
		<tr>
			<td> 3. Apakah tidur anda tidak nyenyak?		
			<br>			
				<input type="radio" name="tanya3" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya3 =="Ya")?  : "") ?>  > Ya

				<input type="radio" name="tanya3" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya3 =="Tidak")?  : "") ?> > Tidak
			</td>			
		</tr>
		<tr>
			<td> 4. Apakah anda mudah merasa takut?		
			<br>			
				<input type="radio" name="tanya4" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya4 =="Ya")? : "") ?>  > Ya

				<input type="radio" name="tanya4" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya4 =="Tidak")? : "") ?> > Tidak
			</td>			
		</tr>
		<tr>
			<td> 5. Apakah anda merasa cemas, tegang, atau khawatir?		
			<br>			
				<input type="radio" name="tanya5" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya5 =="Ya")? : "") ?>  > Ya

				<input type="radio" name="tanya5" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya5 =="Tidak")?  : "") ?> > Tidak
			</td>			
		</tr>
		<tr>
			<td> 6. Apakah tangan anda gemetar?		
			<br>			
				<input type="radio" name="tanya6" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya6 =="Ya")?  : "") ?>  > Ya

				<input type="radio" name="tanya6" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya6 =="Tidak")?  : "") ?> > Tidak
			</td>			
		</tr>
		<tr>
			<td> 7. Apakah anda mengalami gangguan pencernaan?		
			<br>			
				<input type="radio" name="tanya7" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya7 =="Ya")?  : "") ?>  > Ya

				<input type="radio" name="tanya7" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya7 =="Tidak")?  : "") ?> > Tidak
			</td>			
		</tr>
		<tr>
			<td> 8. Apakah anda merasa sulit berpikir jernih?		
			<br>			
				<input type="radio" name="tanya8" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya8 =="Ya")?  : "") ?>  > Ya

				<input type="radio" name="tanya8" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya8 =="Tidak")?  : "") ?> > Tidak
			</td>			
		</tr>
		<tr>
			<td>  9. Apakah anda merasa tidak bahagia?		
			<br>			
				<input type="radio" name="tanya9" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya9 =="Ya")?  : "") ?>  > Ya

				<input type="radio" name="tanya9" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya9 =="Tidak")?  : "") ?> > Tidak
			</td>			
		</tr>
		<tr>
			<td>  10. Apakah anda lebih sering menangis?		
			<br>			
				<input type="radio" name="tanya10" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya10 =="Ya")?  : "") ?>  > Ya

				<input type="radio" name="tanya10" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya10 =="Tidak")? : "") ?> > Tidak
			</td>			
		</tr>
		<tr>
			<td>  11. Apakah anda sulit menikmati aktivitas sehari-hari?		
			<br>			
				<input type="radio" name="tanya11" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya11 =="Ya")?  : "") ?>  > Ya

				<input type="radio" name="tanya11" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya11 =="Tidak")?  : "") ?> > Tidak
			</td>			
		</tr>
		<tr>
			<td>  12. Apakah anda mengalami kesulitan untuk mengambil keputusan?		
			<br>			
				<input type="radio" name="tanya12" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya12 =="Ya")?  : "") ?>  > Ya

				<input type="radio" name="tanya12" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya12 =="Tidak")?  : "") ?> > Tidak
			</td>			
		</tr>
		<tr>
			<td>  13. Apakah aktivitas sehari-hari anda terbengkalai?		
			<br>			
				<input type="radio" name="tanya13" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya13 =="Ya")?  : "") ?>  > Ya

				<input type="radio" name="tanya13" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya13 =="Tidak")?  : "") ?> > Tidak
			</td>			
		</tr>
		<tr>
			<td>  14. Apakah anda merasa tidak mampu berperan dalam kehidupan ini?		
			<br>			
				<input type="radio" name="tanya14" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya14 =="Ya")?  : "") ?>  > Ya

				<input type="radio" name="tanya14" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya14 =="Tidak")?  : "") ?> > Tidak
			</td>			
		</tr>
		<tr>
			<td> 15. Apakah anda kehilangan minat terhadap banyak hal?		
			<br>			
				<input type="radio" name="tanya15" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya15 =="Ya")?  : "") ?>  > Ya

				<input type="radio" name="tanya15" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya15 =="Tidak")? : "") ?> > Tidak
			</td>			
		</tr>
		<tr>
			<td> 16. Apakah anda merasa tidak berharga?		
			<br>			
				<input type="radio" name="tanya16" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya16 =="Ya")?  : "") ?>  > Ya

				<input type="radio" name="tanya16" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya16 =="Tidak")? : "") ?> > Tidak
			</td>			
		</tr>
		<tr>
			<td> 17. Apakah anda mempunyai pikiran untuk mengakhiri hidup anda?		
			<br>			
				<input type="radio" name="tanya17" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya17 =="Ya")?  : "") ?>  > Ya

				<input type="radio" name="tanya17" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya17 =="Tidak")?  : "") ?> > Tidak
			</td>			
		</tr>
		<tr>
			<td> 18. Apakah anda merasa lelah sepanjang waktu?	
			<br>			
				<input type="radio" name="tanya18" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya18 =="Ya")?  : "") ?>  > Ya

				<input type="radio" name="tanya18" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya18 =="Tidak")?  : "") ?> > Tidak
			</td>			
		</tr>
		<tr>
			<td> 19. Apakah anda merasa tidak enak diperut?	
			<br>			
				<input type="radio" name="tanya19" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya19 =="Ya")?  : "") ?>  > Ya

				<input type="radio" name="tanya19" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya19 =="Tidak")?  : "") ?> > Tidak
			</td>			
		</tr>
		<tr>
			<td> 20. Apakah anda mudah lelah?
			<br>			
				<input type="radio" name="tanya20" id="1" value="Ya"
				 onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya20 =="Ya")?  : "") ?>  > Ya

				<input type="radio" name="tanya20" id="0" value="Tidak" 
				onclick="javascript:document.form1.submit()" 
				 <?php echo (($tanya20 =="Tidak")?  : "") ?> > Tidak
			</td>			
		</tr>
		<tr>
			<td></td>			
			<td></td>			
			<td>
				<input type="submit" name="submit" value="Submit" >
			</td>			
		</tr>
		<tr>
			<td colspan="3"> <hr> </td>
		</tr>
		<tr>
			<td colspan="3" bgcolor="#33CCFF"><br></td>
		</tr>
	</table>
</form>

</body>
<?php
	if(isset($_POST['submit'])){
		$tanya1 = @$_POST['tanya1'];
		$tanya2 = @$_POST['tanya2'];
		$tanya3 = @$_POST['tanya3'];
		$tanya4 = @$_POST['tanya4'];
		$tanya5 = @$_POST['tanya5'];
		$tanya6 = @$_POST['tanya6'];
		$tanya7 = @$_POST['tanya7'];
		$tanya8 = @$_POST['tanya8'];
		$tanya9 = @$_POST['tanya9'];
		$tanya10 = @$_POST['tanya10'];
		$tanya11 = @$_POST['tanya11'];
		$tanya12 = @$_POST['tanya12'];
		$tanya13 = @$_POST['tanya13'];
		$tanya14 = @$_POST['tanya14'];
		$tanya15 = @$_POST['tanya15'];
		$tanya16 = @$_POST['tanya16'];
		$tanya17 = @$_POST['tanya17'];
		$tanya18 = @$_POST['tanya18'];
		$tanya19 = @$_POST['tanya19'];
		$tanya20 = @$_POST['tanya20'];
		
		$temp = array($tanya1,$tanya2,$tanya3,$tanya4,$tanya5,$tanya6,$tanya7,$tanya8,$tanya9,$tanya10,$tanya11,$tanya12,$tanya13,$tanya14,$tanya15,$tanya16,$tanya17,$tanya18,$tanya19,$tanya20);
		
		$tampung = count($temp);
		$hasil =NULL;
		for ($i=0; $i < $tampung; $i++) { 
			if ($temp[$i]=="Ya") {
				$hasil = $hasil + 1;
			}
		}
		
		if(is_null($hasil)) {
			echo "<script>
					alert('Maaf Anda Belum Mengisi SRQ-20!!');
				 </script>";
		}
		else {
			if ($hasil > 5) {
			$_SESSION['hasil'] = $hasil;
			echo("<script>
					alert('Anda terindikasi mengalami gejala stres. sekarang anda bisa memulai untuk konsultasi!!');
					location.href = 'http://localhost/bot/bot.php';
				</script>");
			}

			else{
				echo "<script>
						alert('Anda tidak mengalami gejala stres, anda tidak bisa melanjutkan ke halaman konsultasi!!');
						location.href = 'http://localhost/bot/srq.php';
					</script>";
			}
		}
	}
?>
</html>