@extends('admin.layout.app')

@section('title','show one  contact')


@section('content')
<table class="table">
{{-- <a href="{{route('dashbord_admin.create')}}" class="btn btn-primary mt-2 mb-2"> create admin</a> --}}
    <thead>
        <th>id</th>
        <th>event date</th>
        <th>event time</th>
        <th colspan="3" class="text-center">actions</th>

    </thead>
    <tbody>
        <tr>

            <td>{{$event->id}}</td>
            <td>{{$event->event_date}}</td>
            <td>{{$event->event_time}}</td>
            <td><a href="{{route('dashbord_event.edit',$event->id)}}" class="btn btn-primary">edit</a></td>
            <td><a href="{{route('dashbord_event.show',$event->id)}}" class="btn btn-success">show</a></td>

            <td>
                <form action="{{ route('dashbord_event.destroy', $event->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="delete-major btn btn-danger" type="submit">delete</button>
            </form>
        </td>

        </tr>

    </tbody>
   </table>

   @endsection

