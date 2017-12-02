@if(count($data) > 0)
    @foreach($data as $val)
        <li class="item">
            <div class="item-row">
                <div class="item-col fixed item-col-img md">
                    <div class="item-img rounded"
                         style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg)"></div>
                </div>
                <div class="item-col fixed pull-left item-col-title">
                    <div class="item-heading">ชื่ออาหาร</div>

                    <div>
                        <h3 class="item-title">{{ $val->Menu_Name }}</h3>
                    </div>
                </div>
                <div class="item-col item-col-category no-overflow">
                    <div class="item-heading">ประเภท</div>
                    <div class="no-overflow" style="text-decoration:none;">{{ $val->food_name }}</div>
                </div>
                <div class="item-col fixed item-col-actions-dropdown">
                    <div class="item-actions-dropdown">
                        <ul class="v_menu" style="margin-left: -40px">
                            <li>
                                <a href="{{url('menu/'.$val->ID_Menu.'/')}}">
                                    <i class="fa fa-pencil" style="color: darkcyan;font-size: 18px"></i>
                                </a>
                            </li>
                            <li>
                                <a  href="#" data-toggle="modal" data-target="#confirm-modal">
                                  <i class="fa fa-trash-o"  style="color: darkcyan;font-size: 18px"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
    @endforeach
@endif