<script>
    //Home Addvertisement Click Store
    $(document).on('click','.home_advertisement',function(){
        let id = $('#add_id').val();
        $.ajax({
            url : "<?php echo e(route('frontend.home.advertisement.click.store')); ?>",
            type: "GET",
            data:{
                'id':id
            },
            success:function (data){
                console.log(data);
            }
        })
    });

    //Home Addvertisement Click Store
    $(document).on('mouseover','.home_advertisement',function(){
        let id = $('#add_id').val();
        $.ajax({
            url : "<?php echo e(route('frontend.home.advertisement.impression.store')); ?>",
            type: "GET",
            data:{
                'id':id
            },
            success:function (data){
                console.log(data);
            }
        })
    });
</script><?php /**PATH /Users/sharifurrahman/Desktop/sharifur-backup/localhost/nexelit/@core/resources/views/components/frontend/others/advertisement-script.blade.php ENDPATH**/ ?>