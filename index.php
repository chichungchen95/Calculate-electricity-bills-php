<!DOCTYPE html>
<html>
<body>

<?php
$watt = $_POST["input1"];
$time = $_POST["input2"];
$br = '<br/>';
echo "電費計算機 V0.0.1".$br;
?>
<form method="post">
  <p>輸入瓦數(watt)</p>
  <input type="text" name="input1">
  <p>輸入時間(hr)</p>
  <input type="text" name="input2">
  <br/>
  <button>計算</button>
</form>
    <h5>功耗:<?php echo $watt?> 用時:<?php echo $time?></h5>
    <br/>
    <h4>每日將使用<?php $sum1=($watt*$time)/1000; echo $sum1; ?>度電 共<?php $sum0=$sum1*30; echo $sum0;?></h4>
    <h4>累積進價:<?php $sum2=($sum1*30); 
    if($sum2<120){ $sum3= $sum2*1.68;echo "1.68元每度? 總共".$sum3."台幣";}
    else if($sum2<330){ $sum3= $sum2*2.45;echo "2.45元每度? 總共".$sum3."台幣";} 
    else if($sum2<500){ $sum3= $sum2*3.70;echo "3.70元每度? 總共".$sum3."台幣";} 
    else if($sum2<700){ $sum3= $sum2*5.04;echo "5.04元每度? 總共".$sum3."台幣";} 
    else if($sum2<1500){ $sum3= $sum2*6.24;echo "6.24元每度? 總共".$sum3."台幣";} 
    else if($sum2>1500){ $sum3= $sum2*8.46;echo "8.46元每度? 總共".$sum3."台幣";}
    ?></h4>
</body>
</html>

