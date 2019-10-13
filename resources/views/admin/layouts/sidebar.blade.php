<div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Member List</span>
            </a>

            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="{{ route('admin.memberlist') }}">All Members</a>
                <a class="dropdown-item" href="{{ route('admin.verifiedMembers') }}">Pending Members</a>

                <h6 class="dropdown-header">Banned / Black:</h6>
                <a class="dropdown-item" href="{{ route('admin.bannedMember') }}">Banned Members</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ route('admin.listPackages') }}" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Packages List</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header">Packages type:</h6>
                <a class="dropdown-item" href="{{ route('admin.listPackages') }}">All packages list</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Other Pages:</h6>

                <a class="dropdown-item" href="blank.html">Blank Page</a>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.create') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Add food package</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.showpackages') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>All food package</span></a>
        </li>

    </ul>
</div>

