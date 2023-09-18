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




<!-- css datepiker -->
<style>
.xdsoft_datetimepicker {
	box-shadow: 0 5px 15px -5px rgba(0, 0, 0, 0.506);
	background: #fff;
	border-bottom: 1px solid #bbb;
	border-left: 1px solid #ccc;
	border-right: 1px solid #ccc;
	border-top: 1px solid #ccc;
	color: #333;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	padding: 8px;
	padding-left: 0;
	padding-top: 2px;
	position: absolute;
	z-index: 9999;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	display: none;
}
.xdsoft_datetimepicker.xdsoft_rtl {
	padding: 8px 0 8px 8px;
}

.xdsoft_datetimepicker iframe {
	position: absolute;
	left: 0;
	top: 0;
	width: 75px;
	height: 210px;
	background: transparent;
	border: none;
}

/*For IE8 or lower*/
.xdsoft_datetimepicker button {
	border: none !important;
}

.xdsoft_noselect {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	-o-user-select: none;
	user-select: none;
}

.xdsoft_noselect::selection { background: transparent }
.xdsoft_noselect::-moz-selection { background: transparent }

.xdsoft_datetimepicker.xdsoft_inline {
	display: inline-block;
	position: static;
	box-shadow: none;
}

.xdsoft_datetimepicker * {
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	padding: 0;
	margin: 0;
}

.xdsoft_datetimepicker .xdsoft_datepicker, .xdsoft_datetimepicker .xdsoft_timepicker {
	display: none;
}

.xdsoft_datetimepicker .xdsoft_datepicker.active, .xdsoft_datetimepicker .xdsoft_timepicker.active {
	display: block;
}

.xdsoft_datetimepicker .xdsoft_datepicker {
	width: 254px;
	float: left;
	margin-left: 8px;
}
.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_datepicker {
	float: right;
	margin-right: 8px;
	margin-left: 0;
}

.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_datepicker {
	width: 256px;
}

.xdsoft_datetimepicker .xdsoft_timepicker {
	width: 58px;
	float: left;
	text-align: center;
	margin-left: 8px;
	margin-top: 0;
}
.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_timepicker {
	float: right;
	margin-right: 8px;
	margin-left: 0;
}

.xdsoft_datetimepicker .xdsoft_datepicker.active+.xdsoft_timepicker {
	margin-top: 8px;
	margin-bottom: 3px
}

.xdsoft_datetimepicker .xdsoft_monthpicker {
	position: relative;
	text-align: center;
}

.xdsoft_datetimepicker .xdsoft_label i,
.xdsoft_datetimepicker .xdsoft_prev,
.xdsoft_datetimepicker .xdsoft_next,
.xdsoft_datetimepicker .xdsoft_today_button {
	background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAeCAYAAADaW7vzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Q0NBRjI1NjM0M0UwMTFFNDk4NkFGMzJFQkQzQjEwRUIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Q0NBRjI1NjQ0M0UwMTFFNDk4NkFGMzJFQkQzQjEwRUIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpDQ0FGMjU2MTQzRTAxMUU0OTg2QUYzMkVCRDNCMTBFQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpDQ0FGMjU2MjQzRTAxMUU0OTg2QUYzMkVCRDNCMTBFQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PoNEP54AAAIOSURBVHja7Jq9TsMwEMcxrZD4WpBYeKUCe+kTMCACHZh4BFfHO/AAIHZGFhYkBBsSEqxsLCAgXKhbXYOTxh9pfJVP+qutnZ5s/5Lz2Y5I03QhWji2GIcgAokWgfCxNvcOCCGKqiSqhUp0laHOne05vdEyGMfkdxJDVjgwDlEQgYQBgx+ULJaWSXXS6r/ER5FBVR8VfGftTKcITNs+a1XpcFoExREIDF14AVIFxgQUS+h520cdud6wNkC0UBw6BCO/HoCYwBhD8QCkQ/x1mwDyD4plh4D6DDV0TAGyo4HcawLIBBSLDkHeH0Mg2yVP3l4TQMZQDDsEOl/MgHQqhMNuE0D+oBh0CIr8MAKyazBH9WyBuKxDWgbXfjNf32TZ1KWm/Ap1oSk/R53UtQ5xTh3LUlMmT8gt6g51Q9p+SobxgJQ/qmsfZhWywGFSl0yBjCLJCMgXail3b7+rumdVJ2YRss4cN+r6qAHDkPWjPjdJCF4n9RmAD/V9A/Wp4NQassDjwlB6XBiCxcJQWmZZb8THFilfy/lfrTvLghq2TqTHrRMTKNJ0sIhdo15RT+RpyWwFdY96UZ/LdQKBGjcXpcc1AlSFEfLmouD+1knuxBDUVrvOBmoOC/rEcN7OQxKVeJTCiAdUzUJhA2Oez9QTkp72OTVcxDcXY8iKNkxGAJXmJCOQwOa6dhyXsOa6XwEGAKdeb5ET3rQdAAAAAElFTkSuQmCC);
}

