<div class="row">
    <div class="col-sm">
        <h1 class="subheader-title color-primary-700">
            <?=$app_name;?>
        </h1>
    </div>
    <div class="">
        <ol class="breadcrumb page-breadcrumb" style="margin-bottom: 15px;">
            <li class="breadcrumb-item"><a href="dashboard">dashboard</a></li>
            <?if ($app_name != 'dashboard'){;?>
            <li class="breadcrumb-item"><?=$description;?></li>
            <? }?>
            <li class="breadcrumb-item active"><?=$app_name;?></li>
        </ol>
    </div>
</div>