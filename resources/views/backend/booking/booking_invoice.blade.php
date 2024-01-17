<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Invoice</title>

<style type="text/css"> 
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 15px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }
    .authority h5 {
        margin-top: -10px;
        color: rgb(0, 106, 255);
        /*text-align: center;*/
        margin-left: 35px;
    }
    .thanks p {
        color: rgb(0, 106, 255);
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }

    
    .room-type-table th, .room-type-table td {
            text-align: left;
        }
</style>

</head>
<body>

  <table width="100%" style="background: #F7F7F7; padding:0 20px 0 20px;">
    <tr>
        <td valign="top">
          <!-- {{-- <img src="" alt="" width="150"/> --}} -->
          <h2 style="color: rgb(0, 106, 255); 
                    font-size: 26px;">
                    <strong>House of Duong</strong>
          </h2>
        </td>
        <td align="right">
            <pre class="font" >
               Hotel
               Email:duongnguyen3412@gmail.com <br>
               SDT: 0865 710 154 <br>
               99 To Hien Thanh, Da Nang <br>

            </pre>
        </td>
    </tr>

  </table>
  <br/>
  <br/>  <br/>  

  <table width="100%" style="background:white; padding:5px;"></table>

  <table width="100%" style="background: #F7F7F7; padding:0 5 0 5px;"  class="font room-type-table">

    <thead class="table-light">
        <tr>
            <th>Room Type</th>
            <th>Total Room</th>
            <th>Price</th>
            <th>Check In / Out Date</th>
            <th>Total Days</th>
            <th>Total </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $editData->room->type->name }}</td>
            <td>{{ $editData->number_of_rooms }}</td>
            <td>${{ $editData->actual_price }}</td>
            <td>
                <span class="badge bg-primary">{{ $editData->check_in }}</span> /   {{ $editData->check_out }}<br> 
                
            <td>{{ $editData->total_night }}</td>
            <td>${{ $editData->actual_price *  $editData->number_of_rooms }}</td>

        </tr>
    </tbody> 

  </table>
  <br/>
  <br/>  <br/>  <br/>  <br/>  <br/>
  <table class="table test_table" style="float: right" border="none">
    <tr>
        <td>Subtotal</td>
        <td>${{ $editData->actual_price *  $editData->number_of_rooms }}</td>
    </tr>
    <tr>
        <td>Discount</td>
        <td>${{ $editData->discount }}</td>
    </tr>
    <tr>
        <td>Grand Total</td>
        <td>${{ $editData->total_price }}</td>
    </tr>
</table>





  <table class="table test_table" style="float:right; border:none">

 </table>


  <div class="thanks mt-3">
    <p>Thanks For Your Booking..!!</p>
  </div>

</body>
</html>