.xdsoft_datetimepicker .xdsoft_label i {
	opacity: 0.5;
	background-position: -92px -19px;
	display: inline-block;
	width: 9px;
	height: 20px;
	vertical-align: middle;
}

.xdsoft_datetimepicker .xdsoft_prev {
	float: left;
	background-position: -20px 0;
}
.xdsoft_datetimepicker .xdsoft_today_button {
	float: left;
	background-position: -70px 0;
	margin-left: 5px;
}

.xdsoft_datetimepicker .xdsoft_next {
	float: right;
	background-position: 0 0;
}

.xdsoft_datetimepicker .xdsoft_next,
.xdsoft_datetimepicker .xdsoft_prev ,
.xdsoft_datetimepicker .xdsoft_today_button {
	background-color: transparent;
	background-repeat: no-repeat;
	border: 0 none;
	cursor: pointer;
	display: block;
	height: 30px;
	opacity: 0.5;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
	outline: medium none;
	overflow: hidden;
	padding: 0;
	position: relative;
	text-indent: 100%;
	white-space: nowrap;
	width: 20px;
	min-width: 0;
}

.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_prev,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_next {
	float: none;
	background-position: -40px -15px;
	height: 15px;
	width: 30px;
	display: block;
	margin-left: 14px;
	margin-top: 7px;
}
.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_timepicker .xdsoft_prev,
.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_timepicker .xdsoft_next {
	float: none;
	margin-left: 0;
	margin-right: 14px;
}

.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_prev {
	background-position: -40px 0;
	margin-bottom: 7px;
	margin-top: 0;
}

.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box {
	height: 151px;
	overflow: hidden;
	border-bottom: 1px solid #ddd;
}

.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div {
	background: #f5f5f5;
	border-top: 1px solid #ddd;
	color: #666;
	font-size: 12px;
	text-align: center;
	border-collapse: collapse;
	cursor: pointer;
	border-bottom-width: 0;
	height: 25px;
	line-height: 25px;
}

.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div > div:first-child {
	border-top-width: 0;
}

