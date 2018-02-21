@extends('adminlte::master')

@section('body')
    <div class="wrapper">

        <!-- Main Header -->
        <header id="header">
            <ul class="top-menu">
                <li class="top-menu__trigger hidden-lg hidden-md">
                    <a href=""><i class="zmdi zmdi-search"></i></a>
                </li>

                <li class="top-menu__apps dropdown hidden-xs hidden-sm">
                    <a data-toggle="dropdown" href="">
                        <i class="zmdi zmdi-apps"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="">
                                <i class="zmdi zmdi-calendar"></i>
                                <small>Calendar</small>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <i class="zmdi zmdi-file-text"></i>
                                <small>Files</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="zmdi zmdi-email"></i>
                                <small>Mail</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="zmdi zmdi-trending-up"></i>
                                <small>Analytics</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="zmdi zmdi-view-headline"></i>
                                <small>News</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="zmdi zmdi-image"></i>
                                <small>Gallery</small>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown hidden-xs">
                    <a data-toggle="dropdown" href=""><i class="zmdi zmdi-more-vert"></i></a>
                    <ul class="dropdown-menu dropdown-menu--icon pull-right">
                        <li class="hidden-xs">
                            <a data-mae-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                        </li>
                        <li>
                            <a data-mae-action="clear-localstorage" href=""><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-face"></i> Privacy Settings</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-settings"></i> Other Settings</a>
                        </li>
                    </ul>
                </li>
                <li class="top-menu__alerts" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__messages">
                    <a href=""><i class="zmdi zmdi-notifications"></i></a>
                </li>
                <li class="top-menu__profile dropdown">
                    <a data-toggle="dropdown" href="">
                        <img src="demo/img/profile-pics/1.jpg" alt="">
                    </a>

                    <ul class="dropdown-menu pull-right dropdown-menu--icon">
                        <li>
                            <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-settings"></i> Settings</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-time-restore"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <form class="top-search">
                <input type="text" class="top-search__input" placeholder="Search for people, files &amp; reports">
                <i class="zmdi zmdi-search top-search__reset"></i>
            </form>
        </header>
        
        <!-- Left side column. contains the logo and sidebar -->
              






        <aside id="navigation">
            <div class="navigation__header">
                <i class="zmdi zmdi-long-arrow-left" data-mae-action="block-close"></i>
            </div>
            <div class="navigation__toggles">
                <a href="" class="active" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__messages">
                    <i class="zmdi zmdi-email"></i>
                </a>
                <a href="" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__updates">
                    <i class="zmdi zmdi-notifications"></i>
                </a>
                <a href="" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__tasks">
                    <i class="zmdi zmdi-playlist-plus"></i>
                </a>
            </div>
            <div class="navigation__menu c-overflow mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" style="position: relative; overflow: visible;">
                <div id="mCSB_1" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical_horizontal mCSB_outside" style="max-height: none;" tabindex="0">
                    <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y mCS_x_hidden mCS_no_scrollbar_x" style="position: relative; top: 0px; left: 0px; width: 100%;" dir="ltr">
                        <ul>
                            <li class="navigation__active">
                                <a href="index.html"><i class="zmdi zmdi-home"></i> Home</a>
                            </li>
                            <li><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>
                            <li><a href="widgets.html"><i class="zmdi zmdi-widgets"></i> Widgets</a></li>
                            <li class="navigation__sub">
                                <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-view-list"></i> Tables</a>

                                <ul>
                                    <li><a href="tables.html">Normal Tables</a></li>
                                    <li><a href="data-tables.html">Data Tables</a></li>
                                </ul>
                            </li>
                            <li class="navigation__sub">
                                <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-collection-text"></i> Forms</a>
                                <ul>
                                    <li><a href="form-elements.html">Basic Form Elements</a></li>
                                    <li><a href="form-components.html">Form Components</a></li>
                                    <li><a href="form-examples.html">Form Examples</a></li>
                                    <li><a href="form-validations.html">Form Validation</a></li>
                                </ul>
                            </li>
                            <li class="navigation__sub">
                                <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-swap-alt"></i>User Interface</a>
                                <ul>
                                    <li><a href="animations.html">Animations</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="icons.html">Icons</a></li>
                                    <li><a href="alerts.html">Alerts</a></li>
                                    <li><a href="preloaders.html">Preloaders</a></li>
                                    <li><a href="notification-dialog.html">Notifications &amp; Dialogs</a></li>
                                    <li><a href="media.html">Media</a></li>
                                    <li><a href="components.html">Components</a></li>
                                </ul>
                            </li>
                            <li class="navigation__sub">
                                <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-trending-up"></i>Charts</a>
                                <ul>
                                    <li><a href="flot-charts.html">Flot Chart</a></li>
                                    <li><a href="other-charts.html">Others</a></li>
                                </ul>
                            </li>
                            <li class="navigation__sub">
                                <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-image"></i>Photo Gallery</a>
                                <ul>
                                    <li><a href="photos.html">Default</a></li>
                                    <li><a href="photo-timeline.html">Timeline</a></li>
                                </ul>
                            </li>
                            <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>
                            <li><a href="generic-classes.html"><i class="zmdi zmdi-layers"></i> Generic Classes</a></li>
                            <li class="navigation__sub">
                                <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>
                                <ul>
                                    <li><a href="profile-timeline.html">Profile</a></li>
                                    <li><a href="list-view.html">List View</a></li>
                                    <li><a href="messages.html">Messages</a></li>
                                    <li><a href="pricing-table.html">Pricing Table</a></li>
                                    <li><a href="contacts.html">Contacts</a></li>
                                    <li><a href="wall.html">Wall</a></li>
                                    <li><a href="invoice.html">Invoice</a></li>
                                    <li><a href="login.html">Login and Sign Up</a></li>
                                    <li><a href="lockscreen.html">Lockscreen</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: none;">
                    <div class="mCSB_draggerContainer">
                        <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; height: 0px; top: 0px;">
                            <div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
                        </div>
                        <div class="mCSB_draggerRail"></div>
                    </div>
                </div>
                <div id="mCSB_1_scrollbar_horizontal" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_horizontal" style="display: none;">
                    <div class="mCSB_draggerContainer">
                        <div id="mCSB_1_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 50px; width: 0px; left: 0px;">
                            <div class="mCSB_dragger_bar"></div>
                        </div>
                        <div class="mCSB_draggerRail"></div>
                    </div>
                </div>
            </div>
        </aside>
        <section id="main" style="padding-top: 100px;">
            <section id="content">
                @yield('content')    
            </section>                
        </section>
    </div>
@stop
