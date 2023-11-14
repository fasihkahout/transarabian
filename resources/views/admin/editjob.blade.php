<!DOCTYPE html>
<html lang="en">
 @include('admin.head')
         @include('admin.navbar')
      <!-- partial -->
      @include('admin.sidebar')
        <!-- partial -->
 
       
        <div class="container">
            <h5>Update Job</h5>
            
  <form action="{{url('editjobs',$job->id)}}" method="POST" class="my-4" 
    enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-md-6">
        {{-- <div class="form-group">
          <label for="name">Title:</label>
          <input type="text" name="title" class="form-control" id="name" value="{{$updatebanner->title}}" placeholder="Enter your title">
        </div> --}}

          <input type="hidden" name="id"> </input>

          <div class="form-group">
            <label for="Title">Title:</label>
            <input type="text"  name="title" class="form-control" value="{{$job->title}}" placeholder="Enter your sub title">
          </div>


          <div class="form-group">
              <label for="Requirements">Location:</label>
              <input type="text"  name="requirment" class="form-control" value="{{$job->requirment}}" placeholder="Enter your sub title">
          </div>


          <div class="form-group">
            <label for="Category">Category:</label>
            <input type="text"  name="category" class="form-control" value="{{$job->category}}" placeholder="Enter your sub title">
          </div>

          <div class="col-sm-12 mx-12 form-group">
            <label for="textarea">Job Description:</label>
            <textarea name="description" class="form-control summernote" id="summernote" placeholder="Enter your Detail">{{$job->description}}</textarea>
          </div>


          <div class="form-group">
            
            <label for="image">image:</label>
            <input type="file"  name="image" class="form-control" value="{{$job->image}}">
        
            <img src="{{ asset('jobimage/' . $job->image) }}" alt="testing" width="150px" height="100px">

          </div>

          <div class="form-group">
            <label for="salary">Salary:</label>
            <input type="text"  name="salary" class="form-control" value="{{$job->salary}}" placeholder="">
          </div>

          <div class="form-group">
            <label for="Title">Vacancies:</label>
            <input type="text"  name="vacancies" class="form-control" value="{{$job->vacancies}}" placeholder="">
          </div>
        {{-- <div class="form-group " >
          <label for="cnic">Document:</label>
          <div class="form-group" style="display: flex;">
          <input type="text"  name="leftbutton" class="form-control col-6" id="cnic" value="{{$updatebanner->buttonleft}}" placeholder="left button">
          <input type="text"  name="buttonright" class="form-control col-6" id="cni2c" value="{{$updatebanner->buttonright}}" placeholder="right button">
          </div>
        </div> --}}

        {{-- <div class="col-sm-10 form-group">
    <label for="contact">Video</label>
    <input type="file" name="video" class="form-control" id="video" placeholder="Enter your Slug">
    <p>
        @if($errors->has('video'))
            {{$errors->first('video')}}
        @endif
    </p>
    @if(!empty($updatebanner->video))
        <video width="150" height="100"  controls>
            <source src="{{$updatebanner->video}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    @endif
</div> --}}

                    <button type="submit" class="btn btn-primary text-white" >Update</button>
    </div>
    
  </form>
  </div>
  </section>











  <script src="assets/js/summernote.js"></script>
    <script>
      
$(document).ready(function() {
 $('.summernote').summernote();  
  
});
      </script>
          <!-- partial -->
          @include('admin.script')
  
  </body>
</html>