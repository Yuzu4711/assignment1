<h1 class="text-danger text-center">Assembly</h1>
	<br />
	<br />
	<br />
   <div class="panel panel-default">
        <div class="panel-heading">
            Parts available for assembling
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>code #</th>
                            <th>CA</th>
                            <th>Plant</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                		{parts}
                            <tr>
                                <td>{code}</td>
                                <td>{CA}</td>
                                <td>{plant}</td>
                                <td>{date}</td>
                                <td>{time}</td>
                            </tr>
                        {/parts}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

