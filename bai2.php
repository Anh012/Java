<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>QUAN LY THUE MAY TINH</title>
</head>

<body align="center" >
    <?php
    $tientra=$tienthue=$tiengiam="";
    $somay=$nhan=$tra=$hinhthuc=$dongia=$tg="";
    if(isset($_POST["tinh"])){
        $somay=$_POST["somay"];
        $nhan=$_POST["nhan"];
        $tra=$_POST["tra"];
        $hinhthuc=$_POST["hinhthuc"];
        $tg=$tra-$nhan;
        $dongia=$_POST["dongia"];
        if($hinhthuc=="M"){
            $tienthue=3500;
        } else {
            $tienthue=$dongia*$tg;
        }
        if($tg>=2){
            $tiengiam=0.2*$tienthue;
        } else {
            $tiengiam = 0;
        }
        $tientra=$tienthue-$tiengiam;
    } 
    ?>
    <form action="" method="post">
        <h1>QUAN LY THUE MAY TINH</h1>
        <p>So may: <input type="text" name="somay" value="<?php echo $somay;?>"></p>
        <p>Hinh thuc thue: <input type="text" name="hinhthuc" value="<?php echo $hinhthuc;?>"></p>
        <p>Gio nhan: <input type="text" name="nhan" value="<?php echo $nhan;?>"></p>
        <p>Gio tra: <input type="text" name="tra" value="<?php echo $tra;?>"></p>
        <p>Thoi gian thue: <input type="text" name="tg" value="<?php echo $tg;?>"></p>
        <p>Don gia: <input type="text" name="dongia" value="<?php echo $dongia;?>"></p>
        <p>Tien thue: <input type="text" name="tienthue" value="<?php echo $tienthue;?>"></p>
        <p>Tien giam: <input type="text" name="tiengiam" value="<?php echo $tiengiam;?>"></p>
        <p>Tien phai tra: <input type="text" name="tientra" value="<?php echo $tientra;?>"></p>
        <p><input type="submit" name="reset" value="Xoa">            <input type="submit" name="tinh" value="Tinh tien"></p>
        
    </form>
</body>
</html>
