<input type="hidden" name="ID" value="{{old('ID')?? $customer->ID}}">

<div class="form-group">
  <label for="name" class="font-weight-bold">Customer Name</label>
  <input type="text" class="form-control" id="name" name="name" value="{{old('name')?? $customer->name}}">
</div>

<div class="form-group">
  <label for="dob" class="font-weight-bold">dob</label>
  <input type="date" class="form-control" id="dob" name="dob" value="{{old('dob')?? $customer->dob}}">
</div>

<div class="form-group">
  <label for="contact" class="font-weight-bold">contact</label>
  <input type="text" class="form-control" id="contact" name="contact" value="{{old('contact')?? $customer->contact}}" >
</div>

<div class="form-group">
  <label for="email" class="font-weight-bold">email</label>
  <input type="email" class="form-control" id="email" name="email" value="{{old('email')?? $customer->email}}" >
</div>

<div class="form-group">
  <label for="address" class="font-weight-bold">address</label>
  <input type="text" class="form-control" id="address" name="address" value="{{old('address')?? $customer->address}}" >
</div>





