<input type="hidden" name="username" value="{{old('username')?? $admin->username}}">

<div class="form-group">
    <label for="title" class="font-weight-bold">Password</label>
    <input type="text" class="form-control" id="password" name="password"
           value="{{old('password')?? $admin->password}}">
</div>

<div class="form-group">
    <label for="title" class="font-weight-bold">Name</label>
    <input type="text" class="form-control" id="name" name="name"
           value="{{old('name')?? $admin->name}}">
</div>

<div class="form-group">
    <label for="title" class="font-weight-bold">Date of birth</label>
    <input type="text" class="form-control" id="dob" name="dob"
           value="{{old('dob')?? $admin->dob}}">
</div>

<div class="form-group">
    <label for="title" class="font-weight-bold">Contact</label>
    <input type="text" class="form-control" id="contact" name="contact"
           value="{{old('contact')?? $admin->contact}}">
</div>

<div class="form-group">
    <label for="title" class="font-weight-bold">Email</label>
    <input type="text" class="form-control" id="email" name="email"
           value="{{old('email')?? $admin->email}}">
</div>
