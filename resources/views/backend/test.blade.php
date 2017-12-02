<script>
    $('#productId').on('change', function () {
        value_productPrice = this.value;

        $.ajax({
            url: "{{ url('/getPriceProduct') }}/" + this.value,
            type: 'GET',
            success: function (data) {
                value_productPrice = data;
                console.log(value_productPrice)
            }
        });
    });

</script>
{{ Form::select('productId',App\ProductTable::pluck('name','id'),null,['id' => 'productId','class'=>'form-control','placeholder' => '']) }}