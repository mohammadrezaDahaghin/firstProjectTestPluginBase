<div class="wrap">

    <h1> اضافه کردن آیتم جدید</h1>

    <form method="post">

        <table class="form-table">

            <tr valign="top">
                <th scope="row">نام:</th>
                <td>
                    <input type="text" name="firstname" value="<?php if($action=='update'){echo $_GET['ufn'];}else{echo '';}?>">
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">نام خانوادگی:</th>
                <td>
                    <input type="text" name="lastname" value="<?php if($action=='update'){echo $_GET['uln'];}else{echo '';}?>">
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">همراه:</th>
                <td>
                    <input type="text" name="phonenumber" value="<?php if($action=='update'){echo $_GET['up'];}else{echo '';}?>">
                </td>
            </tr>


            <tr valign="top">
                <th scope="row"></th>
                <td>
                    <input type="submit" class="button" name="<?php if($action=='add'){echo 'savedata';}else{echo 'updatedata';}?>" value="<?php if($action=='add'){echo 'ثبت کاربر';}else{echo 'ویرایش کاربر';}?>">
                </td>
            </tr>


        </table>
    </form>
</div>
