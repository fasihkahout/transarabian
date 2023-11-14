<!DOCTYPE html>
<html lang="en">
 @include('admin.head')
         @include('admin.navbar')
      <!-- partial -->
      @include('admin.sidebar')
        <!-- partial -->
 
       <section>
        <div class="container">
            <h5>Update Category</h5>
  <form action="{{url('updatedcategory',$updateCategory->id)}}" method="POST" class="my-4" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-sm-12 mx-12">
        {{-- <div class="form-group">
          <label for="name">Title:</label>
          <input type="text" name="title" class="form-control" id="name" value="{{$updateCategory->title}}" placeholder="Enter your title">
        </div> --}}

        <input type="hidden" name="category_id" ></input>

        <div class="form-group">
          <label for="category">Category:</label>
          <input type="text"  name="category" class="form-control" value="{{$updateCategory->category}}" placeholder="Enter your sub title">
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












          <!-- partial -->
          @include('admin.script')
  
  </body>
</html>