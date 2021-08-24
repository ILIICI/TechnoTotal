<!-- filter -->
<form method="GET" action="search">
    <div class="col-sm-12">
      <div class="row">
        <div class="col-md-3" id="col-md-3">
          <div class="input-group">
              <div class="input-group-prepend">
                <label class="input-group-text" for="Categorii">Categorii</label>
              </div>
              <select class="custom-select" name="ProductCategory" id="Categorii">
                <option selected value="null">Alege</option>
                @foreach ($categories as $itemCategory )
                  <option value="{{ $itemCategory->ProductCategory }}">{{ $itemCategory->ProductCategory }}</option>
                @endforeach
              </select>
            </div>
      </div>
      <div class="col-md-3" id="col-md-3">
          <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">lei</span>
              </div>
              <input type="text" class="form-control" name="ProductPrice" aria-label="Pretul maxim al produsul" placeholder="Pretul maxim al produsului">
            </div>
      </div>
      <div class="col-md-3" id="col-md-3">       
           <div class="input-group">
          <div class="input-group-prepend">
            <label class="input-group-text" for="Brand">Brand</label>
          </div>
          <select class="custom-select" name="ProductName" id="Brand">
            <option selected value="null">Alege</option>
            @foreach ($list as $itemName )
              <option value="{{ $itemName->ProductName }}">{{ $itemName->ProductName }}</option>
            @endforeach
          </select>
        </div></div>
      <div class="col-md-3" id="col-md-3">
          <button type="submit" class="btn btn-success">Cauta</button>
      </div>
      </div>
    </div>
</form>
<!-- filter -->
