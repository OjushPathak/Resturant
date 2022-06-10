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
      
           
      <div class="container py-5">
     
     <table class="table table-striped"  >
       <thead>
         <tr align="center">
           <th style="color:white; font-weight: bold">Name</th>
           <th style="color:white; font-weight: bold">Email</th>
           <th style="color:white; font-weight: bold">Phone</th>
           <th style="color:white; font-weight: bold">Date</th>
           <th style="color:white; font-weight: bold">Time</th>
           <th style="color:white; font-weight: bold">Message</th>

       </thead>
   
       
        @foreach ($data as $data)
       <tbody>
         <tr align="center" style="color:white">
           <td style="color:white">{{$data -> name}}</td>
           <td style="color:white">{{$data -> email}}</td>
           <td style="color:white">{{$data -> phone}}</td>
           <td style="color:white">{{$data -> date}}</td>
           <td style="color:white">{{$data -> time}}</td>
           <td style="color:white">{{$data -> message}}</td>
           
     
        
           
       
           
           </tr>
           @endforeach
        
       </tbody>
</table>
</div>
</div>
       
      </div>
     
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    
  </body>
</html>