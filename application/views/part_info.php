<link rel="stylesheet" type="text/css" href="/assets/css/parts.css"/>
<h1 class="text-danger text-center">  </h1>
   <div class="panel panel-default">
        <div class="panel-heading text-center">
            Blue = Head, Green = Body, Yellow = Feet
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Part ID</th>
                            <th>Certificate #</th>
                            <th>Model</th>
                            <th>Piece</th>
                            <th>Plant</th>
                            <th>Date Built</th>
                        </tr>
                    </thead>
                    <tbody>		
                        <tr>
                            <td>{ID}</td>
                            <td> {ca} </td>
                            <td>{model}</td>
                            <td>{piece}</td>
                            <td>{plant}</td>
                            <td>{stamp}</td>
                            <td><img height=50 width=100 src="/assets/parts/{model}{piece}.jpeg" title="{ca}"/></td>
                        </tr>     
                    </tbody>
                </table>
            </div>
        </div> 

        <a class='btn btn-lg btn-info centerButton' href='/inventory'>Return to Parts page</a>      
    </div>      
