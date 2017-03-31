<h1 class="text-danger text-center">  Configure Site Settings </h1>

<div class="container">



  <form action="/Manage/register" method="post">
  		<br/>
  		<br/>
    <div class="form-group row">
      <label for="plantName" class="col-sm-2 col-form-label">Plant Name</label>
      <div class="col-sm-10">
        <input type="text" name="plantName" class="form-control" value='yuzu' placeholder="yuzu">
      </div>
    </div>
    <div class="form-group row">
      <label for="secret" class="col-sm-2 col-form-label">Secret</label>
      <div class="col-sm-10">
        <input type="password" name="secret" class="form-control" id="secret" placeholder="secret">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </div>
  </form>

<br/>
<button class="btn btn-info text-center" onclick='confirmReboot()' role="button">Reset app</button>

  <h2 class="text-info text-center">Current apikey: {apiKey}</h2>

</div>

<br>
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
