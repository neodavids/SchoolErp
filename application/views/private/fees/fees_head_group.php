<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/16/2017
 * Time: 1:05 PM
 */?>


<div class="container">
    <div class="row">
        <p style="font-size: 20px; margin-top:0px;" class="">Enter Fees Head Group to be Added</p>
        <div class="col-lg-4">
            <?php echo form_open('fees/fees_head_group', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Fees head Group</label>
                <div class="col-lg-8">
                    <?php echo form_input(['name' => 'fees_head_group_name', 'class' => 'form-control',
                        'placeholder' => 'Enter Fees Head Group',
                        'value' => set_value('fees_head_group_namee')]);
                    ?>

                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px; margin-top:20px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                'style' => 'margin-top:20px;']); ?>
            <?php echo form_close();?>

            <p style="font-size: 20px; margin-top: 40px;" class="">Enter Fees Head Group to be deletd</p>
            <?php echo form_open('fees/fees_head_group_del', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-4 control-label">Fees head Group</label>
                <div class="col-lg-8">
                    <?php
                    $drop=array();
                    foreach($view as $r){
                        $drop[$r['fees_head_group_name']]=$r['fees_head_group_name'];
                    }
                    $attribute_class = [
                        'class' => 'form-control',
                        'id' => 'select',
                    ];
                    echo form_dropdown('fees_head_group_name_del', $drop,'', $attribute_class);
                    ?>
                </div>
                <input type="submit" name="del_fhg" class="btn btn-danger" value="DELETE" style="margin-left: 50px; margin-top: 20px;">
                <?php  form_close(); ?>
            </div>
        </div>

        <div class="col-lg-5">
            <table class="table table-hover ">
                <thead>
                <tr class="info">
                    <th>Fees Head Group</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($view as $v){
                    echo "<tr class='success'><td>".$v['fees_head_group_name']."</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-3">
            <?php echo form_error('fees_head_group_name'); ?>
            <?php echo form_error('fees_head_group_name_del'); ?>
        </div>
    </div>
</div>



