@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-danger">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row justify-content-center">
            <table class="table table-hover table-light">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Delete Contact</th>
                </tr>
                </thead>
                <tbody>
                @foreach($save_contacts as  $save)
                    @foreach($save as $contact)
                        <tr>
                            <td>{{ $contact->name  }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>
                                <form action="{{ route('contact_delete',  $contact->id ) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">delete</button >
                                </form>
                            </td>
                        </tr>
                    @endforeach

                @endforeach
                </tbody>
            </table>
            </div>
        </div>
@endsection
