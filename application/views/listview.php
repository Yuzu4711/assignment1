<h1 class="text-danger text-center"> Inventory of Parts </h1>
	<br />
	<br />
	<br />
   <div class="panel panel-default">
        <div class="panel-heading text-center">
            Blue = Head, Green = Body, Yellow = Feet
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>code #</th>
                            <th>Type</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                		{listElements}
                            <tr class={className}>
                                <td>{code}</td>
                                <td> {type} </td>
                                <td><img height=50 width=100 src="/assets/parts/{imgSrc}" title="{code}"/></td>
                            </tr>
                        {/listElements}
                    </tbody>
                </table>
            </div>
        </div>
    </div>