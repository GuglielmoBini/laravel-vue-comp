@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="container table table-hover mt-5">
            <thead>
                <th class="text-primary">#id</th>
                <th class="text-primary">Title</th>
                <th class="text-primary">Platform</th>
                <th class="text-primary">Genre</th>
                <th class="text-center text-primary">Created at</th>
                <th class="text-center text-primary">Updated at</th>
            </thead>
            <tbody>
                @forelse($videogames as $videogame)
                    <tr>
                        <td>{{ $videogame->id }}</td>
                        <td>{{ $videogame->title }}</td>
                        <td>{{ $videogame->platform }}</td>
                        <td>{{ $videogame->genre }}</td>

                        <td class="text-end">
                            <a href="{{ route('admin.videogames.show', $videogame->id) }}"
                                class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.videogames.edit', $videogame->id) }}"
                                class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-pencil"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="5">No games</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <a href="{{ route('admin.videogames.create') }}" class="btn btn-outline-primary"><i
                class="fa-solid fa-upload me-2"></i>Upload game</a>
    </div>
@endsection
