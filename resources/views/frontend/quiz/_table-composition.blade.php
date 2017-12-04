<table class="table table-bordered work wow fadeInDown animated"
       style="visibility: visible; animation-name: fadeInDown;font-size: 17px">
    <thead>
    <tr>
        <th>ส่วนประกอบอาหาร</th>
        <th>อัตราส่วน</th>
    </tr>
    </thead>
    <tbody>
    @if($data == null)
        ยังไม่มีข้อมูล
    @else
        @if(count($data) > 0)
            @foreach($data as $val)
                <tr>
                    <td>{{ $val->composition_Name }}</td>
                    <td>{{ $val->composition_ratio }}</td>
                </tr>
            @endforeach
        @endif
    @endif
    </tbody>
</table>
