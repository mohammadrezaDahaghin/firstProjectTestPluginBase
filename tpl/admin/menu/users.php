<div class="wrap">
    <h1> لیست افراد</h1>


    <table class="widefat">

       <a href="<?php echo add_query_arg(['action' => 'add']);?>"> ثبت داده جدید</a>
        <thead>
        <tr>
            <th> شناسه</th>
            <th> نام</th>
            <th> نام خانوادگی</th>
            <th> تلفن همراه</th>
            <th> عملیات</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($samples as $sample):?>
        <tr>
            <td><?php echo $sample->id;?></td>
            <td><?php echo $sample->firstname;?></td>
            <td><?php echo $sample->lastname;?></td>
            <td><?php echo $sample->number;?></td>
            <td>
                <a href="<?php echo add_query_arg(['action' => 'delete', 'item'=>$sample->id]);?>" style="margin-left: 20px" >حذف کردن</a>
                <span></span>
                <a href="<?php echo add_query_arg(['action' => 'update', 'uid'=>$sample->id,'ufn'=>$sample->firstname,'uln'=>$sample->lastname,'up'=>$sample->number]);?>">ویرایش</a>
            </td>

        </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>
