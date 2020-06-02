@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-3 quick-navigation-parent">
        <div class="quick-navigation">
            <h3>Quick Navigation</h3>
            <p>Hostel Management</p>
            <a href="/admin/hostel/create"><li class = "active">Add Hostel</li></a>
            <a href="/admin/hostel"><li>Hostels List</li></a>
            <a href="/admin/hostel/manageImage"><li>Manage Images</li></a>
        </div>
      

    </div>
    <div class="col-sm-12 col-md-8 col-lg-9 left-section-container">
        <div class="add-hostel">
          <div class = "error-display">
            <p>Error occured!!</p>
          </div>
          <h3>Add Hostel</h3>
            <form method="POST" action="/admin/hostel/edit/{{$hostels->id}}" class="needs-validation" novalidate enctype="multipart/form-data">
            @method('PATCH')
            @csrf    
            <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom01">Organization Name:</label>
                    <input type="text" name ="name" value="{{$hostels->name}}" class="form-control" id="validationCustom01" placeholder="Organization Name" required>
                    <div class="invalid-feedback">
                      Insert Organization Name
                    </div>
                  </div>
                 
                  <div class="col-md-12 mb-3">
                    <label for="validationCustomUsername">Organization Email:</label>
                    <div class="input-group">
                      <!-- <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                      </div> -->
                      <input type="text" class="form-control" value="{{$hostels->email}}" name="email" id="validationCustomUsername" placeholder="email@email.com" aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        Please insert Email.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03">City</label>
                    <input type="text" name="city" value="{{$hostels->city}}" class="form-control" id="validationCustom03" placeholder="City" required>
                    <div class="invalid-feedback">
                      Please provide a valid city.
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationCustom04">Municipality:</label>
                    <input type="text" class="form-control" name="municipality" value="{{$hostels->municipality}}" id="validationCustom04" placeholder="Municipality" required>
                    <div class="invalid-feedback">
                      Please provide a valid Municipality.
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationCustom05">Ward:</label>
                    <input type="text" class="form-control" name="ward" value="{{$hostels->ward}}" id="validationCustom05" placeholder="Ward" required>
                    <div class="invalid-feedback">
                      Please provide a ward.
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustomType">Hostel Type:</label>
                    <select name="type" id="validationCustomType" class="form-control" required>
                    <option value="{{$hostels->type}}">
                      @if($hostels->type==0)
                      Boys Hostel
                      @elseif($hostels->type==1)
                      Girls Hostel
                      @else
                      Boys And Girls Hostel
                      @endif
                    </option>
                    <option value="0">Boys Hostel</option>
                    <option value="1">Girls Hostel</option>
                    <option value="2">Boys And Girls Hostel</option>
                    </select>
                    <div class="invalid-feedback">
                      please insert Room Type
                    </div>
                  </div>
                 
                  <div class="col-md-6 mb-3">
                    <label for="validationCustomRoom"> No of Room:</label>
                    <div class="input-group">
                      <input type="number" class="form-control" name="room" value="{{$hostels->totalRoom}}" id="validationCustomRoom" aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        Please insert Number of Room.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustomPhone">Phone:</label>
                    <div class="input-group">
                      <input type="number" class="form-control" name="phone" value="{{$hostels->phone}}" id="validationCustomPhone" aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        Please insert Phone.
                      </div>
                    </div>
                  </div>
                 
                  <div class="col-md-6 mb-3">
                    <label for="validationCustomContact">Contact:</label>
                    <div class="input-group">
                      <input type="number" class="form-control" name="contact" value="{{$hostels->contact}}" id="validationCustomContact" aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        Please insert Contact.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="validationCustomDescription">Description:</label>
                    <div class="input-group">
                      <textarea class="form-control" rows="5" name="desc" id="validationCustomContact" aria-describedby="inputGroupPrepend" required>{{$hostels->description}}</textarea>
                      <div class="invalid-feedback">
                        Please insert Description.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                  <label for="image">Upload Image:</label>
                  <div class="input-group">
                      <input type="file" name="image" class="form-control">
                    </div>
                  </div>
                  @error('image')
                  <strong style="color:red">{{$message}}</strong>
                @enderror
                </div>
             
                <button class="btn btn-primary" type="submit">Submit form</button>
              </form>
              
              <script>
              // Example starter JavaScript for disabling form submissions if there are invalid fields
              (function() {
                'use strict';
                window.addEventListener('load', function() {
                  // Fetch all the forms we want to apply custom Bootstrap validation styles to
                  var forms = document.getElementsByClassName('needs-validation');
                  // Loop over them and prevent submission
                  var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                      if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                      }
                      form.classList.add('was-validated');
                    }, false);
                  });
                }, false);
              })();
              </script>
        </div>
        
    </div>
</div>
</div>

@endsection