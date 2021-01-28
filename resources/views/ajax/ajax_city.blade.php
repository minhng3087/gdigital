<option value="">Chọn quận huyện</option>
@foreach($result_huyen as $item)
    <option value="{!! $item->id !!}">{!! $item->name !!}</option>
@endforeach