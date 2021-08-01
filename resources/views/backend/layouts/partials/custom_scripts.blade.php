
<!--- date range picker ---->
<script type="text/javascript">
    $(function(){
        $('.singledatepicker').daterangepicker({
            singleDatePicker:true,
            showDropdown:true,
            autoUpdateInput:false,
            autoApply:true,
            locate: {
                format:'DD-MM-YYYY',
                daysOfWeek:['Sa' , 'Su' , 'Mo' , 'Tu' , 'We' , 'Th' , 'Fr'],
                firstDay:0
            },
            minDay: '01/01/1930',
        },
        function(start){
            this.element.val(start.format('DD-MM-YYYY'));
            this.element.parent().removeClass('has-error');

        },
        function(choose_date){
            this.element.val(choose_date.format('DD-MM-YYYY'));
        });
        $('.singledatepicker').on('apply.daterangepicker', function(ev,picker){
            $(this).val(picker.startDate.format('DD-MM-YYYY'));
            $(this).trigger('change');
        });
    });
        
</script>
<!--- date range picker ---->

<!--- image ---->
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            render.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
<!--- image ---->.
