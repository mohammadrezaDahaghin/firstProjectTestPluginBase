<div class="wrap">
    <h1>مدیران</h1>

    <table class="widefat">
        <thead>
            <tr>
                <th>شناسه</th>
                <th>پست الکترونیک</th>
                <th>نام نمایشی</th>
                <th>شماره همراه</th>
                <th>کیف پول</th>
                <th>عملیات</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($admins as $admin):?>
            <tr>
                <td><?php echo $admin->ID;?></td>
                <td><?php echo $admin->user_email;?></td>
                <td><?php echo $admin->display_name;?></td>
                <td><?php echo get_user_meta($admin->ID,'mobile',true);?></td>
                <td><?php echo number_format(get_user_meta($admin->ID,'wallet',true)) .'تومان';?></td>
                <td><a href="<?php echo add_query_arg(['action' => 'edit' ,'id'=>$admin->ID])?>"><span class="dashicons dashicons-edit-page"></span></a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>