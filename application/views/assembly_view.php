<h1 class="text-danger text-center">Assembly</h1>
<br />
<br />
<br />
<!-- List of available parts -->
<div class="panel">
    <div class="panel-heading" style='background-color:#C90000;color:#fff'>
        Parts available for assembling
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Select</th>
                        <th>id</th>
                        <th>CA</th>
                        <th>Plant</th>
                        <th>Date</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
            		{parts}
                        <tr>
                            <td><input type="checkbox" name="partsCheckboxes" value="{id}"></td>
                            <td>{id}</td>
                            <td>{CA}</td>
                            <td>{plant}</td>
                            <td>{date}</td>
                            <td><img height=50 width=100 src="/assets/parts/{imgSrc}" title="{id}"/></td>
                        </tr>
                    {/parts}
                </tbody>
            </table>
            <button class='btn btn-lg' onclick='getSelectedParts("assemble")'>Build Robot</button>
            <button style='float:right' class='btn btn-danger btn-lg' onclick='getSelectedParts("returning")'>Return to head office</button>
        </div>
    </div>
</div>
<br />
<br />