@extends('layouts.master')
@section('styles')
<style type="text/css">
.fontcontrol{
	font-weight:bold;
	font-size:20px;
}
</style>
@endsection

@section('content')
<div class="container my-5">
	<h4>Amount Detail</h4>
	<table class="table table-hover table-striped">
    <tbody>
      <tr>
        <td style="padding-right:160px">Amount</td>
        <td>₹{{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>₹0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>₹50</td>
      </tr>
      <tr>
      	<td>Total Amount</td>
      	<td>₹{{$total + 50}}</td>
      </tr>
    </tbody>
  </table>
 <form action="/action_page.php">
  <div class="form-group mt-4">
   <label class="fontcontrol">Shipping Address</label>	
   <textarea class="form-control" placeholder="Enter your Shipping Address"></textarea>
  </div><br>
  <div class="form-group">
    <label class="fontcontrol">Mode of Payment :-</label><br>
    <input type="radio" name="payment" value="Online Payment">&nbsp&nbsp&nbsp Online Payment<br><br>
    <input type="radio" name="payment" value="EMI Payment">&nbsp&nbsp&nbsp EMI Payment<br><br>
    <input type="radio" name="payment" value="Cash on Delivery">&nbsp&nbsp&nbsp Cash on Delivery<br><br>
  </div>
  <button type="submit" class="btn btn-primary">Order Now</button>
</form>
</div>

@endsection