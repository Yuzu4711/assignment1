<h1 class="text-info text-center">History</h1>
	<br />
	<br />
	<br />
    <!-- List of available parts -->
   <div class="panel">
        <div class="panel-heading" style='background-color:#C90000;color:#fff'>
           	Record of activities
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                        	<th>Date</th>
                            <th>Record Type</th>
                            <th>Info</th>
                        </tr>
                    </thead>
                    <tbody>
                		{records}
                            <tr>
                                <td>{DATE}</td>
                                <td>{RECORD-TYPE}</td>
                                <td>{RECORD-INFO}</td>
                            </tr>
                        {/records}
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    <br />
    <br />