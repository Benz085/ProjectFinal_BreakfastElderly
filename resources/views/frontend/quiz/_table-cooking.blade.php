<div class="panel panel-success work wow fadeInDown animated"
     style="visibility: visible; animation-name: fadeInDown;">
    <div class="panel-heading">
        <h3 class="panel-title">วิธีการทำอาหาร</h3>
    </div>
    <div class="panel-body" style="font-size: 17px">
        @if($data == null)
            ยังไม่มีข้อมูล
            @else
            {{ $data->cooking_recipe }}
        @endif
    </div>
</div>