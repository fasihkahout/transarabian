<!DOCTYPE html>
<html lang="en">
 @include('admin.head')
         @include('admin.navbar')
      <!-- partial -->
      @include('admin.sidebar')
        <!-- partial -->

        <div class="col-lg-10 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h1 class="card-title">Applicants List</h1>
      <div style="position: relative;left: 20%; bottom:2em">
        <a href="{{ url('addapplicants') }}"><button id="add-category-btn" class="btn btn-success">Add Applicants</button></a>
      </div>
      <div style="overflow: auto;" class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Applicant Name</th>
              <th>Email</th>
              <th>Available</th>
              <th>Applied</th>
              <th>Status</th>
            </tr>
          </thead>
          
        </table>
      </div>
    </div>
  </div>
</div>




          <!-- partial -->
          @include('admin.script')

  </body>
</html>
