<script>
    // Pass the checkbox name to the function
    function getCheckedBoxes(checkboxName) {
      var checkboxes = document.getElementsByName(checkboxName);
      var checkboxesChecked = [];
      // loop over them all
      for (var i=0; i<checkboxes.length; i++) {
         // And stick the checked ones onto an array...
         if (checkboxes[i].checked) {
            checkboxesChecked.push(checkboxes[i]);
         }
      }
      // Return the array if it is non-empty, or null
      return checkboxesChecked.length > 0 ? checkboxesChecked : null;
    }

    
    function getSelectedParts(msg){
        var selected = getCheckedBoxes("partsCheckboxes");
        if(selected == null) return;
        var result = msg;

        if(selected.length === 1)
        {
            alert(selected[0].value);
            return;
        }

        for(var i=0;i<selected.length;i++){
            if(i === selected.length -1){
                result += selected[i].value;
                break;
            }
            result += selected[i].value + " , ";
        }
         alert(result);
    }
   
</script>
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
                            <th>code #</th>
                            <th>CA</th>
                            <th>Plant</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                		{parts}
                            <tr>
                                <td><input type="checkbox" name="partsCheckboxes" value="{code}"></td>
                                <td>{code}</td>
                                <td>{CA}</td>
                                <td>{plant}</td>
                                <td>{date}</td>
                                <td>{time}</td>
                                <td><img height=50 width=100 src="/assets/parts/{imgSrc}" title="{code}"/></td>
                            </tr>
                        {/parts}
                    </tbody>
                </table>
                <button class='btn btn-lg' onclick='getSelectedParts("Assembling the following parts: ")'>Build Robot</button>
                <button style='float:right' class='btn btn-danger btn-lg' onclick='getSelectedParts("Returning the following parts: ")'>Return to head office</button>
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
                                <td><img height=50 width=100 src="/assets/parts/{imgSrcHead}" title="{CA_HEAD}"/> <br/>
                                    <img height=50 width=100 src="/assets/parts/{imgSrcBody}" title="{CA_BODY}"/> <br/>
                                    <img height=50 width=100 src="/assets/parts/{imgSrcFeet}" title="{CA_FEET}"/>
                                </td>
                            </tr>
                        {/robots}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

