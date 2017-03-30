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

    <!--
        /*
        $response = file_get_contents('https://umbrella.jlparry.com/work/mybuilds?key=44f7c4'); // key = 4676bd
        $parts = json_decode($response, true);
        foreach($parts as $part)
            echo $part['id']." ";
        $msg  = '{"id":"25db2b","model":"r","piece":"2","plant":"yuzu","stamp":"2017-03-29 21:07:23."},
        {"id":"123456","model":"r","piece":"2","plant":"yuzu","stamp":"2017-03-29 21:07:24."}';
        $json = json_decode($msg);
        $length = count($json);
        echo 'array length: '.$length;
        array(5) { [0]=> object(stdClass)#18 (5) { ["id"]=> string(6) "1b9c1d" ["model"]=> string(1) "r" ["piece"]=> string(1) "2" ["plant"]=> string(4) "yuzu" ["stamp"]=> string(20) "2017-03-30 00:04:34." } [1]=> object(stdClass)#19 (5) { ["id"]=> string(6) "27ba05" ["model"]=> string(1) "r" ["piece"]=> string(1) "2" ["plant"]=> string(4) "yuzu" ["stamp"]=> string(20) "2017-03-30 00:04:34." } [2]=> object(stdClass)#20 (5) { ["id"]=> string(6) "123f96" ["model"]=> string(1) "r" ["piece"]=> string(1) "2" ["plant"]=> string(4) "yuzu" ["stamp"]=> string(20) "2017-03-30 00:04:34." } [3]=> object(stdClass)#21 (5) { ["id"]=> string(6) "43b2f1" ["model"]=> string(1) "r" ["piece"]=> string(1) "2" ["plant"]=> string(4) "yuzu" ["stamp"]=> string(20) "2017-03-30 00:04:34." } [4]=> object(stdClass)#22 (5) { ["id"]=> string(6) "2bc6fd" ["model"]=> string(1) "r" ["piece"]=> string(1) "2" ["plant"]=> string(4) "yuzu" ["stamp"]=> string(20) "2017-03-30 00:04:34." } }


        */
    -->


