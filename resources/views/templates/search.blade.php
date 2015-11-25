@extends('layouts.master')

@section('content')
<base href="/search/" />
<div class="search z-depth-1">
	<div class="page-header">
		<h3>Advanced Search</h3>
	</div><br>
	<search-form></search-form> {{-- Search form --}}
</div>
<results-block></results-block> {{-- Results of search --}}
@stop
