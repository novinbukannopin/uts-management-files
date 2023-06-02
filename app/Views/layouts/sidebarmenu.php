<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item nav-category">Features</li>

        <li class="nav-item">
            <a class="nav-link " href="<?php base_url() ?>/categories">
                <i class="menu-icon mdi mdi-apps"></i>
                <span class="menu-title">Categories</span></a>
        </li>


        <li class="nav-item">
            <a class="nav-link " data-bs-toggle="collapse" href="#tables" aria-expanded="true" aria-controls="tables">
                <i class="menu-icon mdi mdi-animation"></i>
                <span class="menu-title">Files</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables" style="">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php base_url() ?>/files">Files Index</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item nav-category">Administration</li>
        <li class="nav-item">
            <a class="nav-link" href="<?php base_url() ?>/users">
                <i class="menu-icon mdi mdi-account"></i>
                <span class="menu-title">Users</span>
            </a>
        </li>
    </ul>
</nav>