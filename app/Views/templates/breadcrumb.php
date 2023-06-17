<div class="row">
    <div class="col-sm">
        <h1 class="subheader-title color-primary-700">
            <?=$app_name;?>
        </h1>
    </div>
   
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="margin-bottom: 15px;">
            <li class="breadcrumb-item" style = "text-overflow:clip;max-width:100%;">
                <a href="dashboard">dashboard</a>
            </li>
            <?if ($app_name != 'dashboard'){;?>
             <li class="breadcrumb-item" style = "text-overflow:clip;max-width:100%;"><?=$description;?></li>
            <? }?>
            <li class="breadcrumb-item active" style = "text-overflow:clip;max-width:100%;"><?=$app_name;?></li>
        </ol>
    </nav>
</div>

