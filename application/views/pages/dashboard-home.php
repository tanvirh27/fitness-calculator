<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
      Fitness
         <small>Calculation</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php if(isset($BreadcumbsURI)) echo $BreadcumbsURI ?>"><i class="fa fa-dashboard"></i> <?php if(isset($Breadcumbs)) echo $Breadcumbs ?></a></li>
         <li class="active"><?php if(isset($PageTitle)) echo $PageTitle ?></li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
         <div class="col-md-7 pull-left">
            <?php echo form_open('calculation-portal',array('id'=>'calculator_form','method'=>'get'));?>
            <div class="form-group">
               <label for="height">Your Heght (Feet' Inch ")</label>
               <input type="number"  style="width: 40%;" class="form-control" name="height_feet" id="height_feet" aria-describedby="heightHelp" placeholder="Enter Feet" min="0" required>
               <input type="number" style="width: 40%;" class="form-control" name="height_inch"  id="height_inch" aria-describedby="heightHelp" placeholder="Enter Inch" min="0" required>
               <small id="heightHelp" class="form-text text-muted">We'll never share your height with anyone else.</small>
            </div>
            <div class="form-group">
               <label for="exampleInputPassword1">Your Weight</label>
               <input type="number" style="width: 40%;" name="weight" class="form-control" id="exampleInputPassword1" placeholder="50" min="0" required>
               <small id="emailHelp" class="form-text text-muted">We'll never share your Weight with anyone else.</small>
            </div>
            <input type="submit" name="Is_this_Calculation_True?" class="btn btn-primary" value="Calculate">
            <?php form_close();?>
         </div>
         <?php if(isset($BMI)):?>
      <div class="col-md-4 pull-right alert alert-success" style="margin-left: 50px;">
         
         <h2>BMI REPORT:</h2>
         <h4>Basic Information:-</h4>
         <p>Your Weight: <?php if(isset($current_weight)) echo $current_weight;?> KG</p>
         <p>Your Height: <?php if(isset($current_height)) echo $current_height;?> </p>
         <p>BMI: <?php if(isset($BMI)) echo $BMI;?></p>
         <p>Weight Condition:- <?php if(isset($weight_status)) echo $weight_status;?></p>
         <br>
         <?php if($weight_status == 'Over Weight' || $weight_status == 'Under Weight'):?>
         <a href="<?php echo site_url('Nutrition-List');?>" class="btn btn-warning">See Your Nutrition</a>
         <?php endif;?>
        
      </div>
      <?php endif;?>
      </div>
      <!-- /.row -->
      <!-- Main row -->
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->