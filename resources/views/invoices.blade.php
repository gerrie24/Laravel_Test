@extends('layouts.app')

@section('content')

<div class="bg-red-400">

    <body>
        <form method="post" action="invoices-create">
            @csrf
            <input type="text" name="invoice_number" id="">
            <input type="text" name="amount" id="">

            <x-text-input></x-text-input>
            <button type="submit">submit</button>
        </form>
</div>
@endsection