<h1 class="text-info text-center">History</h1>
	<br />
	<br />
	<br />

    <!-- List of available parts -->
   <div class="panel">
        <div class="panel-heading" style='background-color:#C90000;color:#fff'>
           	Record of activities
        </div>
        <div class="panel-heading">
            Filter by
            <select id="historyFilterVal" onchange="updateHistoryView()">
                <option>Date</option>
                <option>Purchase</option>
                <option>Sale</option>
                <option>Build</option>
                <option>Assemble</option>
                <option>Return</option>
            </select>
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
                                <td>{date}</td>
                                <td>{record_type}</td>
                                <td>{info}</td>
                            </tr>
                        {/records}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <h2 class="text-center">
        <small>{links}</small>
    </h2>
    <br />
    <br />