<!doctype html>
@extends('layouts.principal')
@section('title','Informacoes Tanques')
@section('conteudo')
		<div>
		
		<table class="table">
			<tr>
				<th>Espécie</th>
				<th>Povoamentos</th>		
			</tr>
						
			<?php
				$keys = array_keys($povoamentos);
			?>
			
			@foreach ($keys as $key)
			@foreach ($povoamentos[$key] as $povoamento)
			<tr>
				<td>{{$key}}</td>
				<td>
				Quantidade: {{$povoamento->quantidade}}
				Data de povoamento: {{$povoamento->data}}
				</td>		
			</tr>
			@endforeach
			@endforeach
		</table>		
		
	</div>
@stop