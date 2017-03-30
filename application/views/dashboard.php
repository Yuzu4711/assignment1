<div class="row">
    <div class="col-lg-3 col-md-6">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-industry fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">{partsCount}</div>
                    <div># of parts in stock</div>
                </div>
            </div>
        </div>
        <a href="/Inventory">
            <div class="panel-footer">
                <span class="pull-left">View Parts</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>

    <div class="col-lg-3 col-md-6">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-cubes fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">{robotsCount}</div>
                    <div># of assembled robots</div>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="panel-footer">
                <span class="pull-left">View Assembled Bots</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>



<div class="col-lg-3 col-md-6">
    <div class="panel panel-danger">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-child fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge" id="spent">{spent}</div>
                    <div>$ Spent</div>
                </div>
            </div>
        </div>
        <a href="/production/bots">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>


<div class="col-lg-3 col-md-6">
    <div class="panel panel-success">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-child fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge" id="earned">{earned}</div>
                    <div>$ Earned</div>
                </div>
            </div>
        </div>
        <a href="/production/bots">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>


     <div class="col-lg-3 col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="glyphicon glyphicon-usd"></i>
                </div>
                <div class="col-xs-9 text-right">
                     <div class="huge">{balance}</div>
                    <div>Current Balance</div>
                </div>
            </div>
        </div>
        <a href="/production/bots">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>

</div>




<div class="panel-body text-center">
     <div id="sales-donut-chart"></div>
</div>


<script>

    function renderProfitsPieGraph(earned, spent){


        Morris.Donut({
          element: 'sales-donut-chart',
          data: [
            {label: "$ spent", value: spent},
            {label: "$ earned", value: earned}
          ]
        });
    }

    window.onload = function() {
        renderProfitsPieGraph($("#earned").html(), $("#spent").html());
    };

</script>