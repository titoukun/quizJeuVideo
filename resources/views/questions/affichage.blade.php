@extends('layouts.app')

@section('titre_page')
    Liste des questions
@endsection

@section('content')
<div class="relative flex items-center m-auto w-4/5 overflow-x-auto rounded-tl-lg rounded-tr-lg my-12">
<table class="relative table-fixed text-center justify-center items-center p-4 text-lg">
  <thead>
    <tr class="bg-gray-200 border-b-2 border-gray-500">
      <th class="p-4">id</th>
      <th class="p-4">intitule</th>
      <th class="p-4">reponse_a</th>
      <th class="p-4">reponse_b</th>
      <th class="p-4">reponse_c</th>
      <th class="p-4">reponse_d</th>
      <th class="p-4">bonne_reponse</th>
      <th class="p-4">explication</th>
      <th class="p-4">validee</th>
      <th class="p-4">actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($questions as $question)
        @if($question->id % 2 == 1)
            <tr class="bg-gray-400 hover:bg-orange-200 hover:cursor-pointer">
        @else
            <tr class="bg-gray-200 hover:bg-orange-200 hover:cursor-pointer">
        @endif
        <td class="p-3 text-blue-600 font-bold hover:underline hover:cursor-pointer"><a href="#">{{ $question->id }}</a></td>
        <td class="p-3">{{ $question->intitule }}</td>
        <td class="p-3">{{ $question->reponse_a }}</td>
        <td class="p-3">{{ $question->reponse_b }}</td>
        <td class="p-3">{{ $question->reponse_c }}</td>
        <td class="p-3">{{ $question->reponse_d }}</td>
        <td class="p-3">{{ $question->bonne_reponse }}</td>
        <td class="p-3">{{ $question->explication }}</td>
        @if($question->validee == 1)
            <td class="p-3"><span class="p-1.5 uppercase font-medium rounded-lg tracking-wider bg-green-500">VALIDEE</span></td>
        @else
            <td class="p-3"><span class="p-1.5 uppercase font-medium rounded-lg tracking-wider bg-red-500">NON VALIDEE</span></td>
        @endif
        <td class="p-3"><a href="{{ route('questions.editer', ['id' => $question->id]) }}" class="p-1.5 uppercase font-medium rounded-lg tracking-wider bg-blue-500">Editer</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection