

<div class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formModal">Add Conference</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
         
  <form name="add-student-form" id="add-student-form" method="post" action="{{ url('store-student-form') }}">
    @csrf  
    <div class="main-content">

      <div class="page-content">
          <div class="container-fluid">

              <!-- start page title -->
              <div class="row">
                  <div class="col-12">
                      <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                          <h4 class="mb-sm-0">Форма заполнения</h4>

                          <div class="page-title-right">
                              <ol class="breadcrumb m-0">
                                  <li class="breadcrumb-item"><a href="javascript: void(0);">Формы</a></li>
                                  <li class="breadcrumb-item active">Элементы форм</li>
                              </ol>
                          </div>

                      </div>
                  </div>
              </div>
              <!-- end page title -->
              
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">

                            {{-- start row --}}
                              <div class="row mb-3">
                                <label for="fullname" class="col-sm-2 col-form-label">fio</label>
                                  <div class="col-sm-10">
                                    <input  type="text" id="fullname" name="fullname" class="form-control" required="">
                                  </div>
                              </div>
                              <!-- end row -->
                              <div class="row mb-3">
                                <label for="address" class="col-sm-2 col-form-label">address</label>
                                  <div class="col-sm-10">
                                    <input  type="text" id="address" name="address" class="form-control" required="">
                                  </div>
                              </div>
                              <!-- end row -->
                              <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">email</label>
                                  <div class="col-sm-10">
                                    <input  type="text" id="email" name="email" class="form-control" required="">
                                  </div>
                              </div>
                              <!-- end row -->
                              <div class="row mb-3">
                                <label for="sex" class="col-sm-2 col-form-label">sex</label>
                                  <div class="col-sm-10">
                                    <input  type="text" id="sex" name="sex" class="form-control" required="">
                                  </div>
                              </div>
                              <!-- end row -->
                              <div class="row mb-3">
                                <label for="mobile" class="col-sm-2 col-form-label">mobile</label>
                                  <div class="col-sm-10">
                                    <input  type="text" id="mobile" name="mobile" class="form-control" required="">
                                  </div>
                              </div>
                              <!-- end row -->
                              <div class="row mb-3">
                                <label for="mobile" class="col-sm-2 col-form-label">class</label>
                                  <div class="col-sm-10">
                                    <input  type="text" id="class" name="class" class="form-control" required="">
                                  </div>
                              </div>
                              <!-- end row -->
                              <div class="row mb-3">
                                <label for="schoolname" class="col-sm-2 col-form-label">schoolname</label>
                                  <div class="col-sm-10">
                                    <input  type="text" id="school_name" name="school_name" class="form-control" required="">
                                  </div>
                              </div>
                              <!-- end row -->
                              <div class="row mb-3">
                                <label for="discounts" class="col-sm-2 col-form-label">discounts</label>
                                  <div class="col-sm-10">
                                    <input  type="text" id="discounts" name="discounts" class="form-control" required="">
                                  </div>
                              </div>
                              <!-- end row -->
                              <div class="row mb-3">
                                <label for="discounts" class="col-sm-2 col-form-label">comment</label>
                                  <div class="col-sm-10">
                                    <input  type="text" id="comment" name="comment" class="form-control" required="">
                                  </div>
                              </div>
                              <!-- end row -->

                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>

                          </div>
                      </div>
                  </div> <!-- end col -->
              </div>
              <!-- end row -->

              
      
              <!-- end row -->
          </div> <!-- container-fluid -->
      </div>
      
    </div>
  </div>
  
  </form>
  <!-- JAVASCRIPT -->
  <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
  <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
  <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

  <!-- bs custom file input plugin -->
  <script src="{{ asset('assets/libs/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

  <script src="{{ asset('assets/js/pages/form-element.init.js') }}"></script>

  <script src="{{ asset('assets/js/app.js') }}"></script>