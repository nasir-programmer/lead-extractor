<?php

$this->title = "Dashboard";


?>
<section class="content">

<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= \backend\modules\visa\models\Booking::find()->where([
                'BookingStatusId' => 2,
                'PaymentStatusId' => 1,
                'IsPreAuthVerified' => 1,
                'IsActive' => 1
                ])->count() ?></h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= \backend\modules\visa\models\Booking::find()->where([
                'BookingStatusId' => 1,
                'PaymentStatusId' => 1,
                'IsPreAuthVerified' => 1,
                'IsActive' => 1
                ])->count() ?></h3>

              <p>Total Confirm</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= \backend\modules\visa\models\User::find()->where([
               
                'IsPreAuthVerified' => 1,
                'IsActive' => 1
                ])->count() ?></h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= \backend\modules\visa\models\Booking::find()->where([
                'BookingStatusId' => [3, 4, 5],
                'PaymentStatusId' => 1,
                'IsPreAuthVerified' => 1,
                'IsActive' => 1
                ])->count() ?></h3>

              <p>Total Cancelled Booking</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>


      



    
</section>