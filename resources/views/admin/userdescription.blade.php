<!DOCTYPE html>
<html lang="en">
 @include('admin.head')
         @include('admin.navbar')
      <!-- partial -->
      @include('admin.sidebar')
      <style>
.page-container {
  width: 100%;
  height: 90vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.card {
  width: 80%;
  max-height: 80%;
  overflow-y: auto;
  background-color: #f8f9fa;
  border-radius: 10px;
  padding: 20px;
  margin-bottom: 20px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.card-header {
  background-color: #343a40;
  color: #ffffff;
  font-size: 24px;
  font-weight: bold;
  padding: 10px;
  border-radius: 10px 10px 0 0;
}

.card-title {
  font-size: 20px;
  font-weight: bold;
}

.card-text {
  font-size: 16px;
}

.card-text label {
  font-weight: bold;
}

.card-text span {
  color: #6c757d;
}
</style>

<div class="page-container">
  @foreach ($userdescription as $info)
    <div class="card">
      <div class="card-header">
      {{$info->firstname}} {{$info->lastname}}
      </div>
      <div class="card-body">
        <p class="card-text">
          <label>Mobile Number:</label><br>
          <span>{{$info->mobileno}}</span>
        </p>
        <p class="card-text">
          <label>City Name:</label><br>
          <span>{{$info->cityname}}</span>
        </p>
        <p class="card-text">
          <label>City Worked In:</label><br>
          <span>{{$info->company_worked}}</span>
        </p>
          <p class="card-text">
          <label>Other Company:</label><br>
          <span>{{$info->other_company}}</span>
        </p>
        </p>
          <p class="card-text">
          <label>Badge Number Respectively:</label><br>
          <span>{{$info->badge_no}}</span>
        </p>
        <p class="card-text">
          <label>Email:</label><br>
          <span>{{$info->email}}</span>
        </p>
        <p class="card-text">
          <label>Years of Experience:</label><br>
          <span>{{$info->expyear}}</span>
        </p>
        <p class="card-text">
          <label>Overseas Experience:</label><br>
          <span>{{$info->overexyear}}</span>
        </p>
        <p class="card-text">
          <label>Trade Name:</label><br>
          <span>{{$info->tradename}}</span>
        </p>
        <p class="card-text">
          <label>Industry Type:</label><br>
          <span>{{$info->industrytype}}</span>
        </p>
        <p class="card-text">
          <label>Passport Number:</label><br>
          <span>{{$info->passportno}}</span>
        </p>
        <p class="card-text">
          <label>Location:</label><br>
          <span>{{$info->requirment}}</span>
        </p>
      </div>
    </div>
  @endforeach
</div>





          <!-- partial -->
          @include('admin.script')

  </body>
</html>
