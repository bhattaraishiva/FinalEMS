@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header"id ="uniform-style">
        उपलब्ध तह..
        <a href="{{route('taha.create')}}" class="btn btn-md btn-success" style="float:right;">नयाँ तह थप्नुहोस</a>
    </div>
    <div class="card-body" id ="uniform-style">
        <table class="table table-hover">
            <thead >
                <tr>
                    <th>क्रम संख्या</th>
                    {{-- <th>मन्तरालय</th>
                    <th>निर्देशनालय</th>
                    <th>कार्यालय</th> --}}
                    <th>तह</th>
                    <th>Status</th>
                    <th>Edit</th>
                    {{-- <th>Delete</th> --}}
                </tr>
            </thead>
            <tbody>                    
                @foreach($tahas as $taha)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        {{-- <td>{{$taha->ministry->ministry_name}}</td> 
                        <td>{{$taha->nirdeshanalaya->nir_name}}</td> 
                        <td>{{$taha->karyalaya->kar_name}}</td>  --}}
                        <td>{{$taha->taha_name}}</td> 
                        <td>
                            @if ($taha->status=='1')
                                <span class="label label-success">Available</span>
                            @else
                                <span class="label label-warning">UnAvailable</span>
                            @endif
                        </td>
                        <td><a href="{{route('taha.edit',['taha'=>$taha->id ]) }}" class="btn btn-sm btn-primary">Edit</a></td>                    
                        {{-- <td>
                            <form action="{{route('taha.destroy',['taha'=>$taha->id ])}}" method="POST">
                                @csrf
                                @method('delete')
                                <button  class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </td>                     --}}
                    </tr>
                @endforeach
            </tbody>
        </table>                    
    </div>
</div>    
@endsection