<div class="topbar">
    <div class="topbar-left">
        <div class="logo">
            <h1 class="title">Dashboard</h1>
        </div>

    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar" role="navigation">

        <div class="container">

            <div class="navbar-collapse2">
                <ul class="nav navbar-nav navbar-right top-navbar">
                    <li>
                        <!-- Search form -->
                        <form role="search" class="navbar-form">
                            <div class="form-group">
                                <input type="text" placeholder="Search here..." class="form-control">
                                <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                    <li class="right-opener">
                        <a href="{{url('/logout')}}" class=""><i class="fa fa-power-off" aria-hidden="true"></i></a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
