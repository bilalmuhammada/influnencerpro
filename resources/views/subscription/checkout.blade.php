@extends('layout.master')
<style>
    li{
        margin-bottom: 7px !important;
    }
    .fa-check-circle,.fa-times-circle{
        margin-right: 9px !important;

    }
    ::-webkit-scrollbar {
  width: 6px; /* You can adjust this value based on your preference */
}

/* Define the scrollbar thumb */
::-webkit-scrollbar-thumb {
  background-color: #997045;
  border-radius: 34px;
}

/* Define the scrollbar track */
::-webkit-scrollbar-track {
  background: transparent;
}
    </style>
@section('content')
<div class="content">
   <div class="container" style="margin-top:10%;margin-bottom:10%">
    <div class="container">
        <div class='row'>
            <h1>You Select Gold Package</h1>
            <div class='col-md-12'>
                <div class="card">
                    <div class="card-header">
                   
                    </div>
                    <div class="card-body">
                   
                                <form action="/session" method="POST">
                                <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type='hidden' name="total" value="6">
                                <div class="form-group">
                                 <label for="paymentMethod">Pay by</label>
                                 <select class="form-control" id="paymentMethod">
                                    <option>saved card</option>
                                    <option>add new card</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="nameOnCard">Name on Card</label>
                                 <input type="text" class="form-control" name="nameOnCard" id="nameOnCard" placeholder="Name">
                              </div>
                              <div class="form-group">
                                <label for="nameOnCard">Card Number</label>
                                <input type="text" class="form-control" name="numberOnCard" id="nameOnCard" placeholder="Name">
                             </div>
                             <div class="form-group">
                                <label for="nameOnCard">Expire</label>
                                <input type="text" class="form-control" name='date' id="nameOnCard" placeholder="MM/YY">
                             </div>
                             <div class="form-group">
                              <label for="nameOnCard">CVV</label>
                              <input type="text" class="form-control" name='cvv' id="nameOnCard" placeholder="CVV">
                           </div>
                            <!-- Other form fields -->
                            <div class="form-check">
                               <input type="checkbox" class="form-check-input" id="saveCard">
                               <label class="form-check-label" for="saveCard">Save my card</label>
                            </div>
                                <input type='hidden' name="productname" value="Asus Vivobook 17 Laptop - Intel Core 10th">
                                <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> Pay</button>
                                </form>
                            </td>
                        </tr>
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
</div>
    @endsection