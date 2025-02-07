@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col">
            <p class="text-center text-success">{{session('message')}}</p>
            <p class="text-center text-danger">{{session('delete-message')}}</p>
            <div class="card card-body">
                <form action="{{route('admin.order-update', ['id' => $order->id])}}" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <label for="" class="col-md-3">Order Total</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" value="{{$order->order_total}}" readonly>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="" class="col-md-3">Customer Info</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{$order->customer->name.'('.$order->customer->mobile.')'}}" readonly>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="" class="col-md-3">Delivery Address</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="delivery_address">{{$order->delivery_address}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3">Order Status</label>
                        <div class="col-md-9">
                            <select class="form-control" name="order_status">
                                <option value=""> -- Select Order Status -- </option>
                                <option value="Pending"> Pending </option>
                                <option value="Processing"> Processing </option>
                                <option value="Complete"> Complete </option>
                                <option value="Cancel"> Cancel </option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3">Courier Info</label>
                        <div class="col-md-9">
                            <select class="form-control" name="courier_id">
                                <option value=""> -- Select Courier Info -- </option>
                                <option value="1"> SA Probibahan </option>
                                <option value="2"> Korotoa </option>
                                <option value="3"> Subdorban </option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3"></label>
                        <div class="col-md-9">
                            <button type="submit" class="btn btn-primary">Update Order Status</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

