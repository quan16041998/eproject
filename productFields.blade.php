<input type="hidden" name="CID" value="{{old('CID')?? $product->CID}}">

<div class="form-group">
    <label for="title" class="font-weight-bold">Product Code</label>
    <input type="text" class="form-control" id="product_code" name="product_code"
           value="{{old('product_code')?? $product->product_code}}">
</div>

<div class="form-group">
    <label for="title" class="font-weight-bold">Fabric</label>
    <input type="text" class="form-control" id="fabric" name="fabric"
           value="{{old('fabric')?? $product->fabric}}">
</div>

<div class="form-group">
    <label for="title" class="font-weight-bold">Price</label>
    <input type="text" class="form-control" id="price" name="price"
           value="{{old('price')?? $product->price}}">
</div>

<div class="form-group">
    <label for="title" class="font-weight-bold">Size</label>
    <input type="text" class="form-control" id="size" name="size"
           value="{{old('size')?? $product->size}}">
</div>

<div class="form-group">
    <label for="title" class="font-weight-bold">Url for image</label>
    <input type="text" class="form-control" id="urlimg" name="urlimg"
           value="{{old('urlimg')?? $product->urlimg}}">
</div>

<div class="form-group">
    <label for="title" class="font-weight-bold">Collection ID</label>
    <input type="text" class="form-control" id="CollectionID" name="CollectionID"
           value="{{old('CollectionID')?? $product->CollectionID}}">
</div>

<div class="form-group">
    <label for="title" class="font-weight-bold">SID</label>
    <input type="text" class="form-control" id="SID" name="SID"
           value="{{old('SID')?? $product->SID}}">
</div>
