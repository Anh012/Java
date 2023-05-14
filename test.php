<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body align="center">
    <?php
    if(isset($_POST['nhap'])){
        $nhapmang=$chia=$le=$chan="";
        $nhapmang=$_POST["nhapmang"];
        $chia=$_POST["chia"];
        $string=$_POST['nhapmang'];
        $a=explode(",",$string);
        $res = $resle = $reschan = $tble =$tbchan= "";
		
        for($i=0;$i<count($a);$i++){
            if($a[$i]%3==0){
                $res .= $a[$i].", ";
            }
        }
        $chia = $res;
		//le
        $a2=[];
        for($i=0;$i<count($a);$i++){
            if($a[$i]%2!=0){
                array_push($a2,$a[$i]);
            }
        }
        rsort($a2);
        for($i=0;$i<count($a2);$i++){
            $resle .= $a2[$i].", ";
        }
        $le = $resle;
		//Chan
		$a3=[];
        for($i=0;$i<count($a);$i++){
            if($a[$i]%2==0){
                array_push($a3,$a[$i]);
            }
        }
        sort($a3);
        for($i=0;$i<count($a3);$i++){
            $reschan .= $a3[$i].", ";
        }
        $chan = $reschan;
    }
	//TB cong

            $tongl=0;
            $deml=0;
            for($i=0;$i<count($a);$i++){
                if($a[$i]%2!=0){
                    $tongl=$tongl+$a[$i];
                    $deml++;
                }
            }
            if($deml==0){
                $tble.= "Khong co so le";
            }else{
            $tble.= $tongl/$deml;
            }$tle=$tble;
	//TBC chan
	 $tongc=0;
            $demc=0;
            for($i=0;$i<count($a);$i++){
                if($a[$i]%2==0){
                    $tongc=$tongc+$a[$i];
                    $demc++;
                }
            }
            if($demc==0){
                $tbchan. "Khong co so chan";
            }else{
            $tbchan.= $tongc/$demc;
            }$tchan=$tbchan;
    ?>
    <form action="" method="post">
        <h1>NHAP MANG VA HIEN THI</h1>
        <p>Nhap mang: <input type="text" name="nhapmang" value="<?php echo $nhapmang;?>"> </p>
		<p><input type="submit" name="nhap" value="Thuc hien"></p>
        <p>Phan tu chia het cho 3: <input type="text" name="chia" value="<?php echo $chia;?>"> </p>
        <p>Phan tu mang le xep giam dan: <input type="text" name="le" value="<?php echo $le;?>"> </p>
        <p>Phan tu mang chan xep tang dan: <input type="text" name="chan" value="<?php echo $chan;?>"> </p>
		<p>Tính trung bình cộng phần tử le : <input type="text" name="tle" value="<?php echo $tle;?>"> </p>
		<p>Tính trung bình cộng phần tử chan : <input type="text" name="tchan" value="<?php echo $tchan;?>"> </p>
        
    </form>
</body>
</html>
