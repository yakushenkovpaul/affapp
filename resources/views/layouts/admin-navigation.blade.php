<div class="navbar-dashboard-area">
    <nav class="navbar navbar-default lightHeader navbar-dashboard" role="navigation">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-dash">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-dash">
                <ul class="nav navbar-nav mr0">
                    @if (Gate::allows('admin'))
                    <li @if(Request::is('admin/dashboard', 'admin/dashboard/*')) class="active" @endif>
                        <a href="{!! url('admin/dashboard') !!}"><i class="fa fa-tachometer icon-dash" aria-hidden="true"></i> Dashboard</a>
                    </li>
                    <li class="dropdown singleDrop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user icon-dash" aria-hidden="true"></i> Users <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li @if(Request::is('admin/users', 'admin/users/*')) class="active" @endif><a href="{!! url('admin/users') !!}">List</a></li>
                            <li @if(Request::is('admin/roles', 'admin/roles/*')) class="active" @endif><a href="{!! url('admin/roles') !!}">Roles</a></li>
                        </ul>
                    </li>
                    <li @if(Request::is('admin/merchants', 'admin/merchants/*')) class="active" @endif><a href="{!! url('admin/merchants') !!}"><i class="fa fa-shopping-cart icon-dash" aria-hidden="true"></i> Merchants</a></li>
                    <li @if(Request::is('admin/clubs', 'admin/clubs/*')) class="active" @endif><a href="{!! url('admin/clubs') !!}"><i class="fa fa fa-soccer-ball-o icon-dash" aria-hidden="true"></i> Clubs</a></li>
                    <li @if(Request::is('admin/sales', 'admin/sales/*')) class="active" @endif><a href="{!! url('admin/sales') !!}"><i class="fa fa-pie-chart icon-dash" aria-hidden="true"></i> Sales</a></li>
                    @endif
                </ul>
                @if (Gate::allows('admin'))
                <div class="row adjustRow">
                    <div class="pull-right col-xs-12 col-sm-2">
                        @php
                            $arr = explode('.', Route::currentRouteName());
                            $search = false;

                            switch ($arr[0])
                            {
                                case 'clubs': $search = true;
                                case 'merchants': $search = true;
                            }
                        @endphp
                        @if ($search == true)
                        {!! Form::open(['route' => $arr[0] . '.search', 'class'=>'navbar-form']) !!}
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="search..." name="search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="icon-listy icon-search-2"></i></button>
                                  </span>
                            </div>
                        {!! Form::close() !!}
                        @endif
                    </div>
                </div>
                @endif
            </div>
        </div>
    </nav>
</div>

