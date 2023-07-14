<!-- BEGIN Page Header -->

<header class="page-header" role="banner">
    <!-- we need this logo when user switches to nav-function-top -->
    <div class="page-logo">
        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative"
            data-toggle="modal" data-target="#modal-shortcut">
            <img src="<?= base_url().'/';?>img/logo.png" alt="สำนักงานเลขาธิการคุรุสภา" aria-roledescription="logo">
            <span class="page-logo-text mr-1">สำนักงานเลขาธิการคุรุสภา</span>
            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
        </a>
    </div>
    <!-- DOC: nav menu layout change shortcut -->
    
    <div class="hidden-md-down dropdown-icon-menu position-relative">
        <a href="#" class="header-btn btn js-waves-off" data-action="toggle" data-class="nav-function-hidden"
            title="Hide Navigation">
            <i class="ni ni-menu"></i>
        </a>
        <ul style = "height: 85px;">
            <!-- <li>
                <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify"
                    title="Minify Navigation">
                    <i class="ni ni-minify-nav"></i>
                </a>
            </li> -->
            <li>
                <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed"
                    title="Lock Navigation">
                    <i class="ni ni-lock-nav"></i>
                </a>
            </li>
        </ul>
        
    </div>
    <!-- DOC: mobile button appears during mobile width -->
    <div class="hidden-lg-up">
        <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
            <i class="ni ni-menu"></i>
        </a>
    </div>
    <div class="search">
        <form class="app-forms hidden-xs-down" role="search" action="page_search.html" autocomplete="off">
            <!-- <input type="text" id="search-field" placeholder="Search for anything" class="form-control" tabindex="1">
            <a href="#" onclick="return false;" class="btn-danger btn-search-close js-waves-off d-none"
                data-action="toggle" data-class="mobile-search-on">
                <i class="fal fa-times"></i>
            </a> -->
        </form>
    </div>
    <div class="ml-auto d-flex">
        <!-- activate app search icon (mobile) -->
        <div class="hidden-sm-up">
            <a href="#" class="header-icon" data-action="toggle" data-class="mobile-search-on" data-focus="search-field"
                title="Search">
                <i class="fal fa-search"></i>
            </a>
        </div>
        <!-- app settings -->
        <div class="hidden-md-down">
            <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
                <i class="fal fa-cog"></i>
            </a>
        </div>
        <!-- app shortcuts -->
        <div>
            <a href="#" class="header-icon" data-toggle="dropdown" title="My Apps">
                <i class="fal fa-cube"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-animated w-auto h-auto">
              <?=view("templates/quickshortcut.php")?>

            </div>
        </div>
        <!-- app message -->
        <!-- <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-messenger">
            <i class="fal fa-globe"></i>
            <span class="badge badge-icon">!</span>
        </a> -->
        <!-- app notification -->
        <div>
            <a href="#" class="header-icon" data-toggle="dropdown" title="You got 11 notifications">
                <i class="fal fa-bell"></i>
                <span class="badge badge-icon">11</span>
            </a>
            <div class="dropdown-menu dropdown-menu-animated dropdown-xl">
                <div
                    class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top mb-2">
                    <h4 class="m-0 text-center color-white">
                        11 New
                        <small class="mb-0 opacity-80">User Notifications</small>
                    </h4>
                </div>
                <ul class="nav nav-tabs nav-tabs-clean" role="tablist">
                    <!-- <li class="nav-item">
                        <a class="nav-link px-4 fs-md js-waves-on fw-500" data-toggle="tab"
                            href="<?//= base_url().'/';?>#tab-messages" data-i18n="drpdwn.messages">Messages</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link px-4 fs-md js-waves-on fw-500" data-toggle="tab"
                            href="<?//= base_url().'/';?>#tab-feeds" data-i18n="drpdwn.feeds">
                            <!-- Feeds -->
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link px-4 fs-md js-waves-on fw-500" data-toggle="tab"
                            href="<?//= base_url().'/';?>#tab-events" data-i18n="drpdwn.events">Events</a>
                    </li> -->
                </ul>
                <div class="tab-content tab-notification">
                    <div class="tab-pane active p-3 text-center">
                        <h5 class="mt-4 pt-4 fw-500">
                            <span class="d-block fa-3x pb-4 text-muted">
                                <i class="ni ni-arrow-up text-gradient opacity-70"></i>
                            </span> 
                            <!-- Select a tab above to activate -->
                            <small class="mt-3 fs-b fw-400 text-muted">
                                <!-- This blank page message helps protect your privacy, or you can show the first message
                                here automatically through -->
                                <!-- <a href="#">settings page</a> -->
                            </small>
                        </h5>
                    </div>
                    <div class="tab-pane" id="tab-messages" role="tabpanel">
                        <div class="custom-scroll h-100">
                            <ul class="notification">
                                <li class="unread">
                                    <a href="#" class="d-flex align-items-center">
                                        <span class="status mr-2">
                                            <span class="profile-image rounded-circle d-inline-block"
                                                style="background-image:url('img/demo/avatars/avatar-c.png')"></span>
                                        </span>
                                        <span class="d-flex flex-column flex-1 ml-1">
                                            <span class="name">Melissa Ayre <span
                                                    class="badge badge-primary fw-n position-absolute pos-top pos-right mt-1">INBOX</span></span>
                                            <span class="msg-a fs-sm">Re: New security codes</span>
                                            <span class="msg-b fs-xs">Hello again and thanks for being part...</span>
                                            <span class="fs-nano text-muted mt-1">56 seconds ago</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="unread">
                                    <a href="#" class="d-flex align-items-center">
                                        <span class="status mr-2">
                                            <span class="profile-image rounded-circle d-inline-block"
                                                style="background-image:url('img/demo/avatars/avatar-a.png')"></span>
                                        </span>
                                        <span class="d-flex flex-column flex-1 ml-1">
                                            <span class="name">Adison Lee</span>
                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                            <span class="fs-nano text-muted mt-1">2 minutes ago</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center">
                                        <span class="status status-success mr-2">
                                            <span class="profile-image rounded-circle d-inline-block"
                                                style="background-image:url('img/demo/avatars/avatar-b.png')"></span>
                                        </span>
                                        <span class="d-flex flex-column flex-1 ml-1">
                                            <span class="name">Oliver Kopyuv</span>
                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                            <span class="fs-nano text-muted mt-1">3 days ago</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center">
                                        <span class="status status-warning mr-2">
                                            <span class="profile-image rounded-circle d-inline-block"
                                                style="background-image:url('img/demo/avatars/avatar-e.png')"></span>
                                        </span>
                                        <span class="d-flex flex-column flex-1 ml-1">
                                            <span class="name">Dr. John Cook PhD</span>
                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                            <span class="fs-nano text-muted mt-1">2 weeks ago</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center">
                                        <span class="status status-success mr-2">
                                            
                                            <span class="profile-image rounded-circle d-inline-block"
                                                style="background-image:url('img/demo/avatars/avatar-h.png')"></span>
                                        </span>
                                        <span class="d-flex flex-column flex-1 ml-1">
                                            <span class="name">Sarah McBrook</span>
                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                            <span class="fs-nano text-muted mt-1">3 weeks ago</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center">
                                        <span class="status status-success mr-2">
                                            <span class="profile-image rounded-circle d-inline-block"
                                                style="background-image:url('img/demo/avatars/avatar-m.png')"></span>
                                        </span>
                                        <span class="d-flex flex-column flex-1 ml-1">
                                            <span class="name">Anothony Bezyeth</span>
                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                            <span class="fs-nano text-muted mt-1">one month ago</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center">
                                        <span class="status status-danger mr-2">
                                            <span class="profile-image rounded-circle d-inline-block"
                                                style="background-image:url('img/demo/avatars/avatar-j.png')"></span>
                                        </span>
                                        <span class="d-flex flex-column flex-1 ml-1">
                                            <span class="name">Lisa Hatchensen</span>
                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                            <span class="fs-nano text-muted mt-1">one year ago</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-feeds" role="tabpanel">
                        <div class="custom-scroll h-100">
                            <ul class="notification">
                                <li class="unread">
                                    <div class="d-flex align-items-center show-child-on-hover">
                                        <span class="d-flex flex-column flex-1">
                                            <span class="name d-flex align-items-center">Administrator <span
                                                    class="badge badge-success fw-n ml-1">UPDATE</span></span>
                                            <span class="msg-a fs-sm">
                                                System updated to version <strong>4.0.1</strong> <a
                                                    href="<?= base_url().'/';?>intel_build_notes.html">(patch
                                                    notes)</a>
                                            </span>
                                            <span class="fs-nano text-muted mt-1">5 mins ago</span>
                                        </span>
                                        <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                            <a href="#" class="text-muted" title="delete"><i
                                                    class="fal fa-trash-alt"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center show-child-on-hover">
                                        <div class="d-flex flex-column flex-1">
                                            <span class="name">
                                                Adison Lee <span class="fw-300 d-inline">replied to your video <a
                                                        href="#" class="fw-400"> Cancer Drug</a> </span>
                                            </span>
                                            <span class="msg-a fs-sm mt-2">Bring to the table win-win survival
                                                strategies to ensure proactive domination. At the end of the
                                                day...</span>
                                            <span class="fs-nano text-muted mt-1">10 minutes ago</span>
                                        </div>
                                        <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                            <a href="#" class="text-muted" title="delete"><i
                                                    class="fal fa-trash-alt"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center show-child-on-hover">
                                        <!--<img src="<?//= base_url().'/';?>img/demo/avatars/avatar-m.png" data-src="<?//= base_url().'/';?>img/demo/avatars/avatar-k.png" class="profile-image rounded-circle" alt="k" />-->
                                        <div class="d-flex flex-column flex-1">
                                            <span class="name">
                                                Troy Norman'<span class="fw-300">s new connections</span>
                                            </span>
                                            <div class="fs-sm d-flex align-items-center mt-2">
                                                <span class="profile-image-md mr-1 rounded-circle d-inline-block"
                                                    style="background-image:url('img/demo/avatars/avatar-a.png'); background-size: cover;"></span>
                                                <span class="profile-image-md mr-1 rounded-circle d-inline-block"
                                                    style="background-image:url('img/demo/avatars/avatar-b.png'); background-size: cover;"></span>
                                                <span class="profile-image-md mr-1 rounded-circle d-inline-block"
                                                    style="background-image:url('img/demo/avatars/avatar-c.png'); background-size: cover;"></span>
                                                <span class="profile-image-md mr-1 rounded-circle d-inline-block"
                                                    style="background-image:url('img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
                                                <div data-hasmore="+3" class="rounded-circle profile-image-md mr-1">
                                                    <span class="profile-image-md mr-1 rounded-circle d-inline-block"
                                                        style="background-image:url('img/demo/avatars/avatar-h.png'); background-size: cover;"></span>
                                                </div>
                                            </div>
                                            <span class="fs-nano text-muted mt-1">55 minutes ago</span>
                                        </div>
                                        <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                            <a href="#" class="text-muted" title="delete"><i
                                                    class="fal fa-trash-alt"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center show-child-on-hover">
                                        <!--<img src="<?= base_url().'/';?>img/demo/avatars/avatar-m.png" data-src="<?= base_url().'/';?>img/demo/avatars/avatar-e.png" class="profile-image-sm rounded-circle align-self-start mt-1" alt="k" />-->
                                        <div class="d-flex flex-column flex-1">
                                            <span class="name">Dr John Cook <span class="fw-300">sent a <span
                                                        class="text-danger">new signal</span></span></span>
                                            <span class="msg-a fs-sm mt-2">Nanotechnology immersion along the
                                                information highway will close the loop on focusing solely on the bottom
                                                line.</span>
                                            <span class="fs-nano text-muted mt-1">10 minutes ago</span>
                                        </div>
                                        <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                            <a href="#" class="text-muted" title="delete"><i
                                                    class="fal fa-trash-alt"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center show-child-on-hover">
                                        <div class="d-flex flex-column flex-1">
                                            <span class="name">Lab Images <span class="fw-300">were
                                                    updated!</span></span>
                                            <div class="fs-sm d-flex align-items-center mt-1">
                                                <a href="#" class="mr-1 mt-1" title="Cell A-0012">
                                                    <span class="d-block img-share"
                                                        style="background-image:url('img/thumbs/pic-7.png'); background-size: cover;"></span>
                                                </a>
                                                <a href="#" class="mr-1 mt-1" title="Patient A-473 saliva">
                                                    <span class="d-block img-share"
                                                        style="background-image:url('img/thumbs/pic-8.png'); background-size: cover;"></span>
                                                </a>
                                                <a href="#" class="mr-1 mt-1" title="Patient A-473 blood cells">
                                                    <span class="d-block img-share"
                                                        style="background-image:url('img/thumbs/pic-11.png'); background-size: cover;"></span>
                                                </a>
                                                <a href="#" class="mr-1 mt-1" title="Patient A-473 Membrane O.C">
                                                    <span class="d-block img-share"
                                                        style="background-image:url('img/thumbs/pic-12.png'); background-size: cover;"></span>
                                                </a>
                                            </div>
                                            <span class="fs-nano text-muted mt-1">55 minutes ago</span>
                                        </div>
                                        <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                            <a href="#" class="text-muted" title="delete"><i
                                                    class="fal fa-trash-alt"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center show-child-on-hover">
                                        <!--<img src="<?= base_url().'/';?>img/demo/avatars/avatar-m.png" data-src="<?= base_url().'/';?>img/demo/avatars/avatar-h.png" class="profile-image rounded-circle align-self-start mt-1" alt="k" />-->
                                        <div class="d-flex flex-column flex-1">
                                            <div class="name mb-2">
                                                Lisa Lamar<span class="fw-300"> updated project</span>
                                            </div>
                                            <div class="row fs-b fw-300">
                                                <div class="col text-left">
                                                    Progress
                                                </div>
                                                <div class="col text-right fw-500">
                                                    45%
                                                </div>
                                            </div>
                                            <div class="progress progress-sm d-flex mt-1">
                                                <span class="progress-bar bg-primary-500 progress-bar-striped"
                                                    role="progressbar" style="width: 45%" aria-valuenow="45"
                                                    aria-valuemin="0" aria-valuemax="100"></span>
                                            </div>
                                            <span class="fs-nano text-muted mt-1">2 hrs ago</span>
                                            <div
                                                class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                <a href="#" class="text-muted" title="delete"><i
                                                        class="fal fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-events" role="tabpanel">
                        <div class="d-flex flex-column h-100">
                            <div class="h-auto">
                                <table class="table table-bordered table-calendar m-0 w-100 h-100 border-0">
                                    <tr>
                                        <th colspan="7" class="pt-3 pb-2 pl-3 pr-3 text-center">
                                            <div class="js-get-date h5 mb-2">[your date here]</div>
                                        </th>
                                    </tr>
                                    <tr class="text-center">
                                        <th>Sun</th>
                                        <th>Mon</th>
                                        <th>Tue</th>
                                        <th>Wed</th>
                                        <th>Thu</th>
                                        <th>Fri</th>
                                        <th>Sat</th>
                                    </tr>
                                    <tr>
                                        <td class="text-muted bg-faded">30</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td><i
                                                class="fal fa-birthday-cake mt-1 ml-1 position-absolute pos-left pos-top text-primary"></i>
                                            6</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td class="bg-primary-300 pattern-0">10</td>
                                        <td>11</td>
                                        <td>12</td>
                                        <td>13</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>15</td>
                                        <td>16</td>
                                        <td>17</td>
                                        <td>18</td>
                                        <td>19</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>22</td>
                                        <td>23</td>
                                        <td>24</td>
                                        <td>25</td>
                                        <td>26</td>
                                        <td>27</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>29</td>
                                        <td>30</td>
                                        <td>31</td>
                                        <td class="text-muted bg-faded">1</td>
                                        <td class="text-muted bg-faded">2</td>
                                        <td class="text-muted bg-faded">3</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="flex-1 custom-scroll">
                                <div class="p-2">
                                    <div class="d-flex align-items-center text-left mb-3">
                                        <div class="width-5 fw-300 text-primary l-h-n mr-1 align-self-start fs-xxl">
                                            15
                                        </div>
                                        <div class="flex-1">
                                            <div class="d-flex flex-column">
                                                <span class="l-h-n fs-md fw-500 opacity-70">
                                                    October 2020
                                                </span>
                                                <span class="l-h-n fs-nano fw-400 text-secondary">
                                                    Friday
                                                </span>
                                            </div>
                                            <div class="mt-3">
                                                <p>
                                                    <strong>2:30PM</strong> - Doctor's appointment
                                                </p>
                                                <p>
                                                    <strong>3:30PM</strong> - Report overview
                                                </p>
                                                <p>
                                                    <strong>4:30PM</strong> - Meeting with Donnah V.
                                                </p>
                                                <p>
                                                    <strong>5:30PM</strong> - Late Lunch
                                                </p>
                                                <p>
                                                    <strong>6:30PM</strong> - Report Compression
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="py-2 px-3 bg-faded d-block rounded-bottom text-right border-faded border-bottom-0 border-right-0 border-left-0">
                    <a href="#" class="fs-xs fw-500 ml-auto">view all notifications</a>
                </div>
            </div>
        </div>
        <!-- app user menu -->
        <div>
            <?=view("templates/logout.php")?>
        </div>
    </div>
</header>
<!-- END Page Header -->
<style>

    .kspname{
        font-size:40px !important;
        color:white;
        font-family: 'TH Sarabun New' !important;
    }
    .col_add{
        padding-bottom:25px;
        padding-left:10px;
        padding-right:10px;
        margin-bottom:0px !important;
    }

</style>
