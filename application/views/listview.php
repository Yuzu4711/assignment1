<link rel="stylesheet" type="text/css" href="/assets/css/parts.css"/>

<h1 class="text-danger text-center"> Inventory of Parts (ordered by piece type) </h1>
<div class="panel-heading text-center">
    <span class="text-info">Blue = Head</span>
    <span class="text-info">Green = Body</span>
    <span class="text-info">Yellow = Feet</span>
</div>
<div class="partsContainer">
    <div class="row">
        {listElements}
            <div class="col-md-4 partDisplay {colorInfo}">
                <img height=50 width=100 src="/assets/parts/{imgSrc}" title="{type}"
                onclick='displayPartInfo({id})'/>
                Type: {type}
                Certificate: {certificate}
                
            </div>
        {/listElements}
    </div>
</div>

<button onclick="location.href = '/inventory/buildMoreParts';" class='btn btn-lg centerButton'>Build more parts</button>

<button onclick="confirmPurchase()" class='btn btn-lg btn-danger centerButton'>Buy parts</button>
