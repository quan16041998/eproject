<input type="hidden" name="SID" value="{{old('SID')?? $stylist->SID}}">

<div class="form-group">
  <label for="title" class="font-weight-bold">Stylist Name</label>
  <input type="text" class="form-control" id="name" name="name" value="{{old('name')?? $stylist->name}}">
</div>

<div class="form-group">
  <label for="author" class="font-weight-bold">dob</label>
  <input type="date" class="form-control" id="dob" name="dob" value="{{old('dob')?? $stylist->dob}}">
</div>

<div class="form-group">
  <label for="pages" class="font-weight-bold">contact</label>
  <input type="text" class="form-control" id="contact" name="contact" value="{{old('contact')?? $stylist->contact}}" >
</div>

<div class="form-group">
  <label for="pages" class="font-weight-bold">email</label>
  <input type="email" class="form-control" id="email" name="email" value="{{old('email')?? $stylist->email}}" >
</div>

<div class="form-group">
  <label for="pages" class="font-weight-bold">history</label>
  <input type="text" class="form-control" id="history" name="history" value="{{old('history')?? $stylist->history}}" >
</div>

<div class="form-group">
  <label for="pages" class="font-weight-bold">urlimg</label>
  <input type="text" class="form-control" id="urlimg" name="urlimg" value="{{old('urlimg')?? $stylist->urlimg}}" >
</div>




