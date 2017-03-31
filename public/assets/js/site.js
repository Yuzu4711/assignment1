
//Parts page functions
function confirmPurchase(){
    var r = confirm("Are you sure you'd like to continue with this transaction? This will deduct money from our balance.");
    if(r==true) location.href = '/inventory/buyParts';
}

function confirmReboot(){
  var r = confirm("Are you sure you'd like to reboot?.");
  if(r==true) location.href = '/Manage/resetApp';
}

function displayPartInfo(partID){
    location.href = '/inventory/displayPartInfo/' + partID;
}

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
        var result ='';

        if(selected.length > 3){
          alert("Unfortunately, you can only select up to 3 parts!");
          return;
        }

        for(var i=0;i<selected.length;i++){
            if(i === selected.length -1){
                result += selected[i].value;
                break;
            }
            result += selected[i].value + "_";
        }

        if(msg==="returning") 
          location.href = '/Assembly/returnRobot/' + result;
        else
          location.href = '/Assembly/buildRobot/' + result;
    }
   
    function sellBot(id){
      var r = confirm("Are you sure you'd like to sell this bot?");
      if(r==true) location.href = '/Assembly/sellBot/' + id;
    }


    //history update
    function updateHistoryView(){
      location.href = '/History/paginatedRecordsByType/' + $("#historyFilterVal").val();
    }