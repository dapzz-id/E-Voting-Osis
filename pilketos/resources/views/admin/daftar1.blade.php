@extends('layouts.header')

@section('content')
<div class="w-full rounded-t-md p-4 bg-slate-600 flex flex-wrap">
    <p class="py-2 text-white font-semibold">List Pemilih Haura Azalia</p>
</div>
<div class="bg-white px-4 pt-6 pb-6 rounded-b-md shadow-xl">
    <div>
        <table class="w-full border-collapse">
            <thead class="rounded">
                <tr>
                    <th class="border border-gray-400 px-3 py-1 w-[1px]">No</th>
                    <th class="border border-gray-400 px-4 py-1">NIS/NPK</th>
                    <th class="border border-gray-400 px-4 py-1">Name</th>
                    <th class="border border-gray-400 px-4 py-1">Waktu input</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $row)
                <tr>
                    <th class="border border-gray-400 px-4 py-3">{{ $no++ }}</th>
                    <th class="border border-gray-400 px-4 py-3">{{ $row->NIS }}</th>
                    <th class="border border-gray-400 px-4 py-3">{{ $row->name }}</th>
                    <th class="border border-gray-400 px-4 py-3">{{ $row->created_at->diffForHumans() }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection