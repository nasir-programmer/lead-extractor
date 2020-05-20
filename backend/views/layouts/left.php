<aside class="main-sidebar">

    <section class="sidebar">
        <div class="user-panel ">
            <p style="color:#fff" class="text-success">
                <i class="fa fa-circle text-success"></i>
                <?php
                $session = Yii::$app->session;
                if (!$session->isActive) {
                    $session->open();
                }
                if ( Yii::$app->user->isGuest ) {
                    // return Yii::$app->getResponse()->redirect('site/login');
                } else{
                    echo strtoupper(Yii::$app->user->identity->username);
                }
              
                ?>
            </p> 
        </div>

        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                    'items' => [
                        [
                            'label' => 'TeePass India',
                            'icon' => 'gears',
                            'url' => '#',
                            'items' => [
                                // ['label' => 'Pending Booking', 'icon' => 'circle-o', 'url' => ['/visa/booking/'],],
                                ['label' => 'Booking', 'icon' => 'circle-o', 'url' => ['/visa/booking'],],
                                ['label' => 'BookingStatus', 'icon' => 'circle-o', 'url' => ['/visa/booking-status'],],
                                ['label' => 'BookingTime', 'icon' => 'circle-o', 'url' => ['/visa/booking-time'],],
                                ['label' => 'BookingType', 'icon' => 'circle-o', 'url' => ['/visa/booking-type'],],
                                ['label' => 'Day', 'icon' => 'circle-o', 'url' => ['/visa/day'],],
                                ['label' => 'GolfCourse', 'icon' => 'circle-o', 'url' => ['/visa/golf-course'],],
                                ['label' => 'GolfType', 'icon' => 'circle-o', 'url' => ['/visa/golf-type'],],
                                ['label' => 'PaymentStatus', 'icon' => 'circle-o', 'url' => ['/visa/payment-status'],],
                                ['label' => 'User', 'icon' => 'circle-o', 'url' => ['/visa/user'],],
                                ['label' => 'CyberSourceLog', 'icon' => 'fa-history', 'url' => ['/visa/cyber-source-log'],],
                                ['label' => 'User Activity Log', 'icon' => 'circle-o', 'url' => ['/audit-entry'],],
                            ],
                        ],
                    ],
                ]
        )
        ?>

    </section>

</aside>
