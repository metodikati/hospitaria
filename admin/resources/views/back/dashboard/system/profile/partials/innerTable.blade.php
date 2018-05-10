<tr>
	<td class="select-row" data-id="{!! $children['id'] !!}">{!! $children['name'] !!}</td>
	<td class="text-center">
		<input type="checkbox" class="view {!! $parentID !!}-READ {!! $children['id'] !!}-CHK READ read-{!! $children['id'] !!}" data-status="0" data-type="READ" data-row="{!! $children['id'] !!}" name="module[{!! $children['id'] !!}][]" value="READ" />
	</td>
	<td class="text-center">
		<input type="checkbox" class="view {!! $parentID !!}-CREATE {!! $children['id'] !!}-CHK create-{!! $children['id'] !!}" data-row="{!! $children['id'] !!}" data-type="CREATE" name="module[{!! $children['id'] !!}][]" value="CREATE" />		
	</td>
	<td class="text-center">
		<input type="checkbox" class="view {!! $parentID !!}-DELETE {!! $children['id'] !!}-CHK delete-{!! $children['id'] !!}" data-row="{!! $children['id'] !!}" data-type="DELETE" name="module[{!! $children['id'] !!}][]" value="DELETE" />		
	</td>
	<td class="text-center">
		<input type="checkbox" class="view {!! $parentID !!}-UPDATE {!! $children['id'] !!}-CHK update-{!! $children['id'] !!} select-row" data-row="{!! $children['id'] !!}" data-type="UPDATE" name="module[{!! $children['id'] !!}][]" value="UPDATE" />		
	</td>
</tr>



@if (count($children['child']) > 0)
	@foreach ($children['child'] as $children)
		@include('sistema.perfil.partials.innerTable', ['children' => $children, 'parentID' => $parentID])
	@endforeach
@endif