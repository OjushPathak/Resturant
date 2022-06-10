<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin-My Resturant</title>
        <base href="/public">
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
     
      <form action="{{url('updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">
                      @csrf
  
                      <div style="padding:15px;" class="">

                          <label for="">Name</label>
                          <input class="rounded" type="text" name="name" style="color:black;" placeholder="Enter Chef's Name" value="{{$data->name}}" required="">

                      </div>

                      <div style="padding:15px;" class="">

                          <label for="">Speciality</label>
                          <input class="rounded" type="text" name="speciality" style="color:black;" value="{{$data->speciality}}" placeholder="Enter the Speciality" required="">

                      </div>

                  

                      

                      <div style="padding:15px; margin-left:100px;" >

                          <label for="">old Image</label>
                          <img src="/chefimage/{{$data->image}}" height="200" width="200" alt="">
                          

                      </div>

                      <div style="padding:15px; margin-left:100px;" >

                        <label for="">New Image</label>
                        
                        <input class="rounded" type="file" name="image" value="{{$data->image}}">

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