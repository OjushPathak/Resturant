<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin-My Hospital</title>
        
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

              

                  <form action="{{url('uploadfood')}}" method="post" enctype="multipart/form-data">
                      @csrf
  
                      <div style="padding:15px;" class="">

                          <label for="">Title</label>
                          <input class="rounded" type="text" name="title" style="color:black;" placeholder="Enter Title" required="">

                      </div>

                      <div style="padding:15px;" class="">

                          <label for="">Price</label>
                          <input class="rounded" type="text" name="price" style="color:black;" placeholder="Enter Price" required="">

                      </div>

                  

                      

                      <div style="padding:15px; margin-left:100px;" >

                          <label for="">Food Image</label>
                          <input class="rounded" type="file" name="image" required="">

                      </div>


                      <div style="padding:15px;" class="">

                          <label for="">Description</label>
                          <input class="rounded" type="text" name="Description" style="color:black;" placeholder="Enter Description" required="">

                      </div>

                      <div style="padding:15px;" class="">

                          
                          <button type="Submit" class="btn btn-success"> Save</button>

                      </div>

                  </form>    




      <div class="container py-5">
     
        <table class="table table-striped"  >
          <thead>
            <tr align="center">
              <th style="color:white; font-weight: bold">Title</th>
              <th style="color:white; font-weight: bold">Price</th>
              <th style="color:white; font-weight: bold">Image</th>
              <th style="color:white; font-weight: bold">Description</th>
              <th style="color:white; font-weight: bold">Update</th> 
              <th style="color:white; font-weight: bold">Delete</th>   
          </thead>

          @foreach ($data as $data)
      
          <tbody>
            <tr align="center" style="color:white">
              <td style="color:white">{{$data->title}}</td>
              <td style="color:white">Rs. {{$data->price}} /-</td>
              <td style="color:white"><img src="/foodimage/{{$data ->image}}" alt=""></td>
              <td style="color:white">{{$data->Description}}</td>
              <td><a class="btn btn-success" href="{{url('updateview',$data->id)}}">Update  </a></td>
              <td><a class="btn btn-danger" onclick="return confirm('Are you sure to detele this menu?')" href="{{url('deletemenu',$data->id)}}">Delete</a></td>
            </tr>
          </tbody>

          @endforeach

        </table>
      </div>


    </div>
  </div>



</div>




     
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    
  </body>
</html>