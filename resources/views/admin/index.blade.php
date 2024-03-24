@extends('layouts.app')

@section('title', 'Progetti')

@section('cdns')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous'/>
@endsection

@section('content')

<table class="text-center"> 
    <thead>
        <tr>
            <th>Titolo</th>
            <th>Descrizione</th>
            <th>Immagine</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse($projects as $project)
        <tr>
            <td>{{ $project->title }}</td>
            <td>{{ $project->description }}</td>
            <td>{{ $project->image }}</td>
            <td>{{ $project->image }}</td>
            <td>
                <ul>
                    <li>
                        <a href=""></a>
                    </li>
                    <li>
                        <a href=""></a>
                    </li>
                </ul>
            </td>
            @empty
            <h1>Non ci sono progetti</h1>
            @endforelse
        </tr>
    </tbody>
    
</table>

@endsection