<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    <title>Admin-My Resturant</title>
        
  @include('admin.css')<!-- Required meta tags -->
    
  </head>
  <body>


    <div class="container-scroller">
      
      <!-- This is for the sidebar -->
      @include('admin.sidebar')

      <!-- This is for the navigation bar -->
      @include('admin.navbar')

      <!-- This is for the body part  -->
      <div class="container-fluid page-body">

          <div class="container" align="center" style="padding-top:70px; position:relative;">

              

                  <form action="{{url('update',$data->id)}}" method="post" enctype="multipart/form-data">
                      @csrf
  
                      <div style="padding:15px;" class="">

                          <label for="">Food Name</label>
                          <input class="rounded" value="{{$data->title}}" type="text" name="title" style="color:black;" placeholder="Enter food" required="">

                      </div>

                      <div style="padding:15px;" class="">

                          <label for="">Price</label>
                          <input class="rounded" value="{{$data->price}}" type="text" name="price" style="color:black;" placeholder="Enter Price" required="">

                      </div>

                  

                      

                      <div style="padding:15px; margin-left:100px;" >

                          <label for="">Old Image</label>
                          <img src="/foodimage/{{$data->image}}" alt="">
                          

                      </div>


                      <div style="padding:15px; margin-left:100px;" >

                          <label for="">New Image</label>
                          
                          <input class="rounded" type="file" name="image" value="{{$data->image}}">

                      </div>


                      <div style="padding:15px;" class="">

                          <label for="">Description</label>
                          <input class="rounded" value="{{$data->Description}}" type="text" name="Description" style="color:black;" placeholder="Enter Description" required="">

                      </div>

                      <div style="padding:15px;" class="">

                          
                          <button type="Submit" class="btn btn-success"> Update</button>

                      </div>

                  </form>

</div>
</div>


    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    
  </body>
</html>