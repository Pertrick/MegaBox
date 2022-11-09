<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success page</title>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<style type="text/css">

    body
    {
        background:#f2f2f2;
    }

    .payment
	{
		border:1px solid #f2f2f2;
        border-radius:20px;
        background:#fff;
	}
   .payment_header
   {
	   background:#2E004B;;
	   padding:20px;
       border-radius:20px 20px 0px 0px;
	   
   }
   
   .check
   {
	   margin:0px auto;
	   width:50px;
	   height:50px;
	   border-radius:100%;
	   background:#fff;
	   text-align:center;
   }
   
   .check i
   {
	   vertical-align:middle;
	   line-height:50px;
	   font-size:30px;
   }

    .content 
    {
        text-align:center;
    }

    .content h5{
        padding:10px 0;
    }

 
   
</style>
</head>
<body>
    <div class="container">
   <div class="row">
      <div class="col-md-6 mx-auto mt-5">
         <div class="payment">
            <div class="payment_header">
               <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
            </div>
            <div class="content">
               <h2 class="pt-5">Payment Success !</h2>
               <h5>Email: <span class="font-weight-bold">{{$payment->email}}</span></h5>
               <h5>Reference Id: <span class="font-weight-bold">{{$payment->reference_id}}</span></h5>
               <h5>Service: <span class="font-weight-bold">Bulk {{$payment->service}} </span></h5>
               <h5>Amount: &#8358; <span class="font-weight-bold">{{number_format($payment->amount,3)}}</span></h5>

               <a href="{{ url('/') }}" class="btn btn-outline-warning m-5">Return back Home</a>
            </div>
            
         </div>
      </div>
   </div>
</div>
</body>
</html>



