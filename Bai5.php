<!DOCTYPE html>
<html>
    <form  action="" method="POST">
        <table style="border: 1px solid;">
            <tr><th><td>Nhap Mang va Hien Thi</td></th></tr>
            <tr><th>
        <td>Nhap Mang</td>
        <td><input type="text" name="So"></td>
        </th></tr>
        <tr><th><td><button type="submit">Thuc Hien</button></td></th></tr>
        <tr><th >
            <td>Phan tu mang chia het cho 3</td>
            <td style="border: 1px solid;">
            <?php
            $string=$_POST['So'];
            $a=explode(",",$string);
            for($i=0;$i<count($a);$i++){
                if($a[$i]%3==0){
                    echo $a[$i]." ";
                }
            }
            ?>
        </td>
        </th></tr>
        <tr><th>
            <td>Phan tu mang le giam dan</td>
            <td style="border: 1px solid;">
            <?php
            $string=$_POST['So'];
            $a=explode(",",$string);
            $a2=[];
            for($i=0;$i<count($a);$i++){
                if($a[$i]%2!=0){
                    array_push($a2,$a[$i]);
                }
            }
            rsort($a2);
            for($i=0;$i<count($a2);$i++){
                echo $a2[$i]." ";
            }
            ?>
        </td>
        </th></tr>
        <tr><th>
            <td>Phan tu mang chan tang dan </td>
            <td style="border: 1px solid;">
            <?php
            $string=$_POST['So'];
            $a=explode(",",$string);
            $a2=[];
            for($i=0;$i<count($a);$i++){
                if($a[$i]%2==0){
                    array_push($a2,$a[$i]);
                }
            }
            sort($a2);
            for($i=0;$i<count($a2);$i++){
                echo $a2[$i]." ";
            }
            ?>
        </td>
        </th></tr>
        <tr><th>
            <td>Trung binh cong so le</td>
            <td style="border: 1px solid;">
            <?php
            $string=$_POST['So'];
            $a=explode(",",$string);
            $a2=[];
            $tong=0;
            $dem=0;
            for($i=0;$i<count($a);$i++){
                if($a[$i]%2!=0){
                    $tong=$tong+$a[$i];
                    $dem++;
                }
            }
            if($dem==0){
                echo "Khong co so le";
            }else{
            echo $tong/$dem;
            }
            ?>
        </td>
        </th></tr>
        <tr><th>
            <td>Trung binh cong so chan </td>
            <td style="border: 1px solid;">
        <?php
            $string=$_POST['So'];
            $a=explode(",",$string);
            $a2=[];
            $tong=0;
            $dem=0;
            for($i=0;$i<count($a);$i++){
                if($a[$i]%2==0){
                    $tong=$tong+$a[$i];
                    $dem++;
                }
            }
            if($dem==0){
                echo "Khong co so chan";
            }else{
            echo $tong/$dem;
            }
            ?>
        </td>
        </th></tr>
        </table>
    </form>
</html>