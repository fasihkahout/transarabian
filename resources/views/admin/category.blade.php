<!DOCTYPE html>
<html lang="en">
 @include('admin.head')
         @include('admin.navbar')
      <!-- partial -->
      @include('admin.sidebar')
        <!-- partial -->
        <style>
  /* Overlay styles */
  .overlay {
    position: fixed;
    top: 40%;
    left: 65%;
    width: 30%;
    height: 30%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
  }

  .popup-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    max-width: 400px;
    width: 100%;
  }

  .popup-form h2 {
    margin-top: 0;
    font-size: 24px;
    text-align: center;
    margin-bottom: 20px;
  }

  .popup-form label {
    display: block;
    margin-bottom: 10px;
  }

  .popup-form input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-bottom: 10px;
  }

  .popup-form button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    transition: background-color 0.3s ease;
  }

  .popup-form button:hover {
    background-color: #0069d9;
  }

  .popup-form .close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    color: #333;
    cursor: pointer;
    transition: color 0.3s ease;
  }

  .popup-form .close-btn:hover {
    color: #000;
  }
</style>

<div class="col-lg-10 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h1 class="card-title">Category List</h1>
      <div style="position: relative;left: 40%; bottom:2em">
        <button id="add-category-btn" class="btn btn-success">Add Category</button>
      </div>
      <div style="overflow: auto;" class="col-md-6">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Category</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($category as $info )
            <tr>
              <td>{{$info->id}}</td>
              <td>{{$info->category}}</td>
              <td>
                <a class="btn btn-success" href="{{'updatecategory/'.$info->id}}">Edit</a>
                <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Category?');" href="{{url('deletecategory/'.$info->id)}}">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Add Category Popup -->
<div id="add-category-popup" class="overlay" style="display: none;">
  <div class="popup-form">
    <span class="close-btn">&times;</span>
    <h2>Add Category</h2>
    <form action="{{url('addcategory')}}" class="form-container" enctype="multipart/form-data">
      @csrf
      <label for="category"><b>Category</b></label>
      <input type="text" placeholder="Enter Category" name="category" required>
      <button type="submit" class="btn btn-primary">Add</button>
    </form>
  </div>
</div>







   <!-- partial -->
   
          <!-- partial -->
          <script>
  var addCategoryBtn = document.getElementById("add-category-btn");
  var addCategoryPopup = document.getElementById("add-category-popup");
  var closeBtn = document.querySelector(".close-btn");

  addCategoryBtn.addEventListener("click", function () {
    addCategoryPopup.style.display = "block";
  });

  closeBtn.addEventListener("click", function () {
    addCategoryPopup.style.display = "none";
  });
</script>

          @include('admin.script')
  
  </body>
</html>