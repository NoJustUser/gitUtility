 <?php //include ROOT.'/views/layout/header.php';?>

<div class="container">
  <div class="row">

    <div class="col-1">
      <strong style="float: right; margin: 0px 5px 5px 0px;"><?=' '.$totalTime;?></strong>
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
       <?=$cadres[$indx-1]['name']?>
    </div>
    <div class="col-md-11">
      <?php 
      # Разбиваем сетку табеля и заполняем ее значениями из базы данных
      #################################################################
      $i=1;
      $key=0;
      ?>
      <?php for($j=0; $j<=2; $j++): ?>
      <?php foreach($dates as $times): ?>
      <?php if($j < 2) { ?>
        <div class="time" style="background-color: white;">
        <form action="#" method="post">
        <input id="contr-sm" class="form-control form-control-sm" type="text" name="inpt<?=$j.$i.$indx;?>" 

        <?php 
            # Устанавливаем autofocus в первой пустой ячейке табеля
            #######################################################
 
             if ($indx == $min) {

                    if ($j==0 && $times['res']=='') {
                       $key = 1;
                    } elseif ($j==0) {
                        if ($times['time_out']=='0:00' && $key==0) {echo 'autofocus';}
                    } elseif ($j==1 && $times['res']=='') {
                       echo 'autofocus';
                    }
               }
            ######################################################
             ?>

        tabindex="<?php if ($j==0) {echo $i+31;} else {
          if ($indx == $min) {echo $i;}
          }?>" placeholder="<?php if($j==0) {
          echo $times['time_in'];} elseif($j==1) {
          echo $times['time_out'];} else {
          echo "0:00";
          }
        ?>"/>
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

</div>
<hr>

<?php //include ROOT.'/views/layout/footer.php';?>