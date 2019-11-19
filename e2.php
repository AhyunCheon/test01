<?
$data = file("words.txt","r");
if(!$data){echo "No file";}
while(!feof($data)){
	$str = fgets(data);
	$result = uncwords(str);
	if($str[0] === "a")$count[0]++;
	else if($str[0] === "b") $count[1]++;
	else if($str[0] === "c") $count[2]++;
	else if($str[0] === "d") $count[3]++;
	else if($str[0] === "e") $count[4]++;
	else if($str[0] === "f") $count[5]++;
	else if($str[0] === "g") $count[6]++;
	else if($str[0] === "h") $count[7]++;
	else if($str[0] === "i") $count[8]++;
	else if($str[0] === "j") $count[9]++;
	else if($str[0] === "k") $count[10]++;
	else if($str[0] === "l") $count[11]++;
	else if($str[0] === "m") $count[12]++;
	else if($str[0] === "n") $count[13]++;
	else if($str[0] === "o") $count[14]++;
	else if($str[0] === "p") $count[15]++;
	else if($str[0] === "q") $count[16]++;
	else if($str[0] === "r") $count[17]++;
	else if($str[0] === "s") $count[18]++;
	else if($str[0] === "t") $count[10]++;
	else if($str[0] === "u") $count[20]++;
	else if($str[0] === "v") $count[21]++;
	else if($str[0] === "w") $count[22]++;
	else if($str[0] === "x") $count[23]++;
	else if($str[0] === "y") $count[24]++;
	else if($str[0] === "z") $count[25]++;



}
	for($a=0;$a<26;$a++){
	 echo "%c - %d \n, 97+$a, $count[a]);
	}
	

	fclose($data);
?>
