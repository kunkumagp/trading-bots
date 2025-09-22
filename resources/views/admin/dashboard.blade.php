@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @extends('layouts.base')

@section('title', 'Trading Bots Dashboard')
@section('page_title', 'Dashboard')
@section('page_description', 'Trading Bot Overview')

@section('breadcrumb')
<li class="active">Dashboard</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>150</h3>
                <p>Active Bots</p>
            </div>
            <div class="icon">
                <i class="fa fa-robot"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>
                <p>Success Rate</p>
            </div>
            <div class="icon">
                <i class="fa fa-line-chart"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>44</h3>
                <p>Pending Orders</p>
            </div>
            <div class="icon">
                <i class="fa fa-clock-o"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>65</h3>
                <p>Failed Trades</p>
            </div>
            <div class="icon">
                <i class="fa fa-exclamation-triangle"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->

<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-7 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
                <li class="active"><a href="#revenue-chart" data-toggle="tab">Trading Volume</a></li>
                <li><a href="#sales-chart" data-toggle="tab">Profit/Loss</a></li>
                <li class="pull-left header"><i class="fa fa-inbox"></i> Trading Analytics</li>
            </ul>
            <div class="tab-content no-padding">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                    <canvas id="tradingChart" style="height: 300px;"></canvas>
                </div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="profitChart" style="height: 300px;"></canvas>
                </div>
            </div>
        </div>
        <!-- /.nav-tabs-custom -->

        <!-- Recent Trades Box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Recent Trades</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                            <tr>
                                <th>Bot Name</th>
                                <th>Symbol</th>
                                <th>Action</th>
                                <th>Profit/Loss</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">Bot Alpha</a></td>
                                <td>BTC/USD</td>
                                <td><span class="label label-success">Buy</span></td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-success" style="width: 55%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-green">+$125.50</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">Bot Beta</a></td>
                                <td>ETH/USD</td>
                                <td><span class="label label-warning">Sell</span></td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-danger" style="width: 30%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-red">-$45.20</span></td>
                            </tr>
                            <tr>
                                <td><a href="#">Bot Gamma</a></td>
                                <td>ADA/USD</td>
                                <td><span class="label label-success">Buy</span></td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-success" style="width: 70%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-green">+$87.30</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.Left col -->
    
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">
        
        <!-- Trading Markets Box -->
        <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
                <i class="fa fa-map-marker"></i>
                <h3 class="box-title">Trading Markets</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <div class="box-body">
                <div id="world-map" style="height: 250px; width: 100%;">
                    <!-- Trading markets info -->
                    <div class="pad">
                        <strong>Active Markets:</strong><br>
                        Binance, Coinbase Pro, KuCoin<br><br>
                        <strong>Total Volume:</strong> $2,547,890<br>
                        <strong>Active Pairs:</strong> BTC/USDT, ETH/USDT, ADA/USDT
                    </div>
                </div>
            </div>
            <!-- /.box-body-->
        </div>
        <!-- /.box -->

        <!-- System Status Box -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">System Status</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="chart-responsive">
                            <canvas id="pieChart" height="150"></canvas>
                        </div>
                        <!-- ./chart-responsive -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4">
                        <ul class="chart-legend clearfix">
                            <li><i class="fa fa-circle-o text-green"></i> Database</li>
                            <li><i class="fa fa-circle-o text-yellow"></i> Exchange API</li>
                            <li><i class="fa fa-circle-o text-aqua"></i> Trading Engine</li>
                        </ul>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- right col -->
</div>
<!-- /.row (main row) -->
@endsection

@section('scripts')
<script>
// Add your custom JavaScript for charts here
console.log('Trading Bots AdminLTE Dashboard Loaded');
</script>
@endsection

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>150</h3>
                                    <p>Active Bots</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-robot"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>53<sup style="font-size: 20px">%</sup></h3>
                                    <p>Success Rate</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>44</h3>
                                    <p>Pending Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>65</h3>
                                    <p>Failed Trades</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Recent Trades</h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Bot Name</th>
                                                <th>Symbol</th>
                                                <th>Action</th>
                                                <th>Profit/Loss</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Bot Alpha</td>
                                                <td>BTC/USD</td>
                                                <td>Buy</td>
                                                <td class="text-success">+$125.50</td>
                                                <td><span class="badge badge-success">Complete</span></td>
                                            </tr>
                                            <tr>
                                                <td>Bot Beta</td>
                                                <td>ETH/USD</td>
                                                <td>Sell</td>
                                                <td class="text-danger">-$45.20</td>
                                                <td><span class="badge badge-danger">Failed</span></td>
                                            </tr>
                                            <tr>
                                                <td>Bot Gamma</td>
                                                <td>ADA/USD</td>
                                                <td>Buy</td>
                                                <td class="text-success">+$87.30</td>
                                                <td><span class="badge badge-success">Complete</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">System Status</h3>
                                </div>
                                <div class="card-body">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-info"><i class="fas fa-database"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Database Connection</span>
                                            <span class="info-box-number text-success">Connected</span>
                                        </div>
                                    </div>

                                    <div class="info-box">
                                        <span class="info-box-icon bg-success"><i class="fas fa-exchange-alt"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Exchange API</span>
                                            <span class="info-box-number text-success">Active</span>
                                        </div>
                                    </div>

                                    <div class="info-box">
                                        <span class="info-box-icon bg-warning"><i class="fas fa-cogs"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Trading Engine</span>
                                            <span class="info-box-number text-success">Running</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.small-box {
    border-radius: 2px;
    position: relative;
    display: block;
    margin-bottom: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}

.small-box > .inner {
    padding: 10px;
}

.small-box .icon {
    transition: all .3s linear;
    position: absolute;
    top: -10px;
    right: 10px;
    z-index: 0;
    font-size: 90px;
    color: rgba(0,0,0,0.15);
}

.small-box h3 {
    font-size: 38px;
    font-weight: bold;
    margin: 0 0 10px 0;
    white-space: nowrap;
    padding: 0;
}

.small-box p {
    font-size: 15px;
}

.small-box .small-box-footer {
    position: relative;
    text-align: center;
    padding: 3px 0;
    color: #fff;
    color: rgba(255,255,255,0.8);
    display: block;
    z-index: 10;
    background: rgba(0,0,0,0.1);
    text-decoration: none;
}

.small-box .small-box-footer:hover {
    color: #fff;
    background: rgba(0,0,0,0.15);
}

.info-box {
    display: block;
    min-height: 90px;
    background: #fff;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    border-radius: 2px;
    margin-bottom: 15px;
}

.info-box-icon {
    border-top-left-radius: 2px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 2px;
    display: block;
    float: left;
    height: 90px;
    width: 90px;
    text-align: center;
    font-size: 45px;
    line-height: 90px;
    background: rgba(0,0,0,0.2);
}

.info-box-content {
    padding: 5px 10px;
    margin-left: 90px;
}

.info-box-text {
    text-transform: uppercase;
    font-weight: bold;
    display: block;
    font-size: 14px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.info-box-number {
    display: block;
    font-weight: bold;
    font-size: 18px;
}
</style>
@endsection