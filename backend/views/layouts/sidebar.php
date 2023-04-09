<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= Yii::$app->user->getIdentity() ? Yii::$app->user->getIdentity()->username : '' ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'Tables',
                        'icon' => 'bookmark',
                        'items' => [
                            ['label' => 'Users', 'url' => ['user/index'], 'iconStyle' => 'far'],
                            ['label' => 'Reviews', 'url' => ['reviews/index'], 'iconStyle' => 'far'],
                            ['label' => 'Comments', 'url' => ['comments/index'], 'iconStyle' => 'far'],
                            ['label' => 'Lectures', 'url' => ['lectures/index'], 'iconStyle' => 'far'],
                            ['label' => 'Teacher Courses', 'url' => ['teacher-courses/index'], 'iconStyle' => 'far'],
                            ['label' => 'Teacher Lectures', 'url' => ['teacher-lectures/index'], 'iconStyle' => 'far'],
                            ['label' => 'Courses', 'url' => ['courses/index'], 'iconStyle' => 'far'],
                        ]
                    ],
                    [
                        'label' => 'Api Calls',
                        'icon' => 'wifi',
                        'url' => ['test/index']
                    ],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>