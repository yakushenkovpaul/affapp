@extends('dashboard')

@section('content')

    <!-- DASHBOARD SECTION -->
    <section class="clearfix bg-dark equalHeight dashboardSection">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default panel-card">
                        <div class="panel-heading">
                            Listings <span class="label label-primary">Monthly</span>
                        </div>
                        <div class="panel-body">
                            <h2>71,503</h2>
                            <p>Compare to last month <span class="resultInfo resultUp">10% <i class="fa fa-level-up" aria-hidden="true"></i></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default panel-card">
                        <div class="panel-heading">
                            Visits <span class="label label-primary">Today</span>
                        </div>
                        <div class="panel-body">
                            <h2>5,00,103</h2>
                            <p>Compare to yesterday <span class="resultInfo resultDown">5% <i class="fa fa-level-down" aria-hidden="true"></i></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default panel-card">
                        <div class="panel-heading">
                            Search <span class="label label-primary">Today</span>
                        </div>
                        <div class="panel-body">
                            <h2>31,200</h2>
                            <p>Compare to yesterday <span class="resultInfo resultUp">10% <i class="fa fa-level-up"></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default panel-card">
                        <div class="panel-heading">
                            Orders
                            <span class="rightContent">
							<span class="dateRange">
								<label>From:</label>
								<div class="dateSelect">
									<div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
										<input type="text" class="form-control" placeholder="mm/dd/yyyy">
										<div class="input-group-addon">
											<i class="fa fa-calendar" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</span>
							<span class="dateRange">
								<label>To:</label>
								<div class="dateSelect">
									<div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
										<input type="text" class="form-control" placeholder="mm/dd/yyyy">
										<div class="input-group-addon">
											<i class="fa fa-calendar" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</span>
							<span class="btn-group btn-panel">
								<button type="button" class="btn btn-primary active">Daily</button>
								<button type="button" class="btn btn-primary">Weekly</button>
								<button type="button" class="btn btn-primary">Monthly</button>
							</span>
						</span>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-3 col-xs-12">
                                    <div class="chartInfo">
                                        <h2>2,450</h2>
                                        <p>Total Orders</p>
                                    </div>
                                    <div class="chartInfo">
                                        <h2>$50,500</h2>
                                        <p>Total Payments</p>
                                    </div>
                                </div>
                                <div class="col-sm-9 col-xs-12">
                                    <div class="flot-chart">
                                        <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $graphs = 111;
    @endphp

@stop
