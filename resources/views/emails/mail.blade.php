<table class="table table-striped">
    <thead>
        
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
      </tr>
      
    </thead>
    <tbody>
    @php $i = 1; @endphp
        @foreach($cart->items as $product)
      <tr>
      <th scope="row">{{$i++}}</th>
        <td>{{$product['name']}}</td>
        <td>{{$product['price']}}</td>
        <td>{{$product['qty']}}</td>
      </tr>
      @endforeach
      <br>
      Total Price: {{$cart->totalPrice}}
      Please click link to view all your orders. 
    <a href="{{url('/orders/')}}">Click Here</a>
    </tbody>
  </table>