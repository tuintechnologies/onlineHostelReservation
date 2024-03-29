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
          <h3>Add Hostel</h3>
            <form method="POST" action="/admin/hostel/create" class="needs-validation" novalidate enctype="multipart/form-data">
            @csrf    
            <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationCustom01">Organization Name:</label>
                    <input type="text" name ="name" value="{{old('name')}}" class="form-control" id="validationCustom01" placeholder="Organization Name" required>
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
                      <input type="text" class="form-control" value="{{old('email')}}" name="email" id="validationCustomUsername" placeholder="email@email.com" aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        Please insert Email.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-3 mb-3">
                    <label for="validationCustom03">City</label>
                    <input type="text" name="city" value="{{old('city')}}" class="form-control" id="validationCustom03" placeholder="City" required>
                    <div class="invalid-feedback">
                      Please provide a valid city.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom04">Municipality/Sub-Metropolitian/Metropolitian:</label>
                    <input type="text" class="form-control" name="municipality" value="{{old('municipality')}}" id="validationCustom04" required>
                    <div class="invalid-feedback">
                      Please provide a valid Municipality.
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationCustom05">Ward:</label>
                    <input type="text" class="form-control" name="ward" value="{{old('ward')}}" id="validationCustom05" placeholder="Ward" required>
                    <div class="invalid-feedback">
                      Please provide a ward.
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustomType">Hostel Type:</label>
                    <select name="type" id="validationCustomType" class="form-control" required>
                    <option value="">Select Type</option>
                    <option value="0">Boys Hostel</option>
                    <option value="1">Girls Hostel</option>
                    <!-- <option value="2">Boys And Girls Hostel</option> -->
                    </select>
                    <div class="invalid-feedback">
                      please insert Room Type
                    </div>
                  </div>
                 
                  <div class="col-md-6 mb-3">
                    <label for="validationCustomRoom"> No of Room:</label>
                    <div class="input-group">
                      <input type="number" class="form-control" name="room" value="{{old('room')}}" id="validationCustomRoom" aria-describedby="inputGroupPrepend" required>
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
                      <input type="number" class="form-control" name="phone" value="{{old('phone')}}" id="validationCustomPhone" aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        Please insert Phone.
                      </div>
                    </div>
                  </div>
                 
                  <div class="col-md-6 mb-3">
                    <label for="validationCustomContact">Contact:</label>
                    <div class="input-group">
                      <input type="number" class="form-control" name="contact" value="{{old('contact')}}" id="validationCustomContact" aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        Please insert Contact.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label for="validationCustomDescription">Description:</label>
                    <div class="input-group">
                      <textarea class="form-control" rows="5" name="desc" value="{{old('desc')}}" id="validationCustomContact" aria-describedby="inputGroupPrepend" required></textarea>
                      <div class="invalid-feedback">
                        Please insert Description.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                  <label for="image">Hostel Profile:</label>
                  <div class="input-group">
                      <input type="file" name="image" class="form-control">
                    </div>
                  </div>
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