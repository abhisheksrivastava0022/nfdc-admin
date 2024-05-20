<div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">
            <div class="navbar-header">
                <a class="navbar-brand" href="http://localhost/nfdc-admin/public/admin">
                    <div class="logo-icon-container">
                        <img src="{{ asset('img/nfdc-logo.png') }}" alt="Logo Icon">
                    </div>
                    <div class="title">NFDC</div>
                </a>
            </div><!-- .navbar-header -->

            <div class="panel widget center bgimage"
                style="background-image:url({{ asset('img/main-bg.jpg') }}); background-size: cover; background-position: 0px;">
                <div class="dimmer"></div>
                <div class="panel-content">
                    <img src="{{ asset('img/user-default-logo.png') }}" class="avatar" alt="Admin avatar">
                    <h4>Admin</h4>
                    <p>admin@admin.com</p>

                    <a href="http://localhost/nfdc-admin/public/admin/profile" class="btn btn-primary">Profile</a>
                    <div style="clear:both"></div>
                </div>
            </div>

        </div>
        <div id="adminmenu">
            <ul class="nav navbar-nav">
                <li class=""><a target="_self" href="http://localhost/nfdc-admin/public/admin"><span
                            class="icon voyager-boat"></span> <span class="title">Dashboard</span></a>
                    <!---->
                </li>
                <li class=""><a target="_self" href="http://localhost/nfdc-admin/public/admin/roles"><span
                            class="icon voyager-lock"></span> <span class="title">Roles</span></a> <!---->
                </li>
                <li class=""><a target="_self" href="http://localhost/nfdc-admin/public/admin/users"><span
                            class="icon voyager-person"></span> <span class="title">Users</span></a>
                    <!---->
                </li>
                <li class=""><a target="_self" href="http://localhost/nfdc-admin/public/admin/media"><span
                            class="icon voyager-images"></span> <span class="title">Media</span></a>
                    <!---->
                </li>
                <li class=""><a target="_self" href="http://localhost/nfdc-admin/public/admin/posts"><span
                            class="icon voyager-news"></span> <span class="title">Posts</span></a>
                    <!---->
                </li>
                <li class=""><a target="_self" href="http://localhost/nfdc-admin/public/admin/pages"><span
                            class="icon voyager-file-text"></span> <span class="title">Pages</span></a>
                    <!---->
                </li>
                <li class=""><a target="_self" href="http://localhost/nfdc-admin/public/admin/categories"><span
                            class="icon voyager-categories"></span> <span class="title">Categories</span></a> <!---->
                </li>
                <li class="dropdown active"><a target="_self" href="#5-dropdown-element" data-toggle="collapse"
                        aria-expanded="true"><span class="icon voyager-tools"></span> <span
                            class="title">Tools</span></a>
                    <div id="5-dropdown-element" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li class="active"><a target="_self"
                                        href="http://localhost/nfdc-admin/public/admin/menus"><span
                                            class="icon voyager-list"></span> <span class="title">Menu
                                            Builder</span></a> <!----></li>
                                <li class=""><a target="_self"
                                        href="http://localhost/nfdc-admin/public/admin/database"><span
                                            class="icon voyager-data"></span> <span class="title">Database</span></a>
                                    <!---->
                                </li>
                                <li class=""><a target="_self"
                                        href="http://localhost/nfdc-admin/public/admin/compass"><span
                                            class="icon voyager-compass"></span> <span class="title">Compass</span></a>
                                    <!---->
                                </li>
                                <li class=""><a target="_self"
                                        href="http://localhost/nfdc-admin/public/admin/bread"><span
                                            class="icon voyager-bread"></span> <span class="title">BREAD</span></a>
                                    <!---->
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class=""><a target="_self" href="http://localhost/nfdc-admin/public/admin/settings"><span
                            class="icon voyager-settings"></span> <span class="title">Settings</span></a>
                    <!---->
                </li>
            </ul>
        </div>
    </nav>
</div>
