<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Url;

$route = Yii::$app->controller->route;
$class = 'active';
$menuOpenClass = 'menu-open';

$beginDate = date('01.m.Y');
$endDate = date('t.m.Y');

//$isSuperAdmin = Yii::$app->user->can('super-admin');
//$isProfessor = Yii::$app->user->can('professor');
//$isAdmin = Yii::$app->user->can('admin');



$sideBarMenus = [



    [
        'label' => Yii::t('app', 'Category'),
        'icon' => 'fas fa-cogs',
        'url' => Url::to(['/category']),
        'active' => in_array($route, ['category/index', 'category/update', 'category/create', 'category/view']),
        'isVisible' =>  true,
        'items' => [],
    ],

    [
        'label' => Yii::t('app', "Sub qo'shish"),
        'icon' => 'fas fa-cogs',
        'url' => Url::to(['/child-category']),
        'active' => in_array($route, ['child-category/index', 'child-category/update', 'child-category/create', 'child-category/view']),
        'isVisible' =>  true,
        'items' => [],
    ],

    [
        'label' => Yii::t('app', "Page qo'shish"),
        'icon' => 'fas fa-cogs',
        'url' => Url::to(['/page']),
        'active' => in_array($route, ['page/index', 'page/update', 'page/create', 'page/view']),
        'isVisible' =>  true,
        'items' => [],
    ],



//    [
//        'label' => Yii::t('app', 'Biriktirish'),
//        'icon' => 'fas fa-chalkboard',
//        'url' => '#',
//        'isVisible' => true,
//        'active' => in_array($route, [
//            'teacher-department/update', 'teacher-department/index', 'teacher-department/create',
//            'professor-criteria/index', 'professor-criteria/create', 'professor-criteria/update'
//        ]),
//        'items' => [
//            [
//                'label' => Yii::t('app', 'O\'qituvchini biriktirish'),
//                'icon' => 'far fa-circle nav-icon',
//                'url' => Url::to(['/teacher-department']),
//                'isVisible' => true,
//                'active' => in_array($route, ['teacher-department/no-atteched', 'teacher-department/index', 'teacher-department/create']),
//                'items' => [],
//            ],
//            [
//                'label' => Yii::t('app', 'Baholovchini biriktirish'),
//                'icon' => 'far fa-circle nav-icon',
//                'url' => Url::to(['/professor-criteria']),
//                'isVisible' => true,
//                'active' => in_array($route, ['professor-criteria/index', 'professor-criteria/create', 'professor-criteria/update']),
//                'items' => [],
//            ],
//        ]
//    ],


];

?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= Url::to(['/']) ?>" class="brand-link">
        <img src="<?= Url::base() ?>/adminLte3/img/AdminLTELogo.png" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8;width: 29px">
        <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="<?= Url::to(['/']) ?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <?php foreach ($sideBarMenus as $sideBarMenu): ?>
                    <?php if ($sideBarMenu['isVisible']): ?>
                        <li class="nav-item <?= $sideBarMenu['active'] ? $menuOpenClass : '' ?>">
                            <a href="<?= $sideBarMenu['url'] ?>"
                               class="nav-link <?= $sideBarMenu['active'] ? $class : '' ?>">
                                <i class="nav-icon <?= $sideBarMenu['icon'] ?>"></i>
                                <p>
                                    <?= $sideBarMenu['label'] ?>
                                    <?php if ($sideBarMenu['items']): ?>
                                        <i class="right fas fa-angle-left"></i>
                                    <?php endif ?>
                                </p>
                            </a>
                            <?php if ($sideBarMenu['items']): ?>
                                <ul class="nav nav-treeview">
                                    <?php foreach ($sideBarMenu['items'] as $item): ?>
                                        <?php if ($item['isVisible']): ?>
                                            <li class="nav-item">
                                                <a href="<?= $item['url'] ?>"
                                                   class="nav-link <?= $item['active'] ? $class : '' ?>">
                                                    <i class="<?= $item['icon'] ?> nav-icon"></i>
                                                    <p><?= $item['label'] ?></p>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
