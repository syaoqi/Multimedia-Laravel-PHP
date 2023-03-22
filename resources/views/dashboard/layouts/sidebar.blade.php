 <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        @can('admin')
                         <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="m-r-10 mdi mdi-account"></i><span class="hide-menu">Administrator </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/dashboard/categories" class="sidebar-link"><i class="mdi mdi-receipt"></i><span class="hide-menu"> Categories </span></a></li>
                                <li class="sidebar-item"><a href="/dashboard/categories" class="sidebar-link"><i class="m-r-10 mdi mdi-account-location"></i><span class="hide-menu"> Users </span></a></li>
                            </ul>
                        </li>
                        @endcan
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Tables </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/dashboard/posts" class="sidebar-link"><i class=""></i><span class="hide-menu"> Posts </span></a></li>
                            </ul>
                        </li>
                         <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Galery </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/dashboard/allcategories" class="sidebar-link"><i class=""></i><span class="hide-menu"> All Categories </span></a></li>
                                <li class="sidebar-item"><a href="/dashboard/allposts" class="sidebar-link"><i class=""></i><span class="hide-menu"> All Posts </span></a></li>
                                {{-- <li class="sidebar-item"><a href="/dashboard/ap" class="sidebar-link"><i class=""></i><span class="hide-menu"> comment </span></a></li> --}}
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
