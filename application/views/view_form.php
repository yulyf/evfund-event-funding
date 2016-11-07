<html>
    <head>
        <title>Tambah Event</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>

    <body>
        <div class="main">
            <div id="content">
                <h3 id='form_head'>Tambah Event</h3><br/>
                <div id="form_input">
                    <?php
                    
                    // Open form and set URL for submit form
                    echo form_open('form/data_submitted');
                    
                    // Show Name Field in View Page
                    echo form_label('Nama Event:', 'event');
                    $data= array(
                        'name' => 'event',
                        'placeholder' => 'Masukkan nama event',
                        'class' => 'input_box'
                    );
                    
                    echo form_input($data);
                    
                    // Show Email Field in View Page
                    echo form_label('Tanggal Pelaksanaan:', 'u_email');
                    $data= array(
                        'type' => 'email',
                        'name' => 'u_email',
                        'placeholder' => 'Please Enter Email Address',
                        'class' => 'input_box'
                    );
                    echo form_input($data);
                    
                    ?>
                </div>
                
                <div id="form_button">
                    <?php
                    $data = array(
                        'type' => 'submit',
                        'value'=> 'Submit',
                        'class'=> 'submit'
                    );
                    echo form_submit($data); ?>
                </div>
                
                <?php echo form_close();?>

<?php if(isset($user_name) && isset($user_email_id)){
echo "<div id='content_result'>";
echo "<h3 id='result_id'>You have submitted these values</h3><br/><hr>";
echo "<div id='result_show'>";
echo "<label class='label_output'>Entered User Name : </label>".$user_name;
echo "<label class='label_output'>Entered Email: </label>".$user_email_id;
echo "<div>";
echo "</div>";
} ?>
</div>
</div>
</body>
</html>