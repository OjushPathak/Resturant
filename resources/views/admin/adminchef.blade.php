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

              

                  <form action="{{url('uploadchef')}}" method="post" enctype="multipart/form-data">
                      @csrf
  
                      <div style="padding:15px;" class="">

                          <label for="">Name</label>
                          <input class="rounded" type="text" name="name" style="color:black;" placeholder="Enter Chef's Name" required="">

                      </div>

                      <div style="padding:15px;" class="">

                          <label for="">Speciality</label>
                          <input class="rounded" type="text" name="speciality" style="color:black;" placeholder="Enter the Speciality" required="">

                      </div>

                  

                      

                      <div style="padding:15px; margin-left:100px;" >

                          <label for="">Food Image</label>
                          <input class="rounded" type="file" name="image" required="">

                      </div>


                      

                      <div style="padding:15px;" class="">

                          
                          <button type="Submit" class="btn btn-success"> Save</button>

                      </div>

                  </form>    


                  <div class="container py-5">
     
     <table class="table table-striped"  >
       <thead>
         <tr align="center">
           <th style="color:white; font-weight: bold">Chef Name</th>
           <th style="color:white; font-weight: bold">Speciality</th>
           <th style="color:white; font-weight: bold">Image</th>
           <th style="color:white; font-weight: bold">Update</th>
           <th style="color:white; font-weight: bold">Delete</th>
           

       </thead>
   
       @foreach ($data as $data)
      
       <tbody>
         <tr align="center" style="color:white">
           <td style="color:white">{{$data->name}}</td>
           <td style="color:white">{{$data->speciality}}</td>
           <td style="color:white"><img src="chefimage/{{$data->image}}" alt=""></td>
           <td style="color:white"><a class="btn btn-success" href="{{url('updatechef',$data->id)}}">Update</a></td>
           <td style="color:white"><a class="btn btn-danger" onclick="return confirm('Are you sure to detele this Chef?')" href="{{url('deletechef',$data->id)}}">Delete</a></td>
           
           
     
        
           
       
           
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