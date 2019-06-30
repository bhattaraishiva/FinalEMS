@extends('layouts.app')

@section('content')
<div class="card card-default">
        <div class="card-header"  style="font-size:20px;">
            उपलब्ध समुह..
            <a href="{{route('samuha.create')}}" class="btn btn-md btn-success" style="float:right;">नयाँ समुह थप्नुहोस</a>

        </div>

        <div class="card-body">
            <table class="table table-hover">
                <thead style="font-size:20px;">
                    <tr>
                        <th>सिन</th>
                        <th>सेवा</th>
                        <th>समुह</th>
                        <th>स्थिति</th>
                        <th>सम्पादन</th>
                        {{-- <th>Delete</th> --}}
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($samuhas as $samuha)
                    <tr>
                    <td>{{$loop->iteration}}</td>
                      <td>{{$samuha->sewa['sewa_name']}} </td>  
                    <td>{{$samuha->samuha_name}}</td> 
                    <td>
                        @if ($samuha->status=='1')
                            <span class="label label-success">Available</span>
                        @else
                        <span class="label label-warning">UnAvailable</span>
 
                        @endif
                    </td> 

                    <td><a href="{{route('samuha.edit',['samuha'=>$samuha->id ]) }}" class="btn btn-sm btn-primary">Edit</a></td>
                    
                    
                    </form>
                    </tr>

                    @endforeach
                </tbody>

            </table>

            

            
        </div>
    </div>    


@endsection