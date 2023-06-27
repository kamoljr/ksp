<!-- BEGIN Quick Menu -->
<!-- to add more items, please make sure to change the variable '$menu-items: number;' in your _page-components-shortcut.scss -->
<nav class="shortcut-menu d-none d-sm-block" style = "height:500px important;">
    <input type="checkbox" class="menu-open" name="menu-open" id="menu_open" />
    <label for="menu_open" class="menu-open-button ">
        <span class="app-shortcut-icon d-block"></span>
    </label>
    <a href="#" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Scroll Top">
        <i class="fal fa-arrow-up"></i>
    </a>
    <!-- <a href="<?//= base_url().'/';?>page_login-alt.html" class="menu-item btn" data-toggle="tooltip"
        data-placement="left" title="Logout">
        <i class="fal fa-sign-out"></i>
    </a> -->
    <a href="#" class="menu-item btn" data-action="app-fullscreen" data-toggle="tooltip" data-placement="left"
        title="Full Screen">
        <i class="fal fa-expand"></i>
    </a>
    <!-- <a href="#" class="menu-item btn" data-action="app-print" data-toggle="tooltip" data-placement="left"
        title="Print page">
        <i class="fal fa-print"></i> -->
    </a>
    <?
    if ($pages == "mergegroup"){ 
    ?>
    
    
    <a href="#" class="menu-item btn" data-action="app-print" data-toggle="tooltip" data-placement="left"
        title="คัดลอกโครงสร้าง" style = "background:#d39615">
        <i class="fa-regular fa-clipboard"></i>
    </a>
    <a href="#" class="menu-item btn" data-action="app-print" data-toggle="tooltip" data-placement="left"
        title="เพิ่มกลุ่มงาน" style = "background:#d39615">
         <!-- <i class="fa-solid fa-plus"></i> -->
         <i class="fa-solid fa-circle-plus fa-xs"></i>
    </a>
    <a href="#" class="menu-item btn" data-action="app-print" data-toggle="tooltip" data-placement="left"
        title="เพิ่มสำนัก" style = "background:#d39615">
        <!-- <i class="fa-solid fa-circle-plus"></i> -->
        <i class="fa-regular fa-square-plus"></i>
    </a>
    <?
    }
    ?>
    
    <!-- <a href="#" class="menu-item btn" data-action="app-voice" data-toggle="tooltip" data-placement="left"
        title="Voice command">
        <i class="fal fa-microphone"></i>
    </a> -->
</nav>
<!-- END Quick Menu -->