.xdsoft_datetimepicker .xdsoft_today_button:hover,
.xdsoft_datetimepicker .xdsoft_next:hover,
.xdsoft_datetimepicker .xdsoft_prev:hover {
	opacity: 1;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

.xdsoft_datetimepicker .xdsoft_label {
	display: inline;
	position: relative;
	z-index: 9999;
	margin: 0;
	padding: 5px 3px;
	font-size: 14px;
	line-height: 20px;
	font-weight: bold;
	background-color: #fff;
	float: left;
	width: 182px;
	text-align: center;
	cursor: pointer;
}

.xdsoft_datetimepicker .xdsoft_label:hover>span {
	text-decoration: underline;
}

.xdsoft_datetimepicker .xdsoft_label:hover i {
	opacity: 1.0;
}

.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select {
	border: 1px solid #ccc;
	position: absolute;
	right: 0;
	top: 30px;
	z-index: 101;
	display: none;
	background: #fff;
	max-height: 160px;
	overflow-y: hidden;
}

.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select.xdsoft_monthselect{ right: -7px }
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select.xdsoft_yearselect{ right: 2px }
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option:hover {
	color: #fff;
	background: #ff8000;
}

.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option {
	padding: 2px 10px 2px 5px;
	text-decoration: none !important;
}

.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option.xdsoft_current {
	background: #33aaff;
	box-shadow: #178fe5 0 1px 3px 0 inset;
	color: #fff;
	font-weight: 700;
}

.xdsoft_datetimepicker .xdsoft_month {
	width: 100px;
	text-align: right;
}

.xdsoft_datetimepicker .xdsoft_calendar {
	clear: both;
}

.xdsoft_datetimepicker .xdsoft_year{
	width: 48px;
	margin-left: 5px;
}

.xdsoft_datetimepicker .xdsoft_calendar table {
	border-collapse: collapse;
	width: 100%;

}

.xdsoft_datetimepicker .xdsoft_calendar td > div {
	padding-right: 5px;
}

.xdsoft_datetimepicker .xdsoft_calendar th {
	height: 25px;
}

.xdsoft_datetimepicker .xdsoft_calendar td,.xdsoft_datetimepicker .xdsoft_calendar th {
	width: 14.2857142%;
	background: #f5f5f5;
	border: 1px solid #ddd;
	color: #666;
	font-size: 12px;
	text-align: right;
	vertical-align: middle;
	padding: 0;
	border-collapse: collapse;
	cursor: pointer;
	height: 25px;
}
.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_calendar td,.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_calendar th {
	width: 12.5%;
}

.xdsoft_datetimepicker .xdsoft_calendar th {
	background: #f1f1f1;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_today {
	color: #33aaff;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_highlighted_default {
	background: #ffe9d2;
	box-shadow: #ffb871 0 1px 4px 0 inset;
	color: #000;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_highlighted_mint {
	background: #c1ffc9;
	box-shadow: #00dd1c 0 1px 4px 0 inset;
	color: #000;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_default,
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div.xdsoft_current {
	background: #33aaff;
	box-shadow: #178fe5 0 1px 3px 0 inset;
	color: #fff;
	font-weight: 700;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_other_month,
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_disabled,
.xdsoft_datetimepicker .xdsoft_time_box >div >div.xdsoft_disabled {
	opacity: 0.5;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
	cursor: default;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_other_month.xdsoft_disabled {
	opacity: 0.2;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=20)";
}

.xdsoft_datetimepicker .xdsoft_calendar td:hover,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div:hover {
	color: #fff !important;
	background: #ff8000 !important;
	box-shadow: none !important;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current.xdsoft_disabled:hover,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box>div>div.xdsoft_current.xdsoft_disabled:hover {
	background: #33aaff !important;
	box-shadow: #178fe5 0 1px 3px 0 inset !important;
	color: #fff !important;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_disabled:hover,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div.xdsoft_disabled:hover {
	color: inherit	!important;
	background: inherit !important;
	box-shadow: inherit !important;
}

.xdsoft_datetimepicker .xdsoft_calendar th {
	font-weight: 700;
	text-align: center;
	color: #999;
	cursor: default;
}

.xdsoft_datetimepicker .xdsoft_copyright {
	color: #ccc !important;
	font-size: 10px;
	clear: both;
	float: none;
	margin-left: 8px;
}

.xdsoft_datetimepicker .xdsoft_copyright a { color: #eee !important }
.xdsoft_datetimepicker .xdsoft_copyright a:hover { color: #aaa !important }

.xdsoft_time_box {
	position: relative;
	border: 1px solid #ccc;
}
.xdsoft_scrollbar >.xdsoft_scroller {
	background: #ccc !important;
	height: 20px;
	border-radius: 3px;
}
.xdsoft_scrollbar {
	position: absolute;
	width: 7px;
	right: 0;
	top: 0;
	bottom: 0;
	cursor: pointer;
}
.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_scrollbar {
	left: 0;
	right: auto;
}
.xdsoft_scroller_box {
	position: relative;
}

.xdsoft_datetimepicker.xdsoft_dark {
	box-shadow: 0 5px 15px -5px rgba(255, 255, 255, 0.506);
	background: #000;
	border-bottom: 1px solid #444;
	border-left: 1px solid #333;
	border-right: 1px solid #333;
	border-top: 1px solid #333;
	color: #ccc;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box {
	border-bottom: 1px solid #222;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box >div >div {
	background: #0a0a0a;
	border-top: 1px solid #222;
	color: #999;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label {
	background-color: #000;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select {
	border: 1px solid #333;
	background: #000;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select > div > .xdsoft_option:hover {
	color: #000;
	background: #007fff;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select > div > .xdsoft_option.xdsoft_current {
	background: #cc5500;
	box-shadow: #b03e00 0 1px 3px 0 inset;
	color: #000;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label i,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_prev,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_next,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_today_button {
	background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAeCAYAAADaW7vzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QUExQUUzOTA0M0UyMTFFNDlBM0FFQTJENTExRDVBODYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QUExQUUzOTE0M0UyMTFFNDlBM0FFQTJENTExRDVBODYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBQTFBRTM4RTQzRTIxMUU0OUEzQUVBMkQ1MTFENUE4NiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBQTFBRTM4RjQzRTIxMUU0OUEzQUVBMkQ1MTFENUE4NiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pp0VxGEAAAIASURBVHja7JrNSgMxEMebtgh+3MSLr1T1Xn2CHoSKB08+QmR8Bx9A8e7RixdB9CKCoNdexIugxFlJa7rNZneTbLIpM/CnNLsdMvNjM8l0mRCiQ9Ye61IKCAgZAUnH+mU3MMZaHYChBnJUDzWOFZdVfc5+ZFLbrWDeXPwbxIqrLLfaeS0hEBVGIRQCEiZoHQwtlGSByCCdYBl8g8egTTAWoKQMRBRBcZxYlhzhKegqMOageErsCHVkk3hXIFooDgHB1KkHIHVgzKB4ADJQ/A1jAFmAYhkQqA5TOBtocrKrgXwQA8gcFIuAIO8sQSA7hidvPwaQGZSaAYHOUWJABhWWw2EMIH9QagQERU4SArJXo0ZZL18uvaxejXt/Em8xjVBXmvFr1KVm/AJ10tRe2XnraNqaJvKE3KHuUbfK1E+VHB0q40/y3sdQSxY4FHWeKJCunP8UyDdqJZenT3ntVV5jIYCAh20vT7ioP8tpf6E2lfEMwERe+whV1MHjwZB7PBiCxcGQWwKZKD62lfGNnP/1poFAA60T7rF1UgcKd2id3KDeUS+oLWV8DfWAepOfq00CgQabi9zjcgJVYVD7PVzQUAUGAQkbNJTBICDhgwYTjDYD6XeW08ZKh+A4pYkzenOxXUbvZcWz7E8ykRMnIHGX1XPl+1m2vPYpL+2qdb8CDAARlKFEz/ZVkAAAAABJRU5ErkJggg==);
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
	background: #0a0a0a;
	border: 1px solid #222;
	color: #999;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
	background: #0e0e0e;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_today {
	color: #cc5500;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_highlighted_default {
	background: #ffe9d2;
	box-shadow: #ffb871 0 1px 4px 0 inset;
	color:#000;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_highlighted_mint {
	background: #c1ffc9;
	box-shadow: #00dd1c 0 1px 4px 0 inset;
	color:#000;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_default,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_current,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box >div >div.xdsoft_current {
	background: #cc5500;
	box-shadow: #b03e00 0 1px 3px 0 inset;
	color: #000;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td:hover,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box >div >div:hover {
	color: #000 !important;
	background: #007fff !important;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
	color: #666;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright { color: #333 !important }
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright a { color: #111 !important }
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright a:hover { color: #555 !important }

.xdsoft_dark .xdsoft_time_box {
	border: 1px solid #333;
}

.xdsoft_dark .xdsoft_scrollbar >.xdsoft_scroller {
	background: #333 !important;
}
.xdsoft_datetimepicker .xdsoft_save_selected {
    display: block;
    border: 1px solid #dddddd !important;
    margin-top: 5px;
    width: 100%;
    color: #454551;
    font-size: 13px;
}
.xdsoft_datetimepicker .blue-gradient-button {
	font-family: "museo-sans", "Book Antiqua", sans-serif;
	font-size: 12px;
	font-weight: 300;
	color: #82878c;
	height: 28px;
	position: relative;
	padding: 4px 17px 4px 33px;
	border: 1px solid #d7d8da;
	background: -moz-linear-gradient(top, #fff 0%, #f4f8fa 73%);
	/* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(73%, #f4f8fa));
	/* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #fff 0%, #f4f8fa 73%);
	/* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #fff 0%, #f4f8fa 73%);
	/* Opera 11.10+ */
	background: -ms-linear-gradient(top, #fff 0%, #f4f8fa 73%);
	/* IE10+ */
	background: linear-gradient(to bottom, #fff 0%, #f4f8fa 73%);
	/* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fff', endColorstr='#f4f8fa',GradientType=0 );
/* IE6-9 */
}
.xdsoft_datetimepicker .blue-gradient-button:hover, .xdsoft_datetimepicker .blue-gradient-button:focus, .xdsoft_datetimepicker .blue-gradient-button:hover span, .xdsoft_datetimepicker .blue-gradient-button:focus span {
  color: #454551;
  background: -moz-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f4f8fa), color-stop(73%, #FFF));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* IE10+ */
  background: linear-gradient(to bottom, #f4f8fa 0%, #FFF 73%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f4f8fa', endColorstr='#FFF',GradientType=0 );
  /* IE6-9 */
}

</style>
<!-- //close css datepiker -->