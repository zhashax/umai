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
    <div class="form-group">
        <label for="fullname">fio</label>
        <input type="text" id="fullname" name="fullname" class="form-control" required="">
      </div>
      <div class="form-group">
        <label for="address">address</label>
        <input type="text" id="address" name="address" class="form-control" required="">
      </div>

      <div class="form-group">
        <label for="email">email</label>
        <input type="email" id="email" name="email" class="form-control" required="">
      </div>
      <div class="form-group">
        <label for="sex">пол</label>
        <input type="text" id="sex" name="sex" class="form-control" required="">
      </div>

      <div class="form-group">
        <label for="mobile">mobile</label>
        <input type="text" id="mobile" name="mobile" class="form-control" required="">
      </div>
      <div class="form-group">
        <label for="class">class</label>
        <input type="text" id="class" name="class" class="form-control" required="">
      </div>
      <div class="form-group">
        <label for="school_name">schoolname</label>
        <input type="text" id="school_name" name="school_name" class="form-control" required="">
      </div>
      <div class="form-group">
        <label for="discounts">discounts</label>
        <input type="text" id="discounts" name="discounts" class="form-control" required="">
      </div>
      <div class="form-group">
        <label for="discounts">comment</label>
        <input type="text" id="comment" name="comment" class="form-control" required="">
      </div>

  <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
  
  </form>