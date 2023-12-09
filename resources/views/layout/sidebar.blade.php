<div id="app-sidepanel" class="app-sidepanel">
    <div id="sidepanel-drop" class="sidepanel-drop"></div>
    <div class="sidepanel-inner d-flex flex-column">
        <a id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
        <div class="app-branding">
            <a class="app-logo" href="index.html"><img class="logo-icon me-2" src="/assets/images/imtech.svg"
                    alt="logo"><span class="logo-text">IIMS</span></a>

        </div><!--//app-branding-->

        <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
            <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link 
                    @if (Request::is('dashboard')) active @endif
                    
                    "
                        href="/">
                        <span class="nav-icon">

                            <i class="bi bi-speedometer2"></i> </span>
                        <span class="nav-link-text">Overview</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->
                {{-- <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link @if (Request::is('items')) active @endif" href="items">
                        <span class="nav-icon">
                            <i class="bi bi-box-seam"></i>
                        </span>
                        <span class="nav-link-text">Item</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item--> --}}


                <li class="nav-item has-submenu">
                    <a class="nav-link submenu-toggle @if (Request::is('items')) active @endif"
                        data-bs-toggle="collapse" data-bs-target="#submenu-0" style="cursor: pointer;"
                        aria-expanded="false" aria-controls="submenu-0">
                        <span class="nav-icon">
                            <i class="bi bi-box-seam"></i>
                        </span>
                        <span class="nav-link-text">Items</span>
                        <span class="submenu-arrow ">
                            <i class="bi bi-chevron-down @if (Request::is('items')) text-primary @endif"
                                style="font-size: 1.2rem;"></i>
                        </span><!--//submenu-arrow-->
                    </a><!--//nav-link-->
                    <div id="submenu-0" class="collapse submenu submenu-0" data-bs-parent="#menu-accordion">
                        <ul class="submenu-list list-unstyled">
                            <li class="submenu-item"><a
                                    class="submenu-link @if (Request::is('items')) active @endif"
                                    href="/items"><i class="bi bi-plus-square" style="font-size: 1rem"></i>
                                    New</a>
                            </li>
                            <li class="submenu-item">
                                <a class="submenu-link @if (Request::is('items.view')) active @endif"
                                    href="/items.view"><i class="bi bi-table" style="font-size: 1rem"></i> View</a>
                            </li>
                        </ul>
                    </div>
                </li><!--//nav-item-->


                <li class="nav-item">
                    <a class="nav-link @if (Request::is('transfer')) active @endif" href="/transfer">
                        <span class="nav-icon">
                            <i class="bi bi-arrow-left-right"></i>
                        </span>
                        <span class="nav-link-text">Transfer</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->
                <li class="nav-item">
                    <a class="nav-link @if (Request::is('j')) active @endif" href="/transfer">
                        <span class="nav-icon">
                            <i class="bi bi-grid"></i>
                        </span>
                        <span class="nav-link-text">Category</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->


                <li class="nav-item has-submenu">
                    <a class="nav-link submenu-toggle @if (Request::is('users')) active @endif"
                        data-bs-toggle="collapse" data-bs-target="#submenu-1" style="cursor: pointer;"
                        aria-expanded="false" aria-controls="submenu-1">
                        <span class="nav-icon">
                            <i class="bi bi-people"></i>
                        </span>
                        <span class="nav-link-text">Users</span>
                        <span class="submenu-arrow ">
                            <i class="bi bi-chevron-down @if (Request::is('users')) text-primary @endif"
                                style="font-size: 1.2rem;"></i>
                        </span><!--//submenu-arrow-->
                    </a><!--//nav-link-->
                    <div id="submenu-1" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
                        <ul class="submenu-list list-unstyled">
                            <li class="submenu-item"><a
                                    class="submenu-link @if (Request::is('users')) active @endif"
                                    href="/users">Users</a>
                            </li>
                            <li class="submenu-item"><a class="submenu-link" href="/roles">User Roles</a>
                            </li>
                        </ul>
                    </div>
                </li><!--//nav-item-->



                <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link @if (Request::is('help')) active @endif" href="/help">
                        <span class="nav-icon">
                            <i class="bi bi-question-circle"></i>
                        </span>
                        <span class="nav-link-text">Help</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->
            </ul><!--//app-menu-->
        </nav><!--//app-nav-->
        <div class="app-sidepanel-footer">
            <nav class="app-nav app-nav-footer">
                <ul class="app-menu footer-menu list-unstyled">
                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link" href="/settings">
                            <span class="nav-icon">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z" />
                                    <path fill-rule="evenodd"
                                        d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z" />
                                </svg>
                            </span>
                            <span class="nav-link-text">Settings</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                    {{-- Report ************************************************** Report --}}
                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link" href="/report">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-file-earmark-bar-graph" viewBox="0 0 16 16">
                                    <path
                                        d="M10 13.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5z" />
                                    <path
                                        d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                </svg>
                            </span>
                            <span class="nav-link-text">Report</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->

                </ul><!--//footer-menu-->
            </nav>
        </div><!--//app-sidepanel-footer-->

    </div><!--//sidepanel-inner-->
</div><!--//app-sidepanel-->
