     <!-- ROW  -->
<div class="row">
    <div class="col-md-12">
     <h2 class='text-center'>Yuzu Bot Factory</h2>   
        
    </div>
</div> 

<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-red set-icon">
                <i class="glyphicon glyphicon-shopping-cart"></i>
            </span>
            <div class="text-box" >
                <p class="main-text">{partsCount}</p>
                <p class="text-muted"> # of parts in stock</p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-green set-icon">
                <i class="glyphicon glyphicon-shopping-cart"></i>
            </span>
            <div class="text-box" >
                <p class="main-text">{robotsCount}</p>
                <p class="text-muted"># of assembled robots</p>
            </div>
         </div>
     </div>
    
    <div class="col-md-3 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-greenlor-blue set-icon">
                <i class="glyphicon glyphicon-usd"></i>
            </span>
            <div class="text-box" >
                <p class="main-text">69000</p>
                <p class="text-muted">$ spent</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-brown set-icon">
                <i class="glyphicon glyphicon-usd"></i>
            </span>
            <div class="text-box" >
                <p class="main-text">100000</p>
                <p class="text-muted">$ earned</p>
            </div>
        </div>
    </div>
    
</div><!--./ROW -->




<div class="panel-body text-center">
     <div id="sales-donut-chart"></div>
</div>


<script>

    function renderProfitsPieGraph(earned, spent){


        Morris.Donut({
          element: 'sales-donut-chart',
          data: [
            {label: "$ spent", value: earned},
            {label: "$ earned", value: spent}
          ]
        });
    }

    window.onload = function() {
      renderProfitsPieGraph(69000, 100000);
    };

</script>