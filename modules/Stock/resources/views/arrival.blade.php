@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{route('stock.arrival.store')}}" method="post">
            @csrf
                @method('post')
                    <div class="form-group">
                        <label for="warehouse" class="form-label">
                           {{__('columns.warehouses')}}
                        </label>
                        <select class="form-control" id="warehouse" name="product_id" >
                            @if(!empty($warehouses))
                                @foreach($warehouses as $warehouse)
                                    <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>
                                @endforeach
                            @else
                                <option selected disabled>{{__('messages.not_found')}}</option>
                            @endif
                        </select>
                    </div>
                <div class="form-group">
                    <label for="warehouse" class="form-label">
                        {{__('columns.products')}}
                    </label>
                    <select class="form-control" name="warehouse_id">
                        @if(!empty($products))
                            @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                            @endforeach
                        @else
                            <option selected disabled>{{__('messages.not_found')}}</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="warehouse" class="form-label">
                        {{__('columns.quantity')}}
                    </label>
                    <input class="form-control" type="number" name="quantity">
                </div>
                <div class="form-group">
                    <label for="warehouse" class="form-label">
                        {{__('columns.price')}}
                    </label>
                    <input class="form-control"  type="number" name="price">
                </div>
                <div class="form-group">
                    <label for="warehouse" class="form-label">
                        {{__('columns.currency')}}
                    </label>
                    <select class="form-control" name="currency">
                        @if(!empty(__('currency')))
                            @foreach(__('currency') as $key=> $currency)
                                <option value="{{$key}}">{{$currency}}</option>
                            @endforeach
                        @else
                            <option selected disabled>{{__('messages.not_found')}}</option>
                        @endif
                    </select>
                </div>
                <div class="form-group text-end my-1">
                   <div class="btn-group">
                       <button class="btn btn-success" type="submit">
                           {{__('buttons.add')}}
                       </button>
                   </div>
                </div>

            </form>



        </div>
    </div>
@endsection