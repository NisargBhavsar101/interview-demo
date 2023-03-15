<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
        />

        <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
        <!-- https://cdnjs.com/libraries/font-awesome -->
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        />

        <title>Booking</title>
    </head>
    <body>

        <form action="{{route('bookings.store')}}" method="post">
            @csrf
            <div class="mb-3">
            <label class="form-label">Paid Amount</label>
            <input type="number" class="form-control" name="paid_amount">
          </div>
          <div class="mb-3">
            <label class="form-label">Discount Amount</label>
            <input type="number" class="form-control" name="discount_amount">
          </div>
          <div class="mb-3">
            <label class="form-label">Total Amount</label>
            <input type="text" class="form-control" name="total_amount">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>
