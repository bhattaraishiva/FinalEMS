@extends('layouts.app')

@section('content')
<div class="card card-default">
        <div class="card-header"  style="font-size:20px;">
            उपलब्ध सेवा..
            <a href="{{route('sewa.create')}}" class="btn btn-md btn-success" style="float:right;">नयाँ सेवा थप्नुहोस</a>

        </div>

        <div class="card-body">
            <table class="table table-hover">
                <thead style="font-size:20px;">
                    <tr>
                        <th>सिन</th>
                        <th>सेवा</th>
                        <th>स्थिति</th>
                        <th>सम्पादन</th>
                        {{-- <th>Delete</th> --}}
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($sewas as $sewa)
                    <tr>
                    <td>{{$loop->iteration}}</td>
                        
                    <td>{{$sewa->sewa_name}}</td> 
                    <td>
                        @if ($sewa->status=='1')
                            <span class="label label-success">Available</span>
                        @else
                        <span class="label label-warning">UnAvailable</span>
 
                        @endif
                    </td> 

                    <td><a href="{{route('sewa.edit',['sewa'=>$sewa->id ]) }}" class="btn btn-sm btn-primary">Edit</a></td>
                    
                    
                    </form>
                    </tr>

                    @endforeach
                </tbody>

            </table>

            

            
        </div>
    </div>    


@endsection