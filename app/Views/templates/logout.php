<a href="#" data-toggle="dropdown" title="<?=$_SESSION['user_name'] ?>"
    class="header-icon d-flex align-items-center justify-content-center ml-2">
    

    <img src="<?= base_url().'/';?>img/user_icon.png"
        class="rounded-circle" alt="<?=$_SESSION['user_name'] ?>" style = 'max-width: 40px;height: auto!important;'>
        <!-- นายทดสอบ ระบบงาน -->
        <!-- <sup class="badge badge-primary fw-500"><?//=$_SESSION['user_name'];?><br><?//=$_SESSION['group_name'];?></sup> -->
    <!-- you can also add username next to the avatar with the codes below:
      <span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">Me</span>
      <i class="ni ni-chevron-down hidden-xs-down"></i> -->
</a>
<div class="dropdown-menu dropdown-menu-animated dropdown-lg">
    <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top" style ='padding-left:10px;padding-right:10px;'>
        <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
            
            <div class="info-card-text" style = 'white-space:normal !important;'>
                <div style = 'font-size:12px !important;'><?=$_SESSION['user_name'] ?></div>
                <span class="opacity-80" style = 'font-size:12px !important; padding-top:10px;padding-left:5px;'> <?=$_SESSION['group_name'];?></span>
            </div>
        </div>
    </div>
    
    <!-- <a href="#" class="dropdown-item" data-toggle="modal" data-target=".js-modal-settings">
        <span data-i18n="drpdwn.settings">Settings</span>
    </a> -->
    <div class="dropdown-divider m-0"></div>
    <a href="#" class="dropdown-item" data-action="app-fullscreen">
        <span data-i18n="drpdwn.fullscreen">Fullscreen</span>
        <i class="float-right text-muted fw-n">F11</i>
    </a>
    <div class="dropdown-divider m-0"></div>
    <a href="#" class="dropdown-item" data-action="app-reset">
        <span data-i18n="drpdwn.reset_layout">Reset Password</span>
    </a>
    <!-- <a href="#" class="dropdown-item" data-action="app-print">
        <span data-i18n="drpdwn.print">Print</span>
        <i class="float-right text-muted fw-n">Ctrl + P</i>
    </a> -->
      <!-- <div class="dropdown-multilevel dropdown-multilevel-left">
          <div class="dropdown-item">
              Language
          </div>
          <div class="dropdown-menu">
              <a href="#?lang=fr" class="dropdown-item" data-action="lang" data-lang="fr">Français</a>
              <a href="#?lang=en" class="dropdown-item active" data-action="lang" data-lang="en">English
                  (US)</a>
              <a href="#?lang=es" class="dropdown-item" data-action="lang" data-lang="es">Español</a>
              <a href="#?lang=ru" class="dropdown-item" data-action="lang" data-lang="ru">Русский язык</a>
              <a href="#?lang=jp" class="dropdown-item" data-action="lang" data-lang="jp">日本語</a>
              <a href="#?lang=ch" class="dropdown-item" data-action="lang" data-lang="ch">中文</a>
          </div>
      </div> -->
    <div class="dropdown-divider m-0"></div>
    <a class="dropdown-item fw-500 pt-3 pb-3" href="/public/login/logout">
        <span data-i18n="drpdwn.page-logout">Logout</span>
        <!-- <span class="float-right fw-n">&commat;codexlantern</span> -->
    </a>
</div>
