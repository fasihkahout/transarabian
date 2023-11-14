<!DOCTYPE html>
<html lang="en">
 @include('admin.head')
         @include('admin.navbar')
      <!-- partial -->
      @include('admin.sidebar')
        <!-- partial -->
 
       <section>
        <div class="container">
            <h5>Add Banner</h5>
  <form action="{{url('submitbanner')}}" method="POST" class="my-4" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-sm-12 mx-12">
        <div class="form-group">
          <label for="name">Title:</label>
          <input type="text" name="title" class="form-control" id="name"  placeholder="Enter your title">
        </div>
        <input type="hidden" name="banner_id" ></input>
        <div class="form-group">
          <label for="cnic">Subtitle:</label>
          <input type="text"  name="subtitle" class="form-control"  id="cnic" placeholder="Enter your sub title">
        </div>
        
        <div class="form-group " >
          <label for="cnic">Document:</label>
          <div class="form-group" style="display: flex;">
          <input type="text"  name="leftbutton" class="form-control col-6" id="cnic"  placeholder="left button">
          <input type="text"  name="buttonright" class="form-control col-6" id="cni2c"  placeholder="right button">
          </div>
        </div>

        <div class="col-sm-10 form-group">
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
</div>

                    <button type="submit" class="btn btn-primary text-white" >Submit</button>
    </div>
    
  </form>
  </div>
  </section>












          <!-- partial -->
          @include('admin.script')
  
  </body>
</html>