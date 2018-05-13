<?php 

include ROOT.'/views/layout/header.php';
 ?>

<div class="container">
  <div class="row">

    <div class="col-1">
    </div>
     <div class="col-md-11">
  
      <?php foreach($dates as $times): ?>
         <div class="time">
         <?php

            $day = $times['w_date'];
            echo date('j', strtotime($day));
      
         ?>
         </div>
      <?php endforeach; ?>
      <!--<div class="end"></div>-->
     </div>
 </div>
  <div class="row">
    <div class="col-md-1">
       Мельников А. А.
    </div>
    <div class="col-md-11">
      <?php $i=1?>
      <?php for($j=0; $j<=2; $j++): ?>
      <?php foreach($dates as $times): ?>
      <?php if($j < 2) { ?>
        <div class="time" style="background-color: white;">
        <form action="#" method="post">
        <input id="contr-sm" class="form-control form-control-sm" type="text" name="inpt<?=$j.$i;?>" placeholder="<?php if($j==0) {
          echo $times['time_in'];} elseif($j==1) {
          echo $times['time_out'];} else {
          echo "0:00";
          }
        ?>">
        </form>
        </div>

        <?php } else {?>
                <div class="end" style="width: 31px;">
                  <?=$times['res']?>
                </div>
        <?php } ?>
      <?php $i++; ?>
      <?php endforeach; ?>
      <!--<div class="end"></div>-->
      <?php endfor; ?>
    </div>
  </div>

<hr>
<div class="row">
  <div class="col-md-1">
    <input type="text" class="form-control" placeholder=".col-xs-2">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>

</div>

<?php include ROOT.'/views/layout/footer.php';?>