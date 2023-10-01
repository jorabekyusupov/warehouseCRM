@extends('layouts.app')
@section('content')
    <section>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Table Basic</h4>
                <button class="btn btn-success">
                    {{__('buttons.add')}}
                </button>
            </div>
            <div class="card-body">

            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>{{__('columns.id')}}</th>
                        <th>{{__('columns.name')}}</th>
                        <th>{{__('columns.actions')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($table)  && count($table) > 0)
                        @foreach($table as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-danger">
                                            <i class="fa-solid fa-trash"></i>

                                        </button>
                                        <button class="btn btn-secondary">
                                            <i class="fa-solid fa-edit"></i>

                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">{{__('messages.not_found')}}</td>
                        </tr>
                    @endif

                    </tbody>

                    <tfoot>
                    <th colspan="3">
                        {{$table->links()}}
                    </th>

                    </tfoot>
                </table>
            </div>
        </div>
    </section>
@endsection