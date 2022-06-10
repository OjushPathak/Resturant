<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin-My Resturant</title>
        
  @include('admin.css')<!-- Required meta tags -->
    
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- This is for the sidebar -->
      @include('admin.sidebar')

      <!-- This is for the navigation bar -->
      @include('admin.navbar')



    <div class="container py-5">

    <form action="{{url('search')}}" method="get" class="py-5">
      @csrf


  <input type="text" name="search" style="color:blue; border-radius:5px; ">
  <input type="submit" Value="Search" class="btn btn-success">


    </form>
     
        <table class="table table-striped"  >
            <thead>
                <tr align="center">
                    <th style="color:white; font-weight: bold">Name</th>
                    <th style="color:white; font-weight: bold">Phone</th>
                    <th style="color:white; font-weight: bold">Address</th>
                    <th style="color:white; font-weight: bold">Food Name</th>
                    <th style="color:white; font-weight: bold">Price</th>
                    <th style="color:white; font-weight: bold">Quantity</th>
                    <th style="color:white; font-weight: bold">Total Price</th>
                </tr>
            </thead>
    
        @foreach ($data as $data)


           
            <tbody>
                <tr align="center" style="color:white">
                    <td style="color:white">{{$data -> name}}</td>
                    <td style="color:white">{{$data -> phone}}</td>
                    <td style="color:white">{{$data -> address}}</td>
                    <td style="color:white">{{$data -> foodname}}</td>
                    <td style="color:white">{{$data -> price}}</td>
                    <td style="color:white">{{$data -> quantity}}</td>
                    <td style="color:white">{{$data -> price * $data -> quantity}}</td>
                </tr>
            
            </tbody>
          @endforeach
        </table>
       
      </div>












      <!-- This is for the body part  -->
     
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    
  </body>
</html>