@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td><a href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->id}}</a></td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
 <a href="{{ route('tasks.create') }}" class="btn btn-primary">新規タスクの投稿</a>

@endsection

