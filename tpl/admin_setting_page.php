<div class="wrap">
    <h2 class="nav-tab-wrapper">
        <?php foreach ($tabs as $name=>$title):?>
        <?php $class=($name ==$currentTab) ? 'nav-tab-active':'';?>
            <a class="nav-tab<?php echo $class;?>" href="?page=wps/wps-settings.php&tab=<?php echo $name;?>">
                <?php echo $title;?>
            </a>
        <?php endforeach;?>
    </h2>
</div>
