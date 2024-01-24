@extends('layouts.admin')

@section('content')
    <x-card>        
        <x-slot name="body">
          <form class="form-bookmark needs-validation" id="bookmark-form" novalidate="">
            <div class="row g-2">

              <div class="col-sm-4">
                <x-common-combo relatedto="contact_methods" label="Contact Method" ref="contact_method_id" selected="0" />
              </div>
              <div class="col-sm-4">
                <x-common-combo relatedto="contact_categories" label="Contact Category" ref="contact_category_id" selected="0" />
              </div>
              <div class="col-sm-4">
                <x-organizations-combo selected="0" />
              </div>

              <div class="mb-3 col-md-6 ">
                <label class="form-label" for="name">Name</label>
                <input class="form-control input-air-primary" id="name" name="name" type="text" required="" autocomplete="off" />
              </div>
              <div class="mb-3 col-md-6 ">
                <label class="form-label" for="email">Email</label>
                <input class="form-control input-air-primary" id="email" name="email" type="email" required="" autocomplete="off" />
              </div>
              <div class="mb-3 col-md-12 ">
                <label class="form-label" for="address">Address</label>
                <input class="form-control input-air-primary" id="address" name="address" type="text" required="" autocomplete="off" />
              </div>

              <div class="mb-3 col-md-3 ">
                <label class="form-label" for="mobile">Mobile</label>
                <input class="form-control input-air-primary mobile" id="mobile" name="mobile" type="text" required=""  placeholder="(xxx)xxx-xxxx" autocomplete="off" />
              </div>
              <div class="mb-3 col-md-3 ">
                <label class="form-label" for="phone">Phone</label>
                <input class="form-control input-air-primary" id="phone" name="phone" type="email" required="" autocomplete="off" />
              </div>    
              <div class="mb-3 col-md-3 ">
                <label class="form-label" for="home_phone">Home Phone</label>
                <input class="form-control input-air-primary" id="home_phone" name="home_phone" type="text" required="" autocomplete="off" />
              </div>
              <div class="mb-3 col-md-3 ">
                <label class="form-label" for="other_phone">Other Phone</label>
                <input class="form-control input-air-primary" id="other_phone" name="other_phone" type="text" required="" autocomplete="off" />
              </div>          
              
              <div class="mb-3 col-md-4 ">
                <label class="form-label" for="linkedin">Linkedin</label>
                <input class="form-control input-air-primary" id="linkedin" name="linkedin" type="text" required="" autocomplete="off" />
              </div>    
              <div class="mb-3 col-md-4 ">
                <label class="form-label" for="facebook">Facebook</label>
                <input class="form-control input-air-primary" id="facebook" name="facebook" type="text" required="" autocomplete="off" />
              </div>
              <div class="mb-3 col-md-4 ">
                <label class="form-label" for="twitter">Twitter</label>
                <input class="form-control input-air-primary" id="twitter" name="twitter" type="text" required="" autocomplete="off" />
              </div>                   

              <div class="mb-3 col-md-12 ">
                <label class="form-label" for="short_note">Short Note</label>
                <textarea class="form-control input-air-primary" id="short_note" name="short_note"></textarea>
              </div>    



            </div>
            <input id="index_var" type="hidden" value="5">
            <button class="btn btn-secondary" type="submit" onclick="submitContact()">Save</button>
            <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
          </form>
        </x-slot>
    </x-card>
@endsection            