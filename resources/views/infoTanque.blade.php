<!doctype html>
@extends('layouts.principal')
@section('title','Informações de Tanque')
@section('path')
	Piscultura {{$piscicultura->nome}} > Informações de tanque {{$tanque->id}}
@stop
@section('conteudo')
		<div>
		
		<table class="table">
			<tr>
				<th>Espécie</th>
				<th>Quantidade</th>
				<th>Data de inserção</th>			
			</tr>
						
			<?php
				$keys = array_keys($povoamentos);
			?>
			
			@foreach ($keys as $key)
			@foreach ($povoamentos[$key] as $povoamento)
			<tr>
				<td>{{$key}}</td>
				<td>{{$povoamento->quantidade}}</td>	
				<td>{{$povoamento->data}}</td>
					
			</tr>
			@endforeach
			@endforeach
		</table>		
		
	</div>
@stop