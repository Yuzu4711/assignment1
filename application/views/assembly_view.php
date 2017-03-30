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
    <!-- Assembled bots ready for shipping to head office -->
   <div class="panel panel-info">
        <div class="panel-heading">
            Assembled bot(s)
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Robot ID</th>
                            <th>Composition Info</th>
                            <th>Date Assembled</th>
                            <th>Picture</th>
                        </tr>
                    </thead>
                    <tbody>
                        {robots}
                            <tr>
                                <td>{RID}</td>
                                <td>Head: {CA_HEAD} <br/>
                                    Body: {CA_BODY} <br/>
                                    Feet: {CA_FEET}</td>
                                <td>
                                    {assemble_date}
                                </td>
                                <td><img height=50 width=100 src="/assets/parts/{imgSrcHead}" title="{CA_HEAD}"/> <br/>
                                    <img height=50 width=100 src="/assets/parts/{imgSrcBody}" title="{CA_BODY}"/> <br/>
                                    <img height=50 width=100 src="/assets/parts/{imgSrcFeet}" title="{CA_FEET}"/>
                                </td>
                                <td>
                                    <button class='btn btn-sm' onclick='sellBot("{RID}")'>Sell</button>
                                </td>
                            </tr>
                        {/robots}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
