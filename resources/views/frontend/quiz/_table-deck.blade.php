<div class="row">
    @foreach($data as $value)
        <div class="col-sm-4">
            <div class="work wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <img src="{{ asset("backend/images/".$value->Menu_Image) }}"
                     data-at2x="{{ asset("backend/images/".$value->Menu_Image) }}" data-lity>
                <h3>
                    <i class="glyphicon glyphicon-cutlery"></i> เมนูอาหารเช้า<i
                            class="glyphicon glyphicon-cutlery"></i>
                </h3>
                <h3>{{ $value->Menu_Name }}</h3>
                <div class="work-bottom">
                    <a class="big-link-1" href="{{ url('reviewMenu/'.$value->ID_Menu) }}" target="_blank">อ่านเพิ่มเติม</a>
                </div>
            </div>
        </div>
    @endforeach
</div>