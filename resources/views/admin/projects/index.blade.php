@extends('layouts/admin')

@section('content')

    <Table class="mt-5 mb-5 table table-striped">
        <thead>
            <th>Titolo</th>
            <th>Contenuto</th>
        </thead>

        <tbody>

            @foreach ($projects as $singleProject)
                <tr>
                    <td>{{$singleProject->title}}</td>
                    <td>{{$singleProject->content}}</td>
                    <td><a href="{{route('admin.projects.show', $singleProject->slug)}}"><i class="fa-solid fa-magnifying-glass"></i></a></td>
                </tr>     
                
            @endforeach
        </tbody>
    </Table>

    
@endsection