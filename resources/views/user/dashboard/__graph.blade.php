<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default panel-card">
            <div class="panel-heading">
                Übersicht Bestellungen
                <span class="rightContent"><span class="dateRange"><label>Seit:</label><div class="dateSelect">
                    <div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
                        <input type="text" class="form-control" placeholder="mm/dd/yyyy">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                    </div>
                </div></span><span class="dateRange"><label>Bis:</label><div class="dateSelect">
                    <div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
                        <input type="text" class="form-control" placeholder="mm/dd/yyyy">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                    </div>
                </div></span><span class="btn-group btn-panel">
                        <button type="button" class="btn btn-primary active" id="graph_lastmonth">Last month</button>
                        <button type="button" class="btn btn-primary">Wöchentlich</button>
                        <button type="button" class="btn btn-primary">Monatlich</button>
                    </span></span>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="chartInfo">
                            <h2>{{ $clubSalesTotal }}</h2>
                            <p>Gesamt Bestellungen</p>
                        </div>
                        <div class="chartInfo">
                            <h2>{{ number_format($clubCommissionTotal, 0, '.', '') }} €</h2>
                            <p>Gesamt Auszahlungen</p>
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


<script>
    function gd(year, month, day) {
        return new Date(year, month - 1, day).getTime();
    }

    @if ($graph_params['commission'])
    var commission = [
            @foreach($graph_params['commission'] as $date => $_array)
            [gd({{ $_array['year'] }}, {{ $_array['month'] }}, {{ $_array['day'] }}), {{ number_format($_array['total'], 0) }}],
            @endforeach
        ];
    @endif

    @if ($graph_params['sales'])
    var sales = [
            @foreach($graph_params['sales'] as $date => $_array)
            [gd({{ $_array['year'] }}, {{ $_array['month'] }}, {{ $_array['day'] }}), {{ number_format($_array['total'], 0) }}],
            @endforeach
        ];
    @endif

</script